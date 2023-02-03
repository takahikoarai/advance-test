@extends('layouts.defaut')
<style>
  .red{
    color:red;
  }
</style>

@section('title', 'お問い合わせ')

@section('content')
<h1>お問い合わせ</h1>
<form action="/confirm" method="POST">
  @csrf
  <table>
    <tr>
      <th>お名前 <span class="red">※</span></th>
      <td>
        <input type="text" name="fullname" class="first-name">
        <input type="text" name="fullname" class="last-name">
      </td>
    </tr>
    <tr>
      <th>性別 <span class="red">※</span></th>
      <td>
        <input type="radio" name="gender" value="1" checked>男性
        <input type="radio" name="gender" value="2">女性
      </td>
    </tr>
    <tr>
      <th>メールアドレス <span class="red">※</span></th>
      <td>
        <input type="email" name="email">
      </td>
    </tr>
    <tr>
      <th>郵便番号 <span class="red">※</span></th>
      <td>
        <input type="text" name="postcode">
      </td>
    </tr>
    <tr>
      <th>住所 <span class="red">※</span></th>
      <td>
        <input type="text" name="address">
      </td>
    </tr>
    <tr>
      <th>建物名</th>
      <td>
        <input type="text" name="building_name">
      </td>
    </tr>
    <tr>
      <th>ご意見 <span class="red">※</span></th>
      <td>
        <textarea name="opinion" cols="30" rows="10"></textarea>
      </td>
    </tr>
  </table>
  <input type="submit" value="確認">
</form>
@endsection