@extends('templates.main')





@section('header')
	@parent
@endsection





@section('content')
	
	<div id="block_1" class="col-lg-12">
		<div class="wrap_block col-lg-offset-2 col-lg-8 col-md-12">
			<div class="title">Виды наливных полов</div>
			
			<div class="content col-lg-4 col-md-4">
				<div class="imgBlock"><img src="/public/img/{{ $mainPage[0]['image'] }}" /></div>
				<div class="titleProd">{{ $mainPage[0]['title'] }}</div>
				<div class="descProd">{!! $mainPage[0]['text'] !!}</div>
			</div>
			
			<div class="content col-lg-4 col-md-4">
				<div class="imgBlock"><img src="/public/img/{{ $mainPage[1]['image'] }}" /></div>
				<div class="titleProd">{{ $mainPage[1]['title'] }}</div>
				<div class="descProd">{!! $mainPage[1]['text'] !!}</div>
			</div>
			
			<div class="content col-lg-4 col-md-4">
				<div class="imgBlock"><img src="/public/img/{{ $mainPage[2]['image'] }}" /></div>
				<div class="titleProd">{{ $mainPage[2]['title'] }}</div>
				<div class="descProd">{!! $mainPage[2]['text'] !!}</div>
			</div>
			
		</div>
	</div>
	
	
	
	<div id="block_2" class="col-lg-12">
		<div class="wrap_block col-lg-offset-2 col-lg-8 col-md-12">
			<div class="title">{{ $mainPage[3]['title'] }}</div>
			<div class="textBlock col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
				{!! $mainPage[3]['text'] !!}
			</div>
			<div class="imageBlock col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
				<img src="/public/img/{{ $mainPage[3]['image'] }}" alt="" />
			</div>
		</div>
	</div>
	
	
	
	<div id="block_3" class="col-lg-12">
		<div class="wrap_block col-lg-offset-2 col-lg-8 col-md-12">
			<div class="title">{{ $mainPage[4]['title'] }}</div>
			
			<div class="textBlock">
				{!! $mainPage[4]['text'] !!}
			</div>
			
			
		</div>
	</div>
	
	
	
	<div id="block_4" class="col-lg-12">
		<div class="wrap_block col-lg-offset-2 col-lg-8 col-md-12">
			<div class="headerTitle">
				<span>Остались вопросы?</span>
			</div>
			<div class="headerDesc">
				<span>Чтобы задать вопрос, звоните нам по номеру +7(800)333-22-33 или оставьте заявку на сайте</span>
			</div>
			
			<div id="btn2" class="btn2">Оставить заявку</div>
			
		</div>
	</div>
	
@endsection








@section('footer')
	@parent
@endsection