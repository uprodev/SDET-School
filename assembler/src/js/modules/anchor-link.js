export const anchorLink = () => {
    $('.menu a').on('click', function (e) {
        if ($(this).attr('href').indexOf('#') >= 0) {
            let firstIndex = $(this).attr('href').indexOf('#');
            let lastIndex = $(this).attr('href').length;
            let id = $(this).attr('href').substring(firstIndex, lastIndex);
            if($(id).length > 0){
                e.preventDefault();
                $('#page').each(function() {
                    $(this).removeClass('active');
                });
                $('.header_burger').each(function() {
                    $(this).removeClass('active');
                });
                $('.header_menu_mob').each(function() {
                    $(this).addClass('scale-y-0');
                });
                $('.header_mob_backing').each(function() {
                    $(this).removeClass('bg-yellow');
                });
                $('body').each(function() {
                    $(this).removeClass('overflow-hidden');
                });
                let top = $(id).offset().top;
                $('body,html').animate({scrollTop: top}, 1500);
            }
        }
    });

    function windowHrefAnchor() {
        const href = window.location.href;
        if (href.indexOf('#') >= 0) {
            let firstIndex = href.indexOf('#');
            let lastIndex = href.length;
            let id = href.substring(firstIndex, lastIndex);
            if($(id).length > 0){
                let top = $(id).offset().top ;
                $('body,html').animate({scrollTop: top}, 1500);
            }
        }
    }
    windowHrefAnchor();

}