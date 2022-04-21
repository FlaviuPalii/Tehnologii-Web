let textInput = document.querySelector(".form-text");
let submit = document.querySelector(".form-submit");
let allContents = document.querySelector(".form-all-comments");

allContents.innerHTML = localStorage.getItem("comment");

submit.addEventListener("click", (event) => {
    event.preventDefault();
    if(!textInput.value) {
        alert("Nothing in here... You can't submit this comment!");
        return;
    } else {
        localStorage.setItem("comment", textInput.value);
        allContents.innerHTML = textInput.value;
    }
});

let i=0;
let images=[];
let time=1500;
images[0]="slideshow/nismo_slideshow.jpg";
images[1]="slideshow/gtrs_slideshow.jpg";
images[2]="slideshow/silvia_slideshow.jpg";

function slideShow() {
    document.slideshow.src=images[i];
    if (i<images.length-1) {
        i++;
    } else {
        i=0;
    }
    setTimeout("slideShow()", time);
}

window.onload=function(){
    slideShow();
}