var rooms = [], i;


function styleRoomChoose() {
    var imgModal, icon;
    imgModal = document.getElementsByClassName('img-modal');
    for (i=0; i<imgModal.length; i++) {
        imgModal[i].className = imgModal[i].className.replace(" img-choosed", "");
    }
    for (i=0; i<rooms.length; i++) {
        if (document.getElementById(rooms[i])) {
            document.getElementById(rooms[i]).className += " img-choosed";
        }
    }
}

function chooseRoom(name, id) {
    if (rooms.includes(name)) {
        var key = rooms.indexOf(name);
        if (key == -1) {
            rooms.push(name);
        } else {
            rooms.splice(key, 1);
        }
    } else {
        rooms.push(name);
    }
    this.styleRoomChoose();
    $('#nameRoom'+id).val(rooms);
}


