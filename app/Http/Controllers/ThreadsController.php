<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use DB;

class ThreadsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = DB::table('thread')->get();

        return view ('threads.index') -> with ('threads', $threads );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('threads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'subject' => 'required',
            'question' => 'required'
        ]);

        $thread = new Thread;
        $thread->ThreadSubject = $request->input('subject');
        $thread->ThreadDescription = $request->input('question');
        $thread->save();

        return redirect('/threads') -> with('success', 'Question Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thread = Thread::find($id);
        return view ('threads.show')-> with ('thread', $thread);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thread = Thread::find($id);
        return view ('threads.edit')-> with ('thread', $thread);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'subject' => 'required',
            'question' => 'required'
        ]);

        $thread = Thread::find($id);
        $thread->ThreadSubject = $request->input('subject');
        $thread->ThreadDescription = $request->input('question');
        $thread->save();

        return redirect('/threads') -> with('success', 'Question Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thread = Thread::find($id);
        $thread->delete();
        return redirect('/threads') -> with('success', 'Question Deleted');
    }
}
