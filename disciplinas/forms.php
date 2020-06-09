<?php
    function getEstados() {
        return json_decode (file_get_contents(__DIR__. '/estados.json'), true);
    }

    function getDisciplinasEdu() {
        return json_decode (file_get_contents(__DIR__. '/educação.json'), true);
    }

    function getDisciplinasSaude() {
        return json_decode (file_get_contents(__DIR__. '/saúde.json'), true);
    }

    function getDisciplinasNegocios() {
        return json_decode (file_get_contents(__DIR__. '/negócios.json'), true);
    }

    function getDisciplinasDireito() {
        return json_decode (file_get_contents(__DIR__. '/direito.json'), true);
    }

    function getDisciplinasGestao() {
        return json_decode (file_get_contents(__DIR__. '/gestão.json'), true);
    }

    function getDisciplinasAutismo() {
        return json_decode (file_get_contents(__DIR__. '/autismo.json'), true);
    }

    function getDisciplinasGastro() {
        return json_decode (file_get_contents(__DIR__. '/gastronomia.json'), true);
    }

    function getDisciplinasTics() {
        return json_decode (file_get_contents(__DIR__. '/tics.json'), true);
    }

    function getDisciplinasEngenharia() {
        return json_decode (file_get_contents(__DIR__. '/engenharia.json'), true);
    }

