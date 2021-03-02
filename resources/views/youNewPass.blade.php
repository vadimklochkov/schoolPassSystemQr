@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-light">{{ __('Ваш токен для получения пропуска') }}</div>

                <div class="card-body">
                    <form method="POST" action="/regpass/timed">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Ваш токен пропуска</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" readonly value="{{$token}}"/>
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
