$(document).ready(function () {

    // Parallax //

    setTimeout(function () {

        $('#about-area').parallax({ imageSrc: 'img/fundo.png' });
        $('#apply-area').parallax({ imageSrc: 'img/fundo2.png' });

    }, 200);

    // scroll para as seções

    let navBtn = $('.nav-item');

    let bannerSection = $('#mainBlock');
    let servicesSection = $('#services-area');
    let aboutSection = $('#about-area');
    let teamSection = $('#team-area');
    let applySection = $('#apply-area');
    let contactSection = $('#contact-area');

    let scrollTo = '';

    $(navBtn).click(function () {

        let btnId = $(this).attr('id');

        if (btnId == 'about-menu') {
            scrollTo = aboutSection;
        } else if (btnId == 'services-menu') {
            scrollTo = servicesSection;
        } else if (btnId == 'team-menu') {
            scrollTo = teamSection;
        } else if (btnId == 'apply-menu') {
            scrollTo = applySection;
        } else if (btnId == 'contact-menu') {
            scrollTo = contactSection;
        } else {
            scrollTo = bannerSection;
        }

        $([document.documentElement, document.body]).animate({
            scrollTop: $(scrollTo).offset().top - 70
        }, 1200);
    });

});