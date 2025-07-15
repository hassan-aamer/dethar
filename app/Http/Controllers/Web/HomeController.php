<?php

namespace App\Http\Controllers\Web;

use App\Services\Categories\CategoryService;
use App\Services\Reviews\ReviewService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Features\FeatureService;
use App\Services\Products\ProductsService;
use App\Services\Services\ServicesService;
use App\Services\Sliders\SlidersService;

class HomeController extends Controller
{
    protected ProductsService $productsService;
    protected ServicesService $servicesService;
    protected SlidersService $slidersService;
    protected CategoryService $categoryService;
    protected FeatureService $featureService;
    protected ReviewService $reviewService;

    public function __construct(
        ProductsService $productsService,
        FeatureService $featureService,
        SlidersService $slidersService,
        ServicesService $servicesService,
        ReviewService $reviewService,
        CategoryService $categoryService
        )
    {
        $this->productsService = $productsService;
        $this->servicesService = $servicesService;
        $this->categoryService = $categoryService;
        $this->slidersService  = $slidersService;
        $this->featureService  = $featureService;
        $this->reviewService   = $reviewService;
    }
    public function index(Request $request)
    {
        $result = [
            'services'   => $this->servicesService->index()->where('active', 1),
            'reviews'    => $this->reviewService->index()->where('active', 1),
            'products'   => $this->productsService->index($request)->where('active', 1),
            'sliders'    => $this->slidersService->index($request)->where('active', 1),
            'features'   => $this->featureService->index($request)->where('active', 1),
            'categories' => $this->categoryService->index(),
        ];
        return view('web.pages.home', compact('result'));
    }
}
