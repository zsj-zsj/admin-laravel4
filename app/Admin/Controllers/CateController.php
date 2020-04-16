<?php

namespace App\Admin\Controllers;

use App\Model\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CateController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\Category';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category());

        $grid->column('cate_id', __('Cate id'));
        $grid->column('cate_name', __('Cate name'));
        $grid->column('cate_show', __('Cate show'));
        $grid->column('cate_nav_show', __('Cate nav show'));
        $grid->column('parent_id', __('Parent id'));

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
        $show = new Show(Category::findOrFail($id));

        $show->field('cate_id', __('Cate id'));
        $show->field('cate_name', __('Cate name'));
        $show->field('cate_show', __('Cate show'));
        $show->field('cate_nav_show', __('Cate nav show'));
        $show->field('parent_id', __('Parent id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Category());

        $form->text('cate_name', __('Cate name'));
        $form->switch('cate_show', __('Cate show'));
        $form->switch('cate_nav_show', __('Cate nav show'));
        $form->number('parent_id', __('Parent id'));

        return $form;
    }
}
