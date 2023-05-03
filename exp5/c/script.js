var btn1 = document.getElementById("btn1");
EventUtil.addHandler(btn1, "click", fun1);
EventUtil.addHandler(btn1, "mouseover", fun1);
EventUtil.addHandler(btn1, "mouseout", fun1);

function fun1(event) {
    if (event.type == "click") {
        alert("This is click event");
    } else if (event.type == "mouseover") {
        btn1.style.backgroundColor = "red";
    } else if (event.type == "mouseout") {
        btn1.style.backgroundColor = "blue";
    }
}
