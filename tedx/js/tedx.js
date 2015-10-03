$(document).ready(function()
{
   		
   /* $("body script").each(function()
      {
        if($(this).attr("src") == "js/skrollr.min.js")
        {
              var sk = skrollr.init({
           
          });
          
        }
      });
    */




/*/////////////////////////////////this is temporary*///////////////////////////////////////////////////////////
var r_winh,r_fooh,r_navh,r_regh;
function regresize()
{
  r_winh = $(window).height();
  r_fooh = $("#footer").outerHeight();
  r_navh = $("nav").outerHeight();
  r_regh = $("#ted_register").outerHeight();

if(r_winh>(r_fooh+r_regh+r_navh))
$("#ted_register").css({"height":(r_winh-(r_fooh+r_navh))+"px"});
}

    regresize();
/*/////////////////////////////////this is temporary*///////////////////////////////////////////////////////////



       
var nice = $("html").niceScroll({
            
            scrollspeed:75,
            mousescrollstep:40,
            boxzoom:true,
            zindex:70001,
            hidecursordelay:400,
            cursoropacitymin:0.4,
            cursoropacitymax:0.9,
            cursorwidth:"7px",
            cursorborderradius:"3px",
          });
    //giving appropriate highlight(red) to navbar links
    var title = $("head title").text();
    var t = title.substring(8,title.length).toLowerCase().replace(" ","_");
    $("#nav-parent #" +t ).addClass("redn");

   {
    if(t=="home")
    {

      $("#navbar_cont").removeClass("navbar-fixed-top");
      $("#nav_imgcomp").css({"display":"none"});
      $("#nav_imgmob").css({"display":"none"});

    }
    else
    {
       $("#nav_tedlnk").css({"display":"none"});
    }
  }
 

/*

//calculating how much to move the bottom panel in main page
var vp_height,wht_ht,top_ht,move;

function respond()
{     
      vp_height=$(window).height();
      wht_ht=$("#wht").outerHeight();
      top_ht = $("#top").outerHeight();
      move = vp_height - wht_ht-top_ht;
  

      $("#top").css({"transform":"translateY(-100%)"});
      $("#bottm").css({"transform":"translateY("+move+"px"+")"});
      $("html").getNiceScroll(0).doScrollTop(0,500); 
      $("#main_pg #area").css({"height":vp_height+"px"});
      $("#wht").data("clicked",true);
}
function initialiser()
{
  clearTimeout(t1);
  clearTimeout(t2);
  clearTimeout(t3);
  clearTimeout(t4);
  $(".velocity-animating").velocity("stop", true);
   $(".q").velocity("stop", true);
     $(".q").children().velocity("stop", true);


 $("#q1").velocity({translateY:0,translateZ:0},{delay:1000,duration:0});
 $("#q1").children("#late1").css({"opacity":"0"});
  //$("#q1").css({"transform":"translateZ(0px)","opacity":"0","display":"none"})
 //for q1
 $("#q2").velocity({translateZ:0,opacity:0},{delay:1000,duration:0,display:"none"});
  $("#q2").children("#late1").css({"opacity":"0"});//for q2

  $("#q3").velocity({letterSpacing:"inherit",opacity:0},{delay:1000,duration:0,display:"none"});
 //for q3
 $("#q4").velocity({translateY:700,opacity:0},{delay:1000,duration:0,display:"none"});
  $("#q4").children("#late1").css({"opacity":"0"});//for q4

  $("#q5").velocity({translateZ:0,opacity:0},{delay:1000,duration:0,display:"none"});
  $("#q5").children("#late1").css({"opacity":"0"});//for q5

  $("#q6").velocity({opacity:0},{delay:1000,duration:0,display:"none"});
  $("#q6").children(".op0").css({"opacity":"0"});//for q6

  $("#q7").velocity({opacity:0},{delay:1000,duration:0,display:"none"});
  $("#q7").children(".op0").velocity({left:"0%",opacity:0},{delay:1000,duration:0,display:"block"});//for q7

}

/*var t1,t2,t3,t4;

 $("#wht").click(function()
  {
    if(!$(this).data("clicked"))//front page animation 
    {
      respond();

      $(this).children().eq(0).css({"cursor":"default"}).velocity({opacity:0},{delay:500,duration:1000});
      $("#main_pg #area #close_main").velocity({opacity:1},{delay:2100,duration:1000,display:"block"});//close button
      $("#main_pg #area").velocity({opacity:1},{delay:3000,duration:1000,display:"block"});//full area shown along with first quote
       $("#q1").velocity({opacity:1},{duration:2000,display:"table-cell"})
       $("#q1 #late1").velocity({opacity:1},{delay:4500,duration:2000});//delay for sub quote

      t1 = setTimeout(function()
        {
           $("#q1").velocity({translateZ:-50,opacity:0.6},{duration:2000})
           .velocity({translateY:-1000,opacity:0},{duration:500,display:"none"});
           //first q gone

           $("#q2").velocity({translateZ:+100},{duration:0})
           .velocity({translateZ:0,opacity:1},{delay:2600,duration:500,display:"table-cell"});
          $("#q2 #late1").velocity({opacity:1},{delay:4100,duration:2000});//delay for sub quote
          $("#q2").velocity({opacity:0},{delay:5100,duration:1000,display:"none"})

          $("#q3").velocity({opacity:1},{delay:10000,duration:1000,display:"table-cell"})
                  .velocity({letterSpacing:5,opacity:0},{delay:2000,duration:3000,display:"none"});

        },9000);
     


     t2 =  setTimeout(function()
        {
            $("#q4").velocity({translateY:700},{duration:0})
              .velocity({translateY:0,opacity:1},{delay:1000,easing:"easeInSine",duration:500,display:"table-cell"});
           $("#q4 #late1").velocity({opacity:1},{delay:2500,duration:2000});//delay for sub quote
            $("#q4").velocity({translateY:-700,opacity:0},{delay:4600,duration:500,display:"none"});
           
           $("#q5").velocity({opacity:1},{delay:8100,duration:1000,display:"table-cell"});
                    
            $("#q5 #late1").velocity({opacity:1},{delay:8900,duration:1000});
            $("#q5").velocity({opacity:0,translateZ:70},{delay:2000,duration:800,display:"none"});
                         

        },25000);


       t3 = setTimeout(function()
        {
          $("#q6").velocity({opacity:1},{delay:1000,duration:800,display:"table-cell"});
          $("#q6 #late1").velocity({opacity:1},{delay:2500,duration:1000});
          $("#q6 #late2").velocity({opacity:1},{delay:5000,duration:1000});
          $("#q6 #late3").velocity({opacity:1},{delay:6500,duration:1000});
          $("#q6").velocity({opacity:0},{delay:8000,duration:800,display:"none"});

          $("#q7").velocity({opacity:1},{delay:10800,display:"table-cell"});
          $("#q7 #late1").velocity({left:"5%",opacity:1},{delay:12300,duration:1500});
          $("#q7 #late2").velocity({left:"-5%",opacity:1},{delay:13800,duration:1500});
          $("#q7 #late3").velocity({left:"5%",opacity:1},{delay:15300,duration:1500,complete:function()
            {
              t4 = setTimeout(function()
                {
                   $("#q7 #late4").siblings().fadeOut();
                 },800);
             
            }});
          $("#q7 #late4").velocity({opacity:1},{delay:19800,duration:2000});
          $("#q7").velocity({opacity:0},{delay:16000,duration:800,display:"none",complete:function()
            {
              closeit();
            }});              

        },38000);

    }




      //$(this).css({"height":vp_height,"transform":"translateY(-50%)"});
  });

//this needed..or else opacity wouldnt change for #wht
function closeit()
{
  setTimeout(function()
    {
      $("#close_main").click();
    },1000);
}

 $("#close_main").click(function()
  {
      $("#top").css({"transform":"translateY(0%)"});
      $("#bottm").css({"transform":"translateY(0%)"});
      $("#wht").data("clicked",false);
            initialiser();
       $("#wht").children().eq(0).css({"cursor":"pointer"}).velocity("reverse",{complete:function()
        {
          setTimeout(function()
          {
            $("html").getNiceScroll().resize();
          },500);
          
        }});
       $("#main_pg #area #close_main").velocity({opacity:0},{duration:100,display:"none"});
       $("#main_pg #area").velocity({opacity:0},{delay:500,duration:500,display:"none"});
   

  });
*/


    var navHt,footHt,page4Ht,cont4Ht,cont4Top,pght,contht;
    




    //color for icon bars in button,removing borders and color for navbar as whole 
    $("#navbar_cont .icon-bar").css({"background-color":"#e62b1e"});
    $("#navbar_cont .navbar-toggle").css({"border":"0px"});
    
     //$("#navbar_cont.navbar-inverse").children().css({"color":"rgba(0,0,0,1)");
    
    //when navbar button hovered
    $("#nav_but .icon-bar").css({"transition":"all 0.5s"});
  
    $("#abt_ted").fadeIn().css({"display":"block"}).siblings(".siblings").css({"display":"none"});

    var id;
    $("#ted_about .circle").click(
      function()
      {
        id = $(this).attr("data-id");
        $("#" +id).fadeIn().css({"display":"block"}).siblings(".siblings").css({"display":"none"});
        $("#ted_about .circle").removeClass("clkeffct").addClass("noeffct");
        $(this).addClass("clkeffct").removeClass("noeffct");
      });



  	$(".navbar-header #nav_but").click(
    function ()
    {
      //$("#nav_but .icon-bar").css({"background-color":"white","transform":"width"});
     // $(this).css({"background-color":"#e62b1e"});
     if($(this).data("clicked"))
     {
        T();
        $(this).data("clicked",false);
        
     }
     else
      { 
        unT();
        $(this).data("clicked",true);
        
      }
     
    }).data("clicked",true);

  	function T()
    {
      $("#ib1").css({"transform":"translate(0,-200%)"});
      $("#ib2").css({"transform":"rotate(90deg) scale(1,1.8)"});
      $("#ib3").css({"transform":"translate(0,-700%)"});
    }
    function unT()
    {
      $("#ib1").css({"transform":"translate(0,0%)"});
      $("#ib2").css({"transform":"rotate(0deg) scale(1,1)"});
      $("#ib3").css({"transform":"translate(0,0%)"});
    }


    $("#navbar_cont .navbar-collapse").css({"border":"none","box-shadow":"none"});

    //if window width decreased.
    var width_wind=0,height_wind=0;
    function windowsize()
    {
      
      width_wind=$(window).width();
      height_wind = $(window).height();


      {
        if(width_wind<height_wind)
        {
          
          $("#overlay img").css({"transform":"translate(-50%,-50%) rotate(90deg)","max-width":"90%","max-height":"90%"});
          $("#overlay #l").removeClass("middlev_abs left_btp").addClass("middleh_abs_rt90 top");
           $("#overlay #r").removeClass("middlev_abs right").addClass("middleh_abs_rt90 bottom");
           $("#overlay #close").removeClass("close_h").addClass("close_v");
          if(width_wind<560)
          {
           
          }
          
        }
        else
        {
         
          $("#overlay img").css({"transform":"translate(-50%,-50%)","max-width":"80%","max-height":"80%"});
           $("#overlay #l").removeClass("middleh_abs_rt90 top").addClass("middlev_abs left_btp");
           $("#overlay #r").removeClass("middleh_abs_rt90 bottom").addClass("middlev_abs right");
           $("#overlay #close").removeClass("close_v").addClass("close_h");
          
          
        }
        
      
      }

      if(width_wind<768)
        {
           //$("#navbar_cont.navbar-inverse").css({"background-color":"rgb(220,220,220)"});
           $("#nav_imgcomp").css({"display":"none"});
           return true;
        }
        else
        {
          //$("#navbar_cont.navbar-inverse").css({"background-color":"white"});
          if(!(t=="home"))
            $("#nav_imgcomp").css({"display":"block"});

          return false;
        }
      
    }
  	
    //$("#navbar-main").css({"overflow":"hidden"});

    //window size changed
    var small,foot_height;
     

      
      
    windowsize();
  	$(window).resize(function()
  	{
     
       regresize();
     if($("#wht").data("clicked"))
     {  
       
      respond();
      }
      //$("html").getNiceScroll().resize();


			small = windowsize();
      vp_width = $(window).width();
      vidsize();
      if(!small && $("#navbar-main").hasClass("in"))
      {
        $(".navbar-header #nav_but").click();
      }

      
  	});

    var vp_width = $(window).width();
    vidsize();
    function vidsize()
    {
      if(vp_width<560)
      {
       
        $("#you_vid .over_icons").removeClass("middlev_abs").addClass("dwn");
      
      }
      else{
        
         $("#you_vid .over_icons").removeClass("dwn").addClass("middlev_abs");
      }
    }

    //navbar list item settings
    var text_color,bg_color;
    $("#navbar-main li a").hover(function()
  	{
      $(this).css({"background-color":"rgba(250,250,250,0)"});
  		//color = $(this).css("color");
  		//$(this).css({"color":"red"});
  	},
  	function()
  	{
      
  		//$(this).css({"color":color});
  	});
 
   //validating registration email id
    var email_id;
    
    
    $("#regpg_frm #email").keyup(function(event)
      {
          if(event.keyCode==13)
          {
            $("#em_form #em_submit").click();
          }
      });


    $("#em_form #em_submit").click(function()
      {
        email_id = $("#regpg_frm #email").val();
      
        $("#register_det #alert_email").fadeOut();
        
        if(!(email_id==null || email_id=="")){

          

           $.post("email.php",{name:email_id},function(data){
             
            if(data=="got")
            {
              $("#register_det #alert_email").css({"color":"black","font-weight":"600"}).text("we've got you!").fadeIn();
             
            }
              
            else
            {
              $("#register_det #alert_email").css({"color":"red","font-weight":"600"}).text("Invalid email id. Please enter again.").fadeIn();
            }
            
            $("#regpg_frm #email").val('');

               
          });
        }
         
        else{
         
          $("#register_det #alert_email").css({"color":"red","font-weight":"600"}).text("please enter your email id").fadeIn();
        }
      });



















  //ted speakers js hovering animation and clicking
  // applying post request for display of indivudual speaker page
    var fname,tname,ul,uul;
    


    $("#ted_speakers .encloser").click(function()
      {
         $("#ted_speakers").append("<form id='form' style='display:none;' action='speaker.php' method='post'><input type='text' id='val' name='name'></form>");
        fname = $(this).children(".name").text();
       
       $("#form #val").val(fname);
        $("#form").submit();


       // $.post("speaker.php",{name:fname});
       //window.location.replace("speaker.php");

      });



    $("#ted_speakers .circle_cont").hover(function()
      {
        $(this).children(".encloser").css({"background-color":"rgb(250,100,100)","-moz-box-shadow": "0px 8px 6px -6px black",
          "box-shadow": "0px 8px 6px -6px black"}).siblings(".circle").css({"top":"10%","border-color":"rgb(250,100,100)"});
        $(this).children(".encloser").children(".name").css({"color":"white","bottom":"62%"});
         $(this).children(".encloser").children(".det").fadeIn();

      },
      function()
      {
        $(this).children(".encloser").css({"background-color":"rgb(230,230,230)","-moz-box-shadow": "none",
          "box-shadow": "none"}).siblings(".circle").css({"top":"40%","border-color":"red"});
          $(this).children(".encloser").children(".name").css({"color":"black","bottom":"20%"});
          $(this).children(".encloser").children(".det").fadeOut();
      });


//selecting the video playlist
      var vid="#t_",vnum=2014,vfull;
      $("#you_vid #t_2014").css({"display":"block"});
       $("#you_vid #lvid").click(function()
        {
          vnum++; 
         

          if(vnum==2015)
            vnum=2009;

          if(vnum==2010)
            vnum=2011;

          video(vnum);
        }); 

       $("#you_vid #rvid").click(function()
        {
          vnum--; 

          if(vnum==2010)
            vnum=2009;

          if(vnum==2008)
            vnum=2014;

          video(vnum);
        }); 

       function video(vnum)
       {
        vfull=vid+vnum;
       
          $("#you_vid "+vfull).siblings(".talk").fadeOut().css({"display":"none"});
           $("#you_vid "+vfull).fadeIn().css({"display":"block"});
       }


       $("#round1_det_lnk").click(function(){
		
          $("#round1_det").slideToggle();
       });
       
        $("#round2_det_lnk").click(function(){

          $("#round2_det").slideToggle();
       });
       
        $("#round3_det_lnk").click(function(){

          $("#round3_det").slideToggle();
       });
       
        $("#round4_det_lnk").click(function(){

          $("#round4_det").slideToggle();
       });
       
       $("#ted_teen_spkr .rule_det_lnk").click(function(){
        
          $(this).parent().siblings(".rule_det").slideToggle();
       });
        $("#ted_teen_spkr .leg_det_lnk").click(function(){
       
          $(this).siblings(".rule_det").slideToggle();
       });
       
      $("#ted_teen_spkr #tsh_round_lnk").click(function(){

        $("#ted_teen_spkr #next_det").fadeOut().css({"display":"none"});
        $("#ted_teen_spkr #tsh_rounds").fadeIn().css({"display":"block"});
        $("html").getNiceScroll(0).doScrollTop(0,1000); 
      });
      $("#ted_teen_spkr #next").click(function()
        {
          $("#ted_teen_spkr #next_det").siblings().fadeOut().css({"display":"none"});
          $("#ted_teen_spkr #next_det").fadeIn().css({"display":"block"});
           $("html").getNiceScroll(0).doScrollTop(0,1000); 
        });

      $("#ted_teen_spkr #prev").click(function()
        {
          $("#ted_teen_spkr #first_det").siblings().fadeOut().css({"display":"none"});
          $("#ted_teen_spkr #first_det").fadeIn().css({"display":"block"});
          $("html").getNiceScroll(0).doScrollTop(0,1000); 
        });


      var string,num;
      $("#gal_thumbs .holder").click(function()
        {
          $("#overlay").fadeIn();
         string = $(this).children("img").attr("src");
        
          $("#overlay  img").attr("src",string.substring(0,string.length-6)+".jpg");
        });
      $("#close").click(function()
        {
           $("#overlay").fadeOut();
           ///$("body").css({"overflow":"auto"});
        });

     

      //changing images in overlay
      var img_lg = $("#overlay img");
      var string,num;
      $("#overlay .lft_rt").click(function()
        {
          changeimg($(this).attr("id"));
        });


       function changeimg(chk)
       {

           string = img_lg.attr("src");
          num = parseInt(string.substring(15,string.length-4));
        
  
            if(chk=="l")
            {
              --num;
              if(num==0)
              num=12;
            
            }
            else
            {
              ++num;
              if(num==13)
              num=1;
            }

           img_lg.fadeOut("fast",function()
            {
              img_lg.attr("src","images/gallery/"+num+".jpg").fadeIn();
            });

       }



         //xml loading stuffssss..  
         var x;
   if( (x = $("#ted_speakers").length)>0 || $("#speaker_det").length>0)
   {
         var $nm = $("#ted_speakers .encloser .name");
         var $detls = $("#ted_speakers .encloser .det");
         var $img = $("#ted_speakers .circle img");
         var itr = 0,extsn;

         
         
      $.ajax({
        type:"GET",
        url:"speakers.xml",
        dataType:"xml",
        success:lddata
      });
    }



    function lddata(xml)
      {
        
        $(xml).find("speaker").each(function()
          {

            if(x)
            {
             
               $($nm[itr]).append($(this).find("name").text());
               $($detls[itr]).append($(this).find("span").text() +"...");
               extsn = $(this).find("name").text().toLowerCase().split(" ");
               $($img[itr]).attr("src","images/speakers/" +extsn[0] +".jpg");
               itr++;
            }
            else
            {
             
              if($(this).find("name").text() == $("#speaker_det #name").text())
              {

                $("#speaker_det .details").append($(this).find("data").text());
                return false;
              }
            }
            
          });
      }

 });













