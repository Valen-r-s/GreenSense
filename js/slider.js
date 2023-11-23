// SLIDER
const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider_section");
let sliderSectionLast = sliderSection[sliderSection.length - 1];

const btnRight = document.querySelector("#btn_right");
const btnLeft = document.querySelector("#btn_left");

slider.insertAdjacentElement("afterbegin", sliderSectionLast);

function moveSliderRight() {
  let sliderSectionFirst = document.querySelectorAll(".slider_section")[0];
  slider.style.marginLeft = "-200%";
  slider.style.transition = "all 0.5s";
  setTimeout(function () {
    slider.style.transition = "none";
    slider.insertAdjacentElement("beforeend", sliderSectionFirst);
    slider.style.marginLeft = "-100%";
  }, 700);
}

function moveSliderLeft() {
  let sliderSection = document.querySelectorAll(".slider_section");
  let sliderSectionLast = sliderSection[sliderSection.length - 1];
  slider.style.marginLeft = "0";
  slider.style.transition = "all 0.5s";
  setTimeout(function () {
    slider.style.transition = "none";
    slider.insertAdjacentElement("afterbegin", sliderSectionLast);
    slider.style.marginLeft = "-100%";
  }, 700);
}

btnRight.addEventListener("click", function () {
  moveSliderRight();
});

btnLeft.addEventListener("click", function () {
  moveSliderLeft();
});

// setInterval(function () {
//   moveSliderRight();
// }, 10000);
