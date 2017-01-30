@extends('bastory.home.index')
@section('content')
<div class="info-table">
    <div class="container">
        <div class="row">
            @foreach($teams as $team)
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="infoing text-center">                       
                        <div class="infoing-top" style="background-image:url('images/logo/{{$team->logo}}'); background-size:contain; background-position:center;"> 
                        </div>  
                        <ul>
                        <li>{{$team->name}}</li>
                        <li>{{$team->location}}</li>
                        </ul>
                        <a class="infoingbtn" href="{{ url('/team/'.$team->name) }}">點我前往</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection