@extends('layouts.app')

@section('content')
<div class="p-3 mb-2 bg-warning text-dark">
    <div class="container">
    	<div class="form-group">
    	    <div class="row justify-content-center">
	            <h1>My Workout</h1>
	        </div>
	    </div>
	    <div>
	        <a href="/menus" class="btn btn-dark btn-lg btn-block text-warning mt-3">トレーニングを記録</a>
        </div>
        <div>
            <a href="/records/search" class="btn btn-dark btn-lg btn-block text-warning mt-3">トレーニング履歴確認</a>
        </div>
        <div>
            <a href="/weights" class="btn btn-dark btn-lg btn-block text-warning mt-3">体重を記録</a>
        </div>
	</div> 
</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</div>
@endsection