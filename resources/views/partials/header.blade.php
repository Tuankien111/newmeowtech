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
            xfbml: true,
            version: 'v16.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!--cache for 1 year-->
<?php
header('Cache-Control: max-age=31536000');
?>


<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<a href="#main-wrapper" id="backto-top" class="back-to-top">
    <i class="fa-solid fa-arrow-turn-up"></i>
</a>

<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->

<div class="my_switcher d-none d-lg-block">
    <ul>
        <li title="Light Mode">
            <a href="javascript:void(0)" class="setColor light" data-theme="light">
                <i class="fa-solid fa-sun"></i>
            </a>
        </li>
        <li title="Dark Mode">
            <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                <i class="fas fa-moon"></i>
            </a>
        </li>
    </ul>
</div>

<div id="main-wrapper" class="main-wrapper">
