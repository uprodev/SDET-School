export const advantages = () => {

    const items = document.querySelectorAll('.advantages_item');
    const func = () => {
        let heights = [];
        items.forEach(item => {
            item.style.height = '';
        });
        items.forEach(item => {
            heights.push(item.offsetHeight);
        });
        let height = Math.max.apply(null, heights);
        items.forEach(item => {
            item.style.height = `${height}px`;
        });
    }
    setTimeout(() => {
        func();
    }, 200);

    window.addEventListener('resize', () => {
        setTimeout(() => {
            func();
        }, 200);
    });
    window.addEventListener('touchcancel', () => {
        setTimeout(() => {
            func();
        }, 200);
    });

}