<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\TechnicalDataSheets\TechnicalDataSheetsService;
use Illuminate\Http\Request;

class TechnicalDataSheetsController extends Controller
{
    protected TechnicalDataSheetsService $service;
    public function __construct(TechnicalDataSheetsService $service)
    {
        $this->service = $service;
    }
    public function index(Request $request)
    {
        $result = $this->service->index($request)->where('active', 1);
        return view('web.pages.tds.index', compact('result'));
    }
}
