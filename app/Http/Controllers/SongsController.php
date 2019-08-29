<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class SongsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return 'Songs page';
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('createsong');
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
      'title' => 'required',
      'artist' => 'required'
    ]);

    // Create song
    $song = new Song;
    $song->title = $request->input('title');
    $song->artist = $request->input('artist');
    $song->tab_url = $request->input('tab');
    $song->video_url = $request->input('video');
    $song->user_id = auth()->user()->id;

    $song->save();

    return redirect('/dashboard')->with('success', 'Song Added');
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
    $song = Song::find($id);
    return view('editsong')->with('song', $song);
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
      'title' => 'required',
      'artist' => 'required'
    ]);

    // Create song
    $song = Song::find($id);
    $song->title = $request->input('title');
    $song->artist = $request->input('artist');
    $song->tab_url = $request->input('tab');
    $song->video_url = $request->input('video');
    $song->user_id = auth()->user()->id;

    $song->save();

    return redirect('/dashboard')->with('success', 'Song Updated');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
