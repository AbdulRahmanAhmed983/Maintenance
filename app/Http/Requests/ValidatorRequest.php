<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatorRequest extends FormRequest
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
    {  //   music_instrument'  => 'required_if:program.*,in:Music'

        return [
            'car_type' => 'required',
            'carModel_id' => 'required',
            'date' => 'required',
            'clint_name' => 'required',
            'car_no' => 'required',
            'motor_no' => 'required',
            'frame_no' => 'required',
            'trailer_type' => 'required_if:carModel_id.*,in:مقطورة',
            'trailer_no' => 'required_if:carModel_id.*,in:مقطورة',
            'frameTrailer_no' => 'required_if:carModel_id.*,in:مقطورة',


            
            // 'nameprocess_id' => 'required', 
            // 'piece_no' => 'required_if:nameprocess_id->name.*,in:قطع غيار',
            // 'price'    => 'required_if:nameprocess_id.*,in:قطع غيار',
            // 'namePiece'=> 'required_if:nameprocess_id.*,in:قطع غيار',
            // 'quantity' => 'required_if:nameprocess_id.*,in:قطع غيار',
            // 'workship' => 'required_if:nameprocess_id.*,in:مصنعيات',
            // 'category' => 'required_if:nameprocess_id.*,in:مصنعيات',
     

        ];
    }
}
