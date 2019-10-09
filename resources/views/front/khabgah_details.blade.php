@extends('layout_front.mainlayout')

@section('content')

    <!-- Small-hostel-properties -->
    <section class="container-fluid hostel">
        <!-- right-small-card / description-card -->
        <div class="card small-right-card">

            <div class="card-title text-center">
                <div class="mt-4"></div>
                <i class="fa fa-home mt-4 text-center" style="font-size:45px; "></i>
                <h5 class="mt-3 text-center mb-2"> {{ $hostel->name }} </h5>
                <h6 class="mb-2 text-left"> شماره تماس: {{ $hostel->phone}} </h6>
                <h6 class="mb-2 text-left"> ایمیل آدرس: {{ $hostel->email}} </h6>
                <h6 class="mb-2 text-left"> فیسبوک ما: {{ $hostel->fb}} </h6>
                <h6 class="text-left">
                    آدرس : {{$hostel->addresses->state }}  {{$hostel->addresses->rood}}
                    {{$hostel->addresses->station }}  {{$hostel->addresses->alley}}
                </h6>
            </div>
        </div>
    </section>  <!-- End-small-hostel-properties -->

    <div class="row mt-5">
        <div class="clo-4 offset-5">
            <h4 class="text-center unline"> عکس تمام اطاق های لیلیه {{ $hostel->name }}  </h4>
        </div>
    </div>

    <!-- All hostel images -->
    <section class="container mt-5">
        <div class="row justify-content-center">
            @foreach($hostel->attachments as $photo)
                <div class=" col-12 col-sm-6 col-md-6  col-lg-3 px-1" id="load_more">
                    <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                        <img src="/assets-/app/media/img/blog/hostels-img/{{$photo->file_name}}"
                             class="card-img-top card-img custom-card-img-height"
                             alt="">
                        <div class="car-body">
                            <div class="card-footer">
                                <div class="custom-circle"><p class="custom-circle-text card-text"><b>
                                            @if($hostel->type == 1)
                                                {{ 'ذکور'}}
                                            @else {{ 'اناث' }}
                                            @endif
                                        </b></p></div>
                                <div class="custom-prices card-text text-left"> کرایه فی ماه
                                    : {{ $hostel->remark }} افغانی
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                </div>
            @endforeach
                <button class="btn btn-primary">Show More</button>

        </div>
    </section>

    {{-- Hostel properties and descriptions--}}
    <section class="container mt-4">
        <div class="row mb-3">
            <!-- hostel properties -->
            <div class="col-md-8 mt-4 list-group bg-light">
                <p class="text-center mt-4"> امکانات لیلیه </p>
                <div class="row ml-3 mt-5">
                    @foreach($hostel->facilities as $facilities)
                        <div class="col-md-4 col-sm-4">
                            <ul class="custom-li-padding">
                                <li class="list-group" style="list-style-type: armenian;">
                                    {{ $facilities->name }} : &nbsp;&nbsp;&nbsp; {{ $facilities->details }}
                                </li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 pr-0 mt-4" id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                توضیحات لیلیه
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">{{ $hostel->description }}</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                قوانین لیلیه
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">{{ $hostel->roles }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Hostels Food menu tabs section --}}
    <section class="container">
        <div class="row">
            <div class="col-md-12 nav-padding mb-3 pr-3 text-center">
                <div class="row ml-3 mt-1 align-content-center">
                    <div class="col-md-8 offset-md-2">
                        <table class="table table-responsive">
                            <p class="mb-2 font-weight-bold">مینوی غذایی</p>
                            <thead class="black white-text">
                            <tr>
                                <th class="border-bottom-0 border-top-0"></th>
                                <th scope="col" class="text-primary"> شنبه</th>
                                <th scope="col" class="text-primary">یک شنبه</th>
                                <th scope="col" class="text-primary">دوشنبه</th>
                                <th scope="col" class="text-primary">سه شنبه</th>
                                <th scope="col" class="text-primary">چهار شنبه</th>
                                <th scope="col" class="text-primary">پنچ شنبه</th>
                                <th scope="col" class="text-primary">جمعه</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--morning foods menus--}}
                            <tr>
                                <th class="border-top-0 text-primary">صبحانه</th>
                                @foreach($sat_mor as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                                @foreach($sun_mor as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach

                                @foreach($mon_mor as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                                @foreach($thu_mor as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                                @foreach($wed_mor as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                                @foreach($thur_mor as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                                @foreach($fri_mor as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                            </tr>
                            {{--lunch foods menu--}}
                            <tr>
                                <th class="border-top-0 text-primary">چاشت</th>
                                {{--@foreach($hostel->foods as $food)--}}
                                {{--<td class="border">{{ $food->name }}</td>--}}
                                {{--@endforeach--}}
                                @foreach($sat_lun as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                                @foreach($sun_lun as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach

                                @foreach($mon_lun as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                                @foreach($thu_lun as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                                @foreach($wed_lun as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                                @foreach($thur_lun as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                                @foreach($fri_lun as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                            </tr>
                            {{-- neight foods menus --}}
                            <tr>
                                <th class="border-top-0 text-primary">شب</th>
                                @foreach($sat_nig as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                                @foreach($sun_nig as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach

                                @foreach($mon_nig as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                                @foreach($thu_nig as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                                @foreach($wed_nig as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                                @foreach($thur_nig as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                                @foreach($fri_nig as $t)
                                    <td class="border">{{$t->foods->name}}</td>
                                @endforeach
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<b></b>
