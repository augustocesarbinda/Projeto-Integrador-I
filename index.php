<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Plano de Aula</title>
</head>

<body>
    <header>
        <div class="navbar container-fluid">
            <div class="container">
                <h2 class="logo">PLANO DE AULA</h2>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/coruja_peq.png">
            </a>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.html">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="instru.html">Instruções</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h4 class="margin">Selecione cada opção a seguir para gerar o seu Plano de Aula</h4>
    </div>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Identificação
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form class="row g-3" action="recebe.php" method="POST">
                        <div class="col-md-12">
                            <label for="inputProf" class="form-label">Professor</label>
                            <input type="text" class="form-control" name="inputProf" id="inputProf" autocomplete="off" placeholder="Digite seu nome">
                        </div>

                        <div class="col-md-4">
                            <label for="inputComponente" class="form-label">Componente</label>
                            <select id="inputComponente" name="inputComponente" class="form-select">
                                <option>...</option>
                                <option>Matemática</option>
                                <option>Lingua Portuguesa</option>
                                <option>Ciências</option>
                                <option>Geografia</option>
                                <option>História</option>
                                <option>Artes</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputAnoSerie" class="form-label">Ano ou Série</label>
                            <select id="inputAnoSerie" name="inputAnoSerie" class="form-select">
                                <option>...</option>
                                <option>1º</option>
                                <option>2º</option>
                                <option>3º</option>
                                <option>4º</option>
                                <option>5º</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputUnidadeTematica" class="form-label">Unidade Temática</label>
                            <select id="inputUnidadeTematica" name="inputUnidadeTematica" class="form-select">
                                <option>...</option>
                                <option>Números</option>
                                <option>...</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Continuar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTempo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTempo" aria-expanded="false" aria-controls="collapseTempo">
                    Temporalidade
                </button>
            </h2>
            <div id="collapseTempo" class="accordion-collapse collapse" aria-labelledby="headingTempo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form class="row g-3">
                        <div class="mb-3">
                            <label for="formNumAulas" class="form-label">Número de aulas previstas</label>
                            <input type="text" class="form-control" id="formNumAulas" placeholder="Digite o numero de aulas">
                        </div>
                        <div class="mb-3">
                            <label for="formPeriodoRealizacao" class="form-label">Período de realização</label>
                            <input type="text" class="form-control" id="formPeriodoRealizacao" placeholder="Digite os dias das aulas">
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingObjConhecimento">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseObjConhecimento" aria-expanded="false" aria-controls="collapseObjConhecimento">
                    Objeto do conhecimento
                </button>
            </h2>
            <div id="collapseObjConhecimento" class="accordion-collapse collapse" aria-labelledby="headingObjConhecimento" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p class="h3">Aula 1 e 2 - Investigando a Tabuada de Pitágoras</p>
                    <ul>
                        <li>
                            Compreender relações matemática do campo multiplicativo presentes na tabela de Pitágora;
                        </li>
                        <li>Identificar, estabelecer e explorar relações matemáticas entre as tabuadas de 1 a 10.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Habilidade
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> Aqui é a seleção da Habilidade !!!<code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Atividades a serem trabalhadas
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Recursos
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Temporalidade
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
            </div>

        </div>



</body>

</html>
