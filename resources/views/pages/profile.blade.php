@extends('template.app')

@section('content')
<style>
    .profilepage {
        width: 100%;
        display: flex;
        align-items: center;
        height: 100%;
    }
    .profilepage-inner{
        width: 100%;
        height: 100%;
    }
    .forms-log-reg{
        width: 100%;
        height: 100%;   
        display: flex;
        justify-content: space-between;
        gap: 50px;
    }
    .login-form, .reg-form{
        width: 100%;
        height: 100%;
        border-radius: 10px;
        padding: 40px 20px;
        justify-content: center;
        align-items: center;
        display:flex;
    }
    .title{
        font-size: 28px
    }
    input{
        border: 1px solid #1c1d2230 ;
        border-radius: 5px;
        padding: 10px 15px;
        font-size: 14px;
    }

    button{
        cursor: pointer;
        padding: 5px;
        font-size: 16px;
        background-color: #EDF2F4;
        border: 1px solid #1c1d2230;
        transition: 0.1s linear;
    }
    button:hover{
        background-color: #d5d8da;
    }
    .form-inner{
        height: 100%;
        display:flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }
    .log-reg-line{
        width: 1px;
        height: 100%;
        background-color: #1c1d2230;
    }
</style>
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