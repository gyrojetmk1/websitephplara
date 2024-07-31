const menudiv = document.getElementById('linkholder');
const menubut = document.getElementById('menubutton');

let menuen = false;




function menu() {
    if (menuen == false){
    menuen = true
    menubut.classList.add('active')
    menudiv.classList.remove('closed')
    } else {
    menuen = false
    menubut.classList.remove('active')
    menudiv.classList.add('closed')
    };
};



function resize() {
    if (window.innerWidth > 699) {
        menuen = true
        menu()
    }
};


var timep = document.getElementById('time')
setInterval(function() {
    if (typeof(timep) != 'undefined' && timep != null) {
        var currentTime = new Date(),
            hours = currentTime.getHours(),
            minutes = currentTime.getMinutes(),
            ampm = hours > 11 ? 'PM' : 'AM';
            hours = ((hours + 11) % 12 + 1);

        // todo: fix time displaying 00:70 instead of 00:07
        minutes += minutes < 10 ? '0' : '';
        timep.innerHTML = hours + ":" + minutes + " " + ampm;
    } else {

    }
}, 50);


var modal = document.getElementById("modal");

var btn = document.getElementById("btn");

var span = document.getElementsByClassName("closem")[0];

function showmodal() {
  modal.style.visibility = "visible";
  modal.style.opacity = "1"

}

span.onclick = function() {
  modal.style.visibility = "hidden";
  modal.style.opacity = "0"
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.visibility = "hidden";
    modal.style.opacity = "0"
  }
}


window.addEventListener("resize", resize);