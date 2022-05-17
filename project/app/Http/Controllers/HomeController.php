<?php

namespace App\Http\Controllers;

use App\Services\HomeService;
use App\Http\Controllers\BaseController;

class HomeController extends BaseController
{
    private $homeService;
    public function __construct()
    {
        parent::__construct();
        $this->homeService = new HomeService();
    }

    public function index()
    {
        $sliders = $this->sliderService->getSliders(5);
        $brands = $this->brandService->getBrands();
        $displayProductTabs = $this->homeService->getDisplayProductTabs();
        return view(
            'client.pages.test',
            [
                'displayProductTabs' => $displayProductTabs,
                'sliders' => $sliders,
                'brands' => $brands,
            ]
        );
    }
}
