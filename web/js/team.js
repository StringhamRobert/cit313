function teamActivity(){
    var inputcolor ="tcolor";
    var color = document.getElementById(inputcolor);

    var changecolor_id = "div1";
    var changecolor = document.getElementById(changecolor_id);

    var change = color.value;
    changecolor.style.backgroundColor = change;
    
    
}
function alertFunction(){
    alert("Clicked!");
}
