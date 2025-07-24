<?php
use Illuminate\Support\Str;

if (! function_exists('setting')) {
    function setting(?string $key = null, $default = null)
    {
        $settings = \App\Models\Setting::first();

        if (!$settings) {
            return $default;
        }

        if (is_null($key)) {
            return $settings;
        }

        if (in_array($key, $settings->translatable ?? []) && method_exists($settings, 'getTranslation')) {
            return $settings->getTranslation($key, app()->getLocale()) ?? $default;
        }

        return $settings->{$key} ?? $default;
    }
}
if (! function_exists('page')) {
    function page(string $name, ?string $column = null, $default = null)
    {
        $page = \App\Models\Page::where('name->en', $name)->first();

        if (!$page) {
            return $default;
        }

        if (is_null($column)) {
            return $page;
        }

        if (in_array($column, $page->translatable ?? []) && method_exists($page, 'getTranslation')) {
            return $page->getTranslation($column, app()->getLocale()) ?? $default;
        }

        return $page->{$column} ?? $default;
    }
}
use Illuminate\Support\Facades\File;

if (! function_exists('page_image')) {
    function page_image(string $name, string $collection = 'pages', string $defaultImage = 'robot.png')
    {
        $page = \App\Models\Page::where('name->en', $name)->first();

        if ($page && $page->getFirstMedia($collection) && File::exists($page->getFirstMedia($collection)->getPath())) {
            return $page->getFirstMediaUrl($collection);
        }

        return asset($defaultImage);
    }
}

if (!function_exists('shortenText')) {
    function shortenText($text, $length = 50) {
        return Str::limit($text, $length);
    }
}
if (!function_exists('syncRelations')) {
    function syncRelations($model, array $data, array $relations): void {
        foreach ($relations as $field => $relation) {
            if (!empty($data[$field])) {
                $model->$relation()->sync($data[$field]);
            }
        }
    }
}
function dateFormatted($date, $format = 'M d, Y', $showTimes = false)
{
    if ($showTimes) {
        $format = $format . ' @ h:i a';
    }
    return date($format, strtotime($date));
}

if (!function_exists('WhatWeDoCategories')) {
    function WhatWeDoCategories(?string $column = null, $default = null)
    {
        $categories = \App\Models\WhatWeDoCategory::publish()->get();

        if (is_null($column)) {
            return $categories;
        }

        return $categories->map(function ($category) use ($column, $default) {
            if (in_array($column, $category->translatable ?? []) && method_exists($category, 'getTranslation')) {
                return $category->getTranslation($column, app()->getLocale()) ?? $default;
            }

            return $category->{$column} ?? $default;
        });
    }
}
if (!function_exists('ValueAddCategories')) {
    function ValueAddCategories(?string $column = null, $default = null)
    {
        $categories = \App\Models\ValueAddCategory::publish()->get();

        if (is_null($column)) {
            return $categories;
        }

        return $categories->map(function ($category) use ($column, $default) {
            if (in_array($column, $category->translatable ?? []) && method_exists($category, 'getTranslation')) {
                return $category->getTranslation($column, app()->getLocale()) ?? $default;
            }

            return $category->{$column} ?? $default;
        });
    }
}
if (!function_exists('ProductCategories')) {
    function ProductCategories(?string $column = null, $default = null)
    {
        $categories = \App\Models\Category::publish()->get();

        if (is_null($column)) {
            return $categories;
        }

        return $categories->map(function ($category) use ($column, $default) {
            if (in_array($column, $category->translatable ?? []) && method_exists($category, 'getTranslation')) {
                return $category->getTranslation($column, app()->getLocale()) ?? $default;
            }

            return $category->{$column} ?? $default;
        });
    }
}
if (!function_exists('BlogCategories')) {
    function BlogCategories(?string $column = null, $default = null)
    {
        $categories = \App\Models\BlogCategory::publish()->get();

        if (is_null($column)) {
            return $categories;
        }

        return $categories->map(function ($category) use ($column, $default) {
            if (in_array($column, $category->translatable ?? []) && method_exists($category, 'getTranslation')) {
                return $category->getTranslation($column, app()->getLocale()) ?? $default;
            }

            return $category->{$column} ?? $default;
        });
    }
}
