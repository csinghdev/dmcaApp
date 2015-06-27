@extends('app')

@section('content')
        <style>
        .content {
        text-align: center;
        display: inline-block;
        }

        .title {
        font-size: 96px;
        margin-bottom: 40px;
        padding-left: 40px;
        padding-right: 40px;
        padding-top: 40px;
        color: #F6624A;
        }

        .click {
            font-size: 20px;
        }
        </style>

        <div class="container">
            <div class="content">
                <div class="title">DMCA Notice Sender</div>
                <div class="click"><a href="/notices/create">Click here to Send a New DMCA Notice</a></div>
            </div>
        </div>
@stop