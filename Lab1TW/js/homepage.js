let i=0;
let images=[];
let time=1500;
images[0]="";
images[1]="";
images[2]="";
function slideShow() {
    document.slideshow.src=images[i];
    if (i<images.length-1) {
        i++;
    } else {
        i=0;
    }
    setTimeout("slideShow()", time);
}