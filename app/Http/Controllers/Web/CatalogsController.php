<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Catalogs\CatalogsService;
use Illuminate\Http\Request;

class CatalogsController extends Controller
{
    protected CatalogsService $service;

    public function __construct(CatalogsService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $result = $this->service->index($request)->where('active', 1);
        // return $result;
        return view('web.pages.catalogs.index', compact('result'));
    }
}
