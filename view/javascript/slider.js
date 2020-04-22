'use strict';
let images;
let mainImage;
let currentMainImageId;
let next;
let previous;
let index;
let imagesFig;
let mainFig;
let mainTitle;
let imgTitle;



/* quand on clique sur une des vignettes, l'affiche au centre de l'ecran*/
function onClickChangeImage(event) {
    mainImage.setAttribute("src", event.target.src);
    currentMainImageId = (event.target.id);
    mainFig.textContent = imagesFig[currentMainImageId].textContent;
    mainTitle.textContent =imgTitle[currentMainImageId].textContent;
}

/* slider */
function onClickNextImage() {
    let image;
    currentMainImageId++;
    if (currentMainImageId > images.length - 1) {
        currentMainImageId = 0;
    }
    image = images[currentMainImageId].getAttribute("src");
    mainImage.setAttribute("src", image);
    mainFig.textContent = imagesFig[currentMainImageId].textContent;
    mainTitle.textContent =imgTitle[currentMainImageId].textContent;
}

function onClickPreviousImage() {
    let image;
    currentMainImageId--;
    if (currentMainImageId === -1) {
        currentMainImageId = images.length - 1;
    }
    image = images[currentMainImageId].getAttribute("src");
    mainImage.setAttribute("src", image);
    mainFig.textContent = imagesFig[currentMainImageId].textContent;
    mainTitle.textContent =imgTitle[currentMainImageId].textContent;
    console.log(currentMainImageId)
}

//code principale//
document.addEventListener('DOMContentLoaded', function () {
    previous = document.querySelector("img.back");
    mainImage = document.querySelector("#slider .mainImage");
    mainFig =document.querySelector("#slider .visible em");
    mainTitle = document.querySelector("#slider .visible strong");
    next = document.querySelector("img.next");
    images = document.querySelectorAll(".sliderScheme img");
    imagesFig =document.querySelectorAll(".sliderScheme .hide em");
    imgTitle = document.querySelectorAll(".sliderScheme .hide strong")
    currentMainImageId = 0;


    
    for (index = 0; index < images.length; index++) {

        images[index].setAttribute("id", index);
        images[index].addEventListener('click', onClickChangeImage);
    }
    previous.addEventListener("click", onClickPreviousImage);
    next.addEventListener("click", onClickNextImage);
});



