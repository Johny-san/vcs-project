jQuery(document).ready(function($){
    $('ul.tabs li').click(function(){
        // var tab_id = $(this).attr('data-tab');
        $('ul.tabs li').removeClass('current');
        // $('.tab-content').removeClass('current');
        $(this).addClass('current');
        // $("#"+tab_id).addClass('current');
  });
  $('ul.abilities li').click(function(){
      var ability_id = $(this).attr('data-ability');
      $('ul.abilities li').removeClass('relevant');
      $('.ability-content').removeClass('relevant');
      $(this).addClass('relevant');
      $("#"+ability_id).addClass('relevant');
  });
    $(".hero-carousel").slick({
      dots: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 7500,
});
  $("a").on('click', function(event) {
  // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
    // Prevent default anchor click behavior
    event.preventDefault();
    // Store hash
    var hash = this.hash;
    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
    scrollTop: $(hash).offset().top
    }, 800, function(){
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  } // End if
});
});
