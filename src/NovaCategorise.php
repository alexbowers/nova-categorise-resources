<?php

namespace AlexBowers\NovaCategoriseResources;

use Laravel\Nova\Nova;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Illuminate\Support\Str;
use Symfony\Component\Finder\Finder;

class NovaCategorise extends Nova
{
    public static function availableResourcesGrouped(Request $request)
    {
        return collect(self::availableResources($request))->filter(function ($resource) {
            return $resource::$displayInNavigation;
        })->groupBy(function ($resource) {
            if (property_exists($resource, 'category')) {
                return __(ucwords($resource::$category));
            }

            return __('Other');
        })->sortKeys();
    }
}
