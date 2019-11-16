
<div class="justify-content-center thin-underline-1"></div>
<div class="row justify-content-center">
    @foreach($hostels as $hostel)
            <div class=" col-12 col-sm-6 col-md-6  col-lg-3 px-1 mt-3">
                <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                    <a href="">
                        <img src="/assets-/app/media/img/blog/hostels-img/{{$hostel->attachments->first()->file_name}}"
                             class="card-img-top card-img custom-card-img-height" alt=""></a>
                    <div class="car-body">
                        <div class="card-footer">
                            <div class="custom-circle"><p class="custom-circle-text card-text"><b>
                                        @if($hostel->type == 1)
                                            {{ 'ذکور'}}
                                        @else {{ 'اناث' }}
                                        @endif
                                    </b></p></div>
                            <div class="custom-prices card-text text-left"> کرایه فی ماه
                                : {{$hostel->remark }}  </div>
                        </div>
                    </div>
                </div>

            </div>
    @endforeach
</div>
