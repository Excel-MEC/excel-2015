$(document).ready(function() {
    $('.materialboxed').materialbox();/*GOKUL*/
});

function imageSwitcher(hot) {

    var cool = hot;
    if (cool.id[0] == 'f')
    {
        //already full resolution. no need to swap
    }
    else
    {
        cool.id = "full"+cool.id;
    }
    //cool.src="http://www.excelmec.org/excel2014/images/3.jpg"; test
    cool.src = "images/gallery/" + cool.id + ".jpg";
}