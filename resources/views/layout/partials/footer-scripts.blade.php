{{--Bootstrap core JavaScript--}}
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('bootstraprtl/js/jquery-3.3.1.min.js')}}"></script>
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

    // Room Filtering Script
    $(document).ready(function () {
        $("#select-home-btn").click(function () {
            $("#call").show();
            $("#select-home").hide();
        });
    });

    //Image Select
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

    //Login & Register Script
    //main-page script
        $(document).ready(function () {
            $("#btn-login").click(function () {
                $("#second").show();
                $("#first").hide();
            });
            $("#btn-register").click(function () {
                $("#third").show();
                $("#first").hide();
            });
            $("#login-register").click(function () {
                $("#third").show();
                $("#second").hide();
            });

            $("#register-login").click(function () {
                $("#second").show();
                $("#third").hide();
            });
        });

        // Ajax Function
        function makeRequest(url,params,div_id)
        {
          $.ajax({
            url:url,
            type:'post',
            data:params,
            success: function(data){

            },
            error :function( jqXhr,data ) {

                if( jqXhr.status === 401 ) //redirect if not authenticated user.
                    $( location ).prop( 'pathname', 'auth/login' );
                if( jqXhr.status === 422 ) {
                //process validation errors here.
                var errors = jqXhr.responseJSON.errors; //this will get the errors response data.
                //show them somewhere in the markup
                errorsHtml = '<div class="alert alert-danger">';
                var i = 0;
                $.each( errors, function( key, value ) {
                    errorsHtml +=  value[0] ; //showing only the first error.
                    if(i==0)
                    {
                      return false;
                    }
                });
                errorsHtml += '</di>';
                $( '#'+div_id).html( errorsHtml ); //appending to a <div id="form-errors"></div> inside form
                } else {
                    /// do some thing else
                }
            }
          })
        }


// Login Function
function login(url,form_id,div_id)
{
  var data = $('#'+form_id).serialize();
  makeRequest(url,data,div_id);
}

</script>
