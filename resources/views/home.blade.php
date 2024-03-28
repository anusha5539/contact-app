@extends('layout.app')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .content {
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.8)), url('contact/bg.png');
            height: 100%;
            width: 100%;
           
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            text-align: center;
        }
        .image{
            padding-top: 10rem;
            color:white;
        }
        .para{  
        padding-left: 5rem;
        padding-right: 5rem;
        justify-content: center;
        display:justify;
    }


@media(max-width:600px){
    .image{
        padding-top:2rem;
    }
    .para{  
        padding-left: 0rem;
        padding-right: 0rem;
    }
}

  
            .title {
                font-size: 65px;
                font-weight: bold;
            }

        </style>
    </head>
<div class="content">
    <div class="image">
    <div class="title">
        "Welcome, {{ $user }}"
    </div>
    <p class="para">
         Here, you can effortlessly connect with us and add your company details for seamless communication. Simply fill in the necessary information about your company and your contact details below. We're eager to hear from you and ready to assist with any inquiries or assistance you may need. Thank you for choosing to connect with us!"
    </p>
</div>
{{-- 
    <div class="links">
        <a href="{{route('contacts.create')}}">Add new</a>
        <a href="{{route('contacts.show',1)}}">show contact</a>
    </div> --}}
</div>
</div>  
@endsection
