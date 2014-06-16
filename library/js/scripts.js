/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function() {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

            checkCookie();
        

        function createCookie(name,value,days) {
            if (days) {
                var date = new Date();
                date.setTime(date.getTime()+(days*24*60*60*1000));
                var expires = "; expires="+date.toGMTString();
            }
            else var expires = "";
            document.cookie = name+"="+value+expires+"; path=/";
        }

        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }

        function checkCookie() {
            var x = readCookie('ppkcookie1');
            console.log(x);
            if (x == null) {
                 createCookie('ppkcookie1','testcookie',7);
                $(".countires-container").removeClass('isset');
                $("body").attr('id','no-country-selected');
           
            }
            else {
                     $("body").attr('id','foundCookie');
            }
        }

        function eraseCookie(name) {
            createCookie(name,"",-1);
        }

    /*
    Responsive jQuery is a tricky thing.
    There's a bunch of different ways to handle
    it, so be sure to research and find the one
    that works for you best.
    */

    /* getting viewport width */
    var responsive_viewport = $(window).width();

    /* if is below 481px */
    if (responsive_viewport < 481) {

    } /* end smallest screen */

    /* if is larger than 481px */
    if (responsive_viewport > 481) {

    } /* end larger than 481px */

    /* if is above or equal to 768px */
    if (responsive_viewport >= 768) {

        /* load gravatars */
        $('.comment img[data-gravatar]').each(function() {
            $(this).attr('src', $(this).attr('data-gravatar'));
        });

    }

    if (responsive_viewport < 1030) {

        $(function() {

            //Swiper Content
            var contentSwiper = $('#swiper-cont-2').swiper({
                onSlideChangeStart: function() {
                    updateNavPosition()
                }
            })
            //Nav
            var navSwiper = $('#swiper-nav-2').swiper({
                visibilityFullFit: true,
                slidesPerView: 'auto',
                //Thumbnails Clicks
                onSlideClick: function() {
                    contentSwiper.swipeTo(navSwiper.clickedSlideIndex)
                }
            })

            //Update Nav Position

                function updateNavPosition() {
                    $('#swiper-nav-2 .active-nav').removeClass('active-nav')
                    var activeNav = $('#swiper-nav-2 .swiper-slide').eq(contentSwiper.activeIndex).addClass('active-nav')
                    if (!activeNav.hasClass('swiper-slide-visible')) {
                        if (activeNav.index() > navSwiper.activeIndex) {
                            var thumbsPerNav = Math.floor(navSwiper.width / activeNav.width()) - 1
                            navSwiper.swipeTo(activeNav.index() - thumbsPerNav)
                        } else {
                            navSwiper.swipeTo(activeNav.index())
                        }
                    }
                }
        })

        $(function() {

            //Swiper Content
            var contentSwiper = $('#swiper-cont-3').swiper({
                onSlideChangeStart: function() {
                    updateNavPosition()
                }
            })
            //Nav
            var navSwiper = $('#swiper-nav-3').swiper({
                visibilityFullFit: true,
                slidesPerView: 'auto',
                //Thumbnails Clicks
                onSlideClick: function() {
                    contentSwiper.swipeTo(navSwiper.clickedSlideIndex)
                }
            })

            //Update Nav Position

                function updateNavPosition() {
                    $('#swiper-nav-3 .active-nav').removeClass('active-nav')
                    var activeNav = $('#swiper-nav-3 .swiper-slide').eq(contentSwiper.activeIndex).addClass('active-nav')
                    if (!activeNav.hasClass('swiper-slide-visible')) {
                        if (activeNav.index() > navSwiper.activeIndex) {
                            var thumbsPerNav = Math.floor(navSwiper.width / activeNav.width()) - 1
                            navSwiper.swipeTo(activeNav.index() - thumbsPerNav)
                        } else {
                            navSwiper.swipeTo(activeNav.index())
                        }
                    }
                }
        })


    }

    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {

    	            $('#swiper-nav-2').hide();
                    $('#swiper-nav-3').hide();

    }

    // add all your scripts here




    $(function() {

        $( ".countires-container" ).click(function() {
           $( ".countires-container" ).toggleClass('isset');
           $("body").removeAttr('id');
        });

        //Swiper Content
        var contentSwiper = $('#swiper-cont').swiper({
            onSlideChangeStart: function() {
                updateNavPosition()
            }
        })
        //Nav
        var navSwiper = $('#swiper-nav').swiper({
            visibilityFullFit: true,
            slidesPerView: 'auto',
            //Thumbnails Clicks
            onSlideClick: function() {
                contentSwiper.swipeTo(navSwiper.clickedSlideIndex)
            }
        })

        //Update Nav Position

            function updateNavPosition() {
                $('#swiper-nav .active-nav').removeClass('active-nav')
                var activeNav = $('#swiper-nav .swiper-slide').eq(contentSwiper.activeIndex).addClass('active-nav')
                if (!activeNav.hasClass('swiper-slide-visible')) {
                    if (activeNav.index() > navSwiper.activeIndex) {
                        var thumbsPerNav = Math.floor(navSwiper.width / activeNav.width()) - 1
                        navSwiper.swipeTo(activeNav.index() - thumbsPerNav)
                    } else {
                        navSwiper.swipeTo(activeNav.index())
                    }
                }
            }
    })

    $('#select-default').bind("click", toggle);

    $("#select-default a").click(function() {
             e.preventDefault();
             $(this).addClass("clicked");
    });

    function toggle() {
        if ($('#select-dropdown').hasClass('open')) {
            collapse();
        } else {
            expand();
        }
    }
    function expand() {
        $('#select-dropdown').removeClass('closed').addClass('open');

        options = $('.select');

        options.each(function(index) {
            var layer = options.length - index;
            $(this).css("top", 52 * index + "px");
            $(this).css("width", 70);
        });
    }   
    function collapse() {
        $('#select-dropdown').removeClass('open').addClass('closed');

        options = $('.select');
        options.each(function(index) {
            var layer = options.length - index;
            $(this).css("top", 0 + "px");
            $(this).css("width", 70 - 2 * index);
        });
    }

    $('.option').bind("click", select);

    function select() {
        if ($('#select-dropdown').hasClass('open')) {
            var selection = $(this).text();
            $('#select-default').text(selection);
            var data = $(this).data("id");

            window.dropdown = data;
            console.log(window.dropdown);

            collapse();
        } else {
            expand();
        }
    }

    collapse();


}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w) {
    // This fix addresses an iOS bug, so return early if the UA claims it's something else.
    if (!(/iPhone|iPad|iPod/.test(navigator.platform) && navigator.userAgent.indexOf("AppleWebKit") > -1)) {
        return;
    }
    var doc = w.document;
    if (!doc.querySelector) {
        return;
    }
    var meta = doc.querySelector("meta[name=viewport]"),
        initialContent = meta && meta.getAttribute("content"),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
        x, y, z, aig;
    if (!meta) {
        return;
    }

    function restoreZoom() {
        meta.setAttribute("content", enabledZoom);
        enabled = true;
    }

    function disableZoom() {
        meta.setAttribute("content", disabledZoom);
        enabled = false;
    }

    function checkTilt(e) {
        aig = e.accelerationIncludingGravity;
        x = Math.abs(aig.x);
        y = Math.abs(aig.y);
        z = Math.abs(aig.z);
        // If portrait orientation and in one of the danger zones
        if (!w.orientation && (x > 7 || ((z > 6 && y < 8 || z < 8 && y > 6) && x > 5))) {
            if (enabled) {
                disableZoom();
            }
        } else if (!enabled) {
            restoreZoom();
        }
    }
    w.addEventListener("orientationchange", restoreZoom, false);
    w.addEventListener("devicemotion", checkTilt, false);
})(this);
