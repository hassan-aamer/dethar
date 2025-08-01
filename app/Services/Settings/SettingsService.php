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
            if (isset($request['vision_image']) && $request['vision_image']) {
                $settings->clearMediaCollection('vision_image');
                $settings->addMediaFromRequest('vision_image')->toMediaCollection('vision_image');
            }
            if (isset($request['mission_image']) && $request['mission_image']) {
                $settings->clearMediaCollection('mission_image');
                $settings->addMediaFromRequest('mission_image')->toMediaCollection('mission_image');
            }
            if (isset($request['mobile_baners']) && $request['mobile_baners']) {
                $settings->clearMediaCollection('mobile_baners');
                $settings->addMediaFromRequest('mobile_baners')->toMediaCollection('mobile_baners');
            }

            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
    }
}
