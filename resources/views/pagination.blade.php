<<<<<<< current
@extends('layout_front.mainlayout')
@section('content')
    {{--<div class="owl-carousel owl-theme">--}}
        {{--@foreach($images as $photo)--}}
        {{--<div class="item">--}}
            {{--<img src="/assets-/app/media/img/blog/rooms-img/{{$photo->img_name}}" height="200">--}}
        {{--</div>--}}
        {{--@endforeach--}}
    {{--</div>--}}

    <h3> {{ $query }} </h3>
@endsection
<b></b>
=======
@extends('layout_front.mainlayout')
@section('content')
    {{--<div class="owl-carousel owl-theme">--}}
    {{--@foreach($images as $photo)--}}
    {{--<div class="item">--}}
    {{--<img src="/assets-/app/media/img/blog/rooms-img/{{$photo->img_name}}" height="200">--}}
    {{--</div>--}}
    {{--@endforeach--}}
    {{--</div>--}}
    @if(isset($details))
        {{--@foreach($address as $add)--}}
            {{--<img src="/assets-/app/media/img/blog/hostels-img/{{ $add->file_name }}"--}}
                 {{--class="card-img-top card-img custom-card-img-height"--}}
                 {{--alt="" width="20" height="20">--}}
        {{--@endforeach--}}



        <div class="row justify-content-center">
            @foreach($address as $photo)
                <div class=" col-12 col-sm-6 col-md-6  col-lg-3 px-1  mt-4 small-device-hid ">
                    <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                        <img src="/assets-/app/media/img/blog/hostels-img/{{ $photo->file_name }}"
                             class="card-img-top card-img custom-card-img-height" alt="">
                        <div class="car-body">
                            <div class="card-footer">
                                <div class="custom-circle"><p class="custom-circle-text card-text"><b>
                                            @if($photo->type == 1)
                                                {{ 'ذکور'}}
                                            @else {{ 'اناث' }}
                                            @endif
                                        </b></p></div>
                                <div class="custom-prices card-text text-left"> کرایه فی ماه
                                    : {{ $photo->remark }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    @endif
@endsection
<b></b>
>>>>>>> before discard
