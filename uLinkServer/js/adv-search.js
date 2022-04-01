let filters = document.querySelectorAll(".filter");

filters.forEach(filter => {
    filter.addEventListener("click", evt => {
        if (filter.checked) {
            // alert(`${event.target.id}-search`);
            document.querySelector(`#${evt.target.id}-search`).removeAttribute("hidden");
        } else {
            document.querySelector(`#${evt.target.id}-search`).setAttribute("hidden", "");
        }
    });
});