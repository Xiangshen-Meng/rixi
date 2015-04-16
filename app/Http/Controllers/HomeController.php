<?php namespace App\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        $topics = Auth::user()->topics;
        return view('home.index', compact('topics'));
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
