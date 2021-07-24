(function () {
  "use strict";

  const select = (el, all = false) => {
    el = el.trim();
    if (all) {
      return [...document.querySelectorAll(el)];
    } else {
      return document.querySelector(el);
    }
  };

  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all);
    if (selectEl) {
      if (all) {
        selectEl.forEach((e) => e.addEventListener(type, listener));
      } else {
        selectEl.addEventListener(type, listener);
      }
    }
  };

  const onscroll = (el, listener) => {
    el.addEventListener("scroll", listener);
  };

  let navbarlinks = select("#navbar .scrollto", true);
  const navbarlinksActive = () => {
    let position = window.scrollY + 200;
    navbarlinks.forEach((navbarlink) => {
      if (!navbarlink.hash) return;
      let section = select(navbarlink.hash);
      if (!section) return;
      if (
        position >= section.offsetTop &&
        position <= section.offsetTop + section.offsetHeight
      ) {
        navbarlink.classList.add("active");
      } else {
        navbarlink.classList.remove("active");
      }
    });
  };
  window.addEventListener("load", navbarlinksActive);
  onscroll(document, navbarlinksActive);

  const scrollto = (el) => {
    let header = select("#header");
    let offset = header.offsetHeight;

    if (!header.classList.contains("header-scrolled")) {
      offset -= 16;
    }

    let elementPos = select(el).offsetTop;
    window.scrollTo({
      top: elementPos - offset,
      behavior: "smooth",
    });
  };

  let selectHeader = select("#header");
  let bottomOfHero = select("#hero");
  let selectMain = select("#main");
  if (selectHeader) {
    let headerOffset = selectHeader.offsetTop;
    let nextElement = selectHeader.nextElementSibling;
    const headerFixed = () => {
      if (headerOffset - window.scrollY <= 0) {
        selectHeader.classList.add("fixed-top");
        // nextElement.classList.add("scrolled-offset");
      } else {
        selectHeader.classList.remove("fixed-top");
        // nextElement.classList.remove("scrolled-offset");
      }

      if (window.scrollY + 100 >= selectMain.offsetTop) {
        selectHeader.classList.add("header-scrolled");
      } else {
        selectHeader.classList.remove("header-scrolled");
      }
    };
    window.addEventListener("load", headerFixed);
    onscroll(document, headerFixed);
  }

  // let heroText1 = document.getElementById("hero-text-1");
  // let heroText2 = document.getElementById("hero-text-2");
  // window.addEventListener("scroll", function () {
  //   let getHValue = window.scrollY;
  //   heroText1.style.marginLeft = getHValue / 4 + "px";
  //   heroText2.style.marginRight = getHValue * 4 + "px";
  // });

  /**
   * Back to top button
   */
  let backtotop = select(".back-to-top");
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add("active");
      } else {
        backtotop.classList.remove("active");
      }
    };
    window.addEventListener("load", toggleBacktotop);
    onscroll(document, toggleBacktotop);
  }

  let wabtn = select(".whatsapp-btn");
  if (wabtn) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        wabtn.classList.add("active");
      } else {
        wabtn.classList.remove("active");
      }
    };
    window.addEventListener("load", toggleBacktotop);
    onscroll(document, toggleBacktotop);
  }

  /**
   * Mobile nav toggle
   */
  on("click", ".mobile-nav-toggle", function (e) {
    select("#navbar").classList.toggle("navbar-mobile");
    this.classList.toggle("bi-list");
    this.classList.toggle("bi-x");
  });

  /**
   * Mobile nav dropdowns activate
   */
  on(
    "click",
    ".navbar .dropdown > a",
    function (e) {
      if (select("#navbar").classList.contains("navbar-mobile")) {
        e.preventDefault();
        this.nextElementSibling.classList.toggle("dropdown-active");
      }
    },
    true
  );

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on(
    "click",
    ".scrollto",
    function (e) {
      if (select(this.hash)) {
        e.preventDefault();

        let navbar = select("#navbar");
        if (navbar.classList.contains("navbar-mobile")) {
          navbar.classList.remove("navbar-mobile");
          let navbarToggle = select(".mobile-nav-toggle");
          navbarToggle.classList.toggle("bi-list");
          navbarToggle.classList.toggle("bi-x");
        }
        scrollto(this.hash);
      }
    },
    true
  );

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener("load", () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash);
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select("#preloader");
  if (preloader) {
    window.addEventListener("load", () => {
      preloader.remove();
    });
  }

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: ".glightbox",
  });

  /**
   * Skills animation
   */
  let skilsContent = select(".skills-content");
  if (skilsContent) {
    new Waypoint({
      element: skilsContent,
      offset: "80%",
      handler: function (direction) {
        let progress = select(".progress .progress-bar", true);
        progress.forEach((el) => {
          el.style.width = el.getAttribute("aria-valuenow") + "%";
        });
      },
    });
  }

  /**
   * Testimonials slider
   */
  new Swiper(".testimonials-slider", {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    slidesPerView: "auto",
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
  });



  /**
   * Porfolio isotope and filter
   */
  window.addEventListener("load", () => {
    let portfolioContainer = select(".portfolio-container");
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: ".portfolio-item",
      });

      let portfolioFilters = select("#portfolio-flters li", true);

      on(
        "click",
        "#portfolio-flters li",
        function (e) {
          e.preventDefault();
          portfolioFilters.forEach(function (el) {
            el.classList.remove("filter-active");
          });
          this.classList.add("filter-active");

          portfolioIsotope.arrange({
            filter: this.getAttribute("data-filter"),
          });
          portfolioIsotope.on("arrangeComplete", function () {
            AOS.refresh();
          });
        },
        true
      );
    }
  });

  /**
   * Initiate portfolio lightbox
   */
  const portfolioLightbox = GLightbox({
    selector: ".portfolio-lightbox",
  });

  /**
   * Portfolio details slider
   */
  new Swiper(".portfolio-details-slider", {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
  });

  /**
   * Animation on scroll
   */
  window.addEventListener("load", () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false,
    });
  });

  // let showMoreLess = document.getElementById("about-more");
  // let showAboutFull = document.getElementById("about");
  // let thisBody = document.getElementById("body");
  // let btnShowMoreLess = document.getElementById("about-more-toggle");

  // btnShowMoreLess.onclick = function () {
  //   if (showMoreLess.style.display !== "block") {
  //     showMoreLess.style.display = "block";
  //     showAboutFull.classList.add("active");
  //     thisBody.classList.add("active");
  //     btnShowMoreLess.innerHTML = "Show Less <i class='bx bx-up-arrow-alt'>";
  //   } else {
  //     showMoreLess.style.display = "none";
  //     showAboutFull.classList.remove("active");
  //     btnShowMoreLess.innerHTML = "Show More <i class='bx bx-down-arrow-alt'>";
  //   }
  // };

  let btnShowAboutMore = document.getElementById("about-more-toggle");
  let showAboutFull = document.getElementById("about-full");
  let showMoreBtnText = document.getElementById("show-more-btn-text");
  btnShowAboutMore.onclick = function (e) {
    e.preventDefault();
    showAboutFull.classList.toggle("active");
    showAboutFull.classList.toggle("slide-bottom");
    if (showAboutFull.classList.contains("active")) {
      // showAboutFull.classList.add("slide-bottom");
      showMoreBtnText.innerHTML = "Show Less <i class='bx bx-up-arrow-alt'>";
    } else {
      // showAboutFull.classList.remove("slide-bottom");
      showMoreBtnText.innerHTML = "Show More <i class='bx bx-down-arrow-alt'>";
    }
  };

  let showMoreTeam = document.getElementById("team-more");
  let btnShowMoreTeam = document.getElementById("team-more-toggle");
  let showMoreTeamBtnText = document.getElementById("show-more-team-btn-text");
  btnShowMoreTeam.onclick = function (e) {
    e.preventDefault();
    showMoreTeam.classList.toggle("active");
    if (showMoreTeam.classList.contains("active")) {
      showMoreTeamBtnText.innerHTML =
        "Show Less Team <i class='bx bx-up-arrow-alt'>";
    } else {
      showMoreTeamBtnText.innerHTML =
        "Show More Team <i class='bx bx-down-arrow-alt'>";
    }
  };
})();
