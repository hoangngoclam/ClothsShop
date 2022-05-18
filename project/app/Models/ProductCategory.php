<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;


class ProductCategory extends Model
{
    use ModelTree, AdminBuilder;

    protected $table = "product_categories";

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setParentColumn('parent_id');
        $this->setOrderColumn('order');
        $this->setTitleColumn('title');
    }


    public function Products()
    {
        return $this->hasMany("App\Models\Product", "category_id", "id");
    }
    public function level2Categories($catId)
    {
        return $this->where('parent_id', $catId)->get();
    }
    public function parentName()
    {
        return $this->where('id', $this->parent_id)->value('name');
    }
}
