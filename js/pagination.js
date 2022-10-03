function pagination() {
    var offset = $(document).scrollTop();
    var windowHeight = $(window).height();
    var $body = $('body');
    var padding = 1;
    var pages = Object.keys($('.page')).filter((section) => Number(section) + 1).map(section => Number(section) + 1)
  
    pages.map((page) => {
        if (offset > (windowHeight * (page - 2 + padding))) {
            $body.removeClass().addClass("page-" + page);
        }
    });
};
  
pagination();

$(document).on('scroll', pagination);
  
$(function() {
    $('a[href*=\\#]:not([href=\\#])').on('click', function () {
        var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.substr(1) + ']');
            if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top
            }, 750);
            return false;
        }
    });
});