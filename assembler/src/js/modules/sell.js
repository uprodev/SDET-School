export const sell = () => {

    const triggers = document.querySelectorAll('.sell_item_title');
    triggers.forEach(trigger => {
        let triggerSiblings = trigger.closest('.sell_items').querySelectorAll('.sell_item_title');
        let contents = trigger.closest('.sell_items').querySelectorAll('.sell_item_content');
        trigger.addEventListener('mouseenter', () => {
            trigger.classList.add('hover');
        });
        trigger.addEventListener('mouseleave', () => {
            trigger.classList.remove('hover');
        });
        trigger.addEventListener('click', (e) => {
            triggerSiblings.forEach(triggerSibling => {
                if (e.target.closest('.sell_item_title') !== triggerSibling) {
                    triggerSibling.classList.remove('active');
                }
            });
            contents.forEach(content => {
                if (e.target.closest('.sell_item_title').nextElementSibling !== content) {
                    content.classList.add('hidden');
                } else {
                    content.classList.toggle('hidden');
                }
            });
            trigger.classList.toggle('active');
            trigger.classList.remove('hover');
        });
    });

}