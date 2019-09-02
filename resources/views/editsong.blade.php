@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white">
                <div class="card-header">
                  <span class="card-heading">Edit Song</span>
                  <a href="/dashboard" class="btn btn-success btn-sm float-right">Go Back</a>
                </div>
                
                <div class="card-body ">
                  {{ Form::open(['action' => ['SongsController@update', $song->id], 'method'=>'POST']) }}
                    @method('PUT')
                    
                    <div class="form-group">
                      {{Form::label('title', 'Title')}}
                      {{Form::text('title', $song->title, ['class' => 'form-control', 'placeholder' => 'Enter Song Title'])}}
                    </div>
                    
                    <div class="form-group">
                      {{Form::label('artist', 'Artist')}}
                      {{Form::text('artist', $song->artist, ['class' => 'form-control', 'placeholder' => 'Enter Song Artist'])}}
                    </div>
                    
                    <div class="form-group">
                      {{Form::label('tab', 'Tab')}}
                      {{Form::text('tab', $song->tab_url, ['class' => 'form-control', 'placeholder' => 'Enter Tab URL'])}}
                    </div>
                    
                    <div class="form-group">
                      {{Form::label('video', 'Video')}}
                      {{Form::text('video', $song->video_url, ['class' => 'form-control', 'placeholder' => 'Enter Youtube Song URL'])}}
                    </div>
                    {{-- {{Form::hidden('_method', 'PUT')}} --}}
                    
                    <div>
                      {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    </div>
                  {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection