<?php

namespace App\Admin\Controllers;

use App\Model\Brand;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BrandController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '商品品牌';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Brand());

        $grid->column('brand_id', __('Brand id'));
        $grid->column('brand_name', __('商品名称'));
        $grid->column('brand_logo', __('商品图片'))->image();
        $grid->column('brand_url', __('商品url'));
        $grid->column('brand_desc', __('商品介绍'));
        // $grid->column('created_at', __('Created at'));
        // $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Brand::findOrFail($id));

        $show->field('brand_id', __('Brand id'));
        $show->field('brand_name', __('Brand name'));
        $show->field('brand_logo', __('Brand logo'));
        $show->field('brand_url', __('Brand url'));
        $show->field('brand_desc', __('Brand desc'));
        // $show->field('created_at', __('Created at'));
        // $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Brand());

        $form->number('brand_id', __('Brand id'));
        $form->text('brand_name', __('Brand name'));
        $form->image('brand_logo', __('Brand logo'));
        $form->text('brand_url', __('Brand url'));
        $form->text('brand_desc', __('Brand desc'));

        return $form;
    }
}
