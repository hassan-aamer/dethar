<?php

namespace App\Services\Features;
use App\Models\Feature;
use Illuminate\Support\Facades\DB;
use App\Interfaces\CRUDRepositoryInterface;

class FeatureService
{
    private $model;
    private CRUDRepositoryInterface $itemRepository;
    public function __construct(CRUDRepositoryInterface $itemRepository)
    {
        $this->itemRepository = $itemRepository;
        $this->model = new Feature();
    }
    public function index($request)
    {
        $data = $request->all();
        return $this->itemRepository->getPaginateItems($this->model, $data);
    }
    public function show(int $id)
    {
        return $this->itemRepository->getItemById($this->model, $id);
    }
    public function store(array $request)
    {
        try {
            DB::beginTransaction();

            $features = $this->itemRepository->createItem($this->model, $request);

            if (isset($request['image']) && $request['image']) {
                $features->addMediaFromRequest('image')->toMediaCollection('features');
            }

            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
    }
    public function edit($id)
    {
        return $this->itemRepository->getItemById($this->model, $id);
    }
    public function update(array $request, int $id)
    {
        try {

            DB::beginTransaction();

            $features = $this->itemRepository->getItemById($this->model, $id);
            $this->itemRepository->updateItem($this->model, $id, $request);

            if (isset($request['image']) && $request['image']) {
                $features->clearMediaCollection('features');
                $features->addMediaFromRequest('image')->toMediaCollection('features');
            }

            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
    }
    public function destroy(int $id)
    {
        return $this->itemRepository->deleteItem($this->model, $id);
    }
    function changeStatus($request)
    {
        if ($item = $this->itemRepository->getItemById($this->model, $request->id)) {
            $active = !$item->active;
            $this->itemRepository->updateItem($this->model, $item->id, ['active' => $active]);
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false]);
    }

}
