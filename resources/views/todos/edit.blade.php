@extends('layouts.app')
@section('title')
Edit Todo
@endsection
@section('content')
<div class="container " style="color: #FFFFFF; height:100%">
    <div class="row justify-content-center ">
        <div class="col-md-10">
            <div class="card " style="background-color: #262626;">
                <div class="card-header text-center">
                    <b>Edit Note</b>
                </div>
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif
                <form action="update" method="post" class="p-4">
                    @csrf

                    <div class="form-outline form-white mb-4">
                        <input type="number" hidden class="form-control" name="id" value="{{ $todo->id }}">
                    </div>
                    <div class="form-outline form-white mb-4">
                        <label for="title" class="form-label">Name</label>
                        <input type="text" class="form-control form-control-lg" style="color: #FFFFFF; background-color: #262626;" name="title" value="{{ $todo->title }}" maxlength="255">
                    </div>
                    <div class="form-outline form-white mb-4">
                        <label for="date">Date</label>
                        <input type="date" class="form-control form-control-lg" style="color: #FFFFFF; background-color: #262626;" name="date" value="{{ $todo->starts_at }}">
                    </div>
                    <div class=" form-white mb-4"> <label for="name">Color</label>
                        <input type="text" class="form-control form-control-lg" style="color: #FFFFFF; background-color: #262626;" value="{{ $todo->color }}" class="form-control" name="color" maxlength="255" />
                    </div>
                    <div class="form-outline form-white mb-4">
                        <label for="content">Description</label>
                        <textarea class="form-control form-control-lg" style="color: #FFFFFF; background-color: #262626;" name="content" rows="3" required>{{ $todo->content }}</textarea>
                    </div>
                    <div class="form-group m-3 text-center">
                        <input type="submit" class="btn btn-outline-light btn-lg px-5" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.colorpicker').colorpicker();
</script>
@endsection