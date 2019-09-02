@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white">
                <div class="card-header">
                  <span class="card-heading">Repertoire</span> 
                  <a href="/songs/create" class="btn btn-success float-right">Add Song</a>
                </div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}

                    <h3>Your Songs</h3>
                    @if (count($songs))
                      <table class="table table-striped">
                          {{-- <tr>
                              <th>Song</th>
                              <th></th>
                              <th></th>
                          </tr> --}}
                        @foreach($songs as $song)
                          <tr>
                              <td><a href="/songs/{{$song->id}}">{{$song->title}}</a></td>
                              {{-- Edit page link --}}
                              <td><a href="/songs/{{$song->id}}/edit" class="btn btn-primary float-right">Edit</a></td>
                              {{-- Delete Form --}}
                              <td>
                                {{ Form::open(['action'=>['SongsController@destroy', $song->id], 'method'=>'POST']) }}
                                  @method('DELETE')
                                  {{ Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                                {{ Form::close() }}
                              </td>
                          </tr>
                        @endforeach    
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
