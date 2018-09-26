@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<form class="text-center" action="/create/tasks" method="post" enctype="multipart/form-data">

    @csrf
    <div class="container">
        <input id="titre" class="form-control" name="leTitre" type="text" value="" enctype="multipart/form-data">

        <textarea class="form-control" style="margin-top:15px;" id="description" name="laDescription" id="" cols="30" rows="10"></textarea>

        <div class="mt-4">
            <input type="file" name="image">
            <button type="submit" id="btnEnvoie">Envoyer</button>
        </div>
    </div>

</form>

@stop
