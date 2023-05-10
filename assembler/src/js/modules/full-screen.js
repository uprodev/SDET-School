export const fullScreen = () => {

    const header = document.querySelector('#header');
    const footer = document.querySelector('#footer');
    const mains = document.querySelectorAll('.section-full-height');

    const obj = {
        headerHeight: 0,
        footerHeight: 0,
        setObj() {
            if (header) {
                this.headerHeight = header.offsetHeight;
            }
            if (footer) {
                this.footerHeight = footer.offsetHeight;
            }
            mains.forEach(main => {
                main.style.minHeight = `${window.innerHeight - this.headerHeight - this.footerHeight}px`;
            });
        }
    }
    obj.setObj();


    window.addEventListener('resize', () => {
        obj.setObj();
    });

}