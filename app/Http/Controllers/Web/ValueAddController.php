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
    public function show(Request $request, $id)
    {
        $value_add = $this->service->show($id);
        $result = [
            'value_adds' => $this->service->index($request)->where('value_add_category_id', $value_add->value_add_category_id)->where('active', 1),
            'value_add' => $value_add,
        ];
        return view('web.pages.value_add.show', compact('result'));
    }
}
