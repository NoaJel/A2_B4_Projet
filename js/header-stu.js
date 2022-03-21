/* const openLoginModal = document.querySelectorAll("[data-modal-target]");
const closeLoginModal = document.querySelectorAll("[data-modal-close]");
const modalOverlay = document.getElementById("modal-overlay");


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
}

function closeModal(modal) {
    if (modal == null) return;
    modal.classList.remove("active");
    modalOverlay.classList.remove("active");
}
 */



const openBurgerMenu = document.querySelector("[data-burger-toggle]");
const navLinks = document.querySelector("[data-nav-vertical]");
const burgerOverlay = document.querySelector("#burger-overlay");


openBurgerMenu.addEventListener("click", () => {
    toggleBurger();
    window.addEventListener("scroll", removeBurger);
});

burgerOverlay.addEventListener("click", removeBurger);


function toggleBurger() {
    openBurgerMenu.classList.toggle("opened");
    navLinks.classList.toggle("unrolled");
    burgerOverlay.classList.toggle("burger-overlay-active");
}

function removeBurger() {
    this.removeEventListener("scroll", arguments.callee, false);

    openBurgerMenu.classList.remove("opened");
    navLinks.classList.remove("unrolled");
    burgerOverlay.classList.remove("burger-overlay-active");
}