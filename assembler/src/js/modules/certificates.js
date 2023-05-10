export const certificates = () => {

    const blocks = document.querySelectorAll('.certificates_block');
    const func = () => {
        blocks.forEach(block => {
            let width = block.offsetWidth;
            let height = (width * 100) / 93;
            block.style.height = `${height}px`;
        });
    }
    func();

    window.addEventListener('resize', () => {
        func();
    });

}