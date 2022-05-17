<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('category_id', __('Category id'));
        $grid->column('category_id_lv2', __('Category id lv2'));
        $grid->column('name', __('Name'));
        $grid->column('sku', __('Sku'));
        $grid->column('main_image', __('Main image'));
        $grid->column('desc', __('Desc'));
        $grid->column('technical_price', __('Technical price'));
        $grid->column('price', __('Price'));
        $grid->column('promotion_price', __('Promotion price'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('sold', __('Sold'));
        $grid->column('meta_desc', __('Meta desc'));
        $grid->column('meta_keywords', __('Meta keywords'));
        $grid->column('title', __('Title'));
        $grid->column('meta_title', __('Meta title'));
        $grid->column('slug', __('Slug'));
        $grid->column('brand_id', __('Brand id'));
        $grid->column('status', __('Status'));

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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
        $show->field('category_id_lv2', __('Category id lv2'));
        $show->field('name', __('Name'));
        $show->field('sku', __('Sku'));
        $show->field('main_image', __('Main image'));
        $show->field('sub_images', __('Sub images'));
        $show->field('desc', __('Desc'));
        $show->field('technical_price', __('Technical price'));
        $show->field('price', __('Price'));
        $show->field('promotion_price', __('Promotion price'));
        $show->field('quantity', __('Quantity'));
        $show->field('sold', __('Sold'));
        $show->field('meta_desc', __('Meta desc'));
        $show->field('meta_keywords', __('Meta keywords'));
        $show->field('title', __('Title'));
        $show->field('meta_title', __('Meta title'));
        $show->field('slug', __('Slug'));
        $show->field('brand_id', __('Brand id'));
        $show->field('status', __('Status'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

        $form->number('category_id', __('Category id'));
        $form->number('category_id_lv2', __('Category id lv2'));
        $form->number('brand_id', __('Brand id'));
        $form->switch('status', __('Status'));
        $form->text('name', __('Name'));
        $form->text('sku', __('Sku'));
        $form->image('main_image', __('Main image'));
        $form->multipleImage('sub_images', __('Sub images'));
        $form->textarea('desc', __('Desc'));
        $form->number('technical_price', __('Technical price'));
        $form->number('price', __('Price'));
        $form->number('promotion_price', __('Promotion price'));
        $form->number('quantity', __('Quantity'));
        $form->number('sold', __('Sold'));
        $form->text('title', __('Title'));
        $form->text('slug', __('Slug'));
        $form->textarea('meta_title', __('Meta title'));
        $form->textarea('meta_desc', __('Meta desc'));
        $form->textarea('meta_keywords', __('Meta keywords'));

        return $form;
    }
}
