<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\MatomeRequest;
use App\Topic;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Request;

class MatomesController extends Controller {

    function __construct()
    {
        Carbon::setLocale('zh');
        $this->middleware('auth', ['except' => ['show']]);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $topic = Topic::find(Request::input('topic_id'));
        return view('matomes.create', compact('topic'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(MatomeRequest $request)
	{
        $matome = Auth::user()->matomes()->create($request->all());
        return redirect()->route('matome.show', $matome);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($matome)
	{
        $topic = Topic::find($matome->topic_id);
        return view('matomes.show', compact('matome', 'topic'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
