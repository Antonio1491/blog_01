<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Mockery\Generator\Parameter;

// Esta clase contiene la validación de un controlador

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //revisar si el usuario coinside con el usuario auth y no se ha modificado desde el navegador
        // if ($this->user_id == auth()->user()->id){
        //     return true;
        // }
        // else{
        //     return false;
        // }
        
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {

        $post = $this->route()->parameter( 'post' );  //recuperamos el post que estamos editando o creando

        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:posts',
            'status' => 'required|in:1,2',
            'file'=>'image'
        ];

        if($post)
        {
            $rules ['slug'] = 'required|unique:posts,slug,' . $post->id;
        }

        if($this->status == 2){
            $rules = array_merge($rules,[
                'category_id'=>'required',
                'tags' => 'required',
                'extract' => 'required',
                'body' => 'required'
            ]);
        }

        return $rules;

    }
}
