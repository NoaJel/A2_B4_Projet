const openLoginModal = document.querySelectorAll("[data-modal-target]");
const closeLoginModal = document.querySelectorAll("[data-modal-close]");
const modalOverlay = document.getElementById("modal-overlay");

// This section is used to disable the focus of the elements that are not part of the modal; this is especially important for screen readers
const loginInputs = document.querySelectorAll(".login-input");
const otherFields = document.querySelectorAll("body *:not(.login-input)");

function disableFocus(elements) {
    elements.forEach(element => {
        element.setAttribute("tabindex", "-1");
        element.setAttribute("aria-disabled", "");
    });
}

function enableFocus(elements) {
    elements.forEach(element => {
        element.removeAttribute("tabindex");
        element.removeAttribute("aria-disabled");
    });
}



disableFocus(loginInputs); // disable it on the load of the page as the login modal is not opened by default

openLoginModal.forEach(button => {
    button.addEventListener("click", () => {
        const modal = document.querySelector(button.dataset.modalTarget);
        openModal(modal);
    });
});

closeLoginModal.forEach(button => {
    button.addEventListener("click", () => {
        const modal = button.closest(".modal-container");
        closeModal(modal);
    });
});

modalOverlay.addEventListener("click", () => {
    const modals = document.querySelectorAll(".modal-container.active");
    modals.forEach(modal => {
        closeModal(modal);
    });
});


function openModal(modal) {
    if (modal == null) return;
    modal.classList.add("active");
    modalOverlay.classList.add("active");

    enableFocus(loginInputs);
    disableFocus(otherFields);
}

function closeModal(modal) {
    if (modal == null) return;
    modal.classList.remove("active");
    modalOverlay.classList.remove("active");

    enableFocus(otherFields);
    disableFocus(loginInputs);
}



const openBurgerMenu = document.querySelector("[data-burger-toggle]");
const navLinks = document.querySelector("[data-nav-vertical]");
const burgerOverlay = document.querySelector("#burger-overlay");
// NB: Uncomment the commented lines below to disable the burger window on scroll

openBurgerMenu.addEventListener("click", () => {
    toggleBurger();
    // window.addEventListener("scroll", removeBurger);
});

burgerOverlay.addEventListener("click", removeBurger);


function toggleBurger() {
    openBurgerMenu.classList.toggle("opened");
    navLinks.classList.toggle("unrolled");
    burgerOverlay.classList.toggle("burger-overlay-active");
}

function removeBurger() {
    // this.removeEventListener("scroll", arguments.callee, false);

    openBurgerMenu.classList.remove("opened");
    navLinks.classList.remove("unrolled");
    burgerOverlay.classList.remove("burger-overlay-active");
}