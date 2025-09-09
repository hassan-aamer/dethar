<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Career\CareerService;

class CareerController extends Controller
{
    protected CareerService $service;

    public function __construct(CareerService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $result = $this->service->index()->where('active', 1);
        return view('web.pages.career.index', compact('result'));
    }
}
