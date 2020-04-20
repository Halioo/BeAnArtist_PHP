let default_nb;

function init_game(max) {
    document.getElementById("plus_ou_moins").style.display = "block";
    default_nb = Math.floor(Math.random() * Math.floor(max));
}


function plus_ou_moins(number) {
    console.log(default_nb);
    console.log(number);
    if (number < default_nb) {
        document.getElementById("testResult").innerHTML = "C'est PLUS !";
    } else if (number > default_nb) {
        document.getElementById("testResult").innerHTML = "C'est MOINS !";
    } else {
        document.getElementById("testResult").innerHTML = "C'est bon, vous avez trouvé, le numéro était : " + default_nb;
    }
}

function reset_game() {
    document.getElementById("plus_ou_moins").style.display = "none";
}