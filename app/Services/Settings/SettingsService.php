<?php

namespace App\Services\Settings;

use App\Interfaces\CRUDRepositoryInterface;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;

class SettingsService
{
    private $model;
    private CRUDRepositoryInterface $itemRepository;
    public function __construct(CRUDRepositoryInterface $itemRepository)
    {
        $this->itemRepository = $itemRepository;
        $this->model = new Setting();
    }
    public function edit()
    {
        return $this->model->first();
    }
    public function update(array $request, int $id)
    {
        try {

            DB::beginTransaction();

            $settings = $this->itemRepository->getItemById($this->model, $id);
            $this->itemRepository->updateItem($this->model, $id, $request);

            if (isset($request['image']) && $request['image']) {
                $settings->clearMediaCollection('about');
                $settings->addMediaFromRequest('image')->toMediaCollection('about');
            }
            if (isset($request['baner']) && $request['baner']) {
                $settings->clearMediaCollection('baners');
                $settings->addMediaFromRequest('baner')->toMediaCollection('baners');
            }
            if (isset($request['callToAction']) && $request['callToAction']) {
                $settings->clearMediaCollection('callToActions');
                $settings->addMediaFromRequest('callToAction')->toMediaCollection('callToActions');
            }
            if (isset($request['review']) && $request['review']) {
                $settings->clearMediaCollection('reviews');
                $settings->addMediaFromRequest('review')->toMediaCollection('reviews');
            }
            if (isset($request['logo']) && $request['logo']) {
                $settings->clearMediaCollection('logo');
                $settings->addMediaFromRequest('logo')->toMediaCollection('logo');
            }

            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
