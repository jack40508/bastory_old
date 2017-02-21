@extends('team.home.show')
@section('content')
	<div class="container">
		@foreach($games as $game)
			<div class="row">
				<div class="col-xs-10 col-md-10">
					<div id="game-card" class="weater">
						<div class="game-selected">
							<article>
								<div class="gameinfo">
									<div>
										<div class="game-name">{{$game->name}}</div>
										<div class="game-basicinfo"><span>比賽地點:</span> {{$game->location}}</div>
										<div class="game-basicinfo"><span>比賽日期:</span> {{$game->game_date}}</div>
									</div>
								</div>
							</article>
							
							<figure style="background-image: url(/images/picture/gamebackground.jpg)"></figure>
						</div>

						<div class="game-times">
							<div class="row row-no-gutter">
								<div class="col-md-4">
									<div class="game-time">
										<h1>比賽時間：{{$game->game_time}}</h1>
									</div>
								</div>

								<div class="col-md-4">
									<div class="game-time">
										<h1>集合時間：{{$game->gather_time}}</h1>

									</div>
								</div>

								<div class="col-md-4">
									<div class="game-time">
										<h1>詳細資訊</h1>

									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>

	@foreach($games as $game)
	
	@endforeach
@endsection