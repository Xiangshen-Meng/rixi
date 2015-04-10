<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Topic;
use Auth;
use Illuminate\Http\Request;

class FavoritesController extends Controller {

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

}
