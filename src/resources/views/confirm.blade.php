@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm-form__heading">
        <h2>Confirm</h2>
    </div>
    <form class="form">
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">山田　太郎</hd>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">男性</hd>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">test@example.com</hd>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">08012345678</hd>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">東京都渋谷区千駄ヶ谷1-2-3</hd>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">千駄ヶ谷マンション101</hd>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類</th>
                    <td class="confirm-table__text">商品の交換について</hd>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__text">届いた商品が注文した商品ではありませんでした。<br>商品の取り替えをお願いします。</hd>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <div class="form__submit-save">
                <input type="submit" value="送信" formaction="/" formmethod="post" />
            </div>
            <div class="form__submit-modify">
                <input type="submit" value="修正" formaction="/" formmethod="post" />
            </div>
        </div>
    </form>
</div>
@endsection
