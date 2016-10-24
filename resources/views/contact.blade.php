@extends('layouts.app')

@section('body-class', 'p-t-100')

@section('title', trans('contact.contact'))

@section('header')
    @include('layouts.partials.header-solid')
@endsection

@section('content')
    <!-- BEGIN PRICING SECTION -->
    <section class="p-t-10 p-b-75 sm-p-t-30">
        <div class="container">
            <h1 class="text-center m-b-30">
                {{trans('contact.contact_us')}}
            </h1>
            <div class="row">
                <div class="col-md-4 col-md-push-4">
                    @include('shared.errors')

                    <form action="/contact/send" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="inputFirstName">{{trans('contact.first_name')}}</label>
                            <input type="text" class="form-control" id="inputFirstName" name="inputFirstName" value="{{old('inputFirstName')}}">
                        </div>
                        <div class="form-group">
                            <label for="inputLastName">{{trans('contact.last_name')}}</label>
                            <input type="text" class="form-control" id="inputLastName" name="inputLastName" value="{{old('inputLastName')}}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">{{trans('contact.email')}}</label>
                            <input type="email" class="form-control" id="inputEmail" name="inputEmail" value="{{old('inputEmail')}}">
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">{{trans('contact.message')}}</label>
                            <textarea name="inputMessage" id="inputMessage" class="form-control" cols="30" rows="10">{{old('inputMessage')}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-complete">{{trans('contact.send_message')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- END PRICING SECTION -->
@endsection