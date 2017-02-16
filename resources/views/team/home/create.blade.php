@extends('bastory.home.index')
@section('content')
<div class="container">
	<div class="panel panel-default">
        <div class="panel-heading">註冊球隊</div>
        <div class="panel-body">
            {!!Form::open(['url'=>'/team','method'=>'POST','files' => true])!!}
                <div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6">
		                <div class="form-group">
		                    {!!Form::label('球隊名稱')!!}
		                    {!!Form::text('name',"",['class'=>'form-control'])!!}
		                </div>
		            </div>
		            <div class="col-xs-12 col-sm-12 col-md-6">
			            <div class="form-group">
		    	            {!!Form::label('球隊英文名稱')!!}
		                    {!!Form::text('english_name',"",['class'=>'form-control'])!!}
		                    <p class="help-block">此名稱用於網址，不得與其他球隊相同。</p>
		                </div>
		            </div>
		        </div>
                <div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4">
						<div class="form-group">
	                    	{!!Form::label('請選擇球隊主要活動所在地')!!}
	                    	{!!Form::select('location',array('基隆市' => '基隆市','台北市' => '台北市', '新北市' => '新北市','桃園市' => '桃園市','新竹市' => '新竹市','新竹縣' => '新竹縣','苗栗縣' => '苗栗縣','台中市' => '台中市','彰化縣' => '彰化縣','南投縣' => '南投縣','雲林縣' => '雲林縣','嘉義市' => '嘉義市','嘉義縣' => '嘉義縣','台南市' => '台南市','高雄市' => '高雄市','屏東縣' => '屏東縣','宜蘭縣' => '宜蘭縣','花蓮縣' => '花蓮縣','台東縣' => '台東縣','澎湖縣' => '澎湖縣','金門縣' => '金門縣','馬祖' => '馬祖'),'',['class' => 'form-control']) !!}
	                	</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4">
						{!!Form::label('請選擇隊徽')!!}
						{!!Form::file('logo',[]) !!}
						<p class="help-block">只接受jpg、png檔案。</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4">
						{!!Form::label('請選擇封面照片')!!}
						{!!Form::file('banner',[]) !!}
						<p class="help-block">只接受jpg、png檔案。</p>
					</div>
                </div>
                
                <div class="form-group">
                    {!!Form::label('球隊簡介')!!}
                    {!!Form::textarea('about','',['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!!Form::submit('註冊球隊',['class'=>'btn btn-primary'])!!}
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection