<?php

namespace App\Admin\Controllers;

use App\Model\ArticleCategory;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;

class ArticleCategoryController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('分类列表')
            ->description('')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('分类详情')
            ->description('')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('编辑')
            ->description('')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('新增')
            ->description('')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ArticleCategory);
//        $grid->id('Id');
        $grid->name('名称');
        $grid->created_at('创建时间');
        $grid->updated_at('修改时间');
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ArticleCategory::findOrFail($id));

//        $show->id('Id');
        $show->name('分类名称');
//        $show->created_at('Created at');
//        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ArticleCategory);
        $form->text('name', '名称');
        return $form;
    }

    public function articleCategoryDetail(Request $request) {
////        $p = ProductCategory::get();
////        return $p;
//
//        // 用户输入的值通过 q 参数获取
//        $search = $request->input('q');
//        $result = ArticleCategory::query()
//            // 通过 is_directory 参数来控制
////            ->where('name', 'like', '%'.$search.'%')
//            ->paginate();
//
//        // 把查询出来的结果重新组装成 Laravel-Admin 需要的格式
//        $result->setCollection($result->getCollection()->map(function (ArticleCategory $category) {
//            return ['id' => $category->id, 'text' => $category->name];
//        }));
        $jobs = ArticleCategory::query()->get(['id','name as text']);
        return $jobs;
    }
}
