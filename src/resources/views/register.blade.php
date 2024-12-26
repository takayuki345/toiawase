@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('content')
<div class="register__content">
    <div class="register-form__heading">
        <h2>Register</h2>
    </div>
    <div class="register-form">
        <form action="" class="register-form__inner">
            <div class="form__group">
                <div class="form__group-title">お名前</div>
                <div class="form__group-content">
                    <div class="form__input-text">
                        <input type="text" name="email" placeholder="例: 山田　太郎" />
                    </div>
                    <div class="form__error"></div>
                </div>
            </div>
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
                <button>登録</button>
            </div>
        </form>
    </div>
</div>
@endsection
