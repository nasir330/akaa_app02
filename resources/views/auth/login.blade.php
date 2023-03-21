<x-header />

<body class="main-body p-4">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 p-4 login-form">
            <div class="logo mb-3 pb-4">
                <img class="img-fluid" src="{{asset('Assets/img/logo.png')}}" alt="User Image">
                @if(session()->has('error'))
                <div class="errorMsg text-center text-danger p-1">
                    {{session('error')}}
                </div>
                @endif
                <x-input-error :messages="$errors->get('email')" style="list-style:none;"
                    class="text-danger text-center" />
                <x-input-error :messages="$errors->get('password')" style="list-style:none;"
                    class="text-danger text-center" />
            </div>

            @if(session()->has('data'))
            <div class="lockscreen-item">
                <div class="lockscreen-image">
                    <img style="color:#fff; width:70px;height:70px;" src="{{asset('')}}{{session('data.photo')}}"
                        alt="User Image">
                </div>
                <form class="lockscreen-credentials" action="{{route('login')}}" method="post">
                    @csrf
                    <div class="input-group">
                        <input type="hidden" name="email" class="form-control" value="{{session('data.email')}}">
                        <input style="text-align:center; margin-left:20px;" type="password" name="password"
                            class="form-control" placeholder="Enter Password">
                        <div class="input-group-append">
                            <button type="submit" class="btn">
                                <i class="fas fa-arrow-right text-muted"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            @else
            <div class="lockscreen-item">
                <div class="lockscreen-image">                   
                <img class="img-fluid" src="{{asset('Assets/img/email.png')}}" alt="User Image">
                </div>
                <form class="lockscreen-credentials" action="{{route('authChecker')}}" method="post">
                    @csrf
                    <div class="input-group">
                        <input style="text-align:right; margin-left:20px;" type="email" name="email"
                            class="form-control" placeholder="Enter email address">
                        <div class="input-group-append">
                            <button type="submit" class="btn">
                                <i class="fas fa-arrow-right text-muted"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            @endif
        </div>
    </div>
    <x-footer />