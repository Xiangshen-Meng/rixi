<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\TopicRequest;
use App\Topic;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    function __construct()
    {
        Carbon::setLocale('zh');
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $topics = Topic::all();
        return view('topic.index', compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('topic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TopicRequest $request
     * @return Response
     */
    public function store(TopicRequest $request)
    {
        Auth::user()->topics()->create($request->all());
        return redirect('topic');
    }

    /**
     * Display the specified resource.
     *
     * @param $topic
     * @return Response
     */
    public function show($topic)
    {
        $comments = $topic->comments()->with('user')->get();
        return view('topic.show', compact('topic', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $topic
     * @return Response
     */
    public function edit($topic)
    {
        if ($topic->user_id == Auth::id()) {
            return view('topic.edit', compact('topic'));
        } else {
            return redirect()->route('topic.show', $topic)->with('message', '啊哦，这可不好哦～');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TopicRequest $request
     * @param $topic
     * @return Response
     */
    public function update(TopicRequest $request, $topic)
    {
        $topic->update($request->all());
        return redirect()->route('topic.show', $topic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
