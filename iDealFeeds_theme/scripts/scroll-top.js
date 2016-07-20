$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scroll-top').fadeIn();
		} else {
			$('.scroll-top').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scroll-top').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});











$(document).ready(function() {
     
      //Sort random function
      function random(owlSelector){
        owlSelector.children().sort(function(){
            return Math.round(Math.random()) - 0.5;
        }).each(function(){
          $(this).appendTo(owlSelector);
        });
      }
     
      $("#top-cashback").owlCarousel({
		  pagination:false,
        navigation: true,
        navigationText: [
          "<i class='icon-chevron-left icon-white'></i>",
          "<i class='icon-chevron-right icon-white'></i>"
          ],
        beforeInit : function(elem){
          //Parameter elem pointing to $("#owl-demo")
          random(elem);
        }
     
      });
	  
	   $('.selectpicker').selectpicker();
     
    });