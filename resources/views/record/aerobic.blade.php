@extends('layouts.app')

@section('content')
<div class="p-3 mb-2 bg-warning text-dark">
    <div class="container">
    	<div class="form-group">
    	    <div class="row justify-content-center">
	            <h1>My Workout</h1>
	        </div>
	    </div>
	    <form action="/records/aero" method="post" class="row g-3 border border-dark text-warning bg-dark">
	    @csrf
	    	<div class="col-md-6">
	    		<label for="name" class="form-label ">種目名</label>
	    		<h4>{{$menu->name}}</h4>
	    		<input type="hidden" id="name" name="name" value="{{$menu->name}}">
	    		<input type="hidden" id="part" name="part" value="{{$menu->part}}">
	    	</div>
	    	<div class="col-md-6 mt-4">
		    	<label for="trained_at" data-target-input="nearest"></lavel>
	                <input type="datetime-local" class="form-control" id="trained_at" name="trained_at">
	        </div>
			<div class="col-md-6">
			    <label for="times" class="form-label">時間</label>
			    <input type="number" class="form-control" id="times" name="times" placeholder="分">
			</div>
			<div class="col-md-6">
			    <label for="set" class="form-label ">セット</label>
			    <input type="number" class="form-control mb-4" id="set" name="set">
			</div>
			<div class="col-md-12">
			    <label for="memo" class="form-label ">メモ</label>
			    <input type="text" class="form-control mb-4" id="memo" name="memo">
			</div>
			<div class="col-12 text-center mb-4">
		    	<input class="btn btn-warning mt-3 text-dark" type="submit" value="記録">
		    </div>
		</form>
		@if ($errors->any())
	    <div class="alert alert-danger mb-0">
	    	<ul>
	        	@foreach ($errors->all() as $error)
	            	<li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	    @endif
	</div>
	<script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
</div>
@endsection