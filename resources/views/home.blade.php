@extends('layouts.app')

@section('content')
<div class="mr-5 ml-5">
    <div class="mr-5 ml-5">
            <div class="mr-5 ml-5">
            @if(auth()->user()->role == 'admin')
                <table class="table">
                    <thead class="">
                        <tr>
                        <th width="50" scope="col">#</th>
                        <th width="300" scope="col">Имя</th>
                        <th width="500" scope="col">Комент (для временных)</th>
                        <th width="300" scope="col">Дата начала</th>
                        <th width="300" scope="col">Дата окончания</th>
                        <th width="200" scope="col">Тип</th>
                        <th width="150" scope="col">Одобрить</th>
                        <th width="150" scope="col">Отклонить</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($pass as $el)
                        <tr>
                        <th scope="row">{{$el->id}}</th>
                        <td>{{$el->name}}</td>
                        <td>{{$el->comm}}</td>
                        <td>{{$el->date1}}</td>
                        <td>{{$el->date2}}</td>
                        <td>{{$el->type}}</td>
                        <td><a href="/home/{{$el->id}}/accept" class="btn btn-success text-light">Одобрить</a></td>
                        <td><a href="/home/{{$el->id}}/deny" class="btn btn-danger text-light">Отклонить</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <table class="table">
                    <thead class="">
                        <tr>
                        <th width="50" scope="col">#</th>
                        <th width="300" scope="col">Имя</th>
                        <th width="500" scope="col">Комент (для временных)</th>
                        <th width="200" scope="col">Тип</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($pass as $el)
                        <tr>
                        <th scope="row">{{$el->id}}</th>
                        <td>{{$el->name}}</td>
                        <td>{{$el->comm}}</td>
                        <td>{{$el->type}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection
