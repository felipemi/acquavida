$(window).load(function() {

  // carousel index page
  $('.flexslider').flexslider({
    animation: "slide",
    slideshow: true,
		controlNav: false,
		prevText: "",
		nextText: "",
      start: function(){
          $('#home-slider .descr').removeClass('slideLeft');
          $('#home-slider .flex-active-slide .descr').addClass('slideLeft');
      },
      after: function(){
          $('#home-slider .descr').removeClass('slideLeft');
          $('#home-slider .flex-active-slide .descr').addClass('slideLeft');
      }
  });

  // carousel for page
  $('.flexslider_page').flexslider({
    animation: "slide",
    slideshow: true,
    controlNav: false,
    prevText: "",
    nextText: ""
  });

  // carousel article index page
  $('.slider_articles').flexslider({
    animation: "slide",
    slideshow: false,
	itemWidth: 313,
    itemMargin: 0,
    move: 1,
    minItems: 1,
		controlNav: false,
		prevText: "",
		nextText: ""
  });
    $('.slider_articles_mob').flexslider({
        animation: "slide",
        slideshow: false,
        itemWidth: 200,
        itemMargin: 0,
        move: 1,
        minItems: 1,
        controlNav: false,
        prevText: "",
        nextText: ""
    });

  // carousel gallery opened page
  $('#carousel_gallery').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 162,
    itemMargin: 6,
    asNavFor: '#slider_gallery',
    prevText: "",
    nextText: ""
  });
   
  $('#slider_gallery').flexslider({
    animation: "slide",
    controlNav: false,
    smoothHeight: true,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel_gallery",
    prevText: "",
    nextText: ""
  });

  // carousel event opened page   
  $('#slider_event').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: true,
    prevText: "",
    nextText: ""
  });

  // carousel news page   
  $('.news_item_pic').flexslider({
    animation: "slide", //String: Тип анимации, "fade" или "slide"
    slideshow: true,
    controlNav: false, //Boolean: Создание навигации для постраничного управления каждым слайдом.
    prevText: "", //String: Тест для кнопки "previous" пункта directionNav
    nextText: "",  //String: Тест для кнопки "next" пункта directionNav
  });

  // masonry index page
  $('#container').masonry({
    columnWidth: 1,
    itemSelector: '.item'
  });
  
  //load map for contacts
  loadMapScript();

});

//hide show menu dropdown
function HideShowMenu(){
  $('#nav_dropdown').slideToggle();
}

function mapInit() {
  var mapOptions = {
    zoom: 15,
    center: new google.maps.LatLng(47.028482,28.834198),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    disableDefaultUI: true,
    navigationControl: false,
    mapTypeControl: false,
    panControl: false
  }
  var map = new google.maps.Map(document.getElementById("map_contact"), mapOptions);
}

function loadMapScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.googleapis.com/maps/api/js?v=3&sensor=false&callback=mapInit";
  document.body.appendChild(script);
}