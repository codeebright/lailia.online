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
</style>
<style>

    /*-----------------  making hostel pages last-time  ------*/
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

</style>
<style>
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
</style>


<style>
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




/*


    html, body {
        height: 100%;
    }
    #actions {
        margin: 2em 0;
    }


    !* Mimic table appearance *!
    div.table {
        display: table;
    }
    div.table .file-row {
        display: table-row;
    }
    div.table .file-row > div {
        display: table-cell;
        vertical-align: top;
        border-top: 1px solid #ddd;
        padding: 8px;
    }
    div.table .file-row:nth-child(odd) {
        background: #f9f9f9;
    }



    !* The total progress gets shown by event listeners *!
    #total-progress {
        opacity: 0;
        transition: opacity 0.3s linear;
    }

    !* Hide the progress bar when finished *!
    #previews .file-row.dz-success .progress {
        opacity: 0;
        transition: opacity 0.3s linear;
    }

    !* Hide the delete button initially *!
    #previews .file-row .delete {
        display: none;
    }

    !* Hide the start and cancel buttons and show the delete button *!

    #previews .file-row.dz-success .start,
    #previews .file-row.dz-success .cancel {
        display: none;
    }
    #previews .file-row.dz-success .delete {
        display: block;
    }
    */


</style>
