<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Nina</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="styles/main.css"/>
    <link rel="stylesheet" href="styles/home.css"/>
</head>

<body>
<div id="image" class="carousel slide">
    <div id="image-1" class="item active"></div>
    <div id="image-2" class="item"></div>
    <div id="image-4" class="item"></div>
</div>
<div id="central-text">
    <h1>Nina</h1>
    <h2>A Food Company</h2>
</div>
<!--<nav>-->
<!--    <ul>-->
<!--        <li><a href="/book">book</a></li>-->
<!--        <li><a href="/parties">parties</a></li>-->
<!--        <li >-->
<!--            <a id="ice-cream">ice cream and cake</a>-->
<!--            <ul id="ice-cream-sub">-->
<!--                <li><a href="/van">Van</a></li>-->
<!--                <li><a href="/food">Food</a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li><a href="/press">press</a></li>-->
<!--        <li>-->
<!--            <a id="news">news</a>-->
<!--            <ul id="news-sub">-->
<!--                <li><a href="http://blog.ninafood.com">blog</a></li>-->
<!--                <li><a href="/twitter">twitter</a></li>-->
<!--                <li><a href="/facebook">facebook</a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li><a href="/story">story</a></li>-->
<!--    </ul>-->
<!--</nav>-->
<div class="container">
    <nav class="navbar">
        <ul class="nav navbar-nav">
            <li><a href="/book.php">book</a></li>
            <li><a href="/parties.php">parties</a></li>
            <li class="dropdown">
                <a id="ice-cream"  class="dropdown-toggle" data-toggle="dropdown">ice cream and cake</a>
                <ul id="ice-cream-sub" class="dropdown-menu">
                    <li><a href="/van.php">Van</a></li>
                    <li><a href="/food.php">Food</a></li>
                </ul>
            </li>
            <li><a href="/press.php">press</a></li>
            <li>
                <a id="news" class="dropdown-toggle" data-toggle="dropdown">news</a>
                <ul id="news-sub" class="dropdown-menu">
                    <li><a target="_blank" href="http://www.ninaicecream.com/">blog</a></li>
                    <li><a  target="_blank" href="https://twitter.com/antoninaparker">twitter</a></li>
                    <li><a target="_blank" href=" https://www.facebook.com/afoodcompany">facebook</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>



<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
<script src="js/jquery/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<script>
    var window_height = $(window).height();
    var central_text = $('#central-text').height();
    var nav_height = $('nav').height()+80;
    var displace = (window_height-central_text)/2;
    var nav_displace = (window_height-nav_height);


    $('#central-text').css('margin-top', displace);
    $('nav').css('margin-top',nav_displace)
    window.onresize = function(){
        var window_height = $(window).height();
        var central_text = $('#central-text').height();
        var nav_height = $('nav').height() + 80;
        var displace = (window_height-central_text)/2;
        var nav_displace = (window_height-nav_height);
        $('#central-text').css('margin-top', displace);
        $('nav').css('margin-top',nav_displace)
    }

    $(document).ready(function(){
        setInterval('cycleImages()', 7000);
    })

    function cycleImages(){
        var $active = $('#image .active');
        var $next = ($active.next().length > 0) ? $active.next() : $('#image div:first');
        $next.css('z-index',2);//move the next image up the pile
        $active.fadeOut(1500,function(){//fade out the top image
            $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
            $next.css('z-index',3).addClass('active');//make the next image the top one
        });
    }

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-46030708-1', 'ninafood.com');
    ga('send', 'pageview');

</script>

</body>
</html>
