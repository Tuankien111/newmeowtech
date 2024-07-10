
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-2EDYP4WHHD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-2EDYP4WHHD');
  </script>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Meta Data -->
  <meta name="description" content="Real time Dashboard.">
  <meta name="description" content="Data Solutions.">
  <meta name="description" content="MEOW HOUSE TECHNOLOGY CO., LTD.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" type="image/x-icon" href="{{asset('storage/assets/media/favicon.png')}}">
  <title>Real time Dashboard - Dark Style</title>

  <link
          rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css')}}"
  />
  <link
          href="https://fonts.googleapis.com/css?family=Montserrat"
          rel="stylesheet"
  />

  <link
          rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}"
  />
  <link rel="stylesheet" href="{{asset('storage/realtimedb_assets/styles.css')}}" />
</head>

<body>
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "102964414429279");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v16.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_GB/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<!--cache for 1 year-->
<?php
    header("Cache-Control: max-age=31536000");
?>
<div id="wrapper">
  <div class="content-area">
    <div class="container-fluid">
      <div class="text-right mt-3 mb-3 d-fixed">
        <a
                href="{{route('home')}}"
                target="_blank"
                class="btn btn-outline-warning mr-2"
        >
          <span class="btn-text">MeowTech</span>
        </a>
      </div>
      <div class="main">
        <div class="row mt-4">
          <div class="col-md-5">
            <div class="box columnbox mt-4">
              <div id="columnchart"></div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="box  mt-4">
              <div id="linechart"></div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-5">
            <div class="box radialbox mt-4">
              <div id="circlechart"></div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="box mt-4">
              <div class="mt-4">
                <div id="progress1"></div>
              </div>
              <div class="mt-4">
                <div id="progress2"></div>
              </div>
              <div class="mt-4">
                <div id="progress3"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="{{asset('storage/realtimedb_assets/apexcharts.js')}}"></script>
<script src="{{asset('storage/realtimedb_assets/scripts.js')}}"></script>
</body>
</html>
