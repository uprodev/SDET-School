export const contactForm = () => {

    const forms = document.querySelectorAll('.wpcf7');
    const header = document.querySelector('#header');
    forms.forEach(form => {
        let formWrapper = form.closest('#kontakt');
        form.addEventListener('wpcf7mailsent', function (event) {
            let wrapper = form.closest('.contact_form_wrapper');
            let thanks = form.closest('.contact_form_content').querySelector('.contact_form_thanks');
            let headerHeight = header.offsetHeight;
            let top = formWrapper.offsetTop - headerHeight - 10;

            $('body,html').animate({scrollTop: top}, 400);
            wrapper.classList.add('hide');
            thanks.classList.add('show');

            setTimeout(() => {
                wrapper.classList.remove('hide');
                thanks.classList.remove('show');
            }, 8000);
        }, false);
    });

}