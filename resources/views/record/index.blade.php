@extends('layouts.app')

@section('content')
<div class="p-3 mb-2 bg-warning text-dark">
    <div class="container">
    	<div class="form-group">
    	    <div class="row justify-content-center">
	            <h1>My Workout</h1>
	        </div>
	    </div>
	    <div class="text-right">
	        <div class="text-right">
	            <a href="/menus" class="btn btn-dark mb-3 text-warning">Record training</a>
	        </div>
	    </div>
		<div class="form-group">
	    	<div class="row justify-content-center">
	    		<h1 class="bg-dark text-warning mt-2 p-2 rounded">トレーニング履歴</h1>
	    	</div>
	    	<div>
	            <form action="/records/search" method="get">
	            	<input type="date" name="day" value={{$day}}>
	            	～
	            	<input type="date" name="day2" value={{$day2}}>
	            	<input type="submit" value="検索">
	        	</form>
	        	<form action="/records/part" method="get">
	        		<select name="part">
	            		<option>胸</option>
		                <option>背中</option>
		                <option>腕</option>
		                <option>肩</option>
		                <option>腹筋</option>
		                <option>脚</option>
		                <option>有酸素運動</option>
	            	</select>
	            	<input type="submit" value="検索">
	            </form>
	            <form action="/records/event" method="get">
	        		<select name="name">
	        			@foreach($menus as $menu)
	            		<option>{{$menu->name}}</option>
	            		@endforeach
	            	</select>
	            	<input type="submit" value="検索">
	            </form>
	        </div>
	    	<div class="bg-dark text-warning my-3 rounded">
	    		<h2 class="pl-2">筋トレ</h2>
	    	</div>
	        <div class="row">
				@foreach($records as $re)
	        	<div class="col-md-6">
			        <div class="card bg-dark">
					    <div>
				    		<label class="text-warning pl-2">種目名</label>
				    		<h4 class="text-warning pl-2">{{$re->name}}</h4>
				    	</div>
				    	<div class="bg-warning">
				    		<span class="h5 text-dark pl-2">重さ</span>
				    		<span class="h5 text-dark float-right pr-2">kg</span><span class="h4 text-dark float-right mr-4">{{$re->weight}}</span>
				    	</div>
				    	<div class="bg-warning">
				    		<span class="h5 text-dark pl-2">回数</span>
				    		<span class="h5 text-dark float-right pr-2">回</span><span class="h4 text-dark float-right mr-4">{{$re->counts}}</span>
				    	</div>
				    	<div class="bg-warning">
				    		<span class="h5 text-dark pl-2">セット数</span>
				    		<span class="h5 text-dark float-right pr-2">セット</span><span class="h4 text-dark float-right mr-4">{{$re->set}}</span>
				    	</div>
				    	<div class="bg-warning">
				    		<span class="h5 text-dark pl-2">メモ</span>
				    		<span class="h4 text-dark float-right pr-2">{{$re->memo}}</span>
				    	</div>
				    </div>
			    </div>
			    @endforeach
			</div>
			<div class="bg-dark text-warning my-3 rounded">
				<h2 class="pl-2">有酸素運動</h2>
			</div>
			<div class="row">
			@foreach($aerobics as $aero)
        	<div class="col-md-6">
		        <div class="card bg-dark">
				    <div>
			    		<label class="text-warning pl-2">種目名</label>
			    		<h4 class="text-warning pl-2">{{$aero->name}}</h4>
			    	</div>
			    	<div class="bg-warning">
			    		<span class="h5 text-dark pl-2">時間</span>
			    		<span class="h5 text-dark ml-5 float-right pr-2">分</span><span class="h4 text-dark float-right mr-4">{{$aero->times}}</span>
			    	</div>
			    	<div class="bg-warning">
			    		<span class="h5 text-dark pl-2">セット数</span>
			    		<span class="h5 text-dark ml-5 float-right pr-2">セット</span><span class="h4 text-dark float-right mr-4">{{$aero->set}}</span>
			    	</div>
			    	<div class="bg-warning">
			    		<span class="h5 text-dark pl-2">メモ</a>
			    		<span class="h4 text-dark float-right pr-2">{{$aero->memo}}</span>
			    	</div>
			    </div>
		    </div>
		    @endforeach
		</div>
		<div class="bg-warning text-right mt-3">
	        <a href="/homes" class="btn btn-dark text-warning">Home</a>
	    </div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</div>
@endsection