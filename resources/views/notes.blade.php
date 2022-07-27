@php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 4;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
@endphp
@extends('layouts.notes')

@section('title')
Create Todo
@endsection

@section('content')
<div class="container" style=" background-color: #262626; padding:2%">
    <h1 style="color: #FFFFFF; padding:4%">All The Notes</h1>
    <div class=" row">
        @if ($todos != null)
        @foreach ($todos as $todo)
        @if ($todo->author_email === $user->email)
        <div class="col-md-{{ $bootstrapColWidth }}">
            <div style=" border-radius:4px; padding:1%; background-color: #FFFFFF; box-shadow: -4px 3px  5px  rgb(197, 196, 196); margin-top:10px;">

                <div>
                    <h5 class="card-header text-center">
                        {{ substr($todo->title, 0, 20) }}
                    </h5>
                </div>
                <div class="card-body">
                    <div class="h-75">
                        <p class="card-text">
                            {{ substr(wordwrap($todo->content, 25, "\n", true), 0, 200) }}
                        </p>
                    </div>
                    <div class="text-center">
                        <br>
                        <a class="btn  btn-outline-dark btn-lg px-2" href="{{ URL::to('delete', [$todo->id, 'home'])}}"> <i class="fa fa-trash"> Remove</i></a>
                        <a class="btn  btn-outline-dark btn-lg px-2" href="{{ URL::to('edit', $todo->id)}}"> <i class="fas fa-highlighter"> Edit</i></a>

                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        @endif
    </div>
</div>
@endsection