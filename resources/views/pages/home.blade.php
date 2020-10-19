@extends('layouts.main')
@section('title')
  HOME PAGE
@endsection

@section('sidebar')
  NGUYEN NGOC KY

  THIS IS THE SIDEBAR
@endsection
@php
  $age = 23;
 @endphp
@section('content')
    BOY ONE  CHAMP THIS IS CONTENT {{$age}} 
@endsection
