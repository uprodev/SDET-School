export const performanceProcess = () => {

    const items = document.querySelectorAll('.performance-process_block');
    const func = () => {
        items.forEach(item => {
            let closest = item.closest('.performance-process_item');
            let img = item.querySelector('img');
            let imgHeight = img.offsetHeight;
            let height = item.offsetHeight;

            closest.style.setProperty('--height', `${height - imgHeight}px`);
        });
    }
    func();

    window.addEventListener('resize', () => {
        func();
    });

}