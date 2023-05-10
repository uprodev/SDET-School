export const fixedHeader = () => {

    const header = document.querySelector('#header');
    const page = document.querySelector('#page');
    const func = () => {
        if(header && page){
            setTimeout(() => {
                let height = header.offsetHeight;
                if(header.classList.contains('fixed')){
                    page.style.paddingTop = `${height}px`;
                }
            }, 200);
        }
    }
    func();

    const scroll = () => {
        if(header){
            let windowTop = window.pageYOffset;
            let windowHeight = window.innerHeight / 2;
            let opacity = windowTop/windowHeight;
            header.style.backgroundColor = `rgba(255, 255, 255, ${opacity})`;
        }
    }
    scroll();

    window.addEventListener('scroll', () => {
        scroll();
    });
    window.addEventListener('resize', () => {
        func();
        scroll();
    });
    window.addEventListener('touchcancel', () => {
        func();
        scroll();
    });

}