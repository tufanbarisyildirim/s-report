var $ = jQuery;

var $siteHeader = $('.SiteHeader'),
    heightSiteHeader = $siteHeader.outerHeight(),
    ref = 200,
    currentTop = 0;

$(window).scroll(function () {
    currentTop = $(this).scrollTop();

    if (currentTop <= (heightSiteHeader - ref)) {
        $siteHeader.css({height: heightSiteHeader - currentTop});
    }
}).scroll();


//$('.asd').waypoint(function (direction) {
//    if (direction == 'down') {
//        $(this).addClass('back');
//        $('.dot').addClass('zipla');
//        setTimeout(function () {
//            $('.dot').removeClass('zipla')
//        }, 100);
//    }
//    else {
//        $(this).removeClass('back');
//    }
//}, {
//    offset: function () {
//        return $('.dot').offset().top - $(window).scrollTop() + 3;
//    }
//});