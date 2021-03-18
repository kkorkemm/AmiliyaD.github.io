@extends('styles')
<link rel="stylesheet" href="{{ asset('css/showText.css') }}">
<link rel="stylesheet" href="{{ asset('css/tags.css') }}">
@section('title')
Edit paragrah
@endsection
<div class="container editPar">
@include('header')
<div class="row editPar_row">
    <div class="col-md-12 editPar_h1">
        <h1 class="text-center">Редактирование главы</h1>
    </div>

   
</div>
<div class="row">
   
    <form  class="col-md-12 editPar__title" action="{{ route('updatePar') }}"  method="POST">
@csrf
        <div class="col-md-12 editPar__title">
          <input type="hidden" name="his_id" id="" value="{{$edit->history_id}}">
            <input type="hidden" name="history_id" value="{{$edit->id}}">
            <input type="text" name="title" value="{{$edit->history_title}}" class='showBorder  showText showText__text'>
        </div>
        <div class="col-md-12 editPar__body">
    <textarea name="text" id=""  class='showBorder  showText showText__text' cols="30" rows="10">{{$edit->history_text}}</textarea>
        </div>
        <button class="allButtons showText__buttons par_button">Сохранить</button>
    </form>
</div>
</div>
</div>

<div class="footer">
    @include('footer')
</div>
