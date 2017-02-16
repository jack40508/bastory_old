@extends('bastory.home.index')
@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    這裡是搜尋列
    </div>
</div>
<div class="info-table">
    <div class="container">
        <div class="row">
            @foreach($teams as $team)
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="infoing text-center">                       
                        <div class="infoing-top" style="background-image:url('images/logo/{{$team->logo}}'); background-size:contain; background-position:center;"> 
                        </div>  
                        <ul>
                            <li class="text-left">隊名</li>
                            <li>{{$team->name}}</li>
                            <li class="text-left">所在地</li>
                            <li>{{$team->location}}</li>
                            <li class="text-left">管理人</li>
                            <li>{{$team->manager->name}}</li>
                        </ul>
                        <a class="infoingbtn btn-default ribbon" href="{{ url('/team/'.$team->english_name) }}">點我前往</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection