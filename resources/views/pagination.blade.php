<ul>
    @foreach($hostel as $hostels)
        <li> {{ $hostels->name }}</li>
    @endforeach
</ul>

{{--@foreach($hostel->attachments as $photo)--}}
{{--<div class=" col-12 col-sm-6 col-md-6  col-lg-3 px-1  mt-4 small-device-hid" id="load_more">--}}
{{--<div class="card card-shadow custom-height-1 " style="border-radius: 0%">--}}
{{--<img src="/assets-/app/media/img/blog/hostels-img/{{$photo->file_name}}"--}}
{{--class="card-img-top card-img custom-card-img-height"--}}
{{--alt="">--}}
{{--<div class="car-body">--}}
{{--<div class="card-footer">--}}
{{--<div class="custom-circle"><p class="custom-circle-text card-text"><b>--}}
{{--@if($hostel->type == 1)--}}
{{--{{ 'ذکور'}}--}}
{{--@else {{ 'اناث' }}--}}
{{--@endif--}}
{{--</b></p></div>--}}
{{--<div class="custom-prices card-text text-left"> کرایه فی ماه--}}
{{--: {{ $hostel->remark }} افغانی--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<br><br>--}}
{{--</div>--}}
{{--@endforeach--}}