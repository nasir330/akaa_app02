<x-header />

<body class="main-body">
    <div class="row d-flex justify-content-center">
        <form class="" action="{{route('register')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-4 p-4 login-form">
                <div class="logo mb-3 p-4">
                    <img class="img-fluid" src="{{asset('Assets/img/logo.png')}}" alt="User Image">
                </div>
                <div class="input-group mb-2">
                    <span class="input-group-text"> <i class="icon fa fa-envelope p-1"></i></span>
                    <input type="email" name="email" aria-label="email" class="form-control"
                        placeholder="Enter email address">
                </div>
                <div class="input-group mb-2">
                    <span class="input-group-text"> <i class="icon fa fa-key p-1"></i></span>
                    <input type="password" name="password" aria-label="password" class="form-control"
                        placeholder="Enter password">
                </div>
                <div class="input-group mb-2">
                    <span class="input-group-text"> <i class="icon fa fa-check p-1"></i></span>
                    <input type="password" name="password_confirmation" aria-label="password" class="form-control"
                        placeholder="Re-type password">
                </div>
                <div class="input-group mb-2">
                    <span class="input-group-text"> <i class="icon fa fa-image p-1"></i></span>
                    <input type="file" name="photo" class="form-control">
                </div>
                <div class="input-group mb-2">
                    <button class="btn form-control">Register</button>
                </div>
            </div>
        </form>

    </div>
    <x-footer />