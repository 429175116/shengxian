<?php

namespace App\Http\Controllers\Api;

use App\Model\User;
use App\Model\contactUsRecord;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //

    /**
     * 登录，新增或修改用户
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addOrUpdate(Request $request) {

        $wechat = app('wechat.mini_program');
        $res = $wechat->auth->session($request->code?:'');
        $input = $request->all();
        if(isset($res['errcode']) && $res['errcode'] > 0) return $this->apiError($res['errmsg']);
        $open_id = $res['openid'];
        $validateResult = $this->validateCreateUser($input);
        if ($validateResult["errorCode"] > 0) {
            return $this->apiError($validateResult["message"], $validateResult["errorCode"]);
        }

        $user = User::where('open_id', $open_id)->first();
        if(empty($user)){
            $user = new User();
            $user->open_id = $open_id;
        }
        if(!empty($input['profile'])) $user->profile = $input['profile'];
        if(!empty($input['nick_name'])) $user->nick_name = $input['nick_name'];

        $user->save();

        $data = [
            'user' => $user
        ];
        return $this->apiSuccess($data);
    }

    public function contactUs(Request $request) {
        $user = User::query()->where('open_id', $request->header('AuthrizeOpenId'))->first();
        if(empty($user)) return $this->apiError('用户未登录');
        $input = $request->all();
        $contact_us_record = new contactUsRecord();
        $contact_us_record->user_id = $user->id;
        $contact_us_record->name = $input['name'];
        $contact_us_record->telphone = $input['telphone'];
        if(!empty($input['content'])) {
            $contact_us_record->content = $input['content'];
        }
        $contact_us_record->save();
        return $this->apiSuccess();
    }

    private function validateCreateUser($input) {
        $name = isset($input['name']) ? $input['name']: '';
        $mobile = isset($input['mobile']) ? $input['mobile']: '';
        if(!empty($mobile)){
            return [
                "message" => "手机格式有误",
                "errorCode" => 5000
            ];
        }
        return [
            "message" => "没有错误信息",
            "errorCode" => 0
        ];
    }

    private function validateCreateContactUs($input) {
        $name = isset($input['name']) ? $input['name']: '';
        $telphone = isset($input['telphone']) ? $input['telphone']: '';
        $content = isset($input['content']) ? $input['content']: '';
        if(empty($name)) {
            return [
                "message" => "请填写真实姓名",
                "errorCode" => 5000
            ];
        }
        if(empty($telphone)){
            return [
                "message" => "手机格式有误",
                "errorCode" => 5000
            ];
        }
        return [
            "message" => "没有错误信息",
            "errorCode" => 0
        ];

    }

}
