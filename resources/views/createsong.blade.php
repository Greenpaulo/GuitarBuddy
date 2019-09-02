@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white">
                <div class="card-header">Add Song <a href="/dashboard" class="btn btn-success btn-sm float-right">Go Back</a></div>
                
                <div class="card-body ">
                  {{ Form::open(['action' => 'SongsController@store', 'method'=>'POST']) }}
                    
                    <div class="form-group">
                      {{Form::label('title', 'Title')}}
                      {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter Song Title'])}}
                    </div>
                    
                    <div class="form-group">
                      {{Form::label('artist', 'Artist')}}
                      {{Form::text('artist', '', ['class' => 'form-control', 'placeholder' => 'Enter Song Artist'])}}
                    </div>
                    
                    <div class="form-group">
                      {{Form::label('tab', 'Tab')}}
                      {{Form::text('tab', '', ['class' => 'form-control', 'placeholder' => 'Enter Tab URL'])}}
                    </div>
                    
                    <div class="form-group">
                      {{Form::label('video', 'Video')}}
                      {{Form::text('video', '', ['class' => 'form-control', 'placeholder' => 'Enter Youtube Song URL'])}}
                    </div>
                    
                    <div>
                      {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    </div>
                  {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
