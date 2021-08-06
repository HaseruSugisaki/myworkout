@extends('layouts.app')

@section('content')
<div class="p-3 mb-2 bg-warning text-dark">
    <div class="container">
    	<div class="form-group">
    	    <div class="row justify-content-center">
	            <h1>My Workout</h1>
	        </div>
	    </div>
		<div class="form-group">
	    	<div class="row justify-content-center">
	    		<h1 class="bg-dark text-warning mt-2 p-2 rounded">部位別履歴</h1>
	    	</div>
	    	<div>
	        	<form action="/records/part" method="get">
	        		<select name="part">
	            		<option @if($part == '胸') selected @endif>胸</option>
		                <option @if($part == '背中') selected @endif>背中</option>
		                <option @if($part == '腕') selected @endif>腕</option>
		                <option @if($part == '肩') selected @endif>肩</option>
		                <option @if($part == '腹筋') selected @endif>腹筋</option>
		                <option @if($part == '脚') selected @endif>脚</option>
		                <option @if($part == '有酸素運動') selected @endif>有酸素運動</option>
	            	</select>
	            	<input type="submit" value="検索">
	            </form>
	        </div>
	        <div>
	        	<a href="/records/search" class="btn btn-dark text-warning">履歴確認画面に戻る</a>
	    	</div>
	        <div>
	        	<div>
	        		<h2 class="text-warning bg-dark pl-2 rounded mt-2">トレーニング日</h2>
	        	</div>
	            @foreach($records as $re)
			    <div class="card bg-dark">
				    <div>
				    	<h3 class="text-warning pl-2">{{$re->day}}</h3>
				    </div>
				</div>
				@endforeach
	        </div>
	        <div class="bg-warning text-right mt-3">
		        <a href="/records/search" class="btn btn-dark text-warning">Back</a>
		    </div>
		</div> 
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</div>
@endsection