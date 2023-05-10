export const modals = () => {
  const forms = document.querySelectorAll(".wpcf7");
  const header = document.querySelector("#header");
  forms.forEach((form) => {
    let formWrapper = form.closest("#kontakt");
    form.addEventListener(
      "wpcf7mailsent",
      function (event) {
        let wrapper = form.closest(".contact-form-wrapper");
        let thanks = form
          .closest(".contact_forms")
          .querySelector(".contact-form-thanks");
        let headerHeight = header.offsetHeight;
        let top = formWrapper.offsetTop - headerHeight - 10;
        $("body,html").animate({ scrollTop: top }, 400);
        wrapper.classList.add("hide");
        thanks.classList.add("show");
        setTimeout(() => {
          wrapper.classList.remove("hide");
          thanks.classList.remove("show");
        }, 8000);
      },
      false
    );
  });
};
