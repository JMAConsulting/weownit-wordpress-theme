(function($) {
    $(document).ready(function(){
      $(".dropdown-toggle, .btn-group").hover(function(){
        var dropdownMenu = $(this).children(".dropdown-menu");
        if(dropdownMenu.is(":visible")){
            dropdownMenu.parent().toggleClass("show");
        }
      });

      var header = $("#site-header");
      $(window).scroll(function() {
          var scroll = $(window).scrollTop();
          if (scroll >= 100 && $(this).width() > 1000) {
              header.addClass("navbar-fixed-top");
          } else {
              header.removeClass('navbar-fixed-top');
          }
        });
    });
})(jQuery);
