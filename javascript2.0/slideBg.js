var images = new Array('../img/i1.jpg','../img/i5.jpg','../img/i3.jpg');
var nextimage = 0;
doSlideshow();

function doSlideshow(){
    if(nextimage>=images.length) {
        nextimage=0;
    }
    $('.header')
    .css('background-image','url("'+images[nextimage++]+'")')
    .fadeIn(3000,function(){
        setTimeout(doSlideshow,4000);
    });
}