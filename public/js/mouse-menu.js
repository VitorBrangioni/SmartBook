/*if (document.addEventListener) { // IE >= 9; other browsers
    document.addEventListener('contextmenu', function (e) {
        alert("You've tried to open context menu"); //here you draw your own menu
        e.preventDefault();
    }, false);
} else { // IE < 9
    document.attachEvent('oncontextmenu', function () {
        alert("You've tried to open context menu");
        window.event.returnValue = false;
    });
}*/

window.onclick = hideContextMenu;
window.onkeydown = listenKeys;
var contextMenu = document.getElementById('contextMenu');

function showContextMenu(event) {
    contextMenu.style.display = 'block';
    contextMenu.style.left = event.clientX + 'px';
    contextMenu.style.top = event.clientY + 'px';
    return false;
}

function hideContextMenu() {
    contextMenu.style.display = 'none';
}

function listenKeys(event) {
    var keyCode = event.which || event.keyCode;
    if (keyCode == 27) {
        hideContextMenu();
    }
}