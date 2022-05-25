let textInput = document.querySelector(".form-text");
let submit = document.querySelector(".form-submit");
let allContents = document.querySelector(".form-all-comments");
let comments = [];
// comments = localStorage.getItem("comments") ? localStorage.getItem("comments") : localStorage.setItem("comments", []);
let valueFromLocalStorage = localStorage.getItem("comments");
let html = '';


let i=0;
let images=[];
let time=4500;

allContents.innerHTML = localStorage.getItem("comment");

for(key in comments) {
    let p = document.createElement('span');
    allContents.innerHTML = "";
    allContents.append(comments[key].value, p);
}

submit.addEventListener("click", (event) => { // Array function
    event.preventDefault();
    if(!textInput.value) {
        alert("Nothing in here... You can't submit this comment!");
        return;
    } else {
        let p = document.createElement('span');
        p.innerHTML = `Guest: ${textInput.value}`;
        let br = document.createElement('br');
        allContents.append(br, p);
        // comments.push({value: textInput.value});
        // localStorage.setItem("comments", comments);

        // for(key in comments) {
        //     let p = document.createElement('span');
        //     let br = document.createElement('br');
        //     allContents.append(`${comments[key].value}`,br);
        // }
    }
});

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

let loginButton=document.querySelector("#blackgray_text");
let signForm= document.querySelector(".login-form");
let bgForm = document.querySelector("#bg-form");

loginButton.addEventListener('click',(e)=>{
    signForm.style.opacity = 1;
    signForm.style.visibility = 'visible';
    bgForm.style.opacity = 0.4;
    bgForm.style.visibility = 'visible';
});
//
// let registerButton = document.querySelector('#registerButton');
// let regForm = document.querySelector('.register-form');
// registerButton.addEventListener('click',(e)=>{
//     console.log('a');
//     regForm.style.opacity = 1;
//     regForm.style.visibility = 'visible';
//     bgForm.style.opacity = 0.4;
//     bgForm.style.visibility = 'visible';
// });