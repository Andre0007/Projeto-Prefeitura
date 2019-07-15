<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">  
    
    <?php $pagina = 'ListaConcursoEstagio'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Documentos Concurso Público'; include './App_Includes/Header.php'; ?>    
    
    <body ng-controller="ControllerPrefeitura"> 
        <?php include_once("./App_Includes/analyticstracking.php") ?>

        <?php include './App_Includes/Menu.php'; ?>   

        <main class="ConteudoCentral">
            <div class="container"> 

                <div class="row">
                    <div class="col-lg-12 col-md-12"> 
                        <div class="title_area">
                            <h2 class="title_two">Publicações Concurso Público Estagiário</h2>
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="search">              
                    <input type="text" id="search-input" ng-model="searchText" placeholder="Pesquisar..."/>
                </div>
                <table id="test-table" class=" sticky-thead">
                    <thead>
                        <tr>
                            <th>Documento</th>
                            <th>Publicação</th>
                        </tr>
                    </thead>
                    <tbody ng-init="getListConcursoEstagio()">
                        <tr dir-paginate="poo in listaConcursoEstagio| filter:searchText | itemsPerPage:15" pagination-id="prodx">
                            <td><a ng-href="{{poo.url}}">{{poo.nome_titulo}}</a></td>
                            <td><a ng-href="{{poo.url}}">{{poo.data_lancamento}}</a></td>
                        </tr>
                    </tbody>
                </table>
                <nav>
                    <dir-pagination-controls pagination-id="prodx" boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" template-url="dir_pagination.tpl.html"></dir-pagination-controls>
                </nav>  
                
            </div>      
        </main>                 

        <?php include './App_Includes/Footer.php'; ?>  
    </body>
</html>