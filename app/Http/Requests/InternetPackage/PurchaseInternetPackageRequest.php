<?php

namespace App\Http\Requests\InternetPackage;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseInternetPackageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'payment_method_id' => 'required',
//            'iccid' => 'required',
//            'amount' => 'required',
//            'cart' => 'required',
//            'first_name' => 'required',
//            'last_name' => 'required',
//            'state' => 'required',
//            'street_address' => 'required',
//            'city' => 'required',
//            'email_address' => 'required',
//            'zip_code' => 'required',
        ];
    }
}
