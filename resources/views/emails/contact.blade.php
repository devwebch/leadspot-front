@extends('layouts.mail')

@section('title', 'New contact mail')
@section('subtitle', '')

@section('content')

    <strong>First name: </strong> {{$first_name}}<br>
    <strong>Last name: </strong> {{$last_name}}<br>
    <strong>E-mail: </strong> {{$email}}<br>
    <strong>Message: </strong> {{$user_message}}

@endsection

@section('action')
@endsection