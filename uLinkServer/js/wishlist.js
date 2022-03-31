let list = document.querySelectorAll(".wish");
let wishList = document.querySelectorAll(".wishlist")
let numberOfItems = 3;
let first = 0;
let actualPage = 1;
let maxPages = Math.ceil(list.length / numberOfItems);

showList();

function firstPage(){
    first = 0;
    actualPage = 0;
    showList();
}

function nextPage(){
    if(first+numberOfItems<=list.length){
        first+=numberOfItems;
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
    /* wishList.forEach(wiLi => {
        wiLi.innerHTML = "";
    }); */
    console.log(wishList)
    console.log(list);
    for (let i = first; i < first +numberOfItems;i++){
        if(i<list.length){
            wishList.innerHTML="bonjour";
            console.log(wishList);
            console.log(list[i]);            
        }
    }
}