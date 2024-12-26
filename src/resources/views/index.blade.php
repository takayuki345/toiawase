@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<div class="contact__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form action="" class="form">
        <div class="form__group">
            <div class="form__group-title">
                お名前&nbsp;<span class="form__group-title--red">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content-name-inner">
                    <div class="form__input-text">
                        <input type="text" name="first_name" placeholder="例:山田" />
                    </div>
                    <div class="form__error"></div>
                </div>
                <div class="form__group-content-name-inner">
                    <div class="form__input-text">
                        <input type="text" name="last_name" placeholder="例:太郎" />
                    </div>
                    <div class="form__error"></div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                性別&nbsp;<span class="form__group-title--red">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content-inner">
                    <div class="form__input-radio">
                        <input type="radio" id="male" name="gender" value="1" checked />
                        <label for="male">男性</label>
                        <input type="radio" id="female" name="gender" value="2" />
                        <label for="female">女性</label>
                        <input type="radio" id="others" name="gender" value="3" />
                        <label for="others">その他</label>
                    </div>
                    <div class="form__error"></div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                メールアドレス&nbsp;<span class="form__group-title--red">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content-inner">
                    <div class="form__input-email">
                        <input type="email" name="email" placeholder="例:test@example.com" />
                    </div>
                    <div class="form__error"></div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                電話番号&nbsp;<span class="form__group-title--red">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content-tel-inner">
                    <div class="form__input-tel">
                        <input type="text" name="tel_1" placeholder="080" />
                    </div>
                        -
                    <div class="form__input-tel">
                        <input type="text" name="tel_2" placeholder="1234" />
                    </div>
                        -
                    <div class="form__input-tel">
                        <input type="text" name="tel_3" placeholder="5678" />
                    </div>
                </div>
                <div class="form__error"></div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                住所&nbsp;<span class="form__group-title--red">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content-inner">
                    <div class="form__input-text">
                        <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
                    </div>
                    <div class="form__error"></div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span>建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content-inner">
                    <div class="form__input-text">
                        <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101">
                    </div>
                    <div class="form__error"></div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                お問い合わせの種類&nbsp;<span class="form__group-title--red">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content-inner">
                    <div class="form__select">
                        <select name="category" id="">
                            <option value="">選択してください</option>
                            <option value="exchange">商品の交換について</option>
                            <option value="product">製品</option>
                            <option value="service">サービス</option>
                        </select>
                    </div>
                    <div class="form__error"></div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title2">
                お問い合わせ内容&nbsp;<span class="form__group-title--red">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content-inner">
                    <div class="form__textarea">
                        <textarea name="detail" id="" placeholder="お問い合わせ内容をご記載ください"></textarea>
                    </div>
                    <div class="form__error"></div>
                </div>
            </div>
        </div>
        <div class="form__button">
            <button>確認画面</button>
        </div>
    </form>
</div>
@endsection
