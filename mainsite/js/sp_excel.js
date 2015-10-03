$(document).ready(function()
{

    //sp_slider
    var sp_head_ht = $("header").outerHeight();
    var hk_abs_nav_ht = $("nav").height();
    //var sp_foot_ht = $("footer").outerHeight();
    var viewport_ht = $(window).height();
    var sp_secondary_nav_ht = $("#sp_secondary_nav").outerHeight();
    var newsfeed_ht = $("#newsfeed").outerHeight();
    
    var sp_slide_container_ht = viewport_ht - sp_head_ht - sp_secondary_nav_ht - hk_abs_nav_ht-newsfeed_ht;//-sp_foot_ht
    var totslides = 0;
    var cur_slidenum = 0;
    var sp_left = $("#sp_slide_left");//left button
    var sp_right = $("#sp_slide_right");//right button
    var sp_slides = $(".sp_slide");
    var a = [], b = 0, sp_flag_slide = 0;
    var sp_jump = 1, sp_go = 0, sp_temp = 0; //specify jump needed to go to slide number
    var sp_indicators = $(".sp_indictr");
    var sp_ind_cur;


    sp_slides.each(function()
    {
        a[b++] = $(this).attr("data-sp-slide-title");


    });//acquires the heading 

    //-20 to be added if showing parallax at bottom
    $("#sp_slide_container").css({height: sp_slide_container_ht + "px"});//height according to header and footer

    $(".sp_slide").each(function()//positioning slides
    {
        $(this).css({left: 25 * totslides + "%"});
        totslides++;
    });

    //put this data attribute to slide onto required slide
    $("[data-sp-slide-to]").click(function()
    {
        sp_go = parseInt($(this).attr("data-sp-slide-to"));//gettting value to slide-- set this attribute
        sp_temp = sp_go - cur_slidenum - 1;
        sp_jump = Math.abs(sp_temp);//already neg for sp_left therfore sp_jmp abs

        sp_temp > 0 ? sp_right.click() : sp_left.click();

    });


    setTitle();
    sp_check_leftandright();

    function setFlag()
    {
        sp_flag_slide = 0;
    }
    function setTitle()
    {
        $("#sp_slide_title").text(a[cur_slidenum]);
    }
    sp_right.click(function()
    {
        if (cur_slidenum + sp_jump < totslides && sp_flag_slide == 0)
        {
            sp_flag_slide = 1;
            cur_slidenum += sp_jump;
            TweenMax.to("#sp_slides", 0.6, {left: "-=" + 100 * sp_jump + "%", ease: Back.easeOut});
            TweenMax.to("#sp_secondary_nav_title", 0.3, {left: "+=10%", autoAlpha: 0, onComplete: setTitle});


            TweenMax.to("#sp_secondary_nav_title", 0.6, {left: "0%", autoAlpha: 1, delay: 0.3, onComplete: setFlag});

        }
        sp_check_leftandright();

    });
    sp_left.click(function()
    {
        if (cur_slidenum - sp_jump >= 0 && sp_flag_slide == 0)
        {
            sp_flag_slide = 1;
            cur_slidenum -= sp_jump;
            TweenMax.to("#sp_slides", 0.6, {left: "+=" + 100 * sp_jump + "%", ease: Back.easeOut});
            TweenMax.to("#sp_secondary_nav_title", 0.3, {left: "-=10%", autoAlpha: 0, onComplete: setTitle});




            TweenMax.to("#sp_secondary_nav_title", 0.6, {left: "0%", autoAlpha: 1, delay: 0.3, onComplete: setFlag});

        }
        sp_check_leftandright();

    });

    $(window).keyup(function(event)
    {
        if (event.keyCode == 37)//left arrow key
        {
            sp_left.click();
        }
        if (event.keyCode == 39)//right ARROW key
        {
            sp_right.click();
        }
    });


    function sp_check_leftandright()//check and show < > symbols
    {

        if (cur_slidenum == totslides - 1)
            TweenMax.to(sp_right, 0.6, {autoAlpha: 0});


        if (cur_slidenum < totslides - 1)
            TweenMax.to(sp_right, 0.6, {autoAlpha: 1});


        if (cur_slidenum == 0)
            TweenMax.to(sp_left, 0.6, {autoAlpha: 0});


        if (cur_slidenum >= 1)
            TweenMax.to(sp_left, 0.6, {autoAlpha: 1});

        sp_jump = 1;//very important!! jump distance resetting.
        sp_ind_cur = sp_indicators.get(cur_slidenum);
        $(sp_ind_cur).addClass("active").siblings().removeClass("active");


    }

    //checkk :) :)
    CSSPlugin.defaultTransformPerspective = 50;
//    $(".sp_slide").click(function()
//    {
//        TweenMax.to("body", 0.5, {z: 20, autoAlpha: 0, ease: Power3.easeOut});
//
//    });


    //sp_sponsor_slide
    var sp_spons = $(".sp_spons_slide");
    var sp_spons_ar = [];
    var sp_spons_left1 = 35;//starting left offset

    var sp_spons_width = sp_spons.outerWidth();
    var sp_spons_gap = 10; //gap  between spons circles
    var sp_spons_left2 = sp_spons_left1 + sp_spons_width + sp_spons_gap;

    TweenMax.to(sp_spons.get(0), 0.1, {autoAlpha: 1});
    TweenMax.to(sp_spons.get(1), 0.1, {left: sp_spons_left2, autoAlpha: 1});

    var sp_temp_ar;
    sp_spons.each(function(i)
    {
        sp_spons_ar[i] = $(this);
    });
    setInterval(function()

    {
        TweenMax.to(sp_spons_ar[0], 0.5, {left: -15, autoAlpha: 0});
        TweenMax.to(sp_spons_ar[1], 0.5, {left: sp_spons_left1});
        TweenMax.fromTo(sp_spons_ar[2], 0.5, {left: sp_spons_left2, bottom: -40, autoAlpha: 0}, {left: sp_spons_left2, bottom: 0, autoAlpha: 1});
        sp_temp_ar = sp_spons_ar.shift();
        sp_spons_ar.push(sp_temp_ar);
    }, 6000);
    //-15 and -30 are ending and starting positions for animatn resp.

    //sliding arrows
    TweenMax.to("#sp_slide_right", 0.5, {right: "1.5%", repeat: -1, yoyo: true});
    TweenMax.to("#sp_slide_left", 0.5, {left: "1.5%", repeat: -1, yoyo: true});

    //parallax initialisation
    $('.parallax').parallax();//1690x1127

});
