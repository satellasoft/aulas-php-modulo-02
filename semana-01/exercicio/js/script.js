var form = document.getElementById('frmContato').addEventListener('submit', (event) => {

    var obj = {
        nome: getValue('txtNome'),
        email: getValue('txtEmail'),
        telefone: getValue('txtTelefone'),
        assunto: getValue('slAssunto'),
        mensagem: getValue('txtMensagem')
    };

    if (!validar(obj))
        event.preventDefault();
});

function validar(obj) {

    if (obj.nome.length < 2) {
        alert('Informe um nome.');
        return false;
    }
 
    if (obj.email.length < 6 || obj.email.indexOf('@') <= 0 || obj.email.indexOf('.') <= 0) {
        alert('Informe um e-mail.');
        return false;
    }

    if (obj.telefone.length > 14) {
        alert('Telefone inválido.');
        return false;
    }

    if (obj.assunto < 1 || obj.assunto > 4) {
        alert('Assunto inválido.');
        return false;
    }

    if (obj.mensagem.length < 10 || obj.mensagem.length > 500) {
        alert('Informe uma mensagem entre 10 à 500 caracteres.');
        return false;
    }

    return true;
}

function getValue(element) {
    return document.getElementById(element).value;
}
