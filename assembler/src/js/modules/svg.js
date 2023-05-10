export const svg = () => {

    const images = document.querySelectorAll('img');
    images.forEach(image => {
        let src = image.getAttribute('src');
        if(src.indexOf('.svg') >= 0){
            image.removeAttribute('width');
            image.removeAttribute('height');
        }
    });

}