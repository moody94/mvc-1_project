@guest

<div class="container h-100 d-flex align-items-center justify-content-center">
    <div class="card col-8" style="background-color: #262626;  width: 800px">
        <h2 style="color: #FFFF; text-align:center">TODO List</h2>
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <div class="container h-100 d-flex align-items-center justify-content-center">
                <img style="width: 400px;" src="https://cdn-icons-png.flaticon.com/512/1441/1441035.png" alt="">
            </div>
            <h4 style="color: #FFFF; text-align:center; width: 100%">Create Your account Or Log In To Use The App</h4>
            <li class="nav-item" role="presentation">
                <a class="btn btn-outline-light btn-lg px-5" id="tab-login" href="{{ route('login') }}" role="tab" aria-controls="pills-login" aria-selected="true">{{ __('Login') }}</a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="btn btn-outline-light btn-lg px-5" id="tab-register" data-mdb-toggle="pill" href="{{ route('register') }}" role="tab" aria-controls="pills-register" aria-selected="false">{{ __('Register') }}</a>
            </li>
    </div>
</div>
@else
<div class="container " style="color: #FFFFFF; height:100%">
    <div class="row justify-content-center ">
        <div class="col-md-10">
            <div class="card " style="background-color: #262626;">
                <div class="card-header text-center">
                    <h3>New Note</h3>
                </div>
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif
                <form action="store-data" method="post" class="p-4">
                    @csrf


                    <div class="form-outline form-white mb-4">
                        <label for="title" class="form-label">Name</label>
                        <input type="text" placeholder="Enter A Note Name" class="form-control form-control-lg" style="color: #FFFFFF; background-color: #262626;" name="title" required maxlength="255">
                    </div>
                    <label for="content">Color</label>
                    <input type="text" value="#262626" class="form-control form-control-lg" style="color: #FFFFFF; background-color: #262626;" name="color" />

                    <div class="form-group m-">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control form-control-lg" style="color: #FFFFFF; background-color: #262626;" name="date" required>
                    </div>
                    <div class="form-group m-">
                        <label for="content">Description</label>
                        <textarea placeholder="Add Description" class="form-control form-control-lg" style="color: #FFFFFF; background-color: #262626;" name="content" rows="3" required></textarea>
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
    // $('.colorpicker').colorpicker();
</script>































@endguest