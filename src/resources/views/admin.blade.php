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
            <input class="search-form__item-input" type="text" name="keyword" placeholder="名前やメールアドレスを入力してください" value="{{ $searches['keyword'] }}" />
            <select class="search-form__item-select" name="gender_id">
                <option value="">性別</option>
                <hr>
                @foreach ($genders as $gender)
                <option value="{{ $gender['id'] }}" @if($gender['id'] == $searches['gender_id']) selected @endif>{{ $gender['name'] }}</option>
                @endforeach
            </select>
            <select class="search-form__item-select" name="category_id">
                <option value="">お問い合わせの種類</option>
                <hr>
                @foreach ($categories as $category)
                <option value="{{ $category['id'] }}" @if($category['id'] == $searches['category_id']) selected @endif>{{ $category['content'] }}</option>
                @endforeach
            </select>
            <input class="search-form__item-input" type="date" name="date" value="{{ $searches['date'] }}" />
            <button class="search-form__button-search" type="submit" formaction="/admin/search" formmethod="get">検索</button>
            <button class="search-form__button-reset" type="submit" formaction="/admin" formmethod="get">リセット</button>
        </form>
    </div>
    <div class="search-option">
        <form action="">
            <button class="search-option__button-export">エクスポート</button>
        </form>
        <div class="pagenation">{{ $contacts->links() }}</div>
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
            @foreach ($contacts as $contact)
            <tr class="search-table__row">
                <td class="search-table__item">{{ $contact['first_name'] }}　{{ $contact['last_name'] }}</td>
                <td class="search-table__item">{{ $contact['gender']['name'] }}</td>
                <td class="search-table__item">{{ $contact['email'] }}</td>
                <td class="search-table__item">{{ $contact['category']['content'] }}</td>
                <td class="search-table__item">
                    <form action="">
                        <input type="hidden">
                        <button class="search-table__item-button">詳細</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
