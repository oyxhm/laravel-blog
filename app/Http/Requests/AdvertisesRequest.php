<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdvertisesRequest extends BackendForm
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name'    => 'required',
            'sponser' => 'required',
            'level'   => 'required|integer',
            'desc'    => 'required',
        ];
    }
}
