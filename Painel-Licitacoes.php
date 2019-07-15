<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">
    
    <?php $pagina = 'Licitacoes'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Painel de Licitações'; include './App_Includes/Header.php'; ?>  
    
    <body ng-controller="ControllerLicitacoes">
        <?php include_once("./App_Includes/analyticstracking.php") ?>
        
          <?php include './App_Includes/Menu.php'; ?>
        
            <main class="ConteudoCentral">
                <div class="container" ng-init="ListCategoriaPainel()">

                    <div class="panel panel-primary" ng-repeat="cat in categorias">
                      <div class="panel-heading"><b>{{cat.descricao}}</b></div>
                      <div class="panel-body" ng-init="ListArquivo()">

                        <div class="list-group" ng-repeat="arq in listaArquivo" ng-if="arq.id_categoria === cat.id_categoria">
                          <div class="list-group-item active">                         
                              <h4 class="list-group-item-heading">{{arq.nome_arquivo}}</h4>
                            <p class="list-group-item-text">
                                <a ng-href="./Painel-Baixar-Arquivo.php?id={{arq.id_arquivo}}" class="btn btn-success"> 
                                    <i class="fa fa-download"></i> Baixar Arquivo
                                </a>
                                <small>
                                    Tipo de arquivo: <b>{{arq.tipo}}</b>
                                </small>
                            </p>                          
                          </div>
                        </div>                      

                      </div>
                    </div>

                </div>
            </main>   

        <?php include './App_Includes/Footer.php'; ?>  
    </body>
</html>