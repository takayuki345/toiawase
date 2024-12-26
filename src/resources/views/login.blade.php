@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection

@section('content')
<div class="login__content">
    <div class="login-form__heading">
        <h2>Login</h2>
    </div>
    <div class="login-form">
        <form action="" class="login-form__inner">
            <div class="form__group">
                <div class="form__group-title">メールアドレス</div>
                <div class="form__group-content">
                    <div class="form__input-text">
                        <input type="text" name="email" placeholder="例: test@example.com" />
                    </div>
                    <div class="form__error"></div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">パスワード</div>
                <div class="form__group-content">
                    <div class="form__input-text">
                        <input type="password" name="pass" placeholder="例: coachtech1106" />
                    </div>
                    <div class="form__error"></div>
                </div>
            </div>
            <div class="form__button">
                <button>ログイン</button>
            </div>
        </form>
    </div>
</div>
@endsection
