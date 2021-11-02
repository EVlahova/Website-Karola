<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Service extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Service::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title', 'slug',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Title')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Menu Title', 'menu_title')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Short Description', 'short_description')
                ->sortable()
                ->rules('max:255'),

            Text::make('Service Icon', 'icon')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Service Slug', 'slug')
                ->sortable()
                ->rules('required', 'max:255'),

            File::make('Service Image', 'service_image')
                ->disk('public')
                ->path('services')
                ->storeAs(function (Request $request) {
                    return sprintf(
                        "%s.%s",
                        sha1($request->service_image->getClientOriginalName()),
                        $request->service_image->extension()
                    );
                })
                ->download(function ($request, $model, $disk, $value) {
                    return Storage::disk($disk)->download($value);
                }),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
