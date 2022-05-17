<?php

namespace App\Admin\Controllers;

use App\models\Ward;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WardController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Ward';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Ward());

        $grid->column('xaid', __('Xaid'));
        $grid->column('name', __('Name'));
        $grid->column('type', __('Type'));
        $grid->column('maqh', __('Maqh'));
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
        $show = new Show(Ward::findOrFail($id));

        $show->field('xaid', __('Xaid'));
        $show->field('name', __('Name'));
        $show->field('type', __('Type'));
        $show->field('maqh', __('Maqh'));
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
        $form = new Form(new Ward());

        $form->text('xaid', __('Xaid'));
        $form->text('name', __('Name'));
        $form->text('type', __('Type'));
        $form->text('maqh', __('Maqh'));

        return $form;
    }
}
