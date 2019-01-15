<?php

namespace App\Admin\Controllers;

use App\Model\Article;
use App\Http\Controllers\Controller;
use App\Model\ArticleCategory;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ArticleController extends Controller
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
            ->header('文章列表')
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
            ->header('文章详情')
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
            ->header('修改文章')
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
            ->header('新增文章')
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
        $grid = new Grid(new Article);
        $grid->model()->orderBy('id', 'desc');
        $grid->disableRowSelector();
        $grid->title('标题');
        $grid->author('作者');
        $grid->created_at('创建时间');
        $grid->updated_at('修改时间');
        $grid->category('文章分类')->display(function ($category) {
            return $category['name'];
        });
        $grid->filter(function ($filter) {
            // 去掉默认的id过滤器
            $filter->disableIdFilter();
            // 设置created_at字段的范围查询
            $filter->like('title', '标题');
            $filter->like('author', '作者');
            $filter->between('created_at', '创建时间')->datetime();
            $filter->between('updated_at', '修改时间')->datetime();
        });
        return $grid;
    }

    /**
     * Make a show builder.
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Article::findOrFail($id));
        $show->title('标题');
        $show->author('作者');
        $show->content('内容');
        $show->category('关联商品分类', function ($category){
            $category->name('商品分类名称');
        });
        $show->created_at('创建时间');
        $show->updated_at('修改时间');
        $show->imgs('文章关联图片', function ($imgs){
            $imgs->disableCreateButton();
            $imgs->img('图片')->image('', '100');
            $imgs->disableRowSelector();
            $imgs->disableActions();
        });
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Article);
        $form->text('title', '标题');
        $form->text('author', '作者');
        $form->editor('content', '内容');
        $form->hasMany('imgs', function (Form\NestedForm $form) {
            $form->image('img', '文章小图片');
        });
        $form->select('cate_id', '分类id')->options('/admin/articleCategoryDetail')->options(
            (function ($id) {
                $user = ArticleCategory::find($id);
                if ($user) {
                    return [$user->id => $user->name];
                }
            })
        );
        return $form;
    }
}
