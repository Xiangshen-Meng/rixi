<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Topic;
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
        $topic = $this->route('topic');
        return $topic ? $topic->user_id == Auth::id() : Auth::check();
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
