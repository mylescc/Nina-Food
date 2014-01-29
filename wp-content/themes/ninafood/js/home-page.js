

$(document).ready(function(){
    // Assign a variable for the application being used
    var nVer = navigator.appVersion;
    // Assign a variable for the device being used
    var nAgt = navigator.userAgent;
    var nameOffset,verOffset,ix;


    // First check to see if the platform is an iPhone or iPod
    if(navigator.platform == 'iPhone' || navigator.platform == 'iPod'){
        // In Safari, the true version is after "Safari"
        if ((verOffset=nAgt.indexOf('Safari'))!=-1) {
            // Set a variable to use later
            var mobileSafari = 'Safari';
        }
    }




    var window_height = $(window).height();
    var central_text = $('#central-text').height();
    var nav_height = $('nav').height()+80;
    var displace = (window_height-central_text)/2;
    var nav_displace = (window_height-nav_height);
    var width = $(window).width();

    if (width > 768){
        $('#central-text').css('margin-top', displace);
        $('nav').css('margin-top',nav_displace)
    }

    window.onresize = function(){
        if (width > 768){
            var window_height = $(window).height();
            var central_text = $('#central-text').height();
            var nav_height = $('nav').height() + 80;
            var displace = (window_height-central_text)/2;
            var nav_displace = (window_height-nav_height);
            $('#central-text').css('margin-top', displace);
            $('nav').css('margin-top',nav_displace)
        }
    }
    var width = $(window).width();
    console.log(width);
    if (width > 768){
        setInterval('cycleImages()', 7000);
    } else{
        if (mobileSafari == 'Safari') {
            var x = $('#image').height();
            // Height + 60px
            $('#image').css('height',(x + 80)+'px');

        }
    }



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

