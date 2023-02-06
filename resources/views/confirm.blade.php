@extends('layouts.default')
<style></style>

@section('title', '内容確認')
@section('content')
<h1>内容確認</h1>
<div class="form-confirm">
  <form action="/create" method="POST">
    @csrf
    <table>
      <tr>
        <th>お名前</th>
        <td>
          <input type="hidden" name="fullname" value="{{ $inputs['lastname'] }}{{ $inputs['firstname'] }}">
          <p>{{ $inputs['lastname'] }}{{ $inputs['firstname'] }}</p>
        </td>
      </tr>
      <tr>
        <th>性別</th>
        <td>
          <!-- 1で男性、2で女性と表示させるにはどうするか -->
          <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">
          @if($inputs['gender'] == 1)
          <p>男性</p>
          @else
          <p>女性</p>
          @endif
        </td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>
          <input type="hidden" name="email" value="{{ $inputs['email'] }}">
          <p>{{ $inputs['email'] }}</p>
        </td>
      </tr>
      <tr>
        <th>郵便番号</th>
        <td>
          <input type="hidden" name="postcode" value="{{ $inputs['postcode'] }}">
          <p>{{ $inputs['postcode'] }}</p>
        </td>
      </tr>
      <tr>
        <th>住所</th>
        <td>
          <input type="hidden" name="address" value="{{ $inputs['address'] }}">
          <p>{{ $inputs['address'] }}</p>
        </td>
      </tr>
      <tr>
        <th>建物名</th>
        <td>
          <input type="hidden" name="building_name" value="{{ $inputs['building_name'] }}">
          <p>{{ $inputs['building_name'] }}</p>
        </td>
      </tr>
      <tr>
        <th>ご意見</th>
        <td>
          <input type="hidden" name="opinion" value="{{ $inputs['opinion'] }}">
          <p>{{ $inputs['opinion'] }}</p>
        </td>
      </tr>
    </table>
    <input type="submit" value="送信">
    <a href="{{ url('/') }}" name="back" value="back">修正する</a>
  </form>
</div>
@endsection