<?php

namespace App\Admin\Controllers;

use App\Model\Goods;
use App\Model\Brand;
use App\Model\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GoodsController extends AdminController
{
    
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\Goods';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Goods());
        $grids = new Grid(new Category());

        $grid->model()->orderBy('goods_id','desc');
        
        $grids->model()->join('shop_admin_category','shop_admin_goods.cate_id','=','shop_admin_category.cate_id');

        $grid->column('goods_id', __('Goods id'));
        $grid->column('goods_name', __('Goods name'));
        $grid->column('goods_price', __('Goods price'));
        $grid->column('goods_num', __('Goods num'));
        $grid->column('goods_no', __('Goods no'));
        $grid->column('goods_img', __('Goods img'))->image();
        $grid->column('goods_desc', __('Goods desc'));
        $grid->column('goods_score', __('Goods score'));
        $grid->column('brand_id', __('Brand id'));
        $grids->column('cate_name', __('Cate id'));
        
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
        $show = new Show(Goods::findOrFail($id));

        $show->field('goods_id', __('Goods id'));
        $show->field('goods_name', __('Goods name'));
        $show->field('goods_price', __('Goods price'));
        $show->field('goods_num', __('Goods num'));
        $show->field('goods_no', __('Goods no'));
        $show->field('goods_img', __('Goods img'));
        $show->field('goods_imgs', __('Goods imgs'));
        $show->field('goods_desc', __('Goods desc'));
        $show->field('goods_score', __('Goods score'));
        $show->field('brand_id', __('Brand id'));
        $show->field('cate_id', __('Cate id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Goods());

        $form->text('goods_name', __('Goods name'));
        $form->decimal('goods_price', __('Goods price'));
        $form->number('goods_num', __('Gxoods num'));
        $form->text('goods_no', __('Goods no'));
        $form->image('goods_img', __('Goods img'));
        $form->textarea('goods_desc', __('Goods desc'));
        $form->number('goods_score', __('Goods score'));
        $form->number('brand_id', __('Brand id'));
        $form->number('cate_id', __('Cate id'));

        return $form;
    }
}
