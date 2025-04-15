
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  const body = document.querySelector("body"),
    nav = document.querySelector("nav"),
    modeToggle = document.querySelector(".dark-light"),
    searchToggle = document.querySelector(".searchToggle"),
    sidebarOpen = document.querySelector(".sidebarOpen"),
    siderbarClose = document.querySelector(".siderbarClose");

  let getMode = localStorage.getItem("mode");
  if (getMode && getMode === "dark-mode") {
    body.classList.add("dark");
  }

  // js code to toggle dark and light mode
  modeToggle.addEventListener("click", () => {
    modeToggle.classList.toggle("active");
    body.classList.toggle("dark");

    // js code to keep user selected mode even page refresh or file reopen
    if (!body.classList.contains("dark")) {
      localStorage.setItem("mode", "light-mode");
    } else {
      localStorage.setItem("mode", "dark-mode");
    }
  });

  // js code to toggle search box
  searchToggle.addEventListener("click", () => {
    searchToggle.classList.toggle("active");
  });

  //   js code to toggle sidebar
  sidebarOpen.addEventListener("click", () => {
    nav.classList.add("active");
  });

  body.addEventListener("click", (e) => {
    let clickedElm = e.target;

    if (
      !clickedElm.classList.contains("sidebarOpen") &&
      !clickedElm.classList.contains("menu")
    ) {
      nav.classList.remove("active");
    }
  });
</script>

<script>
  const swiper = new Swiper(".swiper", {
    // modules: [Navigation, A11y],
    direction: "horizontal",
    loop: false,
    navigation: {
      nextEl: ".c-carousel__button--next",
      prevEl: ".c-carousel__button--prev",
    },
    slidesPerView: "auto",
    spaceBetween: 48,
    a11y: {
      prevSlideMessage: "Previous slide",
      nextSlideMessage: "Next slide",
    },
  });
</script>

<script
  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
  crossorigin="anonymous"
></script>

<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
  crossorigin="anonymous"
></script>

<script src="js/disable.js"></script>