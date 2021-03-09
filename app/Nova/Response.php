<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;

class Response extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Response::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'company';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'company',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            
            Text::make('Company Name','company')->sortable(),
            BelongsTo::make('Company')->nullable(),
            Text::make('Location'),
            Select::make('response1')->options([
                '0' => 'Skipped',
                '1' => 'Strongly disagree',
                '2' => 'Disagree',
                '3' => 'Neither agree nor disagree',
                '4' => 'Agree',
                '5' => 'Strongly agree',
            ])->displayUsingLabels(),
            Textarea::make('story1'),
            Select::make('response2')->options([
                '0' => 'Skipped',
                '1' => 'Strongly disagree',
                '2' => 'Disagree',
                '3' => 'Neither agree nor disagree',
                '4' => 'Agree',
                '5' => 'Strongly agree',
            ])->displayUsingLabels(),
            Textarea::make('story2'),
            Select::make('response3')->options([
                '0' => 'Skipped',
                '1' => 'Strongly disagree',
                '2' => 'Disagree',
                '3' => 'Neither agree nor disagree',
                '4' => 'Agree',
                '5' => 'Strongly agree',
            ])->displayUsingLabels(),
            Textarea::make('story3'),
            Select::make('response4')->options([
                '0' => 'Skipped',
                '1' => 'Strongly disagree',
                '2' => 'Disagree',
                '3' => 'Neither agree nor disagree',
                '4' => 'Agree',
                '5' => 'Strongly agree',
            ])->displayUsingLabels(),
            Textarea::make('story4'),
            Select::make('response5')->options([
                '0' => 'Skipped',
                '1' => 'Strongly disagree',
                '2' => 'Disagree',
                '3' => 'Neither agree nor disagree',
                '4' => 'Agree',
                '5' => 'Strongly agree',
            ])->displayUsingLabels(),
            Textarea::make('story5'),
            Select::make('response6')->options([
               '0' => 'Skipped',
                '1' => 'Strongly disagree',
                '2' => 'Disagree',
                '3' => 'Neither agree nor disagree',
                '4' => 'Agree',
                '5' => 'Strongly agree',
            ])->displayUsingLabels(),
            Textarea::make('story6'),
            
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
