<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class MatomeRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $matome = $this->route('matome');
        return $matome ? $matome->user_id == Auth::id() : Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'topic_id' => 'required',
            'title' => 'required|min:3|max:32',
            'content' => 'required|min:2',
        ];
    }

}
