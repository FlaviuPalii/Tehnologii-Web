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
