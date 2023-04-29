(function () {
    let inputName = document.querySelector("input[name=name]");
    let inputEmail = document.querySelector("input[name=email]");
    let inputPass = document.querySelector("input[name=password]");
    let customError = document.querySelector(".error-custom");
    let inputRePass = document.querySelector(
        "input[name=password_confirmation]"
    );
    if (customError != null) {
        setTimeout(() => {
            showError(customError.textContent, 7000);
        }, 800);
    }
    let form = document.querySelector(".signup form");
    let inputCustom = document.querySelector("input[name=costumer]");
    inputName.removeAttribute("required");
    inputEmail.removeAttribute("required");
    inputPass.removeAttribute("required");
    inputRePass.removeAttribute("required");
    form.addEventListener("submit", (e) => {
        if (inputName.value.trim() == "") {
            e.preventDefault();
            showError("Veuillez renseigner votre nom");
        } else if (inputName.value.trim().length < 3) {
            e.preventDefault();
            showError("Un minimum de 3 caractères pour le nom");
        } else if (inputEmail.value.trim() == "") {
            e.preventDefault();
            showError("Le champ email ne peut pas être vide");
        } else if (
            !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(inputEmail.value.trim())
        ) {
            e.preventDefault();
            showError("Vauillez entrer un email valide (ex: azerty@gmail.com");
        } else if (inputPass.value.trim() == "") {
            e.preventDefault();
            showError("Veuillez renseigner votre mot de passe");
        } else if (inputPass.value.trim().length < 8) {
            e.preventDefault();
            showError("Un minimum de 8 caractères pour le mot de passe");
        } else if (!validateNumber(inputPass.value.trim())) {
            e.preventDefault();
            showError("Il faut au moins un chiffre dans le mot de passe");
        } else if (!isNaN(inputPass.value.trim())) {
            e.preventDefault();
            showError("Il faut aussi de lettres dans le mot de passe");
        } else if (inputPass.value.trim() !== inputRePass.value.trim()) {
            e.preventDefault();
            showError("Les deux mots de passe doivent coincider");
        } else {
        }
    });
    const validateNumber = (pwd) => {
        let numbers = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
        let retourner = false;
        for (let i = 0; i < pwd.length; i++) {
            if (numbers.indexOf(pwd[i]) >= 0) {
                retourner = true;
                break;
            }
        }
        return retourner;
    };
    let interval = null;
    const showError = (msg, time = 4000) => {
        document.querySelector(".error-msg p").innerHTML = `${msg}`;
        document.querySelector(".error-msg").classList.add("_show_");
        if (interval != null) clearTimeout(interval);
        interval = setTimeout(() => {
            document.querySelector(".error-msg").classList.remove("_show_");
        }, time);
    };
})();
