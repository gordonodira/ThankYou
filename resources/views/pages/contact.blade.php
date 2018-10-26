@extends('layouts.app')
@section('content')
    <h1>Contact</h1>

    <div class="container">
        <form role="form" id="contact-form" class="contact-form" method="POST" action="{{route('contact.Store')}}">
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" autocomplete="off" id="Name"
                               placeholder="Name">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" autocomplete="off" id="email"
                               placeholder="E-mail">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea class="form-control textarea" rows="3" name="message" id="message"
                                  placeholder="Message"></textarea>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn main-btn pull-right">Send a Message</button>
                </div>
            </div>
        </form>
    </div>
@endsection