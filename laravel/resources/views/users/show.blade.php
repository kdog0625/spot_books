@extends('common/app')

@section('title', 'ユーザー')

@section('content')

  @include('common/nav')

  <h3>プロフィール</h3>
 
   
<div style="margin-top: 30px;">
   
<table class="table table-striped">  
<tr>
<th>氏名</th>
<td>{{ Auth::user()->name }}</td>
</tr>  
<tr>
<th>メールアドレス</th>
<td>{{ Auth::user()->email }}</td>
</tr>  
</table>
 
</div>
@endsection