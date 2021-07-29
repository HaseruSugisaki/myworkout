@extends('layouts.app')

@section('content')
<div class="p-3 mb-2 bg-warning text-dark">
    <div class="container">
    	<div class="form-group">
    	    <div class="row justify-content-center">
	            <h1>My Workout</h1>
	        </div>
	    </div>
	    <div class="text-right mb-3">
	        <a href="/menu/create" class="btn btn-dark text-warning">Edit</a>
	    </div>
	    <div class="card">
            <div class="card-header text-warning bg-dark text-left">
                胸
                <a class="btn btn-warning float-right" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">↓</a>
            </div>
            <div id="collapseExample1" class="text-dark bg-warning border border-dark collapse">
                <ul class="list-group list-group-flush text-dark bg-warning">
                    @foreach($menu as $m)
                        @if($m->part == '胸')
                        <li class="list-group-item text-dark bg-warning text-left border border-dark">{{$m->name}}<a href="/menus/delete/{{$m->id}}" class="btn btn-dark text-warning float-right ml-3">削除</a><a href="/creates/{{$m->id}}" class="btn btn-dark text-warning float-right">記録</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="card-header text-warning bg-dark text-left" >
                背中
                <a class="btn btn-warning float-right" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">↓</a>
            </div>
            <div id="collapseExample2" class="text-dark bg-warning border border-dark collapse">
                <ul class="list-group list-group-flush text-dark bg-warning">
                    @foreach($menu as $m)
                        @if($m->part == '背中')
                        <li class="list-group-item text-dark bg-warning text-left border border-dark">{{$m->name}}<a href="/menus/delete/{{$m->id}}" class="btn btn-dark text-warning float-right ml-3">―</a><a href="/creates/{{$m->id}}" class="btn btn-dark text-warning float-right">記録</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="card-header text-warning bg-dark text-left" >
                腕
                <a class="btn btn-warning float-right" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">↓</a>
            </div>
            <div id="collapseExample3" class="text-dark bg-warning border border-dark collapse">
                <ul class="list-group list-group-flush text-dark bg-warning">
                    @foreach($menu as $m)
                        @if($m->part == '腕')
                        <li class="list-group-item text-dark bg-warning text-left border border-dark">{{$m->name}}<a href="/menus/delete/{{$m->id}}" class="btn btn-dark text-warning float-right ml-3">―</a><a href="/creates/{{$m->id}}" class="btn btn-dark text-warning float-right">記録</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="card-header text-warning bg-dark text-left" >
                肩
                <a class="btn btn-warning float-right" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">↓</a>
            </div>
            <div id="collapseExample4" class="text-dark bg-warning border border-dark collapse">
                <ul class="list-group list-group-flush text-dark bg-warning">
                    @foreach($menu as $m)
                        @if($m->part == '肩')
                        <li class="list-group-item text-dark bg-warning text-left border border-dark">{{$m->name}}<a href="/menus/delete/{{$m->id}}" class="btn btn-dark text-warning float-right ml-3">―</a><a href="/creates/{{$m->id}}" class="btn btn-dark text-warning float-right">記録</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="card-header text-warning bg-dark text-left" >
                腹筋
                <a class="btn btn-warning float-right" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">↓</a>
            </div>
            <div id="collapseExample5" class="text-dark bg-warning border border-dark collapse">
                <ul class="list-group list-group-flush text-dark bg-warning">
                    @foreach($menu as $m)
                        @if($m->part == '腹筋')
                        <li class="list-group-item text-dark bg-warning text-left border border-dark">{{$m->name}}<a href="/menus/delete/{{$m->id}}" class="btn btn-dark text-warning float-right ml-3">―</a><a href="/creates/{{$m->id}}" class="btn btn-dark text-warning float-right">記録</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="card-header text-warning bg-dark text-left" >
                脚
                <a class="btn btn-warning float-right" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">↓</a>
            </div>
            <div id="collapseExample6" class="text-dark bg-warning border border-dark collapse">
                <ul class="list-group list-group-flush text-dark bg-warning">
                    @foreach($menu as $m)
                        @if($m->part == '脚')
                        <li class="list-group-item text-dark bg-warning text-left border border-dark">{{$m->name}}<a href="/menus/delete/{{$m->id}}" class="btn btn-dark text-warning float-right ml-3">―</a><a href="/creates/{{$m->id}}" class="btn btn-dark text-warning float-right">記録</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="card-header text-warning bg-dark text-left" >
                有酸素運動
                <a class="btn btn-warning float-right" data-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample">↓</a>
            </div>
            <div id="collapseExample7" class="text-dark bg-warning border border-dark collapse">
                <ul class="list-group list-group-flush text-dark bg-warning">
                    @foreach($menu as $m)
                        @if($m->part == '有酸素運動')
                        <li class="list-group-item text-dark bg-warning text-left border border-dark">{{$m->name}}<a href="/menus/delete/{{$m->id}}" class="btn btn-dark text-warning float-right ml-3">―</a><a href="/aerobics/{{$m->id}}" class="btn btn-dark text-warning float-right">記録</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="bg-warning text-right mt-3">
	        <a href="/homes" class="btn btn-dark text-warning">Home</a>
	    </div>
	</div>
</div>
@endsection