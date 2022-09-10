<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'user_name' => ['required', 'max:25','min:1'],
            'user_id' => ['required', 'max:16','min:5', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required_with:password_confirmation','min:8', 'confirmed',],
            'birth' =>['required',],
            'gender'=>['required']
        ];
    }

    /**
     *  バリデーション項目名定義
     * @return array
     */
    public function attributes()
    {
        return [
            'user_name' => 'ユーザー名',
            'user_id' => 'ユーザーID',
            'email' => 'メールアドレス',
            'password' => 'パスワード',
            'birth' => '生年月日',
            'gender' => '性別',
        ];
    }

    /**
     * バリデーションメッセージ
     * @return array
     */
    public function messages()
    {
        return [
            'user_name.required' => ':attributeを入力してください。',
            'user_name.max' => ':attributeは25文字以下で入力してください。',
            'user_name.min' => ':attributeは1文字以上で入力してください。',

            'user_id.required' => ':attributeを入力してください。',
            'user_id.max' => ':attributeは16文字以下で入力してください。',
            'user_id.min' => ':attributeは5文字以上で入力してください。',
            'user_id.unique' =>':attributeが既に使用されています。別のものを設定してください',

            'email.required' => ':attributeを入力してください。',
            'email.unique' => ':attributeが既に使用されています。別のものを設定してください',

            'password.required' => ':attributeを入力してください。',
            'password.min' => ':attributeは8文字以上で入力してください。',
            'password.confirmed' => ':attributeは同じものを入力してください',

            'birth.required' =>':attributeを入力してください。',

            'gender.required' =>':attributeを入力してください。',
        ];
    }
}
