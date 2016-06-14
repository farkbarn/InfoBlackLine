	    $(window).scroll(function(){
		if ((window.pageYOffset >=600)&&(window.innerWidth>791)) {
		    $('#cabezal').addClass('cabezalfix');
		    $('#infotit').addClass('infotitfix');
		    $('#logo').addClass('logofix');
		    $('ul.menugrupo').addClass('menugrupofix');
		    $('.centrador').addClass('centradorfix');
		} else {
		    $('#cabezal').removeClass('cabezalfix');
		    $('#infotit').removeClass('infotitfix');
		    $('#logo').removeClass('logofix');
		    $('ul.menugrupo').removeClass('menugrupofix');
		    $('.centrador').removeClass('centradorfix');
		}
	    });
	    
	    
	    $(window).scroll(function(){
		if ((window.pageYOffset >=1000)) {
		    $('.up').addClass('upfix');
		} else {
		    $('.up').removeClass('upfix');
		}
	    });
	    
	    
	    $(window).scroll(function(){
		if ((window.pageYOffset >=100)&&(window.innerWidth<792)) {
		    $('.infotit2').addClass('infotitfix2');
		    } else {
		    $('.infotit2').removeClass('infotitfix2');
		    }
	    });
	    
	    
	    $(window).scroll(function(){
		if ((window.pageYOffset >=610)) {
		    $('.imp').addClass('impfix');
		} else {
		    $('.imp').removeClass('impfix');
		}
	    });
	    
	    
	    $(document).ready(main);
	    function main()
	    {
		$('section.imp').animate({left:'-28px'});
	    }
	    
	    
	    $(function() {
	      $('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
		    $('html, body').animate({
		      scrollTop: target.offset().top
		    }, 1000);
		    return false;
		  }
		}
	      });
	    });
	    
	    $(document).ready(main);
		var contador = 1;
		function main(){
		    $('.bt-menu').click(function(){
			if(contador == 1){
			    $('nav.nav_men').animate({left:'0'});
			    $('nav.nav_men').animate({position:'relative'});
			    contador = 0;
			} else {
			    contador = 1;
			    $('nav.nav_men').animate({left:'-100%'});
			    $('nav.nav_men').animate({position:'relative'});
			}
		    });
		};
