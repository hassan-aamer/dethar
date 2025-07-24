<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TechnicalDataSheetsController extends Controller
{
    public function index()
    {
        return view('web.pages.tds.index');
    }
}
