@extends("Layout::frontend.app")

@section("content")
    <div class="page-section mb-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                    <!-- Login Form s-->
                    <form
                        method="POST"
                        action="{{ route('login') }}">
                        @csrf

                        @if(session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif

                        <div class="login-form">
                            <h4 class="login-title">Đăng nhập</h4>
                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Email*</label>
                                    <input
                                        class="mb-0"
                                        type="email"
                                        name="email"
                                        placeholder="Email..."
                                        required
                                    >
                                    @error("email")
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Mật khẩu</label>
                                    <input
                                        class="mb-0"
                                        type="password"
                                        name="password"
                                        placeholder="Mật khẩu..."
                                        required
                                    >
                                    @error("password")
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                        <input
                                            type="checkbox"
                                            name="remember"
                                            id="remember_me">
                                        <label for="remember_me">Lưu đăng nhập</label>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                    <a href="{{ route('password.request') }}"> Quên mật khẩu?</a>
                                </div>
                                <div class="col-md-12">
                                    <button
                                        type="submit"
                                        class="register-button mt-0 mr-3">Đăng nhập
                                    </button>
                                    <a
                                        href="{{route("register")}}"
                                        class="btn register-button bg-danger mt-0 d-block">Đăng ký
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
