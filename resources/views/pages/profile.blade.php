@extends('template.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/profile.css') }}">
    <div class="profilepage">
        <div class="profilepage-inner">
            @if (Auth::guest())
                <div class="auth-container" id="auth-container">
                    <div class="form-container sign-up-container">
                        <form action="#">
                            <h2 class="title">Регистрация</h2>
                            <div class="form-inputs">
                                <p class="subtitle">Логин</p>
                                <input type="text" name="" id="" class="login">
                                <p class="subtitle">E-mail</p>
                                <input type="text" name="" id="" class="email">
                                <p class="subtitle">Пароль</p>
                                <input type="password" name="" id="" class="password">
                                <p class="subtitle">Повторите пароль</p>
                                <input type="password" name="" id="" class="password-repeat">
                                <button>Зарегистрироваться</button>
                            </div>
                        </form>
                    </div>
                    <div class="form-container sign-in-container">
                        <form action="#">
                            <h2 class="title">Вход</h2>
                            <div class="form-inputs">
                                <p class="subtitle">E-mail</p>
                                <input type="text" name="" id="" class="email">
                                <p class="subtitle">Пароль</p>
                                <input type="password" name="" id="" class="password">
                                <button>Войти</button>
                            </div>
                        </form>
                    </div>
                    <div class="overlay-container">
                        <div class="overlay">
                            <div class="overlay-panel overlay-left">
                                <h2 class="title">Добро пожаловать!</h2>
                                <p>Чтобы оставаться на связи с нами, пожалуйста, войдите, указав свои личные данные.</p>
                                <button class="ghost" id="signIn">Войти</button>
                            </div>
                            <div class="overlay-panel overlay-right">
                                <h2 class="title">Привет, друг!</h2>
                                <p>Введите свои личные данные и начните работать вместе с нами.</p>
                                <button class="ghost" id="signUp">Зарегистрироваться</button>
                            </div>
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
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const authContainer = document.getElementById('auth-container');

        signUpButton.addEventListener('click', () => {
            authContainer.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            authContainer.classList.remove("right-panel-active");
        });
    </script>
@endsection
