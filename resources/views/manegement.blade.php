@extends('layouts.default')
<style></style>

@section('title', '管理システム')
@section('content')
<h1>管理システム</h1>
<div class="search">
  <p>---ここに検索条件の入力画面を実装する---</p>
</div>
<div class="contact-list">
  <table>
    <tr>
      <th>ID</th>
      <th>お名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>ご意見</th>
      <th></th>
    </tr>
    @foreach($contacts as $contact)
    <tr>
      <td>{{ $contact->id }}</td>
      <td>{{ $contact->fullname }}</td>
      <td>
          @if($contact['gender'] == 1)
          <p>男性</p>
          @else
          <p>女性</p>
          @endif
      </td>
      <td>{{ $contact->email }}</td>
      <td>{{ $contact->opinion }}</td>
      <td>
        <form action="/delete" method="POST">
          <input type="hidden" name="id" value="{{ $contact->id }}">
          <input type="submit" value="削除">
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</div>
@endsection