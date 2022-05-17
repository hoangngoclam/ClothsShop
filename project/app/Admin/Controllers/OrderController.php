<?php

namespace App\Admin\Controllers;

use App\models\Order;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Order';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('user_name', __('User name'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('address', __('Address'));
        $grid->column('status', __('Status'));
        $grid->column('note', __('Note'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Order::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('user_name', __('User name'));
        $show->field('phone_number', __('Phone number'));
        $show->field('address', __('Address'));
        $show->field('status', __('Status'));
        $show->field('note', __('Note'));
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
        $form = new Form(new Order());

        $form->number('user_id', __('User id'));
        $form->text('user_name', __('User name'));
        $form->text('phone_number', __('Phone number'));
        $form->text('address', __('Address'));
        $form->text('status', __('Status'))->default('WAITING');
        $form->textarea('note', __('Note'));

        return $form;
    }
}
