@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
          <div class="panel-heading">Edit a Video</div>
          <div class="panel-body">
            {!! Form::model($video,
              array('url' => "/videos/$video->id",
              'class' => 'form',
              'method' => 'PUT'
            )) !!}

              @include('videos.form')

              @include('errors.errors')
              <input name="_method" type="hidden" value="PUT">
            {!! Form::close() !!}
          </div>
      </div>
  </div>
  </div>
@stop
