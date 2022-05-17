<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory;
use DateTimeInterface;
use Illuminate\Support\Facades\URL;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
        'name',
        'categoryId',
        'categoryIdLv2',
        'SKU',
        'price',
        'promotionPrice',
        'technicalPrice',
        'brandId',
        'quantity',
        'desc',
        'title',
        'meta_desc',
        'meta_keywords',
        'meta_title'
    ];
    public function images()
    {
        return $this->hasMany("App\Models\ProductImage", "product_id", "id");
    }
    public function firstImage()
    {
        return explode("|", $this->images)[0];
    }

    public function getCategoriesLvl2($catLvl1Id)
    {
        return ProductCategory::where('parentId', $catLvl1Id)->get();
    }

    public function getCategoryLv1Name()
    {
        return ProductCategory::find($this->categoryId)->name;
    }

    public function getCategoryLv2Name()
    {
        return ProductCategory::find($this->categoryIdLv2)->name;
    }

    public function getTemporaryUrl($mediaId, $mediaName, DateTimeInterface $expiration, array $options = [])
    {
        return URL::temporarySignedRoute(
            'private-storage',
            $expiration,
            ['media' => $mediaId, 'filename' => $mediaName]
        );
    }
    public function setSubImagesAttribute($subImages)
    {
        if (is_array($subImages)) {
            $this->attributes['sub_images'] = join(",", $subImages);
        }
    }
    public function getSubImagesAttribute($subImages)
    {
        return explode(',', $subImages);
    }
}
