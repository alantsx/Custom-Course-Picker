<!doctype html>
<?php
function redirectIfNeeded(){
    $url = $_SERVER["REQUEST_URI"];
    if(preg_match("/\.php/$", $url))
        header("Location: ".preg_replace("/\.php/",$url));
}

require __DIR__.'/disciplinas/forms.php';

$disciplinasEdu = getDisciplinasEdu();
$disciplinasSaude = getDisciplinasSaude();
$disciplinasNegocios = getDisciplinasNegocios();
$disciplinasDireito = getDisciplinasDireito();
$disciplinasGestao = getDisciplinasGestao();
$disciplinasAutismo = getDisciplinasAutismo();
$disciplinasGastro = getDisciplinasGastro();
$disciplinasTics = getDisciplinasTics();
$disciplinasEngenharia = getDisciplinasEngenharia();
$estadosUF = getEstados();
?>

<html lang="pt-BR">
    <?php include 'partials/header.php' ?>
    <body>
        <div class="container-fluid  px-0 no-padding">
            <div class="row">
                <div class="col-md-12">
                    <img src="img/banner 2.jpg" class="img-fluid banner" alt="Responsive image" align="center"/>
                </div>
            </div>
        </div>
        <div class="container zoom-adjustment">
            <fieldset class="fieldset_borda">
                    <legend class="legend_custom" align="center"><h4>1º Passo: Refine sua busca ativando/desativando quais áreas de cursos tem interesse </h4> </legend>
            <div class="row">
                <div class="col-md-1.7 col-centered" align="center">
                    <fieldset class="fieldset_botao">
                        <legend for="filtraEdu" class="legend_custom" align="center"><h5>Eixo Educação </h5> </legend>
                        <label class="switch">
                        <input type="checkbox" id="filtraEdu" checked />
                        <span class="slider round" > </span>
                        </label>
                    </fieldset>
                </div>
                <div class="col-md-1.7 col-centered" align="center">
                    <fieldset class="fieldset_botao">
                        <legend for="filtraSaude" class="legend_custom" align="center"><h5>Eixo Saúde </h5> </legend>
                        <label class="switch">
                        <input type="checkbox" id="filtraSaude" checked />
                        <span class="slider round"></span>
                        </label>
                    </fieldset>
                </div>
                <div class="col-md-1.7 col-centered" align="center">
                    <fieldset class="fieldset_botao">
                        <legend for="filtraNegocios" class="legend_custom" align="center"><h5>Eixo Negócios </h5> </legend>
                        <label class="switch">
                        <input type="checkbox" id="filtraNegocios" checked />
                        <span class="slider round"></span>
                        </label>
                    </fieldset>
                </div>
                <div class="col-md-1.7 col-centered" align="center">
                    <fieldset class="fieldset_botao">
                    <legend for="filtraDireito" class="legend_custom" align="center"><h5>Eixo Direito </h5> </legend>
                        <label class="switch">
                        <input type="checkbox" id="filtraDireito" checked />
                        <span class="slider round"></span>
                        </label>
                    </fieldset>
                </div>
                <div class="col-md-1.7 col-centered" align="center">
                    <fieldset class="fieldset_botao">
                    <legend for="filtraGestao" class="legend_custom" align="center"><h5>Eixo Gestão </h5> </legend>
                        <label class="switch">
                        <input type="checkbox" id="filtraGestao" checked />
                        <span class="slider round"></span>
                        </label>
                    </fieldset>
                </div>
                <div class="col-md-1.7 col-centered" align="center">
                    <fieldset class="fieldset_botao">
                    <legend for="filtraAutismo" class="legend_custom" align="center"><h5>Eixo Autismo </h5> </legend>
                        <label class="switch">
                        <input type="checkbox" id="filtraAutismo" checked />
                        <span class="slider round"></span>
                        </label>
                    </fieldset>
                </div>
                <div class="col-md-1.7 col-centered" align="center">
                    <fieldset class="fieldset_botao">
                    <legend for="filtraGastro" class="legend_custom" align="center"><h5>Eixo Gastronomia </h5> </legend>
                        <label class="switch">
                        <input type="checkbox" id="filtraGastro" checked />
                        <span class="slider round"></span>
                        </label>
                    </fieldset>
                </div>
                <div class="col-md-1.7 col-centered" align="center">
                    <fieldset class="fieldset_botao">
                    <legend for="filtraTics" class="legend_custom" align="center"><h5>Eixo TICS </h5> </legend>
                        <label class="switch">
                        <input type="checkbox" id="filtraTics" checked />
                        <span class="slider round"></span>
                        </label>
                    </fieldset>
                </div>
                <div class="col-md-1.7 col-centered" align="center">
                    <fieldset class="fieldset_botao">
                    <legend for="filtraEngenharia" class="legend_custom" align="center"><h5>Eixo Engenharia </h5> </legend>
                        <label class="switch">
                        <input type="checkbox" id="filtraEngenharia" checked />
                        <span class="slider round"></span>
                        </label>
                    </fieldset>
                </div>
            </div>
            </fieldset>
            <fieldset class="fieldset_listas">
                    <legend class="legend_custom" align="center"><h4>2º Passo: Escolha como deseja montar seu Programa de Capacitação Personalizado</h4> </legend>
            <div class="row">
                <div class="col-md-4" align="center">
                        <legend for="Cursos[]" class="legend_custom" align="center"><h5>Até 12 Cursos para compor o seu <br />Programa de Capacitação</h5> </legend>
                        <select required name="Cursos[]" form="cursos" class="selectpicker cursos" title="Escolha até 12 cursos" data-style="btn-outline-info" data-dropup-auto="false" data-live-search="true" multiple data-max-options="12" data-selected-text-format="count" data-size="auto">
                            <optgroup id="cursosEdu" label="Eixo Educação">
                                <?php foreach ($disciplinasEdu as $disciplinaEdu) : ?>
                                <option class="optEdu" value="<?php echo $disciplinaEdu['nome_dis'] ?>"> <?php echo $disciplinaEdu['nome_dis'] ?> </option>
                                <?php endforeach; ; ?>
                            </optgroup>
                                <optgroup id="cursosSaude" label="Eixo Saúde">
                                <?php foreach ($disciplinasSaude as $disciplinaSaude) : ?>
                                <option class="optSaude" value="<?php echo $disciplinaSaude['nome_dis'] ?>"> <?php echo $disciplinaSaude['nome_dis'] ?> </option>
                                <?php endforeach; ; ?>
                            </optgroup>
                            <optgroup id="cursosNegocios" label="Eixo Negócios">
                                <?php foreach ($disciplinasNegocios as $disciplinaNegocios) : ?>
                                <option class="optNegocios" value="<?php echo $disciplinaNegocios['nome_dis'] ?>"> <?php echo $disciplinaNegocios['nome_dis'] ?> </option>
                                <?php endforeach; ; ?>
                            </optgroup>
                            <optgroup id="cursosDireito" label="Eixo Direito">
                                <?php foreach ($disciplinasDireito as $disciplinaDireito) : ?>
                                <option class="optDireito" value="<?php echo $disciplinaDireito['nome_dis'] ?>"> <?php echo $disciplinaDireito['nome_dis'] ?> </option>
                                <?php endforeach; ; ?>
                            </optgroup>
                            <optgroup id="cursosGestao" label="Eixo Gestão">
                                <?php foreach ($disciplinasGestao as $disciplinaGestao) : ?>
                                <option class="optGestao" value="<?php echo $disciplinaGestao['nome_dis'] ?>"> <?php echo $disciplinaGestao['nome_dis'] ?> </option>
                                <?php endforeach; ; ?>
                            </optgroup>
                            <optgroup id="cursosAutismo" label="Eixo Autismo">
                                <?php foreach ($disciplinasAutismo as $disciplinaAutismo) : ?>
                                <option class="optAutismo" value="<?php echo $disciplinaAutismo['nome_dis'] ?>"> <?php echo $disciplinaAutismo['nome_dis'] ?> </option>
                                <?php endforeach; ; ?>
                            </optgroup>
                            <optgroup id="cursosGastro" label="Eixo Gastronomia">
                                <?php foreach ($disciplinasGastro as $disciplinaGastro) : ?>
                                <option class="optGastro" value="<?php echo $disciplinaGastro['nome_dis'] ?>"> <?php echo $disciplinaGastro['nome_dis'] ?> </option>
                                <?php endforeach; ; ?>
                            </optgroup>
                            <optgroup id="cursosTics" label="Eixo TICS">
                                <?php foreach ($disciplinasTics as $disciplinaTics) : ?>
                                <option class="optTics" value="<?php echo $disciplinaTics['nome_dis'] ?>"> <?php echo $disciplinaTics['nome_dis'] ?> </option>
                                <?php endforeach; ; ?>
                            </optgroup>
                            <optgroup id="cursosEngenharia" label="Eixo Engenharia">
                                <?php foreach ($disciplinasEngenharia as $disciplinaEngenharia) : ?>
                                <option class="optEngenharia" value="<?php echo $disciplinaEngenharia['nome_dis'] ?>"> <?php echo $disciplinaEngenharia['nome_dis'] ?> </option>
                                <?php endforeach; ; ?>
                            </optgroup>
                        </select>
                </div>
                <div class="col-md-4" align="center">
                    <legend for="Tempo" class="legend_custom" align="center"><h5>Qual será o tempo <br />de duração?</h5> </legend>
                    <select required name="Tempo" form="cursos" class="selectpicker" title="Escolha o período" data-style="btn-outline-info" data-dropup-auto="false">
                        <option value="6 Meses">6 Meses</option>
                        <option value="12 Meses">12 Meses</option>
                        <option value="18 Meses">18 Meses</option>
                    </select>
                </div>
                <div class="col-md-4" align="center">
                    <legend for="Tempo" class="legend_custom" align="center"><h5>Quantos servidores/colaboradores <br />participarão?</h5> </legend>
                    <input required form="cursos" name="formNumero" class="form-control" id="formNumero" placeholder="Insira o número de participantes" maxlength="5"/>
                </div>
            </div>
            </fieldset>
            <fieldset class="fieldset_form">
                    <legend class="legend_custom" align="center"><h4>3º Passo: Preencha seus dados para que possamos te contactar </h4> </legend>
            <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="inputNome" class="label_forms">Insira seu nome</label>
                            <input required form="cursos" name="inputNome" type="text" class="form-control" id="inputNome" placeholder="Insira seu nome aqui" maxlength="60" />
                            <label for="inputEmail" class="label_forms">Insira seu email</label>
                            <input required form="cursos" name="inputEmail" type="email" class="form-control" id="inputEmail" placeholder="Insira seu email aqui" maxlength="60" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="inputCidade" class="label_forms">Insira sua cidade</label>
                        <input required form="cursos" name="inputCidade" type="text" class="form-control" id="inputNome" placeholder="Insira sua cidade aqui" maxlength="60" />
                        <label for="inputTelefone" class="label_forms">Insira seu telefone aqui </label>
                        <input required form="cursos" name="inputTelefone" class="form-control" id="numeroTelefone" placeholder="Insira um número válido" maxlength="17" pattern=".{16,17}"/>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="inputUf" class="label_forms"> Estado </label>
                            <select required name="inputUf" form="cursos" class="form-control" style="max-width:70%" id="inputUf">
                                <option disabled selected value>Selecione</option>
                                <?php foreach ($estadosUF as $estadoUF) : ?>
                                <option value="<?php echo $estadoUF['estado'] ?>" > <?php echo $estadoUF['estado'] ?> </option>
                                <?php endforeach; ; ?>
                            </select>  
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="row">
                    <div class="col-md-12 div_botao" align="center">
                        <form id="cursos" method="post" action="/form">
                        <input type="submit" class="btn btn-success btn-lg" value="Enviar">
                        </form>
                    </div>
            </div>
            </form>
        </div>
        
        <?php include 'partials/footer.php' ?>
    </body>
</html>