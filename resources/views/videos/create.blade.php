@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
          <div class="panel-heading">Add a Video</div>
          <div class="panel-body">
            {!! Form::open(array(
              'url' => '/videos',
              'class' => 'form',
              'method' => 'POST'
            )) !!}

              @include('videos.form')

              @include('errors.errors')

            {!! Form::close() !!}
          </div>
      </div>
  </div>
  </div>
@stop
