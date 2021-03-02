@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-light">{{ __('Подача заявки на пропуск') }}</div>

                <div class="card-body">
                    <form method="POST" action="/regpass" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">ФИО</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus title="Разрешено использовать только пробелы и русские буквы" pattern="^[А-Яа-яЁё\s]+$"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">EMail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">Тип пропуска</label>

                            <div class="col-md-6">
                                <select id="type" name="type" required  autofocus class="form-control">
                                    <option>Временный (для посещения)</option>
                                    <option>Постоянный (для сотрудников и студентов)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ваше фото</label>

                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input type="file" require name="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Выберите файл</label>
                                </div>
                            </div>
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Подать заявку') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


@endsection
