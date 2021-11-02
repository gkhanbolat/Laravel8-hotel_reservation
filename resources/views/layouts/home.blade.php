<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Gokhan BOLAT">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Holiday</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/flexslider.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/templatemo-style.css" rel="stylesheet">



</head>
<body>

<script type="text/javascript" src="{{asset('assets')}}/js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
<script type="text/javascript" src="{{asset('assets')}}/js/moment.js"></script>							<!-- moment.js -->
<script type="text/javascript" src="{{asset('assets')}}/js/bootstrap.min.js"></script>					<!-- bootstrap js -->
<script type="text/javascript" src="{{asset('assets')}}/js/bootstrap-datetimepicker.min.js"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.flexslider-min.js"></script>
<!--
	<script src="js/froogaloop.js"></script>
	<script src="js/jquery.fitvid.js"></script>
-->
<script type="text/javascript" src="{{asset('assets')}}/js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
<script>
    // HTML document is loaded. DOM is ready.
    $(function() {

        $('#hotelCarTabs a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })

        $('.date').datetimepicker({
            format: 'MM/DD/YYYY'
        });
        $('.date-time').datetimepicker();

        // https://css-tricks.com/snippets/jquery/smooth-scrolling/
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    // Load Flexslider when everything is loaded.
    $(window).load(function() {
        // Vimeo API nonsense

        /*
                      var player = document.getElementById('player_1');
                      $f(player).addEvent('ready', ready);

                      function addEvent(element, eventName, callback) {
                        if (element.addEventListener) {
                          element.addEventListener(eventName, callback, false)
                        } else {
                          element.attachEvent(eventName, callback, false);
                        }
                      }

                      function ready(player_id) {
                        var froogaloop = $f(player_id);
                        froogaloop.addEvent('play', function(data) {
                          $('.flexslider').flexslider("pause");
                        });
                        froogaloop.addEvent('pause', function(data) {
                          $('.flexslider').flexslider("play");
                        });
                      }
        */



        // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
        /*

                      $(".flexslider")
                        .fitVids()
                        .flexslider({
                          animation: "slide",
                          useCSS: false,
                          animationLoop: false,
                          smoothHeight: true,
                          controlNav: false,
                          before: function(slider){
                            $f(player).api('pause');
                          }
                      });
        */




//	For images only
        $('.flexslider').flexslider({
            controlNav: false
        });


    });
</script>
@include('home._header')

@section('content')

@show


@include('home._footer')
@yield('footerjs')


</body>
</html>
