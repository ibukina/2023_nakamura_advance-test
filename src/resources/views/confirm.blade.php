@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm-form_container">
    <div class="confirm-form_title">内容確認</div>
    <form class="confirm-form" action="/contacts" method="post">
        @csrf
        <table class="confirm-form_table">
            @foreach{{$contacts as $contact}}
            <tr class="table-row">
                <th class="table-header">お名前</th>
                <td class="table-data">
                    <div class="table-data_fullname">{{$contact['last_name']}} {{$contact['first_name']}}
                    </div>
                    <!-- <input type="text" name="last_name" value="{{$contact['last_name']}}" readonly> -->
                    <!-- <input type="text" name="first_name" value="{{$contact['first_name']}}" readonly> -->
                    <!-- {{$contact['first_name']}} -->
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-header">性別</th>
                <td class="table-data">
                    @if($contact['gender']==1)
                    <div class="table-data_gender">男性</div>
                    @else($contact['gender']==2)
                    <div class="table-data_gender">女性</div>
                    @endif
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-header">メールアドレス</th>
                <td class="table-data">
                    <div class="table-data_email">{{$contact['email']}}</div>
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-header">郵便番号</th>
                <td class="table-data">
                    <div class="table-data_postcode">{{$contact['postcode']}}</div>
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-header">住所</th>
                <td class="table-data">
                    <div class="table-data_address">{{$contact['address']}}</div>
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-header">建物名</th>
                <td class="table-data">
                    <div class="table-data_building_name">{{$contact['building_name']}}</div>
                </td>
            </tr>
            <tr class="table-row">
                <th class="table-header">ご意見</th>
                <td class="table-data">
                    <div class="table-data_opinion">{{$contact['opinion']}}</div>
                </td>
            </tr>
            @endforeach
        </table>
        <div class="confirm-form_button">
            <button class="confirm-form_button-submit" type="submit">送信</button>
        </div>
    </form>
    <div class="confirm-return">
        <a class="confirm-return_link" href="/">修正する</a>
    </div>
</div>
@endsection