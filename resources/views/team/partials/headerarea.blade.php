<div class="row" style="background-image:url('/images/banner_bastory.jpg'); background-size:cover; background-position:center; height: 320px;">
</div>
<div class="row">
    <div class="col-xs-12 col-md-12">
        <nav class="navbar navbar-inverse nav-none-radius">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">TeamName</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#TeamNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="TeamNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="/team/teamname/game">近期比賽</a></li>
                        <li><a href="/team/teamname/pastgame">過去活動</a></li>
                        <li><a href="/team/teamname/gameresult">成績資訊</a></li>
                        <li><a href="/team/teamname/board">公佈欄</a></li>
                        <li><a href="/team/teamname/introduction">球團簡介</a></li>
                        <li><a href="/team/teamname/recruit">加入我們</a></li>
                    </ul>
                    @if(Auth::user())
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/logout">登出</a></li>
                        </ul>
                    @else
                        <team-login token="{{csrf_token()}}"></team-login>
                    @endif
                </div>
            </div>
        </nav>
    </div>

</div>
