<?php

namespace App\Services\Pages;
use Illuminate\Support\Facades\DB;
use App\Interfaces\CRUDRepositoryInterface;
use App\Models\Page;

class PageService
{
    private $model;
    private CRUDRepositoryInterface $itemRepository;
    public function __construct(CRUDRepositoryInterface $itemRepository)
    {
        $this->itemRepository = $itemRepository;
        $this->model = new Page();
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

            $pages = $this->itemRepository->createItem($this->model, $request);

            if (isset($request['image']) && $request['image']) {
                $pages->addMediaFromRequest('image')->toMediaCollection('pages');
            }
            if (isset($request['about']) && $request['about']) {
                $pages->addMediaFromRequest('about')->toMediaCollection('about');
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

            $pages = $this->itemRepository->getItemById($this->model, $id);
            $this->itemRepository->updateItem($this->model, $id, $request);

            if (isset($request['image']) && $request['image']) {
                $pages->clearMediaCollection('pages');
                $pages->addMediaFromRequest('image')->toMediaCollection('pages');
            }
            if (isset($request['about']) && $request['about']) {
                $pages->clearMediaCollection('about');
                $pages->addMediaFromRequest('about')->toMediaCollection('about');
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
