<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\ValueAdd\ValueAddService;
use Illuminate\Http\Request;

class ValueAddController extends Controller
{
    protected ValueAddService $service;

    public function __construct(ValueAddService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request, $category)
    {
        $result = $this->service->index($request)->where('active', 1)->where('value_add_category_id', $category);
        return view('web.pages.value_add.index', compact('result'));
    }
}
