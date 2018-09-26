@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<div class="row">

  @include('partials/headMailBox')
  @foreach($contacts as $key => $item)

  <div class="table-responsive mailbox-messages">

    <table class="table table-hover table-striped">
      <tbody>
        <tr>
          <td>
            <div class="icheckbox_flat-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input
                  type="checkbox" style="position: absolute; opacity: 0;"><ins class="iCheck-helper"
                  style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
          </td>
          <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
          <td class="mailbox-name"><a href="readMail/{{ $item->id }}">{{ $item->name }}</a></td>
          <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
          <td class="mailbox-attachment"></td>
          <td class="mailbox-date">{{ $item->time }}</td>
        </tr>
      </tbody>
    </table>
<!-- /.table -->
</div>

@endforeach


@stop
