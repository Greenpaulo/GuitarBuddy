@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white">
                <div class="card-header">
                  <span class="card-heading">{{$song->title}}</span>
                  <a href="/dashboard" class="btn btn-success btn-sm float-right">Go Back</a>
                </div>
                
                <div class="card-body bg-dark text-white">
                  <ul class="list-group bg-dark">
                    <li class="list-group-item bg-dark text-white">
                      <span class='heading'>Artist:</span>
                      <br>
                      {{$song->artist}}
                    </li>
                    <li class="list-group-item  bg-dark text-white">
                      <span class='heading'>Tab:</span>
                      <br>
                      <a href="{{$song->tab_url}}" target="_blank">{{$song->tab_url}}</a>  
                    </li>
                    <li class="list-group-item  bg-dark text-white">
                      <span class='heading'>Video:</span>
                      <br> 
                      <a href="{{$song->video_url}}" target="_blank">{{$song->video_url}}</a>
                    </li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
@endsection