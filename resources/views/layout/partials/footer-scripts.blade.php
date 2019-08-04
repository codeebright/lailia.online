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
</script>
{{--


<script>
    $(function() {
        $("#my-dropzone").dropzone({
            //url: "/file/post", // If not using a form element
        });

    });

</script>--}}
