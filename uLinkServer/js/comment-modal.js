// COMMENT MODAL ===========================================================================

const openCommentModal = document.querySelectorAll("[data-comment-target]");
const closeCommentModal = document.querySelectorAll("[data-comment-close]");
const commentOverlay = document.getElementById("comment-overlay");

// This section is used to disable the focus of the elements that are not part of the comment section; this is especially important for screen readers
const commentInputs = document.querySelectorAll(".comment-input");
const otherField = document.querySelectorAll("body *:not(.comment-input)");

function disableFocus(elements) {
    elements.forEach(element => {
        element.setAttribute("tabindex", "-1");
        element.setAttribute("aria-disabled", "true"); // aria-disabled indicates the element as perceivable but disabled, so it is not editable or otherwise operable
    });
}

function enableFocus(elements) {
    elements.forEach(element => {
        element.removeAttribute("tabindex");
        element.removeAttribute("aria-disabled");
    });
}



disableFocus(commentInputs); // disable it on the load of the page as the comment modal is not opened by default

openCommentModal.forEach(button => {
    button.addEventListener("click", () => {
        const comment = document.querySelector(button.dataset.commentTarget);
        openComment(comment);
    });
});

closeCommentModal.forEach(button => {
    button.addEventListener("click", () => {
        const comment = button.closest(".comment-container");
        closeComment(comment);
    });
});

commentOverlay.addEventListener("click", () => {
    const comments = document.querySelectorAll(".comment-container.active");
    comments.forEach(comment => {
        closeComment(comment);
    });
});


function openComment(comment) {
    if (comment == null) return;
    comment.classList.add("active");
    commentOverlay.classList.add("active");

    enableFocus(commentInputs);
    disableFocus(otherField);
}

function closeComment(comment) {
    if (comment == null) return;
    comment.classList.remove("active");
    commentOverlay.classList.remove("active");

    enableFocus(otherField);
    disableFocus(commentInputs);
}



// MODAL STAR RATING ===========================================================================

const ratingStars = [...document.getElementsByClassName("rating-star")];
const ratingAvg = [...document.getElementsByClassName("rating-avg")];


function executeRating(stars) {
   const starClassActive = "rating-star fas fa-star";
   const starClassUnactive = "rating-star far fa-star";
   const starsLength = stars.length;
   let i;
   let res;
   stars.map((star) => {
      star.onclick = () => {
         i = stars.indexOf(star);

         if (star.className.indexOf(starClassUnactive) !== -1) {
            res = i + 1;
            /* console.log(res); */
            for (i; i >= 0; --i) stars[i].className = starClassActive;
         } 
         else {
            res = i;
            /* console.log(res); */
            for (i; i < starsLength; ++i) stars[i].className = starClassUnactive;
         }
         document.querySelector(".result").innerHTML = `<input type="hidden" value="${res}" />`;
      };
   });
}

function avgRating(stars, average) {
    const starClassActive = "rating-star fas fa-star";
    let i;
    i = average;
    document.querySelector(".rating-number").innerHTML =`${i}/5`;
    i = Math.round(average-1);
    /* console.log(stars[i].className) */
    for (i; i >= 0; --i) stars[i].className= starClassActive;


}

executeRating(ratingStars);

var avg = document.getElementById("avg").value;
/* console.log(avg); */

avgRating(ratingAvg, avg);
