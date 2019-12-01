@extends('layout_front.mainlayout')

@section('content')
    <section class="container-fluid mt-4 header1 " id="myHeader" style="background-color:lightgray;height: 75px">
        <section class="container">
            <div class="row ">
                <div class="col-md-4">
                    <div class="input-group mb-2 mt-3">
                        <input type="text" class="form-control custom-border-left custom-border-dark"
                               placeholder="ادرس اتاق و یا خوابگا را وارید کنید" aria-label="Recipient's username"
                               aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary search-box-btn btn-lg" type="button">جستجو</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5"></div>
                <div class="col-md-3 ">
                    <select class="form-control form-control-lg btn mt-3" type="button"
                            style="height: 50px;border-radius: unset">
                        <option>بر اسساس ارازنترین</option>
                        <option>بر اسساس بهترین</option>
                        <option>بر استاس بشترین بازدید</option>
                    </select>
                </div>
            </div>
        </section>
    </section>

    <section class="container custom-margin ">
        <h5 class="text-center" style="text-shadow:  1px 1px 2px black; color: #1b1e21">مجموعه ما با ۲۰۰۰ خوابگا در سطح
            کشور</h5>
        <div class="justify-content-center thin-underline-1"></div>
        <div class="row justify-content-center">
            @foreach($hostels as $hostel)
                    <div class=" col-12 col-sm-6 col-md-6  col-lg-3 px-1 mt-3">
                        <div class="card card-shadow custom-height-1 " style="border-radius: 0%">
                            <a href="">
                                <img src="/assets-/app/media/img/blog/hostels-img/{{$hostel->hostelPhotos->first()->file_name}}"
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
        <div class="show_more" id="show_more">
            <input type="hidden" id="increment" name="" value="0">
        </div>
        <a href="#"  onclick="showMoreHostel('{{route('hostel.list')}}','show_more')">Show More Pics</a>
    </section>
@endsection

<script type="text/javascript">

        // Ajax Function
        function makeServerRequest(url, page, div_id) {
            $.ajax({
                url: url,
                type: 'post',
                data: {
                  "_token": "{{csrf_token()}}",
                  page
                },
                success: function (data) {
                  $('#'+div_id).prepend(data);
                },
                error: function (jqXhr, data) {

                    if (jqXhr.status === 401) //redirect if not authenticated user.
                        $(location).prop('pathname', 'auth/login');
                    if (jqXhr.status === 422) {
                        //process validation errors here.
                        var errors = jqXhr.responseJSON.errors; //this will get the errors response data.
                        //show them somewhere in the markup
                        errorsHtml = '<div class="alert alert-danger">';
                        var i = 0;
                        $.each(errors, function (key, value) {
                            errorsHtml += value[0]; //showing only the first error.
                            if (i == 0) {
                                return false;
                            }
                        });
                        errorsHtml += '</di>';
                        $('#' + div_id).html(errorsHtml); //appending to a <div id="form-errors"></div> inside form
                    } else {
                        /// do some thing else
                    }
                }
            })
        }

function showMoreHostel(url,div_id)
{
  var increment = $('#increment').val();
  increment++;
  $('#increment').val(increment);
  var params = increment;
  makeServerRequest(url,params,div_id);
}

</script>
