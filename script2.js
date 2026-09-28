document.getElementById('form_cadastrar').addEventListener('submit', function (event) {

    const acompanhamento = document.getElementById('acompanhamento').value;

    if (acompanhamento !== '' && !isNaN(acompanhamento)) {
        alert('Digite um acompanhamento válido');
        event.preventDefault();
    }

})