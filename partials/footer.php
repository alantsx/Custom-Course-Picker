<!-- Bootstrap, jQuery e Popper -->
<script src="style/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="style/js/bootstrap.min.js"></script>
<!-- bootstrap-select -->
<script src="style/bootstrap-select/js/bootstrap-select.min.js"></script>

<!-- Funções Javascript -->

<!-- Filtro dos Cursos -->
<script>
$(document).ready(function(){
    var botaoEdu = $('#filtraEdu');
    var botaoSaude = $('#filtraSaude');
    var botaoNegocios = $('#filtraNegocios');
    var botaoDireito = $('#filtraDireito');
    var botaoGestao = $('#filtraGestao');
    var botaoAutismo = $('#filtraAutismo');
    var botaoGastro = $('#filtraGastro');
    var botaoTics = $('#filtraTics');
    var botaoEngenharia = $('#filtraEngenharia');

    $('#filtraEdu').click(function(){
        if (botaoEdu.is(':checked')){
            $('.cursos').find('#cursosEdu').prop('hidden', false);
            $('.cursos').selectpicker('refresh');
        } else {
            $('.cursos').find('#cursosEdu').prop('hidden', true);
            $('.cursos').find('.optEdu').prop('selected', false);
            $('.cursos').selectpicker('refresh');
        }
    });
    $('#filtraSaude').click(function(){
        if (botaoSaude.is(':checked')){
            $('.cursos').find('#cursosSaude').prop('hidden', false);
            $('.cursos').selectpicker('refresh');
        } else {
            $('.cursos').find('#cursosSaude').prop('hidden', true);
            $('.cursos').find('.optSaude').prop('selected', false);
            $('.cursos').selectpicker('refresh');
        }
    });
    $('#filtraNegocios').click(function(){
        if (botaoNegocios.is(':checked')){
            $('.cursos').find('#cursosNegocios').prop('hidden', false);
            $('.cursos').selectpicker('refresh');
        } else {
            $('.cursos').find('#cursosNegocios').prop('hidden', true);
            $('.cursos').find('.optNegocios').prop('selected', false);
            $('.cursos').selectpicker('refresh');
        }
    });
    $('#filtraDireito').click(function(){
        if (botaoDireito.is(':checked')){
            $('.cursos').find('#cursosDireito').prop('hidden', false);
            $('.cursos').selectpicker('refresh');
        } else {
            $('.cursos').find('#cursosDireito').prop('hidden', true);
            $('.cursos').find('.optDireito').prop('selected', false);
            $('.cursos').selectpicker('refresh');
        }
    });
    $('#filtraGestao').click(function(){
        if (botaoGestao.is(':checked')){
            $('.cursos').find('#cursosGestao').prop('hidden', false);
            $('.cursos').selectpicker('refresh');
        } else {
            $('.cursos').find('#cursosGestao').prop('hidden', true);
            $('.cursos').find('.optGestao').prop('selected', false);
            $('.cursos').selectpicker('refresh');
        }
    });
    $('#filtraAutismo').click(function(){
        if (botaoAutismo.is(':checked')){
            $('.cursos').find('#cursosAutismo').prop('hidden', false);
            $('.cursos').selectpicker('refresh');
        } else {
            $('.cursos').find('#cursosAutismo').prop('hidden', true);
            $('.cursos').find('.optAutismo').prop('selected', false);
            $('.cursos').selectpicker('refresh');
        }
    });
    $('#filtraGastro').click(function(){
        if (botaoGastro.is(':checked')){
            $('.cursos').find('#cursosGastro').prop('hidden', false);
            $('.cursos').selectpicker('refresh');
        } else {
            $('.cursos').find('#cursosGastro').prop('hidden', true);
            $('.cursos').find('.optGastro').prop('selected', false);
            $('.cursos').selectpicker('refresh');
        }
    });
    $('#filtraTics').click(function(){
        if (botaoTics.is(':checked')){
            $('.cursos').find('#cursosTics').prop('hidden', false);
            $('.cursos').selectpicker('refresh');
        } else {
            $('.cursos').find('#cursosTics').prop('hidden', true);
            $('.cursos').find('.optTics').prop('selected', false);
            $('.cursos').selectpicker('refresh');
        }
    });
    $('#filtraEngenharia').click(function(){
        if (botaoEngenharia.is(':checked')){
            $('.cursos').find('#cursosEngenharia').prop('hidden', false);
            $('.cursos').selectpicker('refresh');
        } else {
            $('.cursos').find('#cursosEngenharia').prop('hidden', true);
            $('.cursos').find('.optEngenharia').prop('selected', false);
            $('.cursos').selectpicker('refresh');
        }
    });
});
</script>

<!-- Formatador telefone -->
<script>
    const isNumericInput = (event) => {
        const key = event.keyCode;
        return ((key >= 48 && key <= 57) || //Permite linha de números
        (key >= 96 && key <= 105) //Permite numPad
        );
    };

    const isModifierKey = (event) => {
        const key = event.keyCode;
        return (event.shiftKey === true || key === 35 || key === 36) || //Permite Shift, Home e End
        (key === 8 || key === 9 || key === 13 || key === 46) || //Permite Backspace, Tab, Enter e Delete
        (key > 36 && key < 41) || //Permite seta esquerda, cima, direita e baixo
        (
            //Permite Ctrl + A,C,V,X e Z
            (event.ctrlKey === true || event.metaKey === true) &&
            (key === 65 || key === 67 || key === 86 || key === 88 || key === 90)
        )
    };

    const enforceFormat = (event) => {
        // Forçar o formato de input de acordo com as constantes declaradas anteriormente
        if (!isNumericInput(event) && !isModifierKey(event)) {
            event.preventDefault();
        }
    };

    const formatToPhone = (event) => {
        if (isModifierKey(event)) {
            return;
        }
    

        const target = event.target;
        const input = event.target.value.replace(/\D/g, '').substring(0,11); // Não aceita mais que 11 dígitos de input
        const ddd = input.substring(0,2);
        const primeiro = input.substring(2,6);
        const meio = input.substring(6,7);
        const ultimo = input.substring(7,11);

        if(input.length == 11) {target.value = `(${ddd}) ${primeiro}${meio} - ${ultimo}`;}
        else if(input.length == 10) {target.value = `(${ddd}) ${primeiro} - ${meio}${ultimo}`;}
        else if(input.length >= 6) {target.value = `(${ddd}) ${primeiro} - ${meio}${ultimo}`;}
        else if(input.length > 2){target.value = `(${ddd}) ${primeiro}`;}
        else if(input.length > 0){target.value = `(${ddd}`;}
    };

    const inputElement = document.getElementById('numeroTelefone');
    inputElement.addEventListener('keydown',enforceFormat);
    inputElement.addEventListener('keyup',formatToPhone);

    // Formatador números de participantes

    const formatToNumber = (event) => {
        if (isModifierKey(event)) {
            return;
        }

        const target = event.target;
        const input = event.target.value.replace(/\D/g, '').substring(0,5); // Não aceita mais que 5 dígitos de Input
    }

    const inputElement2 = document.getElementById('formNumero');
    inputElement2.addEventListener('keydown', enforceFormat);
    inputElement2.addEventListener('keyup', formatToNumber);
</script>
