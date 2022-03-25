@extends('layouts.login')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="bck-copy">

            <div class="login">
                <div class="bck-login">
                    <div class="dv1">
                        <label class="des-inp" for="phone">البريد الالكتروني</label>
                        <input class="input-login" style="text-align: right" type="email" placeholder="@"
                           value="admin@admin.com" name="email" required="">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="dv2">
                        <label class="des-inp">كلمة المرور</label>
                        <input class="input-login" style="text-align: right" type="password" value="password" name="password"
                            placeholder="**********">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="submit-login">دخول</button>
                </div>
                <div class="bck-login-b">
                    <h1 class="heading2" style="color: #fff"><span class="text-span" style="color: #fff">L</span>OGIN</h1>
                </div>
            </div>
        </div>
    </form>
@endsection
