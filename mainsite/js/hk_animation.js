window.onload = function() {
    home();
    $("#screencover").remove();
    events();
    talks();
    proshow();


    Materialize.toast('Arrow keys to navigate.', 2600);
    Materialize.toast('Click on cards for details.', 3000);
    
  


};

function home() {
    var hmdoc = document.getElementById("home_svg").contentDocument;

    var hmmachine = hmdoc.getElementById("home_machine");
    var hmlogo = hmdoc.getElementById("home_logo");
    var hmwheel = hmdoc.getElementById("home_wheel");
    var hmpointer = hmdoc.getElementById("home_pointer");
    var hminspire = hmdoc.getElementById("home_inspire");
    var hminnovate = hmdoc.getElementById("home_innovate");
    var hmengineer = hmdoc.getElementById("home_engineer");
    var hmrecipe = hmdoc.getElementById("home_recipe");
    var hmspring = hmdoc.getElementById("home_spring");
    var hmmpart = hmdoc.getElementsByClassName("m_part");

    var hmtline = new TimelineLite();

    hmtline.set(hmmachine, {y: "-120%"});
    hmtline.set(hmrecipe, {y: "350%"});
    hmtline.set(hmlogo, {x: "-300%"});
    hmtline.set(hminspire, {scaleY: "1.6", transformOrigin: "50% 100%"});
    hmtline.set(hminnovate, {scaleY: "1.8", transformOrigin: "50% 100%"});
    hmtline.set(hmengineer, {scaleY: "1.5", transformOrigin: "50% 100%"});

    hmtline.timeScale(1);

    hmtline.to(hmrecipe, 0.5, {y: "0%", ease: Quad.easeOut})
            .to(hmmachine, 0.6, {y: "0%", ease: Bounce.easeOut})
            .to(hminspire, 0.7, {scaleY: "0.3", transformOrigin: "50% 100%", ease: Quad.easeOut})
            .to(hminnovate, 0.7, {scaleY: "0.4", transformOrigin: "50% 100%", ease: Quad.easeOut}, "-=0.5")
            .to(hmengineer, 0.7, {scaleY: "0.1", transformOrigin: "50% 100%", ease: Quad.easeOut}, "-=0.4")
            .to(hmpointer, 1, {rotation: "80", transformOrigin: "80% 95%", ease: Elastic.easeOut}, "-=0.5")
            .to(hmwheel, 1, {rotation: "270", transformOrigin: "50% 50%", ease: Quad.easeInOut}, "-=0.5")
            .to(hmlogo, 1.5, {x: "320%", ease: Quad.easeInOut}, "-=1.3");

    //.staggerTo(ltaud, 0.8, {y: "0%", ease: Quad.easeOut}, 0.5, '-=0.5');

    hmtline.to(hmmachine, 0.6, {y: "-120%", ease: Quad.easeOut}, "+=2")
            .to(hmrecipe, 0.5, {y: "350%", ease: Quad.easeOut})
            .to(hmpointer, 1, {rotation: "-80", transformOrigin: "80% 95%", ease: Elastic.easeOut}, "-=0.5")
            .to(hmwheel, 1, {rotation: "-270", transformOrigin: "50% 50%", ease: Quad.easeInOut}, "-=0.5");

    hmtline.set(hmmachine, {y: "-120%"});
    hmtline.set(hmrecipe, {y: "350%"});
    hmtline.set(hmlogo, {x: "-300%"});
    hmtline.set(hminspire, {scaleY: "1.6", transformOrigin: "50% 100%"});
    hmtline.set(hminnovate, {scaleY: "1.8", transformOrigin: "50% 100%"});
    hmtline.set(hmengineer, {scaleY: "1.5", transformOrigin: "50% 100%"});

    setInterval(function() {

        hmtline.to(hmrecipe, 0.5, {y: "0%", ease: Quad.easeOut})
                .to(hmmachine, 0.6, {y: "0%", ease: Bounce.easeOut})
                .to(hminspire, 0.7, {scaleY: "0.3", transformOrigin: "50% 100%", ease: Quad.easeOut})
                .to(hminnovate, 0.7, {scaleY: "0.4", transformOrigin: "50% 100%", ease: Quad.easeOut}, "-=0.5")
                .to(hmengineer, 0.7, {scaleY: "0.1", transformOrigin: "50% 100%", ease: Quad.easeOut}, "-=0.4")
                .to(hmpointer, 1, {rotation: "80", transformOrigin: "80% 95%", ease: Elastic.easeOut}, "-=0.5")
                .to(hmwheel, 1, {rotation: "270", transformOrigin: "50% 50%", ease: Quad.easeInOut}, "-=0.5")
                .to(hmlogo, 1.5, {x: "320%", ease: Quad.easeInOut}, "-=1.3");

        //.staggerTo(ltaud, 0.8, {y: "0%", ease: Quad.easeOut}, 0.5, '-=0.5');

        hmtline.to(hmmachine, 0.6, {y: "-120%", ease: Quad.easeOut}, "+=2")
                .to(hmrecipe, 0.5, {y: "350%", ease: Quad.easeOut})
                .to(hmpointer, 1, {rotation: "-80", transformOrigin: "80% 95%", ease: Elastic.easeOut}, "-=0.5")
                .to(hmwheel, 1, {rotation: "-270", transformOrigin: "50% 50%", ease: Quad.easeInOut}, "-=0.5");

        hmtline.set(hmmachine, {y: "-120%"});
        hmtline.set(hmrecipe, {y: "350%"});
        hmtline.set(hmlogo, {x: "-300%"});
        hmtline.set(hminspire, {scaleY: "1.6", transformOrigin: "50% 100%"});
        hmtline.set(hminnovate, {scaleY: "1.8", transformOrigin: "50% 100%"});
        hmtline.set(hmengineer, {scaleY: "1.5", transformOrigin: "50% 100%"});

    }, 9000);

}


