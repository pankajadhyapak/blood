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

    @if(messageAuth($message->id))
            <a href="{{ URL::route('messages.index') }}" class="btn btn-primary">All Messages</a> <h3>Message  from {{ $message->id}}</h3>

            <div class="list-group">
                <p> {{ $message->msg ;}}</p>
             </div>
            <?php if($message->status == 0){
                $message->status = 1;
                $message->save();
                }
            ?>
    @else
     return "oops bad idea";
    @endif

</div>
</div>
@stop