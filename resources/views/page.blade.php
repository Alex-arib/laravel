<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 25.07.2017
 * Time: 0:02
 */

// @extends('layouts.site') - вставляется в родительский
// @section('content') - секция для вставки
?>

@extends('layouts.site')

@section('content')
<div class="container">

    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h1>Flatly</h1>
                <a href="#modalcreate"  data-toggle="modal">Модальное</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            {{$mes}}

            {{$header}}

            @foreach($articles as $article)
                <h2>{{$article->title}}</h2>
                ниже отключаем экранированание
                <div>{!! $article->desc !!}</div>
                <a href="{{ route('articleShow',['id'=>$article->id]) }}">Подробнее</a>

                <form action="{{route('articleDelete',['article'=>$article->id]) }}" method="post">
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-danger">Удалить</button>

                </form>

            @endforeach

            {{$articles}}

        </div>
    </div>

</div>
@include('modals.create.projects')



@endsection

