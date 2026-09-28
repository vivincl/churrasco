
    document.getElementById('form_cadastrar').addEventListener('submit', function(event) {
    const acompanhamento = document.getElementById('acompanhamento').value;
    alert(!is_numeric(acompanhamento))
    // Validação do acompanhamento
    if (!is_numeric(acompanhamento)) {
        alert('Digite um acompanhamento válido');
        event.preventDefault(); // Bloqueia o envio do formulário para o PHP
    }
})