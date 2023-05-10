if (
  /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
    navigator.userAgent
  )
) {
  jQuery(".services").on("click", function (e) {
    jQuery(this).toggleClass("hover");
    jQuery(".nav").toggleClass("hover");
  });
}

import { slider } from "./modules/slider.js";
import { anchorLink } from "./modules/anchor-link.js";
import { burger } from "./modules/header/burger.js";
import { modals } from "./modules/modals.js";

document.addEventListener("DOMContentLoaded", function (event) {
  slider();
  anchorLink();
  burger();
  modals();
});
