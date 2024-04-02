function login() {
    var validEmail = "teste@hotmail.com";
    var validPassword = "123";

    var email = document.getElementById("emailLogin").value.trim().toLowerCase();
    var password = document.getElementById("passwordLogin").value.trim();
    var message = document.getElementById("message");

    if (email === validEmail && password === validPassword) {
        message.innerHTML = "<i class='fas fa-check-circle'></i> Logado com sucesso!";
        message.className = "message success";

        window.location.href = "pixel.html";
    } else {
        message.innerHTML = "<i class='fas fa-exclamation-circle'></i> Erro ao logar. Verifique suas credenciais.";
        message.className = "message error";
    }

    message.style.display = "block";
    setTimeout(function () {
        message.style.display = "none";
    }, 3000);
}





function openModal() {
    document.getElementById("modal").style.display = "block";
}

function closeModal() {
    document.getElementById("modal").style.display = "none";
}

function register() {
    alert("Cadastro realizado com sucesso!");
    closeModal();
}
