jQuery(document).ready(function($){
   // fixed top nav add background whant the scroll in page
   $(window).scroll(function(){
    if($(window).scrollTop() > 250){
      $("#section-01").addClass("cpw-fixed-sidebar")
    }else{
      $("#section-01").removeClass("cpw-fixed-sidebar")
    }
  })

  //section anchor effect with internal link
  $( '.nav-streaming li a[href^="#"]' ).on( 'click', function(e) {
    e.preventDefault();
    var id = $( this ).attr( 'href' ),
        targetOffset = $( id ).offset().top
     
    $( 'html, body' ).animate({ 
      scrollTop: targetOffset - 102
    }, 300)
  } )

  //hide items menu
  $(".item-off").click(function(){
    $("#item-default").addClass("cpw-hide")
    $("#item-on").addClass("cpw-hide")
    $("#item-off").removeClass("cpw-hide")
  })
  $(".item-on").click(function(){
    $("#item-default").addClass("cpw-hide")
    $("#item-on").removeClass("cpw-hide")
    $("#item-off").addClass("cpw-hide")
  })

  // list slick the videos
  $('.list-videos').slick({
    centerMode: true,
    centerPadding: '30px',
    slidesToShow: 6,
    responsive: [
      {
        breakpoint: 1400,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '20px',
          slidesToShow: 4
        }
      },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '10px',
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

});