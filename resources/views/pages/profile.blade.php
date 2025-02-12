@extends('template.app')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/profile.css') }}">
<div class="profilepage">
    <div class="profilepage-inner">
        @if (Auth::guest())
        <div class="forms-log-reg">
            <div class="login-form">
                <div class="form-inner">
                    <h2 class="title">Вход</h2>
                    <p class="subtitle">E-mail</p>
                    <input type="text" name="" id="" class="email">
                    <p class="subtitle">Пароль</p>
                    <input type="password" name="" id="" class="password">
                    <button>Войти</button>
                </div>
            </div>
            <div class="log-reg-line"></div>
            <div class="reg-form">
                <div class="form-inner">
                    <h2 class="title">Регистраця</h2>
                    <p class="subtitle">Логин</p>
                    <input type="text" name="" id="" class="login">
                    <p class="subtitle">E-mail</p>
                    <input type="text" name="" id="" class="email">
                    <p class="subtitle">Пароль</p>
                    <input type="password" name="" id="" class="password">
                    <p class="subtitle">Повторите пароль</p>
                    <input type="password" name="" id="" class="password-repeat">
                    <button>Зарегестрироваться</button>
                </div>
            </div>
        </div>
    @else
        <div class="">
            <h1>Профиль</h1>
        </div>
    @endif
    </div>
</div>

@endsection