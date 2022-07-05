function show(eltId, URL){
    var elt = window.document.getElementById(eltId);
    elt.setAttribute("src", URL);
    return;
}