<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Album example for Bootstrap</title>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{{asset('bootstraprtl/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('bootstraprtl/css/hover.css')}}">
<link rel="stylesheet" href="{{asset('bootstraprtl/css/fonts.css')}}">

{{-- dropzone styles --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
<link rel="stylesheet" href="{{ url('/css/dropzonestyle.css') }}">
<!-- Custom styles for this template -->
<link rel="stylesheet" href="{{asset('bootstraprtl/css/custom.css')}}">
{{-- owl links --}}
<link rel="stylesheet" href="{{url('Owl/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{url('Owl/css/owl.theme.default.min.css')}}">
{{--<link rel="stylesheet" href="{{url('Owl/css/owl
.theme.green.css')}}">--}}



<style>
    #call, #image2, #image3, #image4 {
        display: none;
    }
</style>

<style>

    /*-----------------  making hostel pages last-time  ------*/
    /* small-right-card / description-card-style */
    .small-right-card {
        position: absolute;
        right: 4rem;
        top: 24rem;
        margin: 20px;
        width: 270px;
        height: 330px;
        padding: 16px;
        background-color: white;
        box-shadow: 1px 1px 46px 5px #000000;
        opacity: 0.7;
    }
    div.dis{
        position: absolute;
        bottom: 10px;
        left: auto;
    }

    /*properties li style*/
    ul.custom-li-padding{ padding: 0}
    /* food menu tabs padding */
    .nav-padding{padding: 0; margin: 0%;}
    /* food menu tabs font-size and font family*/
    .tab-font{ font-size: 18px; font-family: Arial; }

    h4.unline{border-bottom: 1px solid #000000}
    /*end*/

    .hostel{
        background-image: url("/photo/modern.jpg");
        box-sizing: border-box;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height: 520px;
        margin: 0;
        padding: 0;
    }


    /* Collapse-style */
    .btn-text b{display:inline}
    .btn-text:not(.collapsed)  span{display:none}
    .btn-text.collapsed b {display:none}

/* start @media style for small right and glass card for khabgahs page*/
    @media (max-width: 1100px) {
        .small-right-card {
            position: absolute;
            right: 2rem;
            top: 24rem;
            margin: 20px;
            width: 270px;
            height: 330px;
            padding: 16px;
            background-color: blue;
            box-shadow: 1px 1px 46px 5px #000000;
            opacity: 0.7;
        }
    }

    @media (max-width: 767.98px) {
        .small-right-card {
            position: absolute;
            right: 8rem;
            top: 15rem;
            margin: 20px;
            width: 270px;
            height: 330px;
            padding: 16px;
            background-color: green;
            box-shadow: 1px 1px 46px 5px #000000;
            opacity: 0.7;
        }
    }


    @media screen and (max-width:575.98px){
        .small-right-card {
            position: absolute;
            right: 6rem;
            top: 18rem;
            margin: 20px;
            width: 270px;
            height: 330px;
            padding: 16px;
            background-color: red;
            box-shadow: 1px 1px 46px 5px #000000;
            opacity: 0.7;
        }
    }

</style>
