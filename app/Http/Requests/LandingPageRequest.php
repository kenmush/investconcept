<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LandingPageRequest extends FormRequest
{
    public function rules()
    {
        return [
                'tagline'                      => 'required',
                'tagdescription'               => 'required',
                'calltoactionone'              => 'required',
                'calltoactiononedescription'   => 'required',
                'calltoactiontwo'              => 'required',
                'calltoactiontwodescription'   => 'required',
                'calltoactionthree'            => 'required',
                'calltoactionthreedescription' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }
}