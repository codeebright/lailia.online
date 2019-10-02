@extends('layout_front.mainlayout')

@section('content')
    <section class="container-fluid mt-4 header1 " id="myHeader" style="background-color:lightgray;height: 75px">
        <section class="container">
            <div class="row ">
                <div class="col-md-4">
                    <div class="input-group mb-2 mt-3">
                        <input type="text" class="form-control custom-border-left custom-border-dark" placeholder="ادرس اتاق و یا خوابگا را وارید کنید" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button  class="btn btn-outline-secondary search-box-btn btn-lg" type="button">جستجو</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5"></div>
                <div class="col-md-3 ">
                    <select class="form-control form-control-lg btn mt-3" type="button" style="height: 50px;border-radius: unset" >
                        <option>بر اسساس ارازنترین </option>
                        <option>بر اسساس بهترین</option>
                        <option>بر استاس بشترین بازدید</option>
                    </select>
                </div>
            </div>
        </section>
    </section>

    <section class="container custom-margin ">
        <h5 class="text-center" style="text-shadow:  1px 1px 2px black; color: #1b1e21">مجموعه ما با ۲۰۰۰ خوابگا در سطح کشور</h5>
        <div class="justify-content-center thin-underline-1"></div>
        <div class="row justify-content-center">
          @foreach($hostels as $hostel)
            @foreach($hostel->hostelDetails->attachments as $photo)
              <div class=" col-12 col-sm-6 col-md-6  col-lg-3 px-1  mt-4 small-device-hid ">
                    <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                      <a href="{{route('khabgah_detailes.goToDetails',$hostel->id)}}"> <img  src="/images/{{ $photo->file_name }}"
                        class="card-img-top card-img custom-card-img-height" alt=""></a>
                        <div class="car-body">
                            <div class="card-footer">
                                <div class="custom-circle"><p class="custom-circle-text card-text"><b>
                                  @if($hostel->type == 1)
                                  {{ 'ذکور'}}
                                  @else {{ 'اناث' }}
                                  @endif
                                 </b></p></div>
                                <div class="custom-prices card-text text-left"> کرایه فی ماه : {{$hostel->hostelDetails->remark }}  </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-12 col-md-12 mb-2 ">
                                        <span class="card-text">آدرس :  {{$hostel->addresses->state }}  {{$hostel->addresses->rood}}
                                            {{$hostel->addresses->station }}  {{$hostel->addresses->alley}}
                                          </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                @endforeach
            @endforeach
          </div>
    </section>

@endsection
<b></b>
