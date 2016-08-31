	// Nicescroll
	$(document).ready(
	    function() {
            $(".containerMod").niceScroll({
                cursorcolor:"rgb(123,105,163)",
                background:"rgba(0,0,0,0.2)",
                cursorborder:"0",
                nativeparentscrolling: false,
                zindex:99999
            });
            $("#fullpage").niceScroll({
                cursorcolor:"rgb(123,105,163)",
                background:"rgba(0,0,0,0.2)",
                cursorborder:"0",
                nativeparentscrolling: false,
                zindex:99
            });
            $("body").niceScroll({
                cursorcolor:"rgb(123,105,163)",
                background:"rgba(0,0,0,0.2)",
                cursorborder:"0",
                nativeparentscrolling: false,
                zindex:99
            });
	    }
    );
    // Fixar tamanho de tela nas sessões
    var altura_tela = ($(window).height());
    $(function(){
        $(window).load(function(){ // On load
            $('section').css({'height':(($(window).height()))+'px'});
        });
    });
    // Parallax
    var s = skrollr.init();
	// Hover Menu
	// Função de manter submenus abertos
	$(".menu,.header2 .submenu").hover(function(){
	    $(".header2 .submenu").stop().slideToggle(200);
	});
	// Animação do botão do Menu
	$(".menu").hover(function(){
	    $(".line1").animate({right:"-200%"},300);
	    $(".line2").animate({right:"-200%"},400);
	    $(".line3").animate({right:"-200%"},500);
	}, function() {
		$(".line1,.line2,.line3").animate({right: "0%" },0);
	});
	$(".header2 .serv,.header2 .level2").hover(function(){
	    $(".level2").stop().slideToggle(200);
	});

	// Hover Botão corporativo
	$(".corp_btn").hover(function(){
        $(".corporativo_bg").addClass("widther");
        $(".social_bg").addClass("deswidther");
	    $(".corporativo_bg .bgs").removeClass("greyscale");
	}, function() {
        $(".corporativo_bg").removeClass("widther");
        $(".social_bg").removeClass("deswidther");
	    $(".corporativo_bg .bgs").addClass("greyscale");
	});
	// Hover Botão social
	$(".social_btn").hover(function(){
        $(".social_bg").addClass("widther");
        $(".corporativo_bg").addClass("deswidther");
	    $(".social_bg .bgs").removeClass("greyscale");
	}, function() {
        $(".social_bg").removeClass("widther");
        $(".corporativo_bg").removeClass("deswidther");
	    $(".social_bg .bgs").addClass("greyscale");
	});
	// Deixar os botões Social e Corporativo no topo da Tela ao abrir modale
	$(".corp_btn, .social_btn").click(function(){
	    $("#trabalhamos .inner").animate({top: "0%", margin: "-140px auto auto -335px" }, 1000);
        $("#trabalhamos .inner").css({position: "fixed" });
    });
    // Impedir Scroll ao Abrir modal
    $('.corp_btn, .social_btn').click(function() {
        var $this = $(this);
        $("html,body").on({
            'mousewheel': function(e) {
                if ($("#modal_corp,#modal_social").is(":visible")) {
                  e.preventDefault();
                  e.stopPropagation();
                }
            }
        });
    });
    // Abrir Modal Corporativa
	$(".corp_btn").click(function(){
        $(".corporativo_bg").addClass("widther_imp");
        $(".social_bg").addClass("deswidther_imp");
        $(".corporativo_bg").removeClass("deswidther_imp");
        $(".social_bg").removeClass("widther_imp");
        $(".corp_click").show();
        $(".corp_click").animate({top: "100%", opacity: "1"}, 1000);
        $(".social_click").animate({top: "300%", opacity: "0"}, 700);
        $(".social_click").delay(500).hide(0);
        $("#modal_corp,.fundo").show();
    	$("#modal_social").delay(2000).hide(0);
	    $(".social_btn").addClass("hover");
	    $(this).addClass("click");
        $(".corporativo_bg,.social_bg,#contact,#somos").addClass("blur");
	    $(".social_btn").removeClass("click");
        $("#modal_corp .animate1").animate({top: "30%"}, 1300);
        $("#modal_corp .animate2").animate({top: "32%"}, 2000);
        $("#modal_corp .animate3").animate({top: "30%"}, 1800);
        $("#modal_corp .animate4").animate({top: "32%"}, 1500);
        $("#modal_social .animate1").animate({top: "120%"}, 900);
        $("#modal_social .animate2").animate({top: "180%"}, 1500);
        $("#modal_social .animate3").animate({top: "160%"}, 1200);
        $("#modal_social .animate4").animate({top: "160%"}, 1100);
        $(".header2").clearQueue().animate({"margin-left":'-100%'}, 300);
        $(".media").clearQueue().animate({"left":'-45px'}, 300);
	});
    // Abrir Modal Social
	$(".social_btn").click(function(){
        $(".social_bg").addClass("widther_imp");
        $(".corporativo_bg").addClass("deswidther_imp");
        $(".corporativo_bg").removeClass("widther_imp");
        $(".social_bg").removeClass("deswidther_imp");
        $(".social_click").show();
        $(".social_click").animate({top: "100%", opacity: "1"}, 1000);
        $(".corp_click").animate({top: "300%", opacity: "0"}, 700);
        $(".corp_click").delay(500).hide(0);
    	$("#modal_social,.fundo").show();
    	$("#modal_corp").delay(2000).hide(0);
	    $(".corp_btn").addClass("hover");
	    $(this).addClass("click");
	    $(".corp_btn").removeClass("click");
        $(".corporativo_bg,.social_bg,#contact,#somos").addClass("blur");
        $("#modal_social .animate1").animate({top: "32%"}, 1300);
        $("#modal_social .animate2").animate({top: "32%"}, 2000);
        $("#modal_social .animate3").animate({top: "30%"}, 1800);
        $("#modal_social .animate4").animate({top: "30%"}, 1500);
        $("#modal_corp .animate1").animate({top: "129%"}, 900);
        $("#modal_corp .animate2").animate({top: "180%"}, 1500);
        $("#modal_corp .animate3").animate({top: "160%"}, 1200);
        $("#modal_corp .animate4").animate({top: "160%"}, 1100);
        $(".header2").clearQueue().animate({"margin-left":'-100%'}, 300);
        $(".media").clearQueue().animate({"left":'-45px'}, 300);
	});
	// Fechar Modal
	$(".fundo_close,.close_btn.modal_close,.fundo").click(function(){
        $(".corporativo_bg,.social_bg").removeClass("widther_imp");
        $(".social_bg,.corporativo_bg").removeClass("deswidther_imp");
        $(".corp_click,.social_click").animate({top: "300%", opacity: "0"}, 1000);
		$("#trabalhamos .inner").animate({top: "50%", margin: "-140px auto auto -335px" },1000);
        $("#trabalhamos .inner").css({position: "absolute" });
    	$("#modal_social,#modal_corp,.fundo").delay(1000).hide(0);
	    $(".social_btn,.corp_btn").removeClass("click");
	    $(".social_btn,.corp_btn").removeClass("hover");
        $(".corporativo_bg,.social_bg,#contact,#somos").removeClass("blur");
	    $(".animate1").animate({top: "120%"}, 1500);
	    $(".animate2").animate({top: "180%"}, 1500);
        $(".animate3").animate({top: "160%"}, 1500);
        $(".animate4").animate({top: "160%"}, 1500);
        $(".header2").clearQueue().animate({"margin-left":'0'}, 300);
        $(".media").clearQueue().animate({"left":'15px'}, 300);
        $(".modal_2").animate({top:"100%"}, 1500);
	});
    // Fechar Modal se ESC for pressionada
    $("#modal_social .nices,#modal_corp .nices").keyup(function(e) {
        if (e.keyCode == 27) { // escape key maps to keycode `27`
            $(".corporativo_bg,.social_bg").removeClass("widther_imp");
            $(".social_bg,.corporativo_bg").removeClass("deswidther_imp");
            $(".corp_click,.social_click").animate({top: "300%", opacity: "0"}, 1000);
            $("#trabalhamos .inner").animate({top: "50%", margin: "-140px auto auto -335px" },1000);
            $("#trabalhamos .inner").css({position: "absolute" });
            $("#modal_social,#modal_corp,.fundo").delay(1000).hide(0);
            $(".social_btn,.corp_btn").removeClass("click");
            $(".social_btn,.corp_btn").removeClass("hover");
            $(".corporativo_bg,.social_bg,#contact,#somos").removeClass("blur");
            $(".animate1").animate({top: "120%"}, 1500);
            $(".animate2").animate({top: "180%"}, 1500);
            $(".animate3").animate({top: "160%"}, 1500);
            $(".animate4").animate({top: "160%"}, 1500);
            $(".header2").clearQueue().animate({"margin-left":'0'}, 300);
            $(".media").clearQueue().animate({"left":'15px'}, 300);
            $(".modal_2").animate({top:"100%"}, 1500);
        }
    });
	// Fechar modal corporativo se chegar ao fim do scroll
    // $('#modal_corp .nices').bind('scroll', function() {
        
    //     var $nices_corp = $('#modal_corp .nices');
        
    //     if ($nices_corp.scrollTop() + $nices_corp.innerHeight() >= this.scrollHeight) {
    //         $("#trabalhamos .inner").animate({top: "50%", margin: "-91px auto auto -335px" });
    //         $("#trabalhamos .inner").css({position: "absolute" });
    //         $("#modal_social,#modal_corp,.corp_click,.social_click,.fundo").delay(500).hide();
    //         $(".social_btn,.corp_btn").removeClass("click");
    //         $(".social_btn,.corp_btn").removeClass("hover");
    //         $(".animate1").animate({top: "60%"}, 1500);
    //         $(".animate2").animate({top: "90%"}, 1500);
    //         $(".animate3").animate({top: "80%"}, 1500);
    //         $(".animate4").animate({bottom: "-20%"}, 1500);
    //         $(".header2").clearQueue().animate({"margin-left":'0'}, 300);
    //         $(".media").clearQueue().animate({"margin-right":'0'}, 300);
    //     }
    // });
    // Fechar modal social se chegar ao fim do scroll
    // $('#modal_social .nices').bind('scroll', function() {
        
    //     var $nices_social = $('#modal_social .nices');
        
    //     if ($nices_social.scrollTop() + $nices_social.innerHeight() >= this.scrollHeight) {
    //         $("#trabalhamos .inner").animate({top: "50%", margin: "-91px auto auto -335px" });
    //         $("#trabalhamos .inner").css({position: "absolute" });
    //         $("#modal_social,#modal_corp,.corp_click,.social_click,.fundo").delay(500).hide();
    //         $(".social_btn,.corp_btn").removeClass("click");
    //         $(".social_btn,.corp_btn").removeClass("hover");
    //         $(".animate1").animate({top: "60%"}, 1500);
    //         $(".animate2").animate({top: "90%"}, 1500);
    //         $(".animate3").animate({top: "80%"}, 1500);
    //         $(".animate4").animate({bottom: "-20%"}, 1500);
    //         $(".header2").clearQueue().animate({"margin-left":'0'}, 300);
    //         $(".media").clearQueue().animate({"margin-right":'0'}, 300);
    //     }
    // });
    // Modal 2
    // Corporativo
    $("#modal_corp .btn_iluminacao,#modal_corp .btn_som,#modal_corp .btn_imagem,#modal_corp .btn_energia").click(function(){
        $("#modal_corp .modal_2").animate({top: "0%"}, 1500);
        $("#trabalhamos .inner").animate({top: "-100%"}, 1000);
        $(".modal_2 .close_btn").show();
    })
    $("#modal_corp .btn_iluminacao").click(function(){
        $(".ilumination").show();
        $(".ilumination .containerMod").animate({left:"0%"});
        $(".ilumination .is-checked").trigger('click');
        $(".sound,.image,.energy").hide();
        $(".sound .containerMod,.image .containerMod,.energy .containerMod").css({left:"100%"});
    })
    $("#modal_corp .btn_som").click(function(){
        $(".sound").show();
        $(".sound .containerMod").animate({left:"0%"});
        $(".sound .is-checked").trigger('click');
        $(".ilumination,.image,.energy").hide();
        $(".ilumination .containerMod,.image .containerMod,.energy .containerMod").css({left:"100%"});
    })
    $("#modal_corp .btn_imagem").click(function(){
        $(".image").show();
        $(".image .containerMod").animate({left:"0%"});
        $(".image .is-checked").trigger('click');
        $(".ilumination,.sound,.energy").hide();
        $(".ilumination .containerMod,.sound .containerMod,.energy .containerMod").css({left:"100%"});
    })
    $("#modal_corp .btn_energia").click(function(){
        $(".energy").show();
        $(".energy .containerMod").animate({left:"0%"});
        $(".energy .is-checked").trigger('click');
        $(".ilumination,.sound,.image").hide();
        $(".ilumination .containerMod,.sound .containerMod,.image .containerMod").css({left:"100%"});
    })
    // Social
    $("#modal_social .btn_iluminacao,#modal_social .btn_som,#modal_social .btn_imagem,#modal_social .btn_energia").click(function(){
        $("#modal_social .modal_2").animate({top: "0%"}, 1500);
        $("#trabalhamos .inner").animate({top: "-100%"}, 1000);
        $(".modal_2 .close_btn").show();
    })
    $("#modal_social .btn_iluminacao").click(function(){
        $(".ilumination").show();
        $(".ilumination .containerMod").animate({left:"0%"});
        $(".ilumination .is-checked").trigger('click');
        $(".sound,.image,.energy").hide();
        $(".sound .containerMod,.image .containerMod,.energy .containerMod").css({left:"100%"});
    })
    $("#modal_social .btn_som").click(function(){
        $(".sound").show();
        $(".sound .containerMod").animate({left:"0%"});
        $(".sound .is-checked").trigger('click');
        $(".ilumination,.image,.energy").hide();
        $(".ilumination .containerMod,.image .containerMod,.energy .containerMod").css({left:"100%"});
    })
    $("#modal_social .btn_imagem").click(function(){
        $(".image").show();
        $(".image .containerMod").animate({left:"0%"});
        $(".image .is-checked").trigger('click');
        $(".ilumination,.sound,.energy").hide();
        $(".ilumination .containerMod,.sound .containerMod,.energy .containerMod").css({left:"100%"});
    })
    $("#modal_social .btn_energia").click(function(){
        $(".energy").show();
        $(".energy .containerMod").animate({left:"0%"});
        $(".energy .is-checked").trigger('click');
        $(".ilumination,.sound,.image").hide();
        $(".ilumination .containerMod,.sound .containerMod,.image .containerMod").css({left:"100%"});
    })
    // Fechar Modal 2
    // Corporativo
    $("#modal_corp .modal_2 .close_btn").click(function(){
        $(this).hide();
        $("#modal_corp .modal_2").animate({top: "100%"}, 1000);
        $("#trabalhamos .inner").animate({top: "0%", margin: "-140px auto auto -335px" }, 1500);
    })
    // Social
    $("#modal_social .modal_2 .close_btn").click(function(){
        $(this).hide();
        $("#modal_social .modal_2").animate({top: "100%"}, 1000);
        $("#trabalhamos .inner").animate({top: "0%", margin: "-140px auto auto -335px" }, 1500);
    })
    // Fechar Modal se ESC for pressionada
    $("#modal_corp .modal_2").keyup(function(e) {
        if (e.keyCode == 27) { // escape key maps to keycode `27`
            $("#modal_corp .modal_2 .close_btn").hide();
            $("#modal_corp .modal_2").animate({top: "100%"}, 1000);
            $("#trabalhamos .inner").animate({top: "0%", margin: "-140px auto auto -335px" }, 1500);
        }
    });
    // Fechar Modal se ESC for pressionada
    $("#modal_social .modal_2").keyup(function(e) {
        if (e.keyCode == 27) { // escape key maps to keycode `27`
            $("#modal_social .modal_2 .close_btn").hide();
            $("#modal_social .modal_2").animate({top: "100%"}, 1000);
            $("#trabalhamos .inner").animate({top: "0%", margin: "-140px auto auto -335px" }, 1500);
        }
    });
    // Classe Active aos botões
    // Corporativo
    $(".btn_iluminacao,.ilu").click(function(){
        $(".ilu").addClass("active");
        $(".sono,.ima,.ene").removeClass("active");
    })
    $(".btn_som,.sono").click(function(){
        $(".sono").addClass("active");
        $(".ilu,.ima,.ene").removeClass("active");
    })
    $(".btn_imagem,.ima").click(function(){
        $(".ima").addClass("active");
        $(".sono,.ilu,.ene").removeClass("active");
    })
    $(".btn_energia,.ene").click(function(){
        $(".ene").addClass("active");
        $(".sono,.ima,.ilu").removeClass("active");
    })
    // Caroulsel
    // Corporativo
    $("#modal_corp .ilu").click(function(){
        $("#modal_corp .ilumination").show();
        $("#modal_corp .ilumination .containerMod").animate({left:"0%"}, 500);
        $("#modal_corp .sound .containerMod,#modal_corp .image .containerMod,#modal_corp .energy .containerMod").animate({left:"-100%"}, 500);
        $("#modal_corp .sound,#modal_corp .image,#modal_corp .energy").delay(502).hide(0);
        $("#modal_corp .ilumination .is-checked").trigger('click');
        $("#modal_corp .sound .containerMod,#modal_corp .image .containerMod,#modal_corp .energy .containerMod").delay(501).animate({left:"100%"}, 1);
    })
    $("#modal_corp .sono").click(function(){
        $("#modal_corp .sound").show();
        $("#modal_corp .sound .containerMod").animate({left:"0%"}, 500);
        $("#modal_corp .ilumination .containerMod,#modal_corp .image .containerMod,#modal_corp .energy .containerMod").animate({left:"-100%"}, 500);
        $("#modal_corp .ilumination,#modal_corp .image,#modal_corp .energy").delay(502).hide(0);
        $("#modal_corp .sound .is-checked").trigger('click');
        $("#modal_corp .ilumination .containerMod,#modal_corp .image .containerMod,#modal_corp .energy .containerMod").delay(501).animate({left:"100%"}, 1);
    })
    $("#modal_corp .ima").click(function(){
        $("#modal_corp .image").show();
        $("#modal_corp .image .containerMod").animate({left:"0%"}, 500);
        $("#modal_corp .sound .containerMod,#modal_corp .ilumination .containerMod,#modal_corp .energy .containerMod").animate({left:"-100%"}, 500);
        $("#modal_corp .sound,#modal_corp .ilumination,#modal_corp .energy").delay(502).hide(0);
        $("#modal_corp .image .is-checked").trigger('click');
        $("#modal_corp .sound .containerMod,#modal_corp .ilumination .containerMod,#modal_corp .energy .containerMod").delay(501).animate({left:"100%"}, 1);
    })
    $("#modal_corp .ene").click(function(){
        $("#modal_corp .energy").show();
        $("#modal_corp .energy .containerMod").animate({left:"0%"}, 500);
        $("#modal_corp .sound .containerMod,#modal_corp .image .containerMod,#modal_corp .ilumination .containerMod").animate({left:"-100%"}, 500);
        $("#modal_corp .sound,#modal_corp .image,#modal_corp .ilumination").delay(502).hide(0);
        $("#modal_corp .energy .is-checked").trigger('click');
        $("#modal_corp .sound .containerMod,#modal_corp .image .containerMod,#modal_corp .ilumination .containerMod").delay(501).animate({left:"100%"}, 1);
    })
    // Social
    $("#modal_social .ilu").click(function(){
        $("#modal_social .ilumination").show();
        $("#modal_social .ilumination .containerMod").animate({left:"0%"}, 500);
        $("#modal_social .sound .containerMod,#modal_social .image .containerMod,#modal_social .energy .containerMod").animate({left:"-100%"}, 500);
        $("#modal_social .sound,#modal_social .image,#modal_social .energy").delay(502).hide(0);
        $("#modal_social .ilumination .is-checked").trigger('click');
        $("#modal_social .sound .containerMod,#modal_social .image .containerMod,#modal_social .energy .containerMod").delay(501).animate({left:"100%"}, 1);
    })
    $("#modal_social .sono").click(function(){
        $("#modal_social .sound").show();
        $("#modal_social .sound .containerMod").animate({left:"0%"}, 500);
        $("#modal_social .ilumination .containerMod,#modal_social .image .containerMod,#modal_social .energy .containerMod").animate({left:"-100%"}, 500);
        $("#modal_social .ilumination,#modal_social .image,#modal_social .energy").delay(502).hide(0);
        $("#modal_social .sound .is-checked").trigger('click');
        $("#modal_social .ilumination .containerMod,#modal_social .image .containerMod,#modal_social .energy .containerMod").delay(501).animate({left:"100%"}, 1);
    })
    $("#modal_social .ima").click(function(){
        $("#modal_social .image").show();
        $("#modal_social .image .containerMod").animate({left:"0%"}, 500);
        $("#modal_social .sound .containerMod,#modal_social .ilumination .containerMod,#modal_social .energy .containerMod").animate({left:"-100%"}, 500);
        $("#modal_social .sound,#modal_social .ilumination,#modal_social .energy").delay(502).hide(0);
        $("#modal_social .image .is-checked").trigger('click');
        $("#modal_social .sound .containerMod,#modal_social .ilumination .containerMod,#modal_social .energy .containerMod").delay(501).animate({left:"100%"}, 1);
    })
    $("#modal_social .ene").click(function(){
        $("#modal_social .energy").show();
        $("#modal_social .energy .containerMod").animate({left:"0%"}, 500);
        $("#modal_social .sound .containerMod,#modal_social .image .containerMod,#modal_social .ilumination .containerMod").animate({left:"-100%"}, 500);
        $("#modal_social .sound,#modal_social .image,#modal_social .ilumination").delay(502).hide(0);
        $("#modal_social .energy .is-checked").trigger('click');
        $("#modal_social .sound .containerMod,#modal_social .image .containerMod,#modal_social .ilumination .containerMod").delay(501).animate({left:"100%"}, 1);
    })
    // Isotope Filter
    $( document ).ready( function() {
        // bind filter button click
        $('#filters').on( 'click', 'button', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $('.isotope').isotope({ filter: filterValue });
        });
        $('#filters-2').on( 'click', 'button', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $('.isotope-2').isotope({ filter: filterValue });
        });
        $('#filters-3').on( 'click', 'button', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $('.isotope-3').isotope({ filter: filterValue });
        });
        $('#filters-4').on( 'click', 'button', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $('.isotope-4').isotope({ filter: filterValue });
        });
        // bind filter button click
        $('#filters-5').on( 'click', 'button', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $('.isotope-5').isotope({ filter: filterValue });
        });
        $('#filters-6').on( 'click', 'button', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $('.isotope-6').isotope({ filter: filterValue });
        });
        $('#filters-7').on( 'click', 'button', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $('.isotope-7').isotope({ filter: filterValue });
        });
        $('#filters-8').on( 'click', 'button', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $('.isotope-8').isotope({ filter: filterValue });
        });
        // filter functions
        var filterFns = {
            // show if number is greater than 50
            numberGreaterThan50: function() {
                var number = $(this).find('.number').text();
                return parseInt( number, 10 ) > 50;
            },
            // show if name ends with -ium
            ium: function() {
                var name = $(this).find('.name').text();
                return name.match( /ium$/ );
            }
        };
        // change is-checked class on buttons
        $('.button-group').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'button', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $( this ).addClass('is-checked');
            });
        });
      
    });
      
	// Swiper
	 var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30,
        effect: 'fade',
        loop: true,
        autoplay: 5000
    });
    // Fullpage
    $(document).ready(function() {
        $('#fullpage').fullpage({
            //Navigation
            // menu: false,
            anchors: ['home', 'somos_assim', 'servicos', 'contato', 'lastPage'],
            menu: ['#menu', '#mini-menu'],
            // navigation: false,
            // navigationPosition: 'right',
            // navigationTooltips: ['firstSlide', 'secondSlide'],
            // slidesNavigation: true,
            // slidesNavPosition: 'bottom',

            //Scrolling
            css3: true,
            scrollingSpeed: 1400,
            autoScrolling: false,
            fitToSection: false,
            scrollBar: false,
            easing: 'easeInOutCubic',
            easingcss3: 'ease',
            loopBottom: false,
            loopTop: false,
            loopHorizontal: true,
            continuousVertical: false,
            normalScrollElements: '#element1, .element2',
            scrollOverflow: true,
            touchSensitivity: 15,
            normalScrollElementTouchThreshold: 5,

            //Accessibility
            keyboardScrolling: true,
            // animateAnchor: true,
            recordHistory: true,

            //Design
            // controlArrows: true,
            // verticalCentered: true,
            // resize : false,
            // sectionsColor : ['#ccc', '#fff'],
            // paddingTop: '3em',
            // paddingBottom: '10px',
            // fixedElements: '#header, .footer',
            // responsive: 0,

            //Custom selectors
            sectionSelector: 'section',
            slideSelector: '.slide',

            //events
            onLeave: function(index, nextIndex, direction){},
            afterLoad: function(anchorLink, index){

            		//Sessão 1 - Banner
					if(index != 1){
						//hide header
						$("header").clearQueue().animate({"margin-left":'-100%'}, 200);
						$(".header2").clearQueue().animate({"margin-left":'0'}, 200);
					} else {
						// mostrar
						$("header").clearQueue().animate({"margin-left":'0'}, 200);
						$(".header2").clearQueue().animate({"margin-left":'-100%'}, 200);

					}

            		//Sessão 1 - Banner
					if(index == 1){
						//moving the image
						
					}

					//Sessão 2 - Somos Assim
					if(index == 2){
						//moving the image
						$("#somos .animate").show();
					}

					//Sessão 3 - Somos Assim
					if(index == 3){
						//moving the image
						$("#trabalhamos .animate").show();
					}

					//Sessão 4 - Contato
					if(index == 4){
						//moving the image
						$("#contact .animate").show();
					}
				},
            afterRender: function(){},
            afterResize: function(){},
            afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
            onSlideLeave: function(anchorLink, index, slideIndex, direction){}
        });
    });
    // Google maps plugin
	(function ( $ ) {
		$.fn.CustomMap = function( options ) {
			var settings = $.extend({
				home: { latitude:-21.1998501, longitude:-47.8183181 },
				text: '<div class="map-popup"><h1>Web Development Blog | DeveloperDrive</h1><br/><div class="logo"><img src="http://developerdrive.developerdrive.netdna-cdn.com/wp-content/themes/dd_flat/images/logor.png" /></div><div class="about">A web development blog for all your HTML5, WordPress and jQuery needs</div></div><div class="clear"></div>',
				icon_url: 'assets/img/icon-map.png',
				zoom: 16
			}, options );
			
			var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);
				 
			return this.each(function() {	
				var element = $(this);
				
				var options = {
					zoom: settings.zoom,
					center: coords,
					mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl:false,
                    streetViewControl: false,
                    panControl:false,
                    rotateControl:false,
                    zoomControl:false,
					scaleControl: false,
					zoomControlOptions: {
						style: google.maps.ZoomControlStyle.DEFAULT
					},
					overviewMapControl: false,
                     disableDefaultUI: false,	
				};
				
				var map = new google.maps.Map(element[0], options);
				
				var icon = { 
					url: settings.icon_url, 
					origin: new google.maps.Point(0, 0)
				};

				var marker = new google.maps.Marker({
					position: coords,
					map: map,
					icon: icon,
					draggable: false
				});
				
				var info = new google.maps.InfoWindow({
					content: settings.text
				});

				google.maps.event.addListener(marker, 'click', function() { 
					info.open(map, marker);
				});

				var styles = [
                    {
                        featureType: 'road.highway',
                        elementType: 'all',
                        stylers: [
                            { hue: '#4353B2' },
                            { saturation: -55 },
                            { lightness: -25 },
                            { visibility: 'on' }
                        ]
                    },{
                        featureType: 'landscape.man_made',
                        elementType: 'all',
                        stylers: [
                            { hue: '#BDBFCB' },
                            { saturation: -56 },
                            { lightness: -14 },
                            { visibility: 'on' }
                        ]
                    },{
                        featureType: 'road.arterial',
                        elementType: 'all',
                        stylers: [
                            { hue: '#9B9FAA' },
                            { saturation: -92 },
                            { lightness: -17 },
                            { visibility: 'on' }
                        ]
                    },{
                        featureType: 'road.local',
                        elementType: 'all',
                        stylers: [
                            { hue: '#9B9DAA' },
                            { saturation: -92 },
                            { lightness: -36 },
                            { visibility: 'on' }
                        ]
                    },{
                        featureType: 'landscape.natural',
                        elementType: 'all',
                        stylers: [
                            { hue: '#7A82A9' },
                            { saturation: 8 },
                            { lightness: -40 },
                            { visibility: 'on' }
                        ]
                    },{
                        featureType: 'poi',
                        elementType: 'all',
                        stylers: [
                            { hue: '#B0B2CB' },
                            { saturation: -52 },
                            { lightness: -5 },
                            { visibility: 'on' }
                        ]
                    },{
                        featureType: 'transit',
                        elementType: 'all',
                        stylers: [
                            { hue: '#A3A5BA' },
                            { saturation: 14 },
                            { lightness: -9 },
                            { visibility: 'on' }
                        ]
                    },{
                        featureType: 'water',
                        elementType: 'all',
                        stylers: [
                            { hue: '#006666' },
                            { saturation: 100 },
                            { lightness: -74 },
                            { visibility: 'on' }
                        ]
                    }
                ];
				map.setOptions({styles: styles});
			});
	 
		};
	}( jQuery ));

	jQuery(document).ready(function() {
		jQuery('#map-canvas').CustomMap();
	});