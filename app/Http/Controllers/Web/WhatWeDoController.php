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
    public function show(Request $request, $id)
    {
        $what_we_do = $this->service->show($id);
        $result = [
            'what_we_dos' => $this->service->index($request)->where('what_we_do_category_id', $what_we_do->what_we_do_category_id)->where('active', 1),
            'what_we_do' => $what_we_do,
        ];
        return view('web.pages.what_we_do.show', compact('result'));
    }
}
