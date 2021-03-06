<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\Classification;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = Info::all();
        $classifications = Classification::all();
        return view('infos.index', compact('infos', 'classifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classifications = Classification::all();
        return view('infos.create', compact('classifications'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'author' => 'required',
            'title' => 'required',
            'body' => 'required',
            'date' => 'required',
            'classification_id' => 'required'
            ]);
        $info = new Info;
        $info->author = request('author');
        $info->title = request('title');
        $info->body = request('body');
        $info->date = request('date');
        $info->classification_id = request('classification_id');
        $info->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classifications = Classification::all();
        $info = Info::find($id);
        return view('infos.edit', compact('info', 'classifications'));
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
        $this->validate(request(),[
            'author' => 'required',
            'title' => 'required',
            'body' => 'required',
            'date' => 'required',
            'classification_id' => 'required'
            ]);
        $info = Info::find($id);
        $info->author = request('author');
        $info->title = request('title');
        $info->body = request('body');
        $info->date = request('date');
        $info->classification_id = request('classification_id');
        $info->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Info::findOrfail($id);
        $info -> delete();

        return redirect('/');
    }
}
