<?php

namespace App\Admin\Controllers;

use App\models\District;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DistrictController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'District';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new District());

        $grid->column('maqh', __('Maqh'));
        $grid->column('name', __('Name'));
        $grid->column('type', __('Type'));
        $grid->column('matp', __('Matp'));

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
        $show = new Show(District::findOrFail($id));

        $show->field('maqh', __('Maqh'));
        $show->field('name', __('Name'));
        $show->field('type', __('Type'));
        $show->field('matp', __('Matp'));
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
        $form = new Form(new District());

        $form->text('maqh', __('Maqh'));
        $form->text('name', __('Name'));
        $form->text('type', __('Type'));
        $form->text('matp', __('Matp'));

        return $form;
    }
}
