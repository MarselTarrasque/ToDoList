@extends('template.app')

@section('content')
<style>
    .profilepage {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .forms-log-reg{
        width: 100%;
        display: flex;
    }
</style>
<div class="profilepage">
    <div class="profilepage-inner">
        @if (Auth::guest())
        <div class="forms-log-reg">
            <div class="login-form">

            </div>
            <div class="reg-form">
                
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