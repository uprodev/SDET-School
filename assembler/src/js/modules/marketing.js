export const marketing = () => {

    const texts = document.querySelectorAll('.marketing-text');

    texts.forEach(text => {
        let height = text.offsetHeight;
        let wrapper = text.querySelector('.marketing-text_wrapper');
        let wrapperHeight = wrapper.offsetHeight;
        let btnWrapper = text.nextElementSibling;
        let btn = btnWrapper.querySelector('.marketing-btn button');
        let btnSpan = btn.querySelector('span');
        let btnSpanText = btnSpan.innerText;
        let btnSpanTextOther = btnSpan.getAttribute('data-text');

        btn.addEventListener('mouseenter', () => {
            btn.classList.add('hover');
        });
        btn.addEventListener('mouseleave', () => {
            btn.classList.remove('hover');
        });
        btn.addEventListener('click', () => {
            btn.classList.toggle('active');
            btn.classList.remove('hover');
            text.classList.toggle('max-h-150');
            if(btn.classList.contains('active')){
                btnSpan.innerText = btnSpanTextOther;
            } else {
                btnSpan.innerText = btnSpanText;
            }
        });

        if(wrapperHeight <= height){
            btnWrapper.remove();
        } else {
            text.classList.add('border-bottom');
        }
    });

}