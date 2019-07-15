<!DOCTYPE html>
<html lang="pt-br">
    
    <?php $pagina = 'Atendimento'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Horário de Atendimento'; include './App_Includes/Header.php'; ?>   
    
    <body>
        <?php include_once("./App_Includes/analyticstracking.php") ?>
        
        <?php include './App_Includes/Menu.php'; ?> 

        <main class="ConteudoCentral">  
            <div class="container">
                <div class="row">

                    <div class="row">
                        <div class="col-lg-12 col-md-12"> 
                            <div class="title_area">
                                <h2 class="title_two">Horário de Atendimento</h2>
                                <span></span> 
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">  

                        <div class="col-md-10 CentralizarSemThumb">
                            <div class="panel panel-default">
                                <div class="panel-heading Negrito">Horário de atendimento ao público</div>
                                <div class="panel-body">
                                    <p>Segunda à sexta-feira, das 8h às 16h e <i class="sublinhado">agência bancária Santander das 09h às 11:30 e das 13:00 às 16h</i> </p>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading Negrito">Serviços</div>
                                <div class="panel-body">
                                    <p>A Prefeitura Municipal de Mairiporã funciona de segunda a sexta-feira, exceto feriados e pontos facultativos.</p>
                                    <p>O saguão de entrada é equipado com sistema de senhas, para ordenar e facilitar o atendimento aos cidadãos. Há ainda um balcão para informações gerais.</p>
                                    <p>A equipe de funcionários da Prefeitura atende aos seguintes assuntos:</p>
                                </div>

                                <ul class="list-group">
                                    <li class="list-group-item"><i class="fa fa-arrow-right"></i> Dívida Ativa</li>
                                    <li class="list-group-item"><i class="fa fa-arrow-right"></i> ISS</li>
                                    <li class="list-group-item"><i class="fa fa-arrow-right"></i> Receitas Mobiliárias</li>
                                    <li class="list-group-item"><i class="fa fa-arrow-right"></i> IPTU</li>
                                    <li class="list-group-item"><i class="fa fa-arrow-right"></i> Jurídico</li>
                                    <li class="list-group-item"><i class="fa fa-arrow-right"></i> Obras</li>
                                    <li class="list-group-item"><i class="fa fa-arrow-right"></i> Solicitações gerais</li>
                                    <li class="list-group-item"><i class="fa fa-arrow-right"></i> Protocolo</li>
                                </ul>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading Negrito">Atendimento preferencial</div>
                                <div class="panel-body">
                                    <p>O sistema de senhas dá atendimento preferencial para:</p>
                                </div>

                                <ul class="list-group">
                                    <li class="list-group-item"><i class="fa fa-arrow-right"></i> Gestantes</li>
                                    <li class="list-group-item"><i class="fa fa-arrow-right"></i> Portadores de necessidades especiais</li>
                                    <li class="list-group-item"><i class="fa fa-arrow-right"></i> Indivíduos com bebês de colo</li>
                                    <li class="list-group-item"><i class="fa fa-arrow-right"></i> Idosos acima de 65 anos</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>               
            </div>
        </main>  

        <?php include './App_Includes/Footer.php'; ?>  
    </body>
</html>