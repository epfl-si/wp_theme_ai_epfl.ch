// Function to handle navbar scroll behavior
function showNavbarOnScrollUp() {
  let lastScrollTop = 0;
  const navbar = document.querySelector(".navbar");
  if (!navbar) return;

  window.addEventListener(
    "scroll",
    function () {
      const currentScroll =
        window.scrollY || document.documentElement.scrollTop;

      if (currentScroll === 0) {
        navbar.classList.remove("hide-navbar", "slide-down");
      } else if (currentScroll > lastScrollTop) {
        navbar.classList.remove("slide-down");
        navbar.classList.add("hide-navbar");
      } else {
        navbar.classList.remove("hide-navbar");
        navbar.classList.add("slide-down");
      }

      lastScrollTop = currentScroll;
    },
    false
  );
}
showNavbarOnScrollUp();

// Function to toggle the touch menu
function toggleTouchMenu() {
  const touchMenu = document.getElementById("touchMenu");
  const navbar = document.querySelector(".navbar");
  const body = document.body;

  // Toggle the touch menu
  touchMenu.classList.toggle("is-active");

  // Toggle the no-scroll class on the body
  if (touchMenu.classList.contains("is-active")) {
    body.style.overflow = "hidden";

    // Check if the navbar has .dark-theme and apply it to the touch menu
    if (navbar.classList.contains("dark-theme")) {
      touchMenu.classList.add("dark-theme");
    } else {
      touchMenu.classList.remove("dark-theme");
    }
  } else {
    body.style.overflow = "";
    touchMenu.classList.remove("dark-theme"); // Remove dark theme when menu is not active
  }
}

// Function to position the dropdown below the navbar
function positionDropdown(dropdownId) {
  const dropdown = document.getElementById(dropdownId);
  const navbarHeight = document.querySelector(".navbar").offsetHeight;
  dropdown.style.top = `${navbarHeight}px`;
}

// Function to toggle the dropdown and adjust navbar/dropdown theme
function toggleDropdown(dropdownId) {
  const dropdown = document.getElementById(dropdownId);
  const navbar = document.querySelector(".navbar");
  const body = document.body;

  dropdown.classList.toggle("is-active");
  positionDropdown(dropdownId); // Recalculate position each time

  if (dropdown.classList.contains("is-active")) {
    // Apply theme to dropdown based on navbar's theme
    if (navbar.classList.contains("dark-theme")) {
      dropdown.classList.add("dark-theme");
      navbar.style.backgroundColor = ""; // Keep the dark theme color
    } else {
      navbar.style.backgroundColor = "var(--grey-25)"; // Change navbar color
    }
    body.style.overflow = "hidden"; // Disable scrolling on body
  } else {
    navbar.style.backgroundColor = ""; // Reset navbar color
    dropdown.classList.remove("dark-theme"); // Remove dark theme from dropdown
    body.style.overflow = ""; // Enable scrolling on body
  }
}

// Set up all functionalities when DOM is loaded
document.addEventListener("DOMContentLoaded", function () {
  const researchButton = document.getElementById("researchButton");
  const researchDropdown = document.getElementById("researchDropdown");
  const researchDropdownCloseButton =
    researchDropdown.querySelector(".close-button");

  researchButton.addEventListener("click", function (event) {
    toggleDropdown("researchDropdown");
  });

  researchDropdownCloseButton.addEventListener("click", function () {
    toggleDropdown("researchDropdown");
  });
});

// Search bar
document.addEventListener("DOMContentLoaded", function () {
  const searchBarButton = document.querySelector(".search-button");
  const searchCloseButton = document.querySelector(".search-bar .close-button");
  const searchBar = document.querySelector(".search-bar");
  const navbar = document.querySelector(".navbar");

  // Function to show the search bar
  function showSearchBar() {
    searchBar.style.transform = "translateY(0)";

    // Apply .dark-theme to search-bar if navbar has it
    if (navbar.classList.contains("dark-theme")) {
      searchBar.classList.add("dark-theme");
    } else {
      searchBar.classList.remove("dark-theme");
    }
  }

  // Function to hide the search bar
  function hideSearchBar() {
    searchBar.style.transform = "translateY(-100%)";
  }

  searchBarButton.addEventListener("click", showSearchBar);
  searchCloseButton.addEventListener("click", hideSearchBar);
});

// Function to handle accordion behavior
function setupAccordion() {
  const accordionToggles = document.querySelectorAll(".accordion-toggle");

  accordionToggles.forEach(function (toggle) {
    toggle.addEventListener("click", function () {
      this.classList.toggle("is-active");
      const content = this.nextElementSibling;
      content.style.maxHeight = content.style.maxHeight
        ? null
        : content.scrollHeight + "px";
    });
  });
}

// Function to handle cookie consent
function setupCookieConsent() {
  const consentButton = document.getElementById("cookieConsentOk");
  const cookieConsentDiv = document.querySelector(".cookie-consent");

  if (localStorage.getItem("cookieConsentAccepted") === "true") {
    cookieConsentDiv.style.display = "none";
  }

  consentButton.addEventListener("click", function () {
    cookieConsentDiv.style.display = "none";
    localStorage.setItem("cookieConsentAccepted", "true");
  });
}

// Set up all functionalities when DOM is loaded
document.addEventListener("DOMContentLoaded", function () {
  const menuButton = document.querySelector(".menu-button");
  const closeButton = document.querySelector(".close-button");

  // Event listeners for opening and closing the menu
  menuButton.addEventListener("click", toggleTouchMenu);
  closeButton.addEventListener("click", toggleTouchMenu);

  setupAccordion();
  setupCookieConsent();
});
