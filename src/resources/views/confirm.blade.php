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
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                        &emsp;
                        <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="hidden" name="gender_id" value="{{ $contact['gender_id'] }}" />
                        {{ $params['gender']['name'] }}
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                        <input type="text" name="tel_1" value="{{ $contact['tel_1'] }}" readonly />
                        <input type="text" name="tel_2" value="{{ $contact['tel_2'] }}" readonly />
                        <input type="text" name="tel_3" value="{{ $contact['tel_3'] }}" readonly />
                        <input type="hidden" name="tel" value="<?php echo $contact['tel_1'] . $contact['tel_2'] . $contact['tel_3'];?>" />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類</th>
                    <td class="confirm-table__text">
                        <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}" />
                        {{ $params['category']['content'] }}
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__text">
                        <textarea name="detail" readonly>{{ $contact['detail'] }}</textarea>
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <div class="form__submit-save">
                <input type="submit" value="送信" formaction="/thanks" formmethod="post" />
            </div>
            <div class="form__button-modify">
                <button type="submit" formaction="/" formmethod="post">修正</button>
            </div>
        </div>
    </form>
</div>
@endsection
