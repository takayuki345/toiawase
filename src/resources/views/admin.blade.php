@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endsection

@section('content')
<div class="admin__content">
    <div class="admin-form__heading">
        <h2>Admin</h2>
    </div>
    <div class="search-form">
        <form class="search-form__inner">
            <input class="search-form__item-input" type="text" name="keyword" value="" placeholder="名前やメールアドレスを入力してください" />
            <select class="search-form__item-select" name="gender">
                <option value="">性別</option>
                <option value="1">男性</option>
                <option value="2">女性</option>
                <option value="3">その他</option>
            </select>
            <select class="search-form__item-select" name="category">
                <option value="">お問い合わせの種類</option>
                <option value="1">商品の交換について</option>
            </select>
            <input class="search-form__item-input" type="date" name="date" value="" />
            <button class="search-form__button-search" type="submit" formaction="" formmethod="">検索</button>
            <button class="search-form__button-reset" type="submit" formaction="" formmethod="">リセット</button>
        </form>
    </div>
    <div class="search-option">
        <form action="">
            <button class="search-option__button-export">エクスポート</button>
        </form>
        <div class="pagenation">ページネーション</div>
    </div>
    <div class="search-table">
        <table class="search-table__inner">
            <tr class="search-table__row">
                <th class="search-table__header">お名前</th>
                <th class="search-table__header">性別</th>
                <th class="search-table__header">メールアドレス</th>
                <th class="search-table__header">お問い合わせの種類</th>
                <th class="search-table__header"></th>
            </tr>
            <tr class="search-table__row">
                <td class="search-table__item">山田　太郎</td>
                <td class="search-table__item">男性</td>
                <td class="search-table__item">test@example.com</td>
                <td class="search-table__item">商品の交換について</td>
                <td class="search-table__item">
                    <form action="">
                        <input type="hidden">
                        <button class="search-table__item-button">詳細</button>
                    </form>
                </td>
            </tr>
            <tr class="search-table__row">
                <td class="search-table__item">山田　太郎</td>
                <td class="search-table__item">男性</td>
                <td class="search-table__item">test@example.com</td>
                <td class="search-table__item">商品の交換について</td>
                <td class="search-table__item">
                    <form action="">
                        <input type="hidden">
                        <button class="search-table__item-button">詳細</button>
                    </form>
                </td>
            </tr>
            <tr class="search-table__row">
                <td class="search-table__item">山田　太郎</td>
                <td class="search-table__item">男性</td>
                <td class="search-table__item">test@example.com</td>
                <td class="search-table__item">商品の交換について</td>
                <td class="search-table__item">
                    <form action="">
                        <input type="hidden">
                        <button class="search-table__item-button">詳細</button>
                    </form>
                </td>
            </tr>
            <tr class="search-table__row">
                <td class="search-table__item">山田　太郎</td>
                <td class="search-table__item">男性</td>
                <td class="search-table__item">test@example.com</td>
                <td class="search-table__item">商品の交換について</td>
                <td class="search-table__item">
                    <form action="">
                        <input type="hidden">
                        <button class="search-table__item-button">詳細</button>
                    </form>
                </td>
            </tr>
            <tr class="search-table__row">
                <td class="search-table__item">山田　太郎</td>
                <td class="search-table__item">男性</td>
                <td class="search-table__item">test@example.com</td>
                <td class="search-table__item">商品の交換について</td>
                <td class="search-table__item">
                    <form action="">
                        <input type="hidden">
                        <button class="search-table__item-button">詳細</button>
                    </form>
                </td>
            </tr>
            <tr class="search-table__row">
                <td class="search-table__item">山田　太郎</td>
                <td class="search-table__item">男性</td>
                <td class="search-table__item">test@example.com</td>
                <td class="search-table__item">商品の交換について</td>
                <td class="search-table__item">
                    <form action="">
                        <input type="hidden">
                        <button class="search-table__item-button">詳細</button>
                    </form>
                </td>
            </tr>
            <tr class="search-table__row">
                <td class="search-table__item">山田　太郎</td>
                <td class="search-table__item">男性</td>
                <td class="search-table__item">test@example.com</td>
                <td class="search-table__item">商品の交換について</td>
                <td class="search-table__item">
                    <form action="">
                        <input type="hidden">
                        <button class="search-table__item-button">詳細</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection
