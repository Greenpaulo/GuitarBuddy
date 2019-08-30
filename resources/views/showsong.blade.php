@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$song->title}}<a href="/dashboard" class="btn btn-outline-secondary btn-sm float-right">Go Back</a></div>
                
                <div class="card-body ">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <strong>Artist:</strong>
                      <br>
                      {{$song->artist}}
                    </li>
                    <li class="list-group-item">
                      <strong>Tab:  </strong>
                      <br>
                      <a href="{{$song->tab_url}}" target="_blank">{{$song->tab_url}}</a>  
                    </li>
                    <li class="list-group-item">
                      <strong>Video:</strong>
                      <br> 
                      <a href="{{$song->video_url}}" target="_blank">{{$song->video_url}}</a>
                    </li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
@endsection