function events() {
    var evdoc = document.getElementById("events_svg").contentDocument;

    var evmonitor = evdoc.getElementById("events_monitor");
    var evtrack = evdoc.getElementById("events_track");
    var evcode = evdoc.getElementById("events_code");
    var evrobo1 = evdoc.getElementById("events_robo1");
    var evrobo2 = evdoc.getElementById("events_robo2");

    var evtline = new TimelineLite();

    evtline.set(evtrack, {x: "-100%"});
    evtline.set(evcode, {opacity: "0", scale: "0"});
    evtline.set(evmonitor, {y: "150%"});
    evtline.set(evrobo1, {y: "-200%"});
    evtline.set(evrobo2, {y: "-200%"});

    evtline.timeScale(1);

    $(evdoc).on("click", function() { //for navigation
        if (navigator.userAgent.indexOf("Firefox") != -1)
        {
            window.location.href = "competitions.php";
        } else
            window.location.href = "../../competitions.php";
    });

    evtline.to(evrobo1, 0.7, {y: "0%", ease: Bounce.easeOut})
            .to(evrobo2, 0.5, {y: "0%", ease: Bounce.easeOut}, "-=0.4")
            .to(evmonitor, 0.5, {y: "0%", ease: Quad.easeOut})
            .to(evcode, 0.7, {opacity: "1", scale: "1", ease: Elastic.easeOut})
            .to(evcode, 0.3, {opacity: "0", scale: "0", ease: Quad.easeIn}, "+=0.8")
            .to(evmonitor, 0.5, {y: "150%", ease: Quad.easeIn})
            .to(evtrack, 0.5, {x: "0%", ease: Quad.easeOut})
            .to(evrobo1, 1.5, {x: "-500%"})
            .to(evrobo2, 1.5, {x: "420%"}, "-=1.4")
            .to(evrobo1, 0.2, {y: "-45%", ease: Quad.easeOut}, "-=1.4")
            .to(evrobo1, 0.2, {y: "-0%", ease: Quad.easeOut}, "-=0.8")
            .to(evtrack, 0.5, {x: "100%", ease: Quad.easeOut}, "-=0.5")
            .to(evmonitor, 0.5, {y: "0%", ease: Quad.easeOut})
            .to(evcode, 0.7, {opacity: "1", scale: "1", ease: Elastic.easeOut});

    evtline.to(evcode, 0.3, {opacity: "0", scale: "0"}, "+=0.8")
            .to(evmonitor, 0.5, {y: "150%", ease: Quad.easeIn})
            .to(evtrack, 2.5, {x: "-100%", ease: Quad.easeOut})
            .to(evrobo1, 1, {x: "0%"}, "-=1.8")
            .to(evrobo2, 1, {x: "0%"}, "-=1.8")
            .to(evrobo1, 0.2, {y: "-45%", ease: Quad.easeOut}, "-=1.7")
            .to(evrobo1, 0.2, {y: "-0%", ease: Quad.easeOut}, "-=1.3")
            .to(evrobo1, 0.3, {y: "-200%"})
            .to(evrobo2, 0.3, {y: "-200%"});

    setInterval(function() {

        evtline.to(evrobo1, 0.7, {y: "0%", ease: Bounce.easeOut})
                .to(evrobo2, 0.5, {y: "0%", ease: Bounce.easeOut}, "-=0.4")
                .to(evmonitor, 0.5, {y: "0%", ease: Quad.easeOut})
                .to(evcode, 0.7, {opacity: "1", scale: "1", ease: Elastic.easeOut})
                .to(evcode, 0.3, {opacity: "0", scale: "0", ease: Quad.easeIn}, "+=0.8")
                .to(evmonitor, 0.5, {y: "150%", ease: Quad.easeIn})
                .to(evtrack, 0.5, {x: "0%", ease: Quad.easeOut})
                .to(evrobo1, 1.5, {x: "-500%"})
                .to(evrobo2, 1.5, {x: "420%"}, "-=1.4")
                .to(evrobo1, 0.2, {y: "-45%", ease: Quad.easeOut}, "-=1.4")
                .to(evrobo1, 0.2, {y: "-0%", ease: Quad.easeOut}, "-=0.8")
                .to(evtrack, 0.5, {x: "100%", ease: Quad.easeOut}, "-=0.5")
                .to(evmonitor, 0.5, {y: "0%", ease: Quad.easeOut})
                .to(evcode, 0.7, {opacity: "1", scale: "1", ease: Elastic.easeOut});

        evtline.to(evcode, 0.3, {opacity: "0", scale: "0"}, "+=0.8")
                .to(evmonitor, 0.5, {y: "150%", ease: Quad.easeIn})
                .to(evtrack, 2.5, {x: "-100%", ease: Quad.easeOut})
                .to(evrobo1, 1, {x: "0%"}, "-=1.8")
                .to(evrobo2, 1, {x: "0%"}, "-=1.8")
                .to(evrobo1, 0.2, {y: "-45%", ease: Quad.easeOut}, "-=1.7")
                .to(evrobo1, 0.2, {y: "-0%", ease: Quad.easeOut}, "-=1.3")
                .to(evrobo1, 0.3, {y: "-200%"})
                .to(evrobo2, 0.3, {y: "-200%"});

    }, 14000);

}

