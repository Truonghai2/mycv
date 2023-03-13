
$(function(){ 
  var navMain = $("#nav-main");
  navMain.on("click", "a", null, function () {
      navMain.collapse('hide');
  });
});
$(document).ready(function(){
  
  var top = $('#top').height();
    $('.close-top').on('click',function(){
      $('#top').fadeOut('slow');
      $('.close-top').fadeOut();
      $('.show-top').show();
      $('.top-58').animate({height:"0"},500);  
    });
    $('.show-top').on('click',function(){
      $('#top').fadeIn('slow');
      $('.close-top').show(); 
      $('.show-top').hide();     
      $('.top-58').animate({height:top},500);
    });
    $('.top-58').height(top);
    $('.bottom-main-menu .item-content').each(function(){
      $(this).append('<div Class="item-media"></div>');
      $(this).find('.item-image').appendTo($(this).find('.item-media'));
      $(this).find('.item-title').appendTo($(this).find('.item-media'));
    });
   
 

  
    /* END SUBMENU*/
    $(document).on('click', 'a', function(e){
      if($(this).attr('href')=='#'){
        return  false;
      }
    });
    if($(window).width()<=1200){
      $('.dropdown-vertical >a,.dropdown-horizontal >a').on('click',function(){
        if(!$(this).hasClass('abc')){
           $('.dropdown-vertical >a,.dropdown-horizontal >a').removeClass('abc'); 
           $(this).addClass('abc');
          return false;
        }   
      });
    }
    /* MENU STICKED*/
    /*
    $('.main-menu').addClass('original').clone().insertAfter('.main-menu').addClass('sticked').removeClass('original').hide();
     $('.sticked').each(function(){ 
      $('.sticked #menu_main .dv-module-content .row >div').append('<div Class="dv-item-module"></div>')
      $('.sticked #menu_main .dv-module-content .row >div').prepend('<div Class="dv-item-module"></div>')
      $('.sticked #logo').prependTo('.sticked #menu_main .dv-item-module:first-child'); 
      $('.sticked #cart').appendTo('.sticked #menu_main .dv-item-module:last-child').addClass('cart'); 
      $('.sticked #cart .dropdown-menu').remove();
      $('.sticked #header_bottom').remove();    
      $('.sticked #menu_id_social-menu').closest('.dv-item-module').remove(); 
    }); 
    */

     /* CART CLICK EVENT*/
     $('#cart .btn').removeAttr("data-toggle");
     $('#cart').addClass('cart');
     $('.sticked .cart-over,.sticked .cart-over-button').remove();

     $('.cart-over,.cart-over-button').on('click',function(){
        $('.cart').find('.dropdown-menu').addClass('slideOutRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass('slideOutRight').hide();
        }); 
       $('.cart').removeClass('open'); 
     }); 
     $('.cart .btn').on('click',function(){
      if($('.cart').hasClass('open')){
       $('.cart').find('.dropdown-menu').addClass('slideOutRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass('slideOutRight').hide();
        });
       $('.cart').removeClass('open'); 
     }
     else{
      $('.cart').find('.dropdown-menu').show().addClass('slideInRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass('slideInRight');
        });
      $('.cart').addClass('open');
     }
     });
     
    
    
  /* END MENU STICKED*/
  $('.product-thumb .price br').remove(); 

  $('.support .item-content').each(function(){
    $(this).append('<div class="wrapper-support-item"></div>');
    $(this).find('.item-image').appendTo($(this).find('.wrapper-support-item'));
    $(this).find('.item-title').appendTo($(this).find('.wrapper-support-item'));
    $(this).find('.item-description').appendTo($(this).find('.wrapper-support-item')); 
  });
  /* Class active menu*/
  var touch = false;
  var link = $(location).attr('href');
  var s = link.indexOf("?");
  var index = link.substring(s+1, s+6);
  if(s!=-1 && index != 'route'){
    var res = link.substring(0, s);
    $("[href]").each(function() {
      if (this.href == res) {
        $(this).addClass("active");
      }
    });
  }else{
    $("[href]").each(function() {
      if (this.href == window.location.href) {
        $(this).addClass("active");
        $(this).parent().addClass("active");
      }
    });
  }
    //end active href///     
  /*
  var owl = $(".clien-say .list");
    owl.owlCarousel({
        items : 1,
        itemsDesktop : [1000,1], 
        itemsDesktopSmall : [900,1],
        itemsTablet: [600,1],
        itemsMobile : false ,
        navigationText :  ["prev","next"],
        pagination : false,
    });
  */
  /*	  
  $('.add_contact .item-content').each(function(){
    $(this).append('<div class="item-wrapper"></div>');
    $(this).find('.item-image').appendTo($(this).find('.item-wrapper'));
    $(this).find('.item-title').appendTo($(this).find('.item-wrapper'));
    $(this).find('.item-description').appendTo($(this).find('.item-wrapper'));
  });
  */

  $('.menu-main .dv-item-module:first-child .navbar-header .navbar-toggle').removeAttr("data-toggle");
  $('.menu-main .dv-item-module:first-child .navbar-header .navbar-toggle').on('click',function(){
    $($(this).attr('data-target')).show().addClass('slideInLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $(this).removeClass('slideInRight');
      });
    $('body').addClass('paddingIn').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass('paddingIn').css('right','-250px');
        });
  });
  $('.menu-main .dv-item-module:first-child .close-menu,.menu-main .dv-item-module:first-child .close-menu-xcaret').on('click',function(){
     $('body').addClass('paddingOut').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass('paddingOut').css('right','0');
        });
    $(this).closest('#navbar-collapse-main-menu').addClass('slideOutLeft').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).hide().removeClass('slideOutLeft');
        });
  });  
  $('ul').closest('li').addClass('abc');
  $('#main-menu #menu_main .dv-module-content .abc').each(function(){
    $(this).prepend('<div class="xcaret"></div>');
  }); 
  $('.xcaret').on('click',function(){
    if(!$(this).closest('li').hasClass('in')){
       $(this).parent().parent().find('li').removeClass('in');     
      $(this).closest('li').addClass('in');
    }
    else
      $(this).closest('li').removeClass('in');       
  }) 
  //active display category//
  if (localStorage.getItem('display') == 'list') {
    $('#list-view').trigger('click'); 
    $('.entry .list').addClass('active');
  } else {
    $('#grid-view').trigger('click');
    $('.entry .grid').addClass('active');
  }
   $('.entry .grid').click(function(){
      $('.entry .list').removeClass('active');
      $(this).addClass('active');
   })
   $('.entry .list').click(function(){
      $('.entry .grid').removeClass('active');
      $(this).addClass('active'); 
   })
  //end active display category//  
  $('.pagination li a:contains(|<)').addClass('first');
  $('.pagination li a:contains(>|)').addClass('last');  
  $('.pagination li a:contains(>)').addClass('next');  
  $('.pagination li a:contains(<)').addClass('prev');  
  $('#show-search').on('click',function(){
    $('#close-search').show(); 
    $('#search').show().addClass('slideInDown').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
      $(this).removeClass('slideInDown');
    });
  });
  $('#menu_id_social-menu a').attr('target','_blank');
  $('#close-search').on('click',function(){
    $(this).hide();  
    $('#search').addClass('slideOutUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
      $(this).hide().removeClass('slideOutUp'); 
    });
  });
});

