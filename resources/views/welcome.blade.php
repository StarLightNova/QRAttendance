@extends('layouts.app')

@section('content')

    <div class="text-center" style="margin-top: 50px;">
        <h3>Attendance QR Code today</h3>

        {{--    {!! QrCode::size(300)->generate('https://www.wallpapertip.com/wmimgs/71-710354_im-gey.jpg'); !!}--}}
            <img src="data:image/svg+xml;base64,{{$qrcode->qr_code}}">
{{--        <p>MyNotePaper</p>--}}
    </div>


@endsection

