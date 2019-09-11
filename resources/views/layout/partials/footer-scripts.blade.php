<!-- Bootstrap core JavaScript

================================================= -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('bootstraprtl/js/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('bootstraprtl/js/bootstrap.js')}}"></script>
<script src="{{asset('bootstraprtl/js/fontawesome.js')}}"></script>
<script src="{{asset('bootstraprtl/js/proper.js')}}"></script>


<script>
    $(document).ready(function () {
        $("#select-home-btn").click(function () {
            $("#call").show();
            $("#select-home").hide();
        });

    });
// room filtering script
    $(document).ready(function () {
        $("#select-home-btn").click(function () {
            $("#call").show();
            $("#select-home").hide();
        });
    });
    //    image select

    $(document).ready(function () {
        $("#img1").click(function () {
            $("#image1").show();
            $("#image2, #image3,#image4").hide();
        });
        $("#img2").click(function () {
            $("#image2").show();
            $("#image1, #image3, #image4").hide();
        });

        $("#img3").click(function () {
            $("#image3").show();
            $("#image1, #image2, #image4").hide();
        });

        $("#img4").click(function () {
            $("#image4").show();
            $("#image1, #image2, #image3").hide();
        });

        $("#showRoom").click(function () {
            $("#seemore").show();
        });
    });
</script>