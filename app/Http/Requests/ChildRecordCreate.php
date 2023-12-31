<?php

namespace App\Http\Requests;

use App\Helpers\Qs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ChildRecordCreate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:6|max:150',
            'gender' => 'required|string',
            'phone' => 'sometimes|nullable|string|min:6|max:20',
            'email' => 'sometimes|nullable|email|max:100|unique:users',
            'photo' => 'sometimes|nullable|image|mimes:jpeg,gif,png,jpg|max:2048',
            'address' => 'required|string|min:6|max:120',
            'my_parent_id' => 'sometimes|nullable',
        ];
    }

    public function attributes()
    {
        return  [
            'my_parent_id' => 'Parent',
        ];
    }

    protected function getValidatorInstance()
    {
        $input = $this->all();

        if(isset($input['my_parent_id'])){
            $input['my_parent_id'] = Qs::decodeHash($input['my_parent_id']);
        }else{
            $input['my_parent_id'] = Auth::user()->id;
        }
        // $input['my_parent_id'] = $input['my_parent_id'] ? Qs::decodeHash($input['my_parent_id']) : Auth::user()->id;

        $this->getInputSource()->replace($input);

        return parent::getValidatorInstance();
    }
}
