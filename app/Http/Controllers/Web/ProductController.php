<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Services\Products\ProductsService;
use App\Services\Services\ServicesService;

class ProductController extends Controller
{
    protected ProductsService $service;
    protected ServicesService $servicesService;

    public function __construct(ProductsService $service, ServicesService $servicesService)
    {
        $this->service = $service;
        $this->servicesService = $servicesService;
    }

    public function index(Request $request, $category)
    {
        $result = $this->service->index($request)->where('active', 1)->where('category_id', $category);
        return view('web.pages.our_products.index', compact('result'));
    }
    // public function show($id)
    // {
    //     $result = [
    //         'services' => $this->servicesService->index()->where('active', 1),
    //     ];
    //     $product = Cache::rememberForever("product_{$id}", function () use ($id) {
    //         return $this->service->show($id);
    //     });
    //     return view('web.pages.portfolio_details', compact('product', 'result'));
    // }
}
