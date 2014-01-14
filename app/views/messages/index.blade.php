@extends('master')
@section('container')
<style type="text/css">
    .banner{
        height: 200px;
    }
    .banner h1{
        padding-top: 50px;
    }
</style>
@include('pages/page-banner')
<div class="col-md-9 ">
    <h3>All Messages</h3>
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>From </th>
            <th>Message </th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody>
        @foreach($messages as $message )

        <tr class="{{ $message->status == 0 ? 'warning' : '' }}">
            <td>{{ $message->id }}</td>
            <td>{{ $message->from }}</td>
            <td>{{ substr($message->msg,0,6) }}</td>
            <td>{{ $message->created_at->diffForHumans() }}</td>
            <td><a href="messages/{{ $message->id }}" class="btn btn-primary btn-block">View</a></td>
        </tr>

        @endforeach

        </tbody>
    </table>


</div>
</div>
@stop