function talks() {
    var ltdoc = document.getElementById("talks_svg").contentDocument;

    var ltboard = ltdoc.getElementById("talk_board");
    var ltman = ltdoc.getElementById("talk_man");
    var ltpodium = ltdoc.getElementById("talk_podium");
    var ltaud = ltdoc.getElementsByClassName("talk_aud");
    var ltbar = ltdoc.getElementsByClassName("talk_bar");
    var ltplot = ltdoc.getElementsByClassName("talk_plot");


    var lttline = new TimelineLite();

    lttline.set(ltpodium, {y: "-200%"});
    lttline.set(ltman, {y: "200%"});
    lttline.set(ltboard, {x: "200%"});
    lttline.set(ltbar, {opacity: "0"});
    lttline.set(ltplot, {opacity: "0"});
    lttline.set(ltaud, {y: "100%"});

    lttline.timeScale(1);


    $(ltdoc).on("click", function() { //for navigation
        if (navigator.userAgent.indexOf("Firefox") != -1)
        {
            window.location.href = "lecturesTalksWorkshops.php";
        } else
            window.location.href = "../../lecturesTalksWorkshops.php";
    });

    lttline.to(ltpodium, 0.7, {y: "0%", ease: Bounce.easeOut})
            .to(ltman, 0.3, {y: "0%", ease: Quad.easeOut}, '-=0.1')
            .to(ltboard, 0.3, {x: "0%", ease: Quad.easeOut})
            .staggerTo(ltbar, 0.4, {opacity: "1", ease: Quad.easeOut}, 0.2)
            .staggerTo(ltplot, 0.4, {opacity: "1", ease: Quad.easeOut}, 0.2, '-=1')
            .staggerTo(ltaud, 0.8, {y: "0%", ease: Quad.easeOut}, 0.5, '-=0.5');

    lttline.to(ltaud, 0.8, {y: "100%", ease: Quad.easeIn}, '+=0.8')
            .to(ltplot, 0.1, {opacity: "0"})
            .to(ltbar, 0.1, {opacity: "0"})
            .to(ltman, 0.3, {y: "200%"})
            .to(ltboard, 0.3, {x: "200%"})
            .to(ltpodium, 0.5, {y: "-200%"});

    setInterval(function() {
        lttline.to(ltpodium, 0.7, {y: "0%", ease: Bounce.easeOut})
                .to(ltman, 0.3, {y: "0%", ease: Quad.easeOut}, '-=0.1')
                .to(ltboard, 0.3, {x: "0%", ease: Quad.easeOut})
                .staggerTo(ltbar, 0.4, {opacity: "1", ease: Quad.easeOut}, 0.2)
                .staggerTo(ltplot, 0.4, {opacity: "1", ease: Quad.easeOut}, 0.2, '-=1')
                .staggerTo(ltaud, 0.8, {y: "0%", ease: Quad.easeOut}, 0.5, '-=0.5');

        lttline.to(ltaud, 0.8, {y: "100%", ease: Quad.easeIn}, '+=0.8')
                .to(ltplot, 0.1, {opacity: "0"})
                .to(ltbar, 0.1, {opacity: "0"})
                .to(ltman, 0.3, {y: "200%"})
                .to(ltboard, 0.3, {x: "200%"})
                .to(ltpodium, 0.5, {y: "-200%"});
    }, 8000);

}

