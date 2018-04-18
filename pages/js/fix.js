window.onload = function(){
    $('ordercode').onmouseover = function(){
        textshow();
    }
}
function textshow(){
    $("pps").style.display = "block";
    $("pps").style.textDecoration = "underline";
}
function $(str) {return (document.getElementById(str));}