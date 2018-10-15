@extends('layouts/app')


@section('content')
    <h1>Messages</h1>
    @if(count($messages) > 0)

            <table class="table table-striped">
                <thead>

                        <td>From</td>  <td>Email</td>  <td>Message</td>

                </thead>
                @foreach($messages as $message)
                    <tr>
                        <td>{{$message->name}}</td> <td>{{$message->email}}</td> <td>{{$message->message}}</td>
                    </tr>
                @endforeach
            </table>


    @endif

@endsection
