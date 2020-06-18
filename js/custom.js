(function($) {

    /*-----------------------------------------------------------------------------------*/
    /*	Menu Dropdown Control
     /*-----------------------------------------------------------------------------------*/
    $('.main-nav li').hover(function(){
        $(this).children('ul').stop(true, true).slideDown(500);
    },function(){
        $(this).children('ul').stop(true, true).slideUp(500);
    });

    $('.sub-menu li').click(function(){
        window.location = $(this).children('a').attr('href');
    });

    $(window).on( 'load', function () {
        setTimeout(function() {
            if( $(".twitter-timeline-rendered").contents().find(".timeline-Tweet").length > 0 )
            $(".twitter-timeline-rendered").contents().find(".timeline-Tweet").css("background-color","transparent");
        }, 1000);
    });
    /*-----------------------------------------------------------------------------------*/
    /*	Responsive Nav
     /*-----------------------------------------------------------------------------------*/
    if ( typeof localized !== 'undefined' ) {
        let $mainNav    = $('.main-nav > div').children('ul');
        let optionsList = '<option value="" selected>'+ localized.nav_title +'</option>';

        $mainNav.find('li').each(function() {
            let $this   = $(this),
                $anchor = $this.children('a'),
                depth   = $this.parents('ul').length - 1,
                indent  = '';
            if( depth ) {
                while( depth > 0 ) {
                    indent += ' - ';
                    depth--;
                }
            }
            optionsList += '<option value="' + $anchor.attr('href') + '">' + indent + ' ' + $anchor.text() + '</option>';
        }).end();

        $('.main-nav > div').after('<select class="responsive-nav">' + optionsList + '</select>');

        $('.responsive-nav').on('change', function() {
            window.location = $(this).val();
        });
    }


    /*-----------------------------------------------------------------------------------*/
    /*	Live Search
     /*-----------------------------------------------------------------------------------*/
    if(jQuery().liveSearch && typeof localized !== 'undefined' ){
        $('#s').liveSearch({
            url: localized.home_url + '?livesearch=used&s='
        });
    }



    /*-----------------------------------------------------------------------------------*/
    /* Apply Class on search form widget inputs
    /*-----------------------------------------------------------------------------------*/
    $("#searchform #s").addClass("span3 search-query");
    $("#searchform #searchsubmit").addClass("btn");



    /*-----------------------------------------------------------------------------------*/
    /*	Page's Nav
     /*-----------------------------------------------------------------------------------*/
    $(".pages-nav a").addClass("btn");



    /*-----------------------------------------------------------------------------------*/
    /*	Tags Cloud
    /*-----------------------------------------------------------------------------------*/
    $('.tagcloud a').removeAttr('style').addClass('btn btn-mini');



    /*-----------------------------------------------------------------------------------*/
	/* Pretty Photo Lightbox
	/*-----------------------------------------------------------------------------------*/
    if( jQuery().prettyPhoto )
    {
        $(".pretty-photo").prettyPhoto({
            deeplinking: false,
            social_tools: false
        });

        $('a[data-rel]').each(function() {
            $(this).attr('rel', $(this).data('rel'));
        });

        $("a[rel^='prettyPhoto']").prettyPhoto({
            deeplinking: false,
            social_tools: false
        });
    }
		


	/* ---------------------------------------------------- */
	/*	Accordion
	/* ---------------------------------------------------- */
    $(function() {
		$('.accordion dt').click(function(){
			$(this).siblings('dt').removeClass('current');
			$(this).addClass('current').next('dd').slideDown(500).siblings('dd').slideUp(500);
		});	
    });



	/* ---------------------------------------------------- */
	/*	Toggle
	/* ---------------------------------------------------- */
    $(function() {
		$('dl.toggle dt').click(function(){
			if($(this).hasClass('current')){
				$(this).removeClass('current').next('dd').slideUp(500);
			}				
			else{
				$(this).addClass('current').next('dd').slideDown(500);
			}
		});	 
    });



	/*-----------------------------------------------------------------------------------*/
	/*	Scroll to Top
	/*-----------------------------------------------------------------------------------*/	
    $(function() {
        $(window).scroll(function () {
            if(!$('body').hasClass('probably-mobile'))
            {
                if ($(this).scrollTop() > 50) {
                    $('a#scroll-top').fadeIn();
                } else {
                    $('a#scroll-top').fadeOut();
                }
            }
            else
            {
                $('a#scroll-top').fadeOut();
            }
        });

        $('a#scroll-top').on('click', function(){
            if(!$('body').hasClass('probably-mobile'))
            {
                $('html, body').animate({scrollTop:0}, 'slow' );
                return false;
            }
        });
    });



	/* ---------------------------------------------------- */
	/*	Tabs
	/* ---------------------------------------------------- */
    $(function(){

        let $tabsNav    = $('.tabs-nav'),
            $tabsNavLis = $tabsNav.children('li');

        $tabsNav.each(function(){
            let $this = $(this);
            $this.next().children('.tab-content').stop(true,true).hide()
                                                 .first().show();
            $this.children('li').first().addClass('active').stop(true,true).show();
        });

        $tabsNavLis.on('click', function(e) {
            let $this = $(this);
            $this.siblings().removeClass('active').end()
                 .addClass('active');
            let idx = $this.parent().children().index($this);
            $this.parent().next().children('.tab-content').stop(true,true).hide().eq(idx).fadeIn();
            e.preventDefault();
        });

    });



	 /* ---------------------------------------------------- */
	 /*  Responsive Tables by ZURB
	 /*	  Foundation v2.1.4 http://foundation.zurb.com
	 /* ---------------------------------------------------- */
	  let switched = false;
	  let updateTables = function() {
		if (($(window).width() < 767) && !switched ){
		  switched = true;
		  $("table.responsive").each(function(i, element) {
			splitTable($(element));
		  });
		  return true;
		}
		else if (switched && ($(window).width() > 767)) {
		  switched = false;
		  $("table.responsive").each(function(i, element) {
			unsplitTable($(element));
		  });
		}
	  };
	   
	  $(window).load(updateTables);
	  $(window).bind("resize", updateTables);
	   
		
		function splitTable(original)
		{
			original.wrap("<div class='table-wrapper' />");
			
			let copy = original.clone();
			copy.find("td:not(:first-child), th:not(:first-child)").css("display", "none");
			copy.removeClass("responsive");
			
			original.closest(".table-wrapper").append(copy);
			copy.wrap("<div class='pinned' />");
			original.wrap("<div class='scrollable' />");
		}
		
		function unsplitTable(original) {
            original.closest(".table-wrapper").find(".pinned").remove();
            original.unwrap();
            original.unwrap();
		}



    /* ---------------------------------------------------- */
    /*	Like Button JS
     /* ---------------------------------------------------- */
    $('#like-it-form .like-it').click(function(){
        let $like_button = $(this);
        if(!$like_button.hasClass('already-voted'))
        {
            let options = {
                success: function(data){
                    $like_button.html( '<i class="fa fa-thumbs-o-up"></i>' + data).addClass('already-voted');
                }
            };

            $('#like-it-form').ajaxSubmit(options);
        }
    });



    /*-----------------------------------------------------------------------------------*/
    /*	FAQs
    /*-----------------------------------------------------------------------------------*/
    $('.faq-item').not('.faq-item.active').find('.faq-answer').slideUp('slow');
    $('.faq-item').first().addClass('active').find('.faq-answer').slideDown('slow');

    $('.faq-question, .faq-icon').click(function(e){

        e.preventDefault();

        let $this = $(this);
        let $parent = $this.parent('.faq-item');

        if( $parent.hasClass('active') )
        {
            $parent.removeClass('active').find('.faq-answer').slideUp('slow');
        }
        else
        {
            $parent.addClass('active').find('.faq-answer').slideDown('slow');
        }

    });



    /*-----------------------------------------------------------------------------------*/
    /*	Contact Form 7
    /*-----------------------------------------------------------------------------------*/
    $('.wpcf7-textarea').addClass('span6');
    $('.wpcf7-submit').addClass('btn');
    $('.button').not('.logout-link').addClass('btn');


    /*-----------------------------------------------------------------------------------*/
    /*	Search Form Validation
     /*-----------------------------------------------------------------------------------*/
    $('#search-form').validate({
        errorLabelContainer: $("#search-error-container")
    });

    /*----------------------------------------------------------------------------------*/
    /*	Contact Form AJAX validation and submition
    /*  Validation Plugin : http://bassistance.de/jquery-plugins/jquery-plugin-validation/
    /*	Form Ajax Plugin : http://www.malsup.com/jquery/form/
    /*---------------------------------------------------------------------------------- */
    if( jQuery().validate && jQuery().ajaxSubmit ) {

        let contact_options = {
            // target: '#message-sent',
            beforeSubmit: function(){
                $('#contact-loader').fadeIn('fast');
                $('#message-sent').fadeOut('fast');
                $("div.error-container").fadeOut('fast')
            },
            success: function( ajax_response, statusText, xhr, $form) {
                let response = $.parseJSON ( ajax_response );
                $('#contact-loader').fadeOut('fast');
                if( response.success ) {
                    $form.resetForm();
                    $('#message-sent').html( response.message ).fadeIn('fast');
                } else {
                    $('div.error-container').html( response.message ).fadeIn('fast');
                }
            }
        };

        $('#contact-form').validate({
            errorLabelContainer: $("div.error-container"),
            submitHandler: function(form) {
                $(form).ajaxSubmit(contact_options);
            }
        });

    }

})(jQuery);
