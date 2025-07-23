<?php

namespace App\Http\Controllers\Admin\TechnicalDataSheets;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TechnicalDataSheets\TechnicalDataSheetsRequest;
use App\Services\TechnicalDataSheets\TechnicalDataSheetsService;

class TechnicalDataSheetsController extends Controller
{
        private $folderPath = 'admin.technical_data_sheets.';
    protected TechnicalDataSheetsService $service;
    public function __construct(TechnicalDataSheetsService $service)
    {
        $this->service = $service;
    }
    public function index(Request $request)
    {
        $result = $this->service->index($request);
        return view($this->folderPath . 'index', compact('result'));
    }
    public function show($id)
    {
        $result = $this->service->show($id);
        return view($this->folderPath . 'index', compact('result'));
    }
    public function create()
    {
        return view($this->folderPath . 'create_and_edit', ['result' => null]);
    }
    public function store(TechnicalDataSheetsRequest $request)
    {
        try {
            $this->service->store($request->validated());
            return redirect()->route('admin.technical_data_sheets.index')->with('success', __('attributes.OperationCompletedSuccessfully'));
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Failed to create slider: ' . $e->getMessage());
        }
    }
    public function edit($id)
    {
        $result = $this->service->edit($id);
        return view($this->folderPath . 'create_and_edit', compact('result'));
    }
    public function update(TechnicalDataSheetsRequest $request, $id)
    {
        try {
            $this->service->update($request->validated(), $id);
            return redirect()->route('admin.technical_data_sheets.index')->with('success', __('attributes.OperationCompletedSuccessfully'));
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Failed to update slider: ' . $e->getMessage());
        }
    }
    public function destroy($id)
    {
        $this->service->destroy($id);
    }
    public function changeStatus(Request $request)
    {
        $this->service->changeStatus($request);
    }
}
