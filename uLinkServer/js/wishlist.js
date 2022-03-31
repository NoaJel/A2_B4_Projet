let list = document.querySelectorAll(".wish");
let listW = document.querySelectorAll(".wish-info");
const listC = [...document.getElementsByClassName("wish")];
let wishList = document.getElementById("wishlist");
let numberOfItems = 5;
let first = 0;
let actualPage = 1;
let maxPages = Math.ceil(list.length / numberOfItems);

let details_window = document.getElementById("details-window");
let internship_info = document.getElementById("internship-info");
let placeholder = document.getElementById("placeholder");

/* internship_info.innerHTML = ""; */

/* details_window.innerHTML = ""; */
details_window.appendChild(placeholder);
console.log(list);
showList();

function firstPage(){
    first = 0;
    actualPage = 1;
    showList();
}

function nextPage(){
    /* console.log(first); */
    if(first+numberOfItems<=list.length - 1){
        first+=numberOfItems;
        /* console.log(first); */
        actualPage++;
        showList();
    }
}

function previous(){
    if(first - numberOfItems >=0){
        first-=numberOfItems;
        actualPage--;
        showList();
    }
}

function lastPage(){
    first = (maxPages * numberOfItems) - numberOfItems;
    actualPage = maxPages;
    showList();
}

function showList(){
    wishList.innerHTML = "";
    /* console.log(wishList)
    console.log(list); */
    for (let i = first; i < first +numberOfItems;i++){
        if(i<list.length){
            wishList.appendChild(list[i]);
            /* console.log(wishList);
            console.log(list[i]); */            
        }
    }
    showPageInfo();
}

function showPageInfo(){
    document.getElementById("pageInfo").innerHTML = `Wishlist ${actualPage}/${maxPages}`;
}

function details() {
    details_window.innerHTML = "";
    details_window.appendChild(internship_info);
    details_window.setAttribute("style", "background-color: rgb(243, 243, 243); border: 2px solid rgb(206, 206, 206);");
    /* listC.map((wish) =>{
        wish.onclick = () => {
            i = listC.indexOf(wish);
            internship_info.innerHTML = "";
            console.log(i);

            let clone =""
            clone = listW[i].cloneNode(true);
            internship_info.appendChild(clone);
            console.log(internship_info);
            console.log(listW[i]);
        }
    }) */
}

