// on récup' le nom et mdp
var nom = document.getElementById('nom');
var mdp = document.getElementById('mdp');

// on l'sauvegarde dans le localstorage
function store() {
    localStorage.setItem('nom', nom.value);
    localStorage.setItem('mdp', mdp.value);
}

// comparer si le compte entré == compte enregistré
function check() {

    var storednom = localStorage.getItem('nom');
    var storedmdp = localStorage.getItem('mdp');

    var usernom = document.getElementById('usernom');
    var usermdp = document.getElementById('usermdp');

    if(usernom.value !== storednom || usermdp.value !== storedmdp) {
        alert('ERROR');
    }else {
        alert('You are loged in.');
    }
}