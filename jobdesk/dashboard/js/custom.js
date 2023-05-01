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
		

				/****--------nice select js---------***/
		
			$('select').niceSelect();
			
			
		/*------ Dropify chart Start ------*/
			$(document).ready(function() {

            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('click dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('click dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('click dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });	
	/*------------------ Dropify chart End -------------*/


		function quick_search(){
	'use strict';
	/* Quik search in header on click function */
	var quikSearch = $("#quik-search-btn");
	var quikSearchRemove = $("#quik-search-remove");
	
	quikSearch.on('click',function() {
		$('.dez-quik-search').animate({'width': '100%' });
		$('.dez-quik-search').delay(500).css({'left': '0'  });
    });
    
	quikSearchRemove.on('click',function() {
        $('.dez-quik-search').animate({'width': '0%' ,  'right': '0'  });
		$('.dez-quik-search').css({'left': 'auto'  });
    });	
	/* Quik search in header on click function End*/
}
quick_search();

			
				// Magnific popup-video//
			$('.test-popup-link').magnificPopup({ 
			type: 'iframe',
			iframe: {
				markup: '<div class="mfp-iframe-scaler">'+
					'<div class="mfp-close"></div>'+
					'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
					'<div class="mfp-title">Some caption</div>'+
					'</div>',
				patterns: {
					youtube: {
						index: 'youtube.com/', 
						id: 'v=',
						src: 'https://www.youtube.com/embed/ryzOXAO0Ss0'
					}
				}
			}
			// other options
		});
			
					var wind = $(window);
	$(".loading").fadeOut(500);


    wind.on('scroll', function () {
        $(".skills-progress span").each(function () {
            var bottom_of_object = 
            $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = 
            $(window).scrollTop() + $(window).height();
            var myVal = $(this).attr('data-value');
            if(bottom_of_window > bottom_of_object) {
                $(this).css({
                  width : myVal
                });
            }
        });
    });
	
	
	//--------- pricing wrap switch ------//
	
    $('.switch-wrap').on('click', function() {
      $(this).children('.price-switch, .switch').toggleClass('year-active');
      $('.duration-month').toggleClass('active');
      $('.duration-year').toggleClass('active');
      $('.monthly-rate').toggleClass('hidden');
      $('.yearly-rate').toggleClass('hidden');
    })
	
	
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
    str += "          <span class=\"images/ct.png\">";
    str += "            <img src=\"images/ct.png\">";
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
    str += "          <span class=\"images/ct2.png\">";
    str += "            <img src=\"images/ct2.png\">";
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
	
	
	

 });

})(jQuery);	