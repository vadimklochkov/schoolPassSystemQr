@extends('layouts.app')

@section('content')

<style>
    .card {
        width: 260px;
    }
</style>
<div class="row">

<div class="col-3">

</div>
            @foreach($pass as $el)

<div class="col-5">
<h5>Ваш пропуск</h5>
<div class="card">
    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 0 340.03 573">
        <defs>
            <style>
                .cls-1 {
                    fill: #7c7c7c;
                }

                .cls-18,
                .cls-2 {
                    fill: #ededed;
                }

                .cls-3 {
                    fill: #ededed;
                }

                .cls-4 {
                    font-size: 13.37px;
                }

                .cls-4,
                .cls-7,
                .cls-9 {
                    fill: #6d6d6d;
                }

                .cls-10,
                .cls-14,
                .cls-15,
                .cls-19,
                .cls-4,
                .cls-7,
                .cls-9 {
                    font-family: Montserrat-Bold, Montserrat;
                    font-weight: 700;
                }

                .cls-5 {
                    letter-spacing: -0.02em;
                }

                .cls-6 {
                    letter-spacing: 0em;
                }

                .cls-7,
                .cls-9 {
                    font-size: 24.84px;
                }

                .cls-7 {
                    letter-spacing: 0.02em;
                }

                .cls-8 {
                    fill: url(#linear-gradient);
                }

                .cls-9 {
                    letter-spacing: 0.02em;
                }

                .cls-10,
                .cls-15 {
                    font-size: 25.65px;
                    fill: #fff;
                }

                .cls-11 {
                    letter-spacing: 0.02em;
                }

                .cls-12 {
                    letter-spacing: 0.05em;
                }

                .cls-13,
                .cls-15 {
                    letter-spacing: 0.02em;
                }

                .cls-14 {
                    font-family: Montserrat-Light;
                    font-size: 17px;
                    fill: #db5a14;
                }

                .cls-16 {
                    letter-spacing: 0em;
                }

                .cls-17 {
                    letter-spacing: 0.05em;
                }

                .cls-18 {
                    opacity: 0.47;
                }

                .cls-19 {
                    font-size: 9.62px;
                    fill: #101010;
                }

                .cls-20 {
                    letter-spacing: 0.02em;
                }

                .cls-21 {
                    letter-spacing: -0.01em;
                }

                .cls-22 {
                    letter-spacing: 0.02em;
                }

                .cls-23 {
                    letter-spacing: -0.02em;
                }

                .cls-24 {
                    letter-spacing: 0em;
                }

                .cls-25 {
                    letter-spacing: -0.03em;
                }

                .cls-26 {
                    letter-spacing: -0.04em;
                }

                .cls-27 {
                    letter-spacing: -0.01em;
                }

                .cls-28 {
                    letter-spacing: 0.02em;
                }

                .cls-29 {
                    letter-spacing: -0.01em;
                }

                .cls-30 {
                    letter-spacing: 0.01em;
                }

                .cls-31 {
                    letter-spacing: 0.01em;
                }

                .cls-32 {
                    letter-spacing: -0.01em;
                }

                .cls-33 {
                    letter-spacing: -0.01em;
                }

                .cls-34 {
                    letter-spacing: 0em;
                }

                .cls-35 {
                    letter-spacing: -0.01em;
                }

                .cls-36 {
                    letter-spacing: 0.01em;
                }

                .cls-37 {
                    letter-spacing: -0.01em;
                }

                .cls-38 {
                    letter-spacing: 0em;
                }

                .cls-39 {
                    letter-spacing: -0.01em;
                }

                .cls-40 {
                    letter-spacing: -0.03em;
                }

                .cls-41 {
                    letter-spacing: -0.04em;
                }

                .cls-42 {
                    letter-spacing: 0em;
                }

                .cls-43 {
                    letter-spacing: 0em;
                }

                .cls-44 {
                    letter-spacing: 0em;
                }

                .cls-45 {
                    letter-spacing: -0.02em;
                }

                .cls-46 {
                    letter-spacing: -0.01em;
                }

                .cls-47 {
                    letter-spacing: -0.02em;
                }

                .cls-48 {
                    letter-spacing: 0.02em;
                }

                .cls-49 {
                    letter-spacing: 0em;
                }
            </style>
        @if($el->type == 'Постоянный (для сотрудников и студентов)')
            <linearGradient id="linear-gradient" x1="163.95" y1="357.59" x2="209.73" y2="357.59"
                gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#fff" />
                <stop offset="0.38" stop-color="#aba79f" />
                <stop offset="1" />
            </linearGradient>
        </defs>
        <title>333</title>
        <rect class="cls-1" y="1" width="339.87" height="323.13" rx="20.05" ry="20.05" />
        <path class="cls-2"
            d="M.58,262.18H339.87a0,0,0,0,1,0,0V457.12A17.88,17.88,0,0,1,322,475H17.88A17.88,17.88,0,0,1,0,457.12V262.76a.58.58,0,0,1,.58-.58Z" />
        <image width="800" height="1011" transform="translate(76) scale(0.25)" xlink:href="{{ asset('/storage/' . $el->image) }}" />
        <rect class="cls-3" y="474" width="339.87" height="99" rx="15.39" ry="15.39" /><text class="cls-4"
            transform="translate(30.44 280.83)">Постоянный пропуск
        </text>
        <text class="cls-14" transform="translate(30.44 308.45)">{{$el->name}}</text>
        
        <path class="cls-2"
            d="M340,285.47,192.61,270.39l-10-5L0,262V193.35c58.62,0,145.71,46.9,237.83,48.57S340,285.47,340,285.47Z"
            transform="translate(0 1)" />
        <path class="cls-18"
            d="M110.51,261.56l229.46.21.06-68.67c-39.56,0-81.42,36.13-143.59,37.32S110.51,261.56,110.51,261.56Z"
            transform="translate(0 1)" /><text class="cls-19" transform="translate(29.98 406)">ID:{{$el->token}}<tspan class="cls-20"
                x="21.46" y="0"></tspan>
            <tspan x="28.77" y="0"></tspan>
            <tspan class="cls-21" x="38.89" y="0"></tspan>
        </text>
        <div style="margin-top:-110px; margin-left: 75px; padding-bottom: 5px;">{!! QrCode::encoding('UTF-8')->size(100)->generate($qr) !!} </div>
    </svg>
</div>


@else
<linearGradient id="linear-gradient" x1="163.95" y1="357.59" x2="209.73" y2="357.59"
                gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#fff" />
                <stop offset="0.38" stop-color="#aba79f" />
                <stop offset="1" />
            </linearGradient>
        </defs>
        <title>333</title>
        <rect class="cls-1" y="1" width="339.87" height="323.13" rx="20.05" ry="20.05" />
        <path class="cls-2"
            d="M.58,262.18H339.87a0,0,0,0,1,0,0V457.12A17.88,17.88,0,0,1,322,475H17.88A17.88,17.88,0,0,1,0,457.12V262.76a.58.58,0,0,1,.58-.58Z" />
        <image width="800" height="1011" transform="translate(76) scale(0.25)" xlink:href="{{ asset('/storage/' . $el->image) }}" />
        <rect class="cls-3" y="474" width="339.87" height="99" rx="15.39" ry="15.39" /><text class="cls-4"
            transform="translate(30.44 280.83)">Временный проп<tspan class="cls-5" x="127.02" y="0">у</tspan>
            <tspan class="cls-6" x="135.03" y="0">ск</tspan>
        </text><text class="cls-7" transform="translate(28.39 365.9) rotate(-0.14)">с</text>
        <path class="cls-8" d="M179.13,351.49l0,13.37h-3.87l0-10.19h-5.57l0,10.19h-3.85l0-13.37Z"
            transform="translate(0 1)" />
        <path class="cls-8"
            d="M185.85,364.16a6.55,6.55,0,0,1-2.63-2.44,7.16,7.16,0,0,1,0-7.1,6.55,6.55,0,0,1,2.62-2.45,8.55,8.55,0,0,1,7.56,0,6.58,6.58,0,0,1,2.61,2.44,7.16,7.16,0,0,1,0,7.1,6.57,6.57,0,0,1-2.6,2.45,8.55,8.55,0,0,1-7.56,0Zm6.23-3.32a4.28,4.28,0,0,0,0-5.39,3.23,3.23,0,0,0-2.45-1,3.27,3.27,0,0,0-2.46,1,4.23,4.23,0,0,0,0,5.39,3.27,3.27,0,0,0,2.46,1A3.22,3.22,0,0,0,192.08,360.84Z"
            transform="translate(0 1)" /><text class="cls-9"
            transform="translate(164.01 365.9) rotate(-0.14)">по</text><text class="cls-10"
            transform="translate(52.27 366.24) rotate(-0.14)">
            <tspan class="cls-11">{{$el->date1}}</tspan>
        </text>
        <text class="cls-14" transform="translate(30.44 308.45)">{{$el->name}}</text>
        <text class="cls-15"
            transform="translate(206.3 366.24) rotate(-0.14)">{{$el->date2}}
        </text>
        <path class="cls-2"
            d="M340,285.47,192.61,270.39l-10-5L0,262V193.35c58.62,0,145.71,46.9,237.83,48.57S340,285.47,340,285.47Z"
            transform="translate(0 1)" />
        <path class="cls-18"
            d="M110.51,261.56l229.46.21.06-68.67c-39.56,0-81.42,36.13-143.59,37.32S110.51,261.56,110.51,261.56Z"
            transform="translate(0 1)" /><text class="cls-19" transform="translate(29.98 406)">ID:{{$el->token}}<tspan class="cls-20"
                x="21.46" y="0"></tspan>
            <tspan x="28.77" y="0"></tspan>
            <tspan class="cls-21" x="38.89" y="0"></tspan>
            <tspan x="44.96" y="0"></tspan>
        </text>
        <div style="margin-top:-110px; margin-left: 75px; padding-bottom: 5px;">{!! QrCode::encoding('UTF-8')->size(100)->generate($qr) !!} </div>
    </svg>
</div>

@endif
@endforeach

</div></div>
@endsection
