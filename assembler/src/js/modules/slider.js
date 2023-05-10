export const slider = () => {
  const swiper = new Swiper(".swiper", {
    loop: true,
    slidesPerView: 5,
    pagination: {
      el: ".swiper-pagination",
      type: "progressbar",
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        loop: false,
        passiveListeners: false,
      },
      720: {
        slidesPerView: 3,
        loop: true,
        passiveListeners: true,
      },
    },
  });
};