function proshow() {
    var psdoc = document.getElementById("proshow_svg").contentDocument;

    var procar = psdoc.getElementById("pro_car");
    var procloud = psdoc.getElementById("pro_cloud");
    var prostar = psdoc.getElementsByClassName("pro_star1");
    var procarpet = psdoc.getElementById("pro_carpet");
    var proground = psdoc.getElementById("pro_ground");

    var pstline = new TimelineLite();

    pstline.set(proground, {y: "100%"});
    pstline.set(procarpet, {y: "100%"});
    pstline.set(procloud, {x: "100%"});
    pstline.set(procar, {x: "-500%"});
    pstline.set(prostar, {opacity: "0", scale: "0.1"});

    pstline.timeScale(0.8);

    $(psdoc).on("click", function() { //for navigation
        if (navigator.userAgent.indexOf("Firefox") != -1)
        {
            window.location.href = "concert.php";
        } else
            window.location.href = "../../concert.php";
    });

    pstline.to(proground, 0.7, {y: "0%", ease: Bounce.easeOut})
            .to(procloud, 0.3, {x: "0%", ease: Quad.easeOut}, "-=0.3")
            .to(procar, 0.5, {x: "0%", ease: Quad.easeOut}, "-=0.1")
            .to(procarpet, 0.5, {y: "0%", ease: Expo.easeOut})
            .staggerTo(prostar, 0.5, {opacity: "1", scale: "1", rotation: 360, transformOrigin: "50% 50%"}, 0.1);

    pstline.to(prostar, 0.5, {opacity: "0", scale: "0.1", rotation: -360, transformOrigin: "50% 50%"}, "+=0.8")
            .to(procarpet, 0.5, {y: "100%", ease: Expo.easeOut})
            .to(procar, 0.5, {x: "-500%%", ease: Quad.easeOut}, "-=0.1")
            .to(procloud, 0.3, {x: "100%", ease: Quad.easeOut}, "-=0.3")
            .to(proground, 0.7, {y: "100%"});

    setInterval(function() {

        pstline.to(proground, 0.7, {y: "0%", ease: Bounce.easeOut})
                .to(procloud, 0.3, {x: "0%", ease: Quad.easeOut}, "-=0.3")
                .to(procar, 0.5, {x: "0%", ease: Quad.easeOut}, "-=0.1")
                .to(procarpet, 0.5, {y: "0%", ease: Expo.easeOut})
                .staggerTo(prostar, 0.5, {opacity: "1", scale: "1", rotation: 360, transformOrigin: "50% 50%"}, 0.1);

        pstline.to(prostar, 0.5, {opacity: "0", scale: "0.1", rotation: -360, transformOrigin: "50% 50%"}, "+=0.8")
                .to(procarpet, 0.5, {y: "100%", ease: Expo.easeOut})
                .to(procar, 0.5, {x: "-500%%", ease: Quad.easeOut}, "-=0.1")
                .to(procloud, 0.3, {x: "100%", ease: Quad.easeOut}, "-=0.3")
                .to(proground, 0.7, {y: "100%"});
    }, 8000);

}