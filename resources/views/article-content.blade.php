<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02.08.2017
 * Time: 14:07
 */
?>


@extends('layouts.site')

@section('content')
    <div class="container">

        <div class="page-header" id="banner">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1>Flatly</h1>
                    <p class="lead">Flat and modern</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">

                @if($article)

                    <h2>{{$article->title}}</h2>
                    <div>{!! $article->text !!}</div>

                @endif

            </div>
        </div>

    </div>
@endsection


