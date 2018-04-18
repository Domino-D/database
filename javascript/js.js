function $(str){return (document.getElementById(str));}
function show(){
    $('more').style.display='none';
    slide();
    var newheight = 587;
    function slide(){
        if(newheight != 977){
            $('valvesnav').style.height = newheight + 30 + 'px';
            newheight += 30;
            setTimeout(slide,20);
        }
        else{
            $('valvesnav').style.height='977px';
        }
    }
}
function navshow(){
    $('navigator').style.left = '0px';
}
function navhide(){
    setTimeout(slide,2000);
    var newleft = 0;
    function slide(){
        if(newleft != -190){
            $('navigator').style.left = newleft - 10 +'px';
            newleft -= 10;
            setTimeout(slide,20);
        }
    }
}
var trued = true;
function preonclick(){
    var newleft = $("lists").style.left;
    if(trued == true){
        if(parseInt(newleft) < 0){
            turn(720);
        }else{
            $("lists").style.left = -2160 + "px";
            turn(720);
        }
    }
}
function nextonclick(){
    var newleft = $("lists").style.left;
    if(trued == true){
        if(parseInt(newleft) > -2160){
            turn(-720);
        }else{
            $("lists").style.left = 0 + "px";
            turn(-720);
        }
    }
}
function turn(offset){
    var targetleft = parseInt($("lists").style.left) + offset;
    var interval = 30;
    var step = (offset/24);
    go();
    function go(){
        if(parseInt($("lists").style.left) < targetleft || parseInt($("lists").style.left) > targetleft){
            $("lists").style.left = parseInt($("lists").style.left) + step + "px";
            setTimeout(go,interval);
            trued = false;
        }else{
            $("lists").style.left = targetleft + "px";
            if( targetleft < -1440){
                $("lists").style.left = 0 +"px";
            }
            if( targetleft > -720){
                $("lists").style.left = -2160 +"px";
            }
            trued = true;
        }
    }
}
function play(){
    time = setInterval(function(){
        nextonclick();
    },4000);     
}
function stop(){
    clearInterval(time);
}
play();
window.onload = function(){
    $('focuspic').onmouseover = function(){
        stop();
    }
    $('focuspic').onmouseout = function(){
        play();
    }
    $('showmore').onclick = function(){
        show();
    }
    $('navigator').onmouseover = function(){
        navshow();
    }
    $('navigator').onmouseleave = function(){
        navhide();
    }
    $('lists').onmouseover = function(){
        this.style.cursor = 'pointer';
    }
    $('lists').onclick = function(){
        window.open('https://www.gea.com/zh/index.jsp');
    }
}