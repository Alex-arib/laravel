<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 02.08.2017
 * Time: 0:59
 */
?>





<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Bootswatch: Flatly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/app.css') !!}
{!! Html::style('css/style.css') !!}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>

    <![endif]-->
    {!! Html::script('vendor/seguce92/fullcalendar/lib/moment.min.js') !!}
    {!! Html::script('vendor/seguce92/fullcalendar/lib/jquery.min.js') !!}

    {!! Html::script('vendor/seguce92/fullcalendar/fullcalendar.min.js') !!}
    {!! Html::script('vendor/seguce92/fullcalendar/locale/ru.js') !!}

    <script>

        $(document).ready(function() {
            var BASEURL ="{{url('/')}}";

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                defaultDate: '2017-05-12',
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                locale: 'ru',
                eventLimit: true, // allow "more" link when too many events
                events: BASEURL + '/events'
            });

        });

    </script>

</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="../" class="navbar-brand">Bootswatch</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a  href="/calendar" id="themes">Календарь </a>

                </li>
                <li>
                    <a href="/page/add">Добавить</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://builtwithbootstrap.com/" target="_blank">Built With Bootstrap</a></li>
                <li><a href="https://wrapbootstrap.com/?ref=bsw" target="_blank">WrapBootstrap</a></li>
            </ul>

        </div>
    </div>
</div>



@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$errors}}</li>

            @endforeach
        </ul>

    </div>
@endif

@yield('content')


<!-- Скрипт, вызывающий модальное окно после загрузки страницы -->

{!! Html::script('js/bootstrap.min.js') !!}
<script>
    $(document).ready(function() {
       // $("#modalcreate").modal('show');
    });
</script>


{!! Html::script('vendor/seguce92/fullcalendar/locale/ru.js') !!}
{!! Html::style('vendor/seguce92/fullcalendar/fullcalendar.min.css') !!}














</body>
</html>

