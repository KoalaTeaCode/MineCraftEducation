<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Video;

class VideosController extends Controller
{
  private $videos;

  function __construct(Video $video) {
    $this->videos = $video;
    $this->middleware('auth', array('except' => array('show', 'index')));
  }

  public function index()
  {
    $videos = $this->videos->all();
    $videoGroups = $videos->groupBy('category');
    return view('videos.index', compact('videoGroups'));
  }

  public function show(Request $request, $videoId)
  {
    $video = $this->videos->find($videoId);
    $user = $request->user();
    return view('videos.show', compact('video', 'user'));
  }

  public function create()
  {
    //@TODO: Check for access
    return view('videos.create');
  }

  public function store(Request $request)
  {
    //@TODO: Should we make a custom request?
    $this->validate($request, [
      'title' => 'required|max:255',
    ]);

    //@TODO: Add the video to the user this way
    // $request->user()->tasks()->create([
    //     'name' => $request->name,
    // ]);

    $this->videos->create([
      'title' => $request->title,
      'description' => $request->description,
      'category' => $request->category,//@TODO: I think we should create a separate model for learning paths and that is what the category should be
      'subject' => $request->subject,
      'link' => $request->link,
      'written_content' => $request->written_content,
      'certification_credit' => $request->certification_credit,//@TODO: We should validate this with a list of credits since this will be an ahcievment
    ]);

    flash()->success("Video Created", "You have successfully created a video");
    return redirect('/videos');
  }

  public function edit($videoId)
  {
    $video = $this->videos->find($videoId)->first();
    //@TODO: Check fo access
    return view('videos.edit', compact('video'));
  }

  public function update(Request $request, $videoId)
  {
    //@TODO: Should we make a custom request?
    //@TODO: And remove duplication from update and create
    $this->validate($request, [
      'title' => 'required|max:255',
    ]);

    $video = $this->videos->find($videoId)->first();
    //@TODO: Is there a better way to pass the request variables?
    $video->update([
      'title' => $request->title,
      'description' => $request->description,
      'category' => $request->category,
      'subject' => $request->subject,
      'link' => $request->link,
      'written_content' => $request->written_content,
      'certification_credit' => $request->certification_credit,
    ]);

    flash()->success("Video Updated", "You have successfully updated the video");
    return redirect("/videos/$video->id");
  }

  public function subscribe(Request $request)
  {
    $request->user()->newSubscription('basic', 'Basic Video Subscription')->create($request->stripeToken);
    flash()->success("Welcome", "You have successfully been subscribed :)");
    return redirect()->back();
  }
}

//@TODO: Make this a Facade
function flash($title = null, $message = null)
{
  $flash = app('App\Utilities\Flash');

  if (func_num_args() == 0) {
    return $flash;
  }

  return $flash->info($title, $message);
}
