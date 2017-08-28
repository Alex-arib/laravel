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
                <form method="post" action="{{route('articleStore')}}">
                <label>Заголовок</label>
                <input type="text" class="form-control" id="title" name="title">
                    <input type="text" class="form-control" id="alias" name="alias">
                    <input type="text" class="form-control" id="text" name="text">
                    <input type="text" class="form-control" id="desc" name="desc">
                    <input type="text" class="form-control" id="img" name="img">
                    <input type="text" class="form-control" id="d1" name="d1">
                    <input type="text" class="form-control" id="d2" name="d2">
                    <input type="text" class="form-control" id="d3" name="d3">
                    <button type="submit" class="btn btn-default">Отправить</button>
                    {{csrf_field()}}


                </form>

            </div>
        </div>

    </div>

@endsection