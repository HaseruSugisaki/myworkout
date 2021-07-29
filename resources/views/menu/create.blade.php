@extends('layouts.app')

@section('content')
<div class="p-3 mb-2 bg-warning text-dark">
    <div class="container">
    	<div class="form-group">
    	    <div class="row justify-content-center">
	            <h1>My Workout</h1>
	        </div>
	    </div>
	    <div class="card" class="border border-dark">
	        <form action="/menus/store" method="post">
		    @csrf
		    <div class="form-group text-warning bg-dark m-0">
                <label for="part ">部位</label>
                <select class="form-control" name="part" id="part">
                <option>胸</option>
                <option>背中</option>
                <option>腕</option>
                <option>肩</option>
                <option>腹筋</option>
                <option>脚</option>
                <option>有酸素運動</option>
                </select>
            </div>
            <div class="form-group text-warning bg-dark m-0">
                <label for="name">種目名</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="text-warning bg-dark text-right">
                <input class="btn btn-warning" type="submit" value="登録">
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
        <div class="bg-warning text-right mt-3">
	        <a href="/menus" class="btn btn-dark text-warning">Back</a>
	    </div>
	</div>
</div>
@endsection