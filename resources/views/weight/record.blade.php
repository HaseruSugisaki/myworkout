@extends('layouts.app')

@section('content')
<div class="p-3 mb-2 bg-warning text-dark">
    <div class="container">
    	<div class="form-group">
    	    <div class="row justify-content-center">
	            <h1>My Workout</h1>
	        </div>
	    </div>
	    @foreach($weights as $weight)
	    <div class="bg-dark">
    	    <div class="row border border-dark bg-warning">
    	        <h4 class="col-md-12">{{$weight->day}}</h4>
    			<div class="col-md-3">
    				<label>体重</label>
    			    <p class="border border-warning bg-dark text-warning rounded">{{$weight->weight}} kg</p>
    			</div>
    			<div class="col-md-3">
    			    <label>体脂肪率</label>
    			    <p class="border border-warning bg-dark text-warning rounded">{{$weight->fatpercentage}} %</p>
    			</div>
    			<div class="col-md-3">
    				<label>体脂肪量</label>
    			    <p class="border border-warning bg-dark text-warning rounded">{{$weight->fatmass}} kg</p>
    			</div>
    			<div class="col-md-3">
    			    <label>筋肉量</label>
    			    <p class="border border-warning bg-dark text-warning rounded">{{$weight->musclemass}} kg</p>
    			</div>
    			<div class="col-md-3">
    				<label>除脂肪体重</label>
    			    <p class="border border-warning bg-dark text-warning rounded">{{$weight->leanbodymass}} kg</p>
    			</div>
    			<div class="col-md-3">
    			    <label>BMI</label>
    			    <p class="border border-warning bg-dark text-warning rounded">{{$weight->bmi}}</p>
    			</div>
    			<div class="col-md-3">
    				<label>ウエスト</label>
    			    <p class="border border-warning bg-dark text-warning rounded">{{$weight->west}} cm</p>
    			</div>
    	    </div>
    	</div>
	    @endforeach
	    <div class="bg-warning text-right mt-3">
	        <a href="/weights" class="btn btn-dark text-warning">Back</a>
	    </div>
	    <div class="bg-warning text-right mt-3">
	        <a href="/homes" class="btn btn-dark text-warning">Home</a>
	    </div>
	</div>
	<script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
</div>
@endsection