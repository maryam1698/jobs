(function($) {
    "use strict";

    var tpj = jQuery;
    var revapi24;



  	// preloader js //
    jQuery(window).on('load', function() {
			setTimeout(function(){
			jQuery('.jb_preloader').addClass('loaded');
		}, 1000);
		});



    // on ready function
    jQuery(document).ready(function($) {
	
	
	document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");
	
	
	
	// scroll funtion
	
	
	(function() {
			function getRandomInt(min, max) {
				return Math.floor(Math.random() * (max - min + 1)) + min;
			}

			[].slice.call(document.querySelectorAll('.isolayer')).forEach(function(el) {
				new IsoGrid(el, {
					type : 'scrollable',
					transform : 'translateX(17vw) translateY(550px) rotateX(42deg) rotateZ(0deg)',
					stackItemsAnimation : {
						properties : function(pos) {
							return {
								translateZ: (pos+1) * 50,
								rotateZ: getRandomInt(-3, 3)
							};
						},
						options : function(pos, itemstotal) {
							return {
								type: dynamics.bezier,
								duration: 500,
								points: [{"x":0,"y":0,"cp":[{"x":0.2,"y":1}]},{"x":1,"y":1,"cp":[{"x":0.3,"y":1}]}],
								//delay: (itemstotal-pos-1)*40
							};
						}
					},
					onGridLoaded : function() {
						classie.add(document.body, 'grid-loaded');
					}
				});
			});
		})();


 // ===== Scroll to Top ==== 
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 100) {
                $('#return-to-top').fadeIn(200);
            } else {
                $('#return-to-top').fadeOut(200);
            }
        });
        $('#return-to-top').on('click', function() {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
        });
		

  $.scrollIt({
        upKey: 38, // key code to navigate to the next section
        downKey: 40, // key code to navigate to the previous section
        easing: 'linear', // the easing function for animation
        scrollTime: 1000, // how long (in ms) the animation takes
        activeClass: 'active', // class given to the active nav element
        onPageChange: null, // function(pageIndex) that is called when page is changed
        topOffset: 0 // offste (in px) for fixed top navigation
    });

			
//-----js chat box --------//
	$(function() {
  var INDEX = 0; 
  $("#chat-submit").on('click', function(e) {
    e.preventDefault();
    var msg = $("#chat-input").val(); 
    if(msg.trim() == ''){
      return false;
    }
    generate_message(msg, 'self');
    var buttons = [
        {
          name: 'Existing User',
          value: 'existing'
        },
        {
          name: 'New User',
          value: 'new'
        }
      ];
    setTimeout(function() {      
      generate_message(msg, 'user');  
    }, 1000)
    
  })
  
  function generate_message(msg, type) {
    INDEX++;
    var str="";
    str += "<div id='cm-msg-"+INDEX+"' class=\"chat-msg "+type+"\">";
    str += "          <span class=\"assets/img/ct.png\">";
    str += "            <img src=\"assets/img/ct.png\">";
    str += "          <\/span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msg;
    str += "          <\/div>";
    str += "        <\/div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);
    if(type == 'self'){
     $("#chat-input").val(''); 
    }    
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000);    
  }  
  
  function generate_button_message(msg, buttons){    
    /* Buttons should be object array 
      [
        {
          name: 'Existing User',
          value: 'existing'
        },
        {
          name: 'New User',
          value: 'new'
        }
      ]
    */
    INDEX++;
    var btn_obj = buttons.map(function(button) {
       return  "              <li class=\"button\"><a href=\"javascript:;\" class=\"btn btn-primary chat-btn\" chat-value=\""+button.value+"\">"+button.name+"<\/a><\/li>";
    }).join('');
    var str="";
    str += "<div id='cm-msg-"+INDEX+"' class=\"chat-msg user\">";
    str += "          <span class=\"assets/img/ct2.png\">";
    str += "            <img src=\"assets/img/ct2.png\">";
    str += "          <\/span>";
    str += "          <div class=\"cm-msg-text\">";
    str += msg;
    str += "          <\/div>";
    str += "          <div class=\"cm-msg-button\">";
    str += "            <ul>";   
    str += btn_obj;
    str += "            <\/ul>";
    str += "          <\/div>";
    str += "        <\/div>";
    $(".chat-logs").append(str);
    $("#cm-msg-"+INDEX).hide().fadeIn(300);   
    $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000);
    $("#chat-input").attr("disabled", true);
  }
  
  $(document).delegate(".chat-btn", "click", function() {
    var value = $(this).attr("chat-value");
    var name = $(this).html();
    $("#chat-input").attr("disabled", false);
    generate_message(name, 'self');
  })
  
  $("#chat-circle").on('click', function() {    
    $("#chat-circle").toggle('scale');
    $(".chat-box").toggle('scale');
  })
  
  $(".chat-box-toggle").on('click', function() {
    $("#chat-circle").toggle('scale');
    $(".chat-box").toggle('scale');
  })
  
})


	
	// land	  
				  
	$('.landing-item-inner').hover(function()
	{
		var $img = $(this).find('img'),
		imgHtoAnimate = $img.height() - $(this).height();
		$(this).find('img').stop().animate({marginTop: -(imgHtoAnimate)}, 5000);
	},
	function()
	{
		$(this).find('img').stop().animate({marginTop: 0},2500);
	});
	
 });

})(jQuery);	