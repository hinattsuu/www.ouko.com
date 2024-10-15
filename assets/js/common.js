const target = ".splide";
const options = {
  slideFocus: "data-splide-slide",
  mediaQuery: "min",
  perPage: 1,
  perMove: 2,
  gap: 24,
  autoplay: true,
  interval: 3000,
  speed: 1000,
  focus: "center",
  type: "loop",
  breakpoints: {
    600: {
      perPage: 4,
    },
    1025: {
      perPage: 5,
      gap: 32,
    },
  },
};
const mySplide = new Splide(target, options);

mySplide.mount();
