<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>link & head style</title>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{{asset('bootstraprtl/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('bootstraprtl/css/hover.css')}}">
<link rel="stylesheet" href="{{asset('bootstraprtl/css/fonts.css')}}">
<!---------------admin page link -------------->

<link rel="stylesheet" href="https://cdn.rawgit.com/enyo/dropzone/master/dist/dropzone.css">

<link rel="stylesheet" href="{{asset('bootstraprtl/css/teststyle2.css')}}">
<link rel="stylesheet" href="{{asset('bootstraprtl/css/teststyle.css')}}">
<link rel="stylesheet" href="{{asset('bootstraprtl/fonts/material-design-iconic-font.min.css')}}">
<link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">



<!-- Custom styles for this template -->
<link rel="stylesheet" href="{{asset('bootstraprtl/css/custom.css')}}">
<style>
    #call, #image2, #image3, #image4 {
        display: none;
    }


    /*-----------------  make card horizontal   --------------*/

    .card-horizontal {
        /*width: 100%;*/
        height: 85px;
        background-color: lavender;
        display: flex;
        flex: 1 1 auto;
    }

    /* small-right-card / description-card-style */
    .small-right-card {
        position: absolute;
        right: 0;
        top: 12rem;
        margin: 20px;
        max-width: 340px;
        padding: 16px;
        background-color: white;
        box-shadow: 2px 2px 2px 2px gray;
    }
    /*end*/

    .hostel{
        background-image: url("khana%20image/bulding.jpeg");
        box-sizing: border-box;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height: 640px;
        margin: 0;
        padding: 0;
    }

    /* right side card top and right margin*/
    div.round{
        border-style: dotted;
        width: 100px;
        height: 100px;
        border-radius: 50% 50% 50% 50%;

    }

    /*--------  rounded images style  -----------*/
    .round-img{
        width:90px;
        height: 90px;
        border-radius: 50%;
    }


    /* Collapse-style */
    .btn-text b{display:inline}
    .btn-text:not(.collapsed)  span{display:none}
    .btn-text.collapsed b {display:none}

    .items-collection label.btn-default.active{
        background-color:#007ba7;
        color:#FFF;
    }
    .items-collection label.btn-default{
        /*width:90%;*/
        border:1px solid #305891;
        margin:5px;
        border-radius: 3px;
        color: #3333338f;
    }
    .items-collection .btn-group {
        width: 100%;
        height: 49px;
    }
    .items-collection label .itemcontent {
        width: 100%;
    }

    .dropzone {
        border: 2px dashed #dedede;
        border-radius: 5px;
        background: #f5f5f5;
        height: 80px;

    }

    .dropzone i{
        font-size: 4rem;
    }

    .dropzone .dz-message {
        color: rgba(0,0,0,.54);
        font-weight: 100px;
        font-size: initial;
        text-transform: lowercase;
    }

/*room filtering style*/
    .new-post header,
    .posts header {
        margin-bottom: 20px;
    }

    .posts .post {
        padding-right: 10px;
        border-right: 3px solid #aaaab1;
        /*margin-bottom: -1px;*/
    }

    .info {
        color: red;
        font-style: italic;
    }

    #call, #image2, #image3, #image4, #seemore {
        display: none;
    }

    /**/
    .txt-line {
        display: flex;
        flex-direction: row;
        text-align: center;
    }

    .txt-line:after {
        content: "";
        flex: 1 1;
        border-bottom: 1px solid #dddddd;
        margin: 6px 16px 5px 16px;
    }
    .food-img{
        height: 100px;
    }



    /*-----------------  hostel details style by mojtaba   --------------*/

    /*-----------------  make card horizontal   --------------*/

    .card-horizontal {
        /*width: 100%;*/
        height: 85px;
        background-color: lavender;
        display: flex;
        flex: 1 1 auto;
    }

    /* small-right-card / description-card-style */
    .small-right-card {
        position: absolute;
        right: 4rem;
        top: 21rem;
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

    /* right side card top and right margin*/
    div.round{
        padding-top: 1.5rem;
        padding-right: 2rem;
        width: 180px;
        height: 180px;
        border-radius: 50% 50% 50% 50%;
    }

    /*--------  rounded images style  -----------*/
    .round-img{
        width:120px;
        height: 120px;
        border-radius: 50%;
    }


    /* Collapse-style */
    .btn-text b{display:inline}
    .btn-text:not(.collapsed)  span{display:none}
    .btn-text.collapsed b {display:none}

</style>
