const body = document.body;
const nav = document.querySelector(".site-nav");
const menuToggle = document.querySelector(".menu-toggle");

if (menuToggle && nav) {
  menuToggle.addEventListener("click", () => {
    const open = nav.classList.toggle("is-open");
    menuToggle.setAttribute("aria-expanded", String(open));
    if (!open) {
      nav.querySelectorAll(".nav-dropdown").forEach((dropdown) => {
        dropdown.classList.remove("is-open");
      });
    }
  });

  nav.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      nav.classList.remove("is-open");
      menuToggle.setAttribute("aria-expanded", "false");
    });
  });
}

const navDropdowns = nav ? [...nav.querySelectorAll(".nav-dropdown")] : [];

navDropdowns.forEach((dropdown) => {
  const trigger = dropdown.querySelector(".nav-dropdown-link");
  if (!trigger) {
    return;
  }

  trigger.addEventListener("click", (event) => {
    if (window.innerWidth > 980) {
      return;
    }

    event.preventDefault();
    const willOpen = !dropdown.classList.contains("is-open");
    navDropdowns.forEach((item) => item.classList.remove("is-open"));
    dropdown.classList.toggle("is-open", willOpen);
  });
});

window.addEventListener("resize", () => {
  if (window.innerWidth > 980) {
    navDropdowns.forEach((dropdown) => dropdown.classList.remove("is-open"));
  }
});

document.addEventListener("click", (event) => {
  if (!nav || !event.target || !(event.target instanceof Element)) {
    return;
  }

  if (!nav.contains(event.target)) {
    navDropdowns.forEach((dropdown) => dropdown.classList.remove("is-open"));
  }
});

const page = body.dataset.page;
document.querySelectorAll(".site-nav a").forEach((link) => {
  const href = link.getAttribute("href");
  if (
    (page === "home" && href === "index.html") ||
    (page === "services" && href === "services.html") ||
    (page === "portfolio" && href === "portfolio.html") ||
    (page === "about" && href === "about.html") ||
    (page === "contact" && href === "contact.html")
  ) {
    link.classList.add("is-active");
  }
});

if (nav) {
  nav.querySelectorAll(".nav-dropdown-panel a").forEach((link) => {
    link.addEventListener("click", () => {
      nav.classList.remove("is-open");
      if (menuToggle) {
        menuToggle.setAttribute("aria-expanded", "false");
      }
    });
  });
}

const revealItems = document.querySelectorAll(".reveal");
const revealObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");
        revealObserver.unobserve(entry.target);
      }
    });
  },
  {
    threshold: 0.18,
  }
);

revealItems.forEach((item) => revealObserver.observe(item));

const filterButtons = document.querySelectorAll("[data-filter]");
const portfolioCards = document.querySelectorAll(".portfolio-card");

if (filterButtons.length && portfolioCards.length) {
  filterButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const filter = button.dataset.filter;

      filterButtons.forEach((chip) => chip.classList.remove("is-active"));
      button.classList.add("is-active");

      portfolioCards.forEach((card) => {
        const match = filter === "all" || card.dataset.category === filter;
        card.classList.toggle("is-hidden", !match);
      });
    });
  });
}

const contactForm = document.querySelector(".contact-form");
if (contactForm) {
  contactForm.addEventListener("submit", (event) => {
    event.preventDefault();
    const button = contactForm.querySelector("button");
    if (button) {
      const original = button.textContent;
      button.textContent = "Inquiry Sent";
      button.disabled = true;
      setTimeout(() => {
        button.textContent = original;
        button.disabled = false;
        contactForm.reset();
      }, 1800);
    }
  });
}
