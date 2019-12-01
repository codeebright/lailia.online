
<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>Metronic | Login Page - 5</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <link href="{{asset('assets/vendors/base/vendors.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/demo/demo11/base/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/style.css')}}" rel="stylesheet" type="text/css" />

</head>
<body>



<div class="row">
	<div class="small-12 medium-2 large-2 columns">
		<div class="circle">
			<!-- User Profile Image -->
			<img class="profile-pic" src="http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg">

			<!-- Default Image -->
			<!-- <i class="fa fa-user fa-5x"></i> -->
		</div>
		<div class="p-image">
			<i class="fa fa-camera upload-button"></i>
			<input class="file-upload" type="file" accept="image/*"/>
		</div>
	</div>
</div>




<script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/demo/demo11/base/scripts.bundle.js')}}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Scripts -->
<script src="{{asset('assets/snippets/custom/pages/user/login.js')}}" type="text/javascript"></script>

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
=======
<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>Metronic | Login Page - 5</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- <link href="{{asset('assets/vendors/base/vendors.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/demo/demo11/base/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" /> -->
      <link href="{{asset('assets/demo/demo11/base/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/style.css')}}" rel="stylesheet" type="text/css" />

</head>
<body>

  <div class="wrapper">
    <!-- <header>
      <h1>Stock photo</h1>
      <span>ID: 5988014</span>
    </header> -->

    <!-- <div class="ways">
      <ul>
        <li class="active">
          submit
        </li>
        <li>
          discussion
        </li>
      </ul>
    </div> -->

    <div class="sections">

      <section class="active">
        <input type="text" placeholder="Title" id="title"/>
        <!-- <select id="category">
          <option value="summmer">summer</option>
          <option value="winter">winter</option>
          <option value="working">working</option>
          <option value="road">road</option>
        </select> -->

        <!-- <div class="select-option">
          <div class="head">Category</div>
          <div class="option"></div>
        </div> -->


        <div class="images">
          <div class="pic">
            add
          </div>
        </div>


      </section>

      <section>
        <input type="text" placeholder="Topic" id="topic"/>
        <textarea placeholder="something..." id="msg"></textarea>
      </section>

    </div>

    <footer>
      <ul>
        <li><span id="reset">reset</span></li>
        <li><span id="send">send</span></li>
      </ul>
    </footer>

  </div>
  <div class="notification"></div>






<script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/base/test.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/demo/demo11/base/scripts.bundle.js')}}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Scripts -->
<script src="{{asset('assets/snippets/custom/pages/user/login.js')}}" type="text/javascript"></script>

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
