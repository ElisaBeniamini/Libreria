import './bootstrap';
import 'bootstrap';


//const element = document.getElementById('nome');
//const element_2 = document.getElementById('email');
//const element_3 = document.getElementById('registratoIl');

// Applica l'effetto solo se l'elemento è presente
//if (element) {
//    new CircleType(element).radius(800);
//}
//if (element_2) {
//    new CircleType(element_2).radius(800);
//}
//if (element_3) {
//    new CircleType(element_3).radius(800);
//}


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}










