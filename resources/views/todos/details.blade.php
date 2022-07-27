@extends('layouts.app')

@section('title')
Details
@endsection

@section('content')
<div class="container" style="color: #FFFFFF;">
    <div class="row justify-content-center ">
        <div class="col-md-10">
            <div class="card text-center" style="background-color: #262626;  ">
                <div style="background-color: #262626; margin:1%">
                    <h2 style=" border-radius: 5px;float: left;  padding:0.75%; color: #262626; background-color: #FFFFFF;  ">Note: {{$todo->title}}</h2>
                    <a class="btn btn-outline-light btn-lg px-5" style="float: right; margin-right:10px" href="{{ URL::to('delete', [$todo->id, 'home'])}}"> <i class="fa fa-trash"> Remove</i></a>
                    <a class="btn btn-outline-light btn-lg px-5" style="float: right; margin-right:20px" href="{{ URL::to('edit', $todo->id)}}"> <i class="fas fa-highlighter"> Edit</i></a>
                </div>
                <div class="card-body" style="background-color: #262626;">
                    <h5>{{$todo->starts_at}}</h5>

                    <p class="card-text" style=" border: 1px solid #FFFF; padding: 2%">{{$todo->content}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection