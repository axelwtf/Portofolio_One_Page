@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

@include('partials/headMailBox')

<div class="box-body no-padding">
    <div class="mailbox-read-info">
        <h5>From: <strong>{{ $item->email }}</strong>
        <span class="mailbox-read-time pull-right">{{ $item->time }}</span></h5>
    </div>
<!-- /.mailbox-read-info -->
  
<!-- /.btn-group -->
   
<!-- /.mailbox-controls -->
    <div class="mailbox-read-message">
        <p>
            {{ $item->message }}
        </p>
    </div>
<!-- /.mailbox-read-message -->
</div>

<div class="box-footer">

    <div class="pull-right">
        <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
        <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
    </div>
    <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
    <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
    </div>

</div>
</section>
@stop