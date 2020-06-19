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

      $(".navbar-toggle").click(function () {
          if ($('#mainNavs').hasClass('show')) {
              $('body').removeClass('mainMenu-isExpanded');
          }
          else {
              $('body').addClass('mainMenu-isExpanded');
          }
      });

      /*$(".dropdown-toggle").click(function () {
          if (!$(this).next('ul.dropdown-menu').hasClass('show')) {
              $(this).next('ul.dropdown-menu').show();
          }
          else {
              $(this).next('ul.dropdown-menu').hide();
          }
      }); */

        $('.nav .dropdown').hover(function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

        }, function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

        });

        $('.nav .dropdown > a').click(function(){
            location.href = this.href;
        });



    });
})(jQuery);
