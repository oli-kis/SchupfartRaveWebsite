$(document).ready(function () {
  $(".vimeo-popup").magnificPopup({
    delegate: "a",
    type: "iframe",
    gallery: {
      enabled: true,
    },
  });
});
