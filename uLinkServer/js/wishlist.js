//Initialization of variables

let list = document.querySelectorAll(".wish");
let listW = document.querySelectorAll(".wish-info");
const listC = [...document.getElementsByClassName("wish")];
let wishList = document.getElementById("wishlist");
let numberOfItems = 3;
let first = 0;
let actualPage = 1;
let maxPages = Math.ceil(list.length / numberOfItems);

let details_window = document.getElementById("details-window");
let internship_info = document.getElementById("internship-info");
let placeholder = document.getElementById("placeholder");


/* details_window.innerHTML = ""; */
/* details_window.appendChild(placeholder); */
console.log(list);
showList();

function firstPage(){ //Allow us to switch to the first page of our list
    first = 0;
    actualPage = 1;
    showList();
}

function nextPage(){ //Allow us to switch to the next page of our list
    /* console.log(first); */
    if(first+numberOfItems<=list.length - 1){
        first+=numberOfItems;
        /* console.log(first); */
        actualPage++;
        showList();
    }
}

function previous(){ //Allow us to switch to the previous page of our list
    if(first - numberOfItems >=0){
        first-=numberOfItems;
        actualPage--;
        showList();
    }
}

function lastPage(){ //Allow us to switch to the last page of our list
    first = (maxPages * numberOfItems) - numberOfItems;
    actualPage = maxPages;
    showList();
}

function showList(){ //function that will show the wishlist 
    wishList.innerHTML = ""; //Reset the wishlist to no element
    /* console.log(wishList)
    console.log(list); */
    for (let i = first; i < first +numberOfItems;i++){ //Add wish to the list 
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
    /* details_window.innerHTML = "";
    /* details_window.appendChild(internship_info); */
    listC.map((wish) =>{
        wish.onclick = () => {
            i = listC.indexOf(wish);
            internship_info.innerHTML = "";
            console.log(i);

            let clone =""
            clone = listW[i].cloneNode(true);
            internship_info.appendChild(clone);
            details_window.setAttribute("style", "background-color: rgb(243, 243, 243); border: 2px solid rgb(206, 206, 206);");
            placeholder.innerHTML = "";
            internship_info.innerHTML += "<button>Apply</button>";
            console.log(internship_info);
            console.log(listW[i]);
        }
    })
}

