@extends('layouts.app')

@section('content')
<div class="p-3 mb-2 bg-warning text-dark">
    <div class="container">
    	<div class="form-group">
    	    <div class="row justify-content-center mb-2">
	            <h1>My Workout</h1>
	        </div>
	        <div class="bg-warning mt-3 mb-2">
    	        <a href="/weights/record" class="btn btn-dark text-warning">履歴確認へ</a>
    	    </div>
    	    <form action="/weight/store" method="post">
    	        @csrf
    	        <div>
    		    	<label for="day" data-target-input="nearest"></lavel>
    	                <input type="datetime-local" class="form-control" id="day" name="day">
    	        </div>
                <div class="row mb-3">
                    <label for="weight" class="col-sm-2 col-form-label">体重(kg)</label>
                    <div class="col-sm-10">
                        <input type="number" step="0.01" class="form-control" id="weight" name="weight" placeholder="kg">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="fatpercentage" class="col-sm-2 col-form-label">体脂肪率(％)</label>
                    <div class="col-sm-10">
                        <input type="number" step="0.01" class="form-control" id="fatpercentage" name="fatpercentage" placeholder="%">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="fatmass" class="col-sm-2 col-form-label">体脂肪量(kg)</label>
                    <div class="col-sm-10">
                        <input type="number" step="0.01" class="form-control" id="fatmass" name="fatmass" placeholder="kg">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="musclemass" class="col-sm-2 col-form-label">筋肉量(kg)</label>
                    <div class="col-sm-10">
                        <input type="number" step="0.01" class="form-control" id="musclemass" name="musclemass" placeholder="kg">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="leanbodymass" class="col-sm-2 col-form-label">除脂肪体重(kg)</label>
                    <div class="col-sm-10">
                        <input type="number" step="0.01" class="form-control" id="leanbodymass" name="leanbodymass" placeholder="kg">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="bmi" class="col-sm-2 col-form-label">BMI</label>
                    <div class="col-sm-10">
                        <input type="number" step="0.01" class="form-control" id="bmi" name="bmi">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="west" class="col-sm-2 col-form-label">ウエスト(cm)</label>
                    <div class="col-sm-10">
                        <input type="number" step="0.01" class="form-control" id="west" name="west" placeholder="cm">
                    </div>
                </div>
                <div class="col-12 text-center">
    		    	<input class="btn btn-dark mt-3 text-warning" type="submit" value="記録">
    		    </div>
            </form>
            <div class="bg-warning text-right mt-3">
    	        <a href="/homes" class="btn btn-dark text-warning">Home</a>
    	    </div>
        </div>
	</div>
</div>
@endsection