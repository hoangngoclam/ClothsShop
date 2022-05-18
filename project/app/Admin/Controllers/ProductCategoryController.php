<?php

namespace App\Admin\Controllers;

use App\Models\ProductCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Tree;


class ProductCategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ProductCategory';

    public function index(Content $content)
    {
        return Admin::content(function ($content) {
            $content > header ('ProductCategory');
            $content->body(ProductCategory::tree(function ($tree) {
                $tree->branch(function ($branch) {    
                    $src = '/uploads/' . $branch['image'] ;
                    $logo = "<img src='$src' style='max-width:30px;max-height:30px' class='img'/>";

                    return "{$branch['id']} - {$branch['name']} - $logo";
                });
            }));
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProductCategory());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('image', __('Image'))->display(function ($image) {
            return "<img width='100px' src='/uploads/" . $image . "'/>";
        });
        $grid->column('title', __('Title'));
        $grid->column('slug', __('Slug'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ProductCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('parent_id', __('ParentId'));
        $show->field('order', __('Order'));
        $show->field('show_flag', __('Show flag'));
        $show->field('name', __('Name'));
        $show->field('image', __('Image'));
        $show->field('title', __('Title'));
        $show->field('slug', __('Slug'));
        $show->field('meta_title', __('Meta title'));
        $show->field('meta_desc', __('Meta desc'));
        $show->field('meta_keywords', __('Meta keywords'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        $form->select('parent_id', __('Parent id'))->options(Category::selectOptions())->default(1);

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProductCategory());

        $form->number('parent_id', __('ParentId'));
        $form->number('order', __('Order'));
        $form->switch('show_flag', __('Show flag'));
        $form->text('name', __('Name'));
        $form->image('image', __('Image'));
        $form->text('title', __('Title'));
        $form->text('slug', __('Slug'));
        $form->textarea('meta_title', __('Meta title'));
        $form->textarea('meta_desc', __('Meta desc'));
        $form->textarea('meta_keywords', __('Meta keywords'));
        return $form;
    }

    public function getCategoryOptions()
    {
        return DB::table('product_categories')->select('id','id')->get();
    }
}
