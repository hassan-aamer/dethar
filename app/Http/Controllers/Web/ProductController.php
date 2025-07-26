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
    public function show(Request $request, $id)
    {
        $product = $this->service->show($id);
        $result = [
            'products' => $this->service->index($request)->where('category_id', $product->category_id)->where('active', 1),
            'product' => $product,
        ];
        return view('web.pages.our_products.show', compact('result'));
    }
}
