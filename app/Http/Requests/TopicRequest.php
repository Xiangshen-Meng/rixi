<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class TopicRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->route('topic') ? true : Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:32',
            'description' => 'required',
        ];
    }

}
