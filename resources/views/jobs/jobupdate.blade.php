@extends('layouts.app')
@php
$progressArr=[
'OUTSTANDING',
'SENT-MIV',
'SENT',
'ON WAY COLL',
'AT COLL',
'STARTEDCOLL',
'AWAI_REL',
'PICKED UP',
'ON WAY DEL',
'AT DEL',
'DELIVERED',
'PW_RECEIVED',
'CANCELED',
'ABORTED',
] ;
@endphp
@section('content')
<div class="container">
<div class="col-md-8 blog-main">
<h1>Transport Job Update</h1>
@include('layouts.errors')
  <form class="form-horizontal" action="/jobupdate" method="post">
  @csrf
  @include('jobs.transportForm')
  </form>
</div>
</div>
@endsection
