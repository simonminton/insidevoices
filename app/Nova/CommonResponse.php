<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;


class CommonResponse extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\CommonResponse::class;

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
            
            
            BelongsTo::make('Company')->nullable(),
           
            Select::make('q1')->options([
                'Not Answered' => 'Not Answered',
                'Strongly disagree' => 'Strongly disagree',
                'Disagree' => 'Disagree',
                'Neither agree nor disagree' => 'Neither agree nor disagree',
                'Agree' => 'Agree',
                'Strongly agree' => 'Strongly agree',
            ])->displayUsingLabels(),

            Select::make('q2')->options([
                'Not Answered' => 'Not Answered',
                'Strongly disagree' => 'Strongly disagree',
                'Disagree' => 'Disagree',
                'Neither agree nor disagree' => 'Neither agree nor disagree',
                'Agree' => 'Agree',
                'Strongly agree' => 'Strongly agree',
            ])->displayUsingLabels(),

            Select::make('q3')->options([
                'Not Answered' => 'Not Answered',
                'Strongly disagree' => 'Strongly disagree',
                'Disagree' => 'Disagree',
                'Neither agree nor disagree' => 'Neither agree nor disagree',
                'Agree' => 'Agree',
                'Strongly agree' => 'Strongly agree',
            ])->displayUsingLabels(),

            Select::make('q4')->options([
                'Not Answered' => 'Not Answered',
                'Strongly disagree' => 'Strongly disagree',
                'Disagree' => 'Disagree',
                'Neither agree nor disagree' => 'Neither agree nor disagree',
                'Agree' => 'Agree',
                'Strongly agree' => 'Strongly agree',
            ])->displayUsingLabels(),

            Select::make('q5')->options([
                'Not Answered' => 'Not Answered',
                'Strongly disagree' => 'Strongly disagree',
                'Disagree' => 'Disagree',
                'Neither agree nor disagree' => 'Neither agree nor disagree',
                'Agree' => 'Agree',
                'Strongly agree' => 'Strongly agree',
            ])->displayUsingLabels(),

            Select::make('q6')->options([
                'Not Answered' => 'Not Answered',
                'Strongly disagree' => 'Strongly disagree',
                'Disagree' => 'Disagree',
                'Neither agree nor disagree' => 'Neither agree nor disagree',
                'Agree' => 'Agree',
                'Strongly agree' => 'Strongly agree',
            ])->displayUsingLabels(),

            
            
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
