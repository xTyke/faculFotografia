
function validaNome() {
    var nome = document.getElementById("nome").value;
    var nome_erro = document.getElementById("nome-erro");
    nome_erro.innerHTML = "";

    if (nome.length == 0) {
        //console.log("O nome não foi preenchido!");
        nome_erro.innerHTML = "O nome não foi preenchido!";
    } 
}

function validar() {
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var msg = document.getElementById("msg").value;

    var nome_erro = document.getElementById("nome-erro");
    var email_erro = document.getElementById("email-erro");
    var msg_erro = document.getElementById("msg-erro");

    //Limpar todas mensagens de erro antes de começar a validar
    nome_erro.innerHTML = "";
    email_erro.innerHTML = "";
    msg_erro.innerHTML = "";

    //Validação do nome
    if (nome.length == 0) {
       //console.log("O nome não foi preenchido!");
       nome_erro.innerHTML = "O nome não foi preenchido!";
    }

    //Validação do email 
    if (email.length == 0) {
        email_erro.innerHTML = "O email não foi preenchido!";
    } else {
       if (email.indexOf("@") <= 0) {
           email_erro.innerHTML = "O email não está no formato correto";
       }
    }

    //Validação da mensagem
    if (msg.length == 0) {
       msg_erro.innerHTML = "A mensagem não foi preenchida!";
    }
}