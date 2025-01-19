// Récupération des éléments HTML
const heroHpElement = document.getElementById("heroHp");
const monsterHpElement = document.getElementById("monsterHp");
const logElement = document.getElementById("log");
const attackButton = document.getElementById("attack");
const quitButton = document.getElementById("quit");

// Initialisation des stats
let heroHp = 100;
let heroAttack = 30;
let monsterHp = 120;
let monsterAttack = 20;

// Fonction pour afficher les messages dans le log
function addLogMessage(message) {
    const p = document.createElement("p");
    p.textContent = message;
    logElement.appendChild(p);
    // logElement.scrollTop = logElement.scrollHeight; // Scroller automatiquement vers le bas
}

// Fonction pour mettre à jour les points de vie affichés
function updateHp() {
    heroHpElement.innerHTML = `<strong>Point de vie :</strong> ${heroHp}`;
    monsterHpElement.innerHTML = `<strong>Point de vie :</strong> ${monsterHp}`;
}

// Gestion de l'attaque
attackButton.addEventListener("click", () => {
    if (heroHp > 0 && monsterHp > 0) {
        // Le hero attaque le monstre
        monsterHp -= heroAttack;
        addLogMessage(`Le hero attaque le monstre et inflige ${heroAttack} points de dégâts !`);

        // Vérifier si le monstre est mort
        if (monsterHp <= 0) {
            monsterHp = 0;
            addLogMessage("Le monstre est vaincu ! ");
            updateHp();
            attackButton.disabled = true; // Désactiver le bouton
            return;
        }

        // Le monstre attaque le hero
        heroHp -= monsterAttack;
        addLogMessage(`Le monstre riposte et inflige ${monsterAttack} points de dégâts au hero !`);

        // Vérifier si le hero est mort
        if (heroHp <= 0) {
            heroHp = 0;
            addLogMessage("Le hero est vaincu");
            attackButton.disabled = true; // Désactiver le bouton
        }

        updateHp();
    }
});

// Gestion du bouton Quitter
quitButton.addEventListener("click", () => {
    addLogMessage("ta quitté la partie");
    attackButton.disabled = true;
 
    // creer un bouton pour  quand je quitte il y a un bouton qui spawn pour me demander si je veut rejouer 
    // faire en sorte que quand la partie est terminer y'a un btn qui spawn pour savoir si on veut changer nos heros

});
