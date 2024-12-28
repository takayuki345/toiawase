@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<div class="contact__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                お名前&nbsp;<span class="form__group-title--red">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content-name-inner">
                    <div class="form__input-text">
                        <input type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name',$contact['first_name']) }}" />
                    </div>
                    <div class="form__error">
                        @error('first_name')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="form__group-content-name-inner">
                    <div class="form__input-text">
                        <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name', $contact['last_name']) }}" />
                    </div>
                    <div class="form__error">
                        @error('last_name')
                        {{ $message }}
                        @enderror
                    </div>
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
                        @foreach ($genders as $gender)
                        <input type="radio" id="{{ $gender['id'] }}" name="gender_id" value="{{ $gender['id'] }}" @if(old('gender_id', $contact['gender_id']) == $gender['id']) checked @endif/>
                        <label for="{{ $gender['id'] }}">{{ $gender['name'] }}</label>
                        @endforeach
                    </div>
                    <div class="form__error">
                        @error('gender_id')
                        {{ $message }}
                        @enderror
                    </div>
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
                        <input type="text" name="email" placeholder="例:test@example.com" value="{{ old('email', $contact['email']) }}" />
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                電話番号&nbsp;<span class="form__group-title--red">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content-inner">
                    <div class="form__group-content-tel-inner">
                        <div class="form__input-tel">
                            <input type="text" name="tel_1" placeholder="080" value="{{ old('tel_1', $contact['tel_1']) }}" />
                        </div>
                            -
                        <div class="form__input-tel">
                            <input type="text" name="tel_2" placeholder="1234" value="{{ old('tel_2', $contact['tel_2']) }}" />
                        </div>
                            -
                        <div class="form__input-tel">
                            <input type="text" name="tel_3" placeholder="5678" value="{{  old('tel_3', $contact['tel_3'])}}" />
                        </div>
                    </div>
                    <div class="form__error">
                        @if ($errors->has('tel_1'))
                        {{ $errors->first('tel_1') }}
                        @elseif ($errors->has('tel_2'))
                        {{ $errors->first('tel_2') }}
                        @elseif ($errors->has('tel_3'))
                        {{ $errors->first('tel_3') }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                住所&nbsp;<span class="form__group-title--red">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__group-content-inner">
                    <div class="form__input-text">
                        <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address', $contact['address']) }}">
                    </div>
                    <div class="form__error">
                        @error('address')
                        {{ $message }}
                        @enderror
                    </div>
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
                        <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building', $contact['building']) }}">
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
                        <select name="category_id">
                            <option value="">選択してください</option>
                            <hr>
                            @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}" @if(old('category_id', $contact['category_id']) == $category['id']) selected @endif>{{ $category['content'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form__error">
                        @error('category_id')
                        {{ $message }}
                        @enderror
                    </div>
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
                        <textarea name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail', $contact['detail']) }}</textarea>
                    </div>
                    <div class="form__error">
                        @error('detail')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form__button">
            <button type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection
