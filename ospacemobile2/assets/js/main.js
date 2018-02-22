$(document).ready(function () {
	$('#myModal').modal();
	$('#myModal2').modal();
	$('#myModal3').modal();
	$('#myModal4').modal();
	$('#modalLogoCenter').modal();
	$('#modalCannot').modal('show');
   $("#carouselGetStarted").swiperight(function() {  
      $("#carouselGetStarted").carousel('prev');  
    });  
   $("#carouselGetStarted").swipeleft(function() {  
      $("#carouselGetStarted").carousel('next');  
   });
   $(".closelast").click(function (){  
      $("#btn-getstart").click();
    });  
   $(".closecard").click(function (){ 
      $("#carouselGetStarted").carousel('next'); 
    });  
   $("#closing").click(function (){ 
      $("#carouselGetStarted").carousel('next'); 
    });  

    

});


			$('#sidebarCollapseDrawer').on('click', function () {
			$('#sidebarFilters').hide();
			$('#sidebarDrawers').show();
			$('#sidebarDrawers').toggleClass('active');
			// $('#sidebarCollapse').hide();
			});
			$('#sidebarCollapseFilter').on('click', function () {
			$('#sidebarDrawers').hide();
			$('#sidebarFilters').show();
			$('#sidebarFilters').toggleClass('active');
			});
			$('#cancelFilter').on('click', function () {
			$('#sidebarDrawers').hide();
			$('#sidebarFilters').show();
			$('#sidebarFilters').toggleClass('active');
			});

function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#logoOrg')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200);
                    $('.modal-body-insertlogo')
                    	.height(250);
                };

                reader.readAsDataURL(input.files[0]);
            $('#btn-hide').hide();
            }
        }

$(".home-page").swipe( {
     swipeLeft:function(event, direction, distance, duration, fingerCount) {
          $(".nav-tabs a.nav-item.nav-link.active").next('a').tab('show');
        },
     swipeRight:function(event, direction, distance, duration, fingerCount) {
          $(".nav-tabs a.nav-item.nav-link.active").prev('a').tab('show');
        },
  });


$(".splash").swipe( {
     swipeLeft:function(event, direction, distance, duration, fingerCount) {
          $("#carouselGetStarted").carousel('next');
        },
     swipeRight:function(event, direction, distance, duration, fingerCount) {
          $("#carouselGetStarted").carousel('prev');
        },
  });

	
var hidWidth;
var scrollBarWidths = 40;

var widthOfList = function(){
  var itemsWidth = 0;
  $('.list a').each(function(){
    var itemWidth = $(this).outerWidth();
    itemsWidth+=itemWidth;
  });
  return itemsWidth;
};

var widthOfHidden = function(){
  return (($('.wrapper-tabs').outerWidth())-widthOfList()-getLeftPosi())-scrollBarWidths;
};

var getLeftPosi = function(){
  return $('.list').position().left;
};

var reAdjust = function(){
  if (($('.wrapper').outerWidth()) < widthOfList()) {
    $('.scroller-right').show();
  }
  else {
    $('.scroller-right').hide();
  }
  
  if (getLeftPosi()<0) {
    $('.scroller-left').show();
  }
  else {
    $('.item').animate({left:"-="+getLeftPosi()+"px"},'slow');
  	$('.scroller-left').hide();
  }
}

reAdjust();

$(window).on('resize',function(e){  
  	reAdjust();
});

$('.scroller-right').click(function() {
  
  $('.scroller-left').fadeIn('slow');
  $('.scroller-right').fadeOut('slow');
  
  $('.list').animate({left:"+="+widthOfHidden()+"px"},'slow',function(){

  });
});

$('.scroller-left').click(function() {
  
	$('.scroller-right').fadeIn('slow');
	$('.scroller-left').fadeOut('slow');
  
  	$('.list').animate({left:"-="+getLeftPosi()+"px"},'slow',function(){
  	
  	});
});    