<?php

namespace App\Services;

use App\Services\CategoryService;

class HomeService
{
    private $categoryService;
    private const NUMBER_PRODUCT_IN_TAB = 8;

    public function __construct()
    {
        $this->categoryService = new CategoryService();
    }

    public function getDisplayProductTabs()
    {
        $categoryLevel1 = $this->categoryService->getShowCategoriesLevel1();
        $categorys = array_map(function ($item) {
            $childrenCategory = $this->categoryService->getShowCategoriesLevel2($item["id"]);
            $childrenCategory = array_map(function ($childCategory) {
                $products = $this->productService->getProductByCategoryLV2($childCategory["id"], self::NUMBER_PRODUCT_IN_TAB);
                $childCategory["products"] = $products;
                return $childCategory;
            }, $childrenCategory);
            $item["childrenCategory"] = $childrenCategory;
            return $item;
        }, $categoryLevel1);
        return $categorys;
    }
}
