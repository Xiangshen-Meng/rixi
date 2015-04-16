<?php namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        Carbon::setLocale('zh');
        $this->middleware('auth');
    }

    /**
     * Show comments of the user.
     *
     * @return Response
     */
    public function comments()
    {
        $comments = Auth::user()->comments;
        return view('home.comments', compact('comments'));
    }

    /**
     * Show topics of the user.
     *
     * @return Response
     */
    public function topics()
    {
        $topics = Auth::user()->topics;
        return view('home.topics', compact('topics'));
    }

    /**
     * Show the application setting to the user.
     *
     * @return Response
     */
    public function setting()
    {
        return view('home.setting')->with(['avatar' => Auth::user()->getAvatarName()]);
    }

    /**
     * Update current user avatar.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateUser(Request $request)
    {
        $user = Auth::user();
        $user->avatar = $request->get('avatar');
        $user->save();

        return redirect('/setting')->with('message', '已经更新啦！去看看吧');
    }
}
