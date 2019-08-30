@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Repertoire <a href="/songs/create" class="btn btn-success btn-sm float-right">Add Song</a></div>

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
                              <td><a href="/songs/{{$song->id}}/edit" class="btn btn-secondary float-right">Edit</a></td>
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
