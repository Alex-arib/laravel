<!-- HTML-код модального окна -->
<div id="modalcreate" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Заголовок модального окна -->
            {!!  Form::open([ 'method'=>'POST', 'action'=>'ProjectController@store', 'class'=>'']) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Заголовок модального окна</h4>
            </div>
            <!-- Основное содержимое модального окна -->
            <div class="modal-body">

                    <label>Заголовок</label>
                {!! Form::text('title', Input::old('title'), ['class'=>'form-control', 'placeholder'=>'title']) !!}
                {!! Form::text('desc', Input::old('desc'), ['class'=>'form-control', 'placeholder'=>'desc']) !!}
                {!! Form::text('img', Input::old('img'), ['class'=>'form-control', 'placeholder'=>'img']) !!}

                <a href="#" class="btn btn-cyan submit">отправить</a>
                    {{csrf_field()}}



            </div>
            <!-- Футер модального окна -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Сохранить изменения</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
