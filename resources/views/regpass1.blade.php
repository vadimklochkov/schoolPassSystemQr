@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-light">{{ __('Подача заявки на временный пропуск') }}</div>

                <div class="card-body">
                    <form method="POST" action="/regpass/timed">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">ФИО</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" readonly value="{{$req->name}}" required autofocus title="Разрешено использовать только пробелы и русские буквы" pattern="^[А-Яа-яЁё\s]+$"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">EMail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" value="{{$req->email}}" name="email" readonly required autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">Тип пропуска</label>

                            <div class="col-md-6">
                                <select id="type" name="type" required  autofocus class="form-control" readonly>
                                    <option>Временный (для посещения)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ваше фото</label>

                            <div class="col-md-6">
                                <div class="custom-file">
                                    <input type="text" readonly name="image" class="custom-file-input" value="{{$path}}" id="customFile">
                                    <label class="custom-file-label" for="customFile">Выберите файл</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date1" class="col-md-4 col-form-label text-md-right">Дата начала</label>

                            <div class="col-md-6">
                                <input id="date1" type="date" class="form-control" name="date1" required autofocus />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date2" class="col-md-4 col-form-label text-md-right">Дата окончания</label>

                            <div class="col-md-6">
                                <input id="date2" type="date" class="form-control" name="date2" required autofocus/>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="comm" class="col-md-4 col-form-label text-md-right">Цель посещения</label>

                            <div class="col-md-6">
                                <input id="comm" type="text" class="form-control" name="comm" required autofocus title="Разрешено использовать только пробелы и русские буквы" pattern="^[А-Яа-яЁё\s]+$"/>
                            </div>
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Податвердить заявку') }}
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
