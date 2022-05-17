<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = "product_categories";
    public function Products()
    {
        return $this->hasMany("App\Models\Product", "categoryId", "id");
    }
    public function level2Categories($catId)
    {
        return $this->where('parentId', $catId)->get();
    }
    public function parentName()
    {
        return $this->where('id', $this->parentId)->value('name');
    }
}
