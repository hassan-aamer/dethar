<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\WhatWeDo\WhatWeDoService;
use Illuminate\Http\Request;

class WhatWeDoController extends Controller
{
    protected WhatWeDoService $service;

    public function __construct(WhatWeDoService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request, $category)
    {
        $result = $this->service->index($request)->where('active', 1)->where('what_we_do_category_id', $category);
        return view('web.pages.what_we_do.index', compact('result'));
    }
}
