<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Topic;
use Auth;
use Illuminate\Http\Request;

class ApiController extends Controller {

    /**
     * Add Auth middleware.
     */
    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Process favorite form.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postFavorite(Request $request)
    {
        $user = Auth::user();
        $topic_id = $request->get('topic_id');

        if (!$user->hasFavorite($topic_id)) {
            $user->favorites()->attach([$topic_id]);
        }

        return response()->json(
            [
                'status' => 'success',
                'message' => 'Favorite Success'
            ]
        );
    }

    public function postVote(Request $request)
    {
        $user = Auth::user();
        $comment_id = $request->get('comment_id');

        if (!$user->hasVote($comment_id)) {
            $user->votes()->attach([$comment_id]);
        }

        return response()->json(
            [
                'status' => 'success',
                'message' => 'Vote Success'
            ]
        );
    }
}
