<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255|min:3',
            'description'=> 'required|max:500|min:15',
            'price' => 'required|max:50',
            'series'=> 'required|max:255|min:3',
            'type'=> 'required|max:255|min:3',
            'thumb' => 'required|max:255',
            'sale_date'=> 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "You must add a title",
                'title.max' => "title is longer than 255",
                'title.min' => "title is shorter than 3",
                'description.required' => "You must add a description",
                'description.max' => "description is longer than 255",
                'description.min' => "description is shorter than 3",
                'series.required' => "You must add a series",
                'series.max' => "series is longer than 255",
                'series.min' => "series is shorter than 3",
                'type.required' => "You must add a type",
                'type.max' => "type is longer than 255",
                'type.min' => "type is shorter than 3",
                'thumb.required' => "You must add a thumb",
                'thumb.max' => "thumb is longer than 255",
                'thumb.min' => "thumb is shorter than 3",
                'price.required' => "You must add a price",
                'price.max' => "thumb is higher than 50",
                'sale_date.required' => "You must add a sale date"
        ];
    }
}
