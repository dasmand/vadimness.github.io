function setEqualHeight(columns) {
              var tallestcolumn = 0; 
              columns.each( function() { 
                  currentHeight = $(this).height(); 
                  if(currentHeight > tallestcolumn) { 
                      tallestcolumn = currentHeight; 
                  }
              });
              columns.height(tallestcolumn); // переназначаем максимальную высоту
          }
$(document).ready(function() { setEqualHeight($(".product-img")); });
$(document).ready(function() { setEqualHeight($(".product-title")); });
$(document).ready(function() { setEqualHeight($(".desc")); });

$(document).ready(function(){
	$('.collapse').on('show.bs.collapse', function () {
		$('.main-content').css("display","none");
		$('.hidden-collapse').css("display","none");
		$('.footer-left-collapse').css("padding-top","500px");
		$('.mobile-img').css("display","none");
		$('.main-product').css("display","none");
		$('.basket').css("display","none");
		$('.about').css("display","none");
		$('.zakaz-finish').css("display","none");
		
	});
	$('.collapse').on('hide.bs.collapse', function () {
		$('.main-content').css("display","block");
		$('.hidden-collapse').css("display","block");
		$('.mobile-img').css("display","block");
		$('.footer-left-collapse').css("padding-top","0px");
		$('.main-product').css("display","block");
		$('.basket').css("display","block");
		$('.about').css("display","block");
		$('.zakaz-finish').css("display","block");
	});
	
	
	  $(".active-link").click(function () {
               $(".main-product").css("display","none");
			   $(".about").css("display","none");
			   $(".zakaz-finish").css("display","none");  
			   $(".footer-right").css("display","none");   
			   $(".footer-left").css("display","none");
			   $("#footer").css("display","none");   
 
		});
		
		$(".active").click(function () {
               $(".main-product").css("display","block");   
			   $(".about").css("display","block");
			   $(".zakaz-finish").css("display","block");
			   $(".footer-right").css("display","block");
			   $(".footer-left").css("display","block");   
			   $("#footer").css("display","block");      
 
		});
		
		$("#rate").rating({
			showCaption: false,
			showClear:false,
			size: 'xs',
			step:1,
		});
		
		
		
	
});

