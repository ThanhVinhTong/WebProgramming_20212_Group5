var button = window.document.getElementById("msgButton")
button.addEventListener("click", sayHello, false)

function sayHello(event) {
    window.alert(
        "Hello World!\n\n" +
        "Event type: " + event.type + "\n" +
        "Event target element type: " + event.target.nodeName
    )
    return
}