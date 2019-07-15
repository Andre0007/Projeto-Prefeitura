<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">   
    
    <?php $pagina = 'SecretariaAmbiente'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Secretaria do Meio Ambiente'; include './App_Includes/Header.php'; ?>    
    
    <body ng-controller="ControllerPrefeitura"> 
        <?php include_once("./App_Includes/analyticstracking.php") ?>

        <?php include './App_Includes/Menu.php'; ?>   

        <main class="ConteudoCentral">
            <div class="container"> 

                <div class="row">
                    <div class="col-lg-12 col-md-12"> 
                        <div class="title_area">
                            <h2 class="title_two">Secretaria do Meio Ambiente</h2>
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
                            <th>Ver</th>
                        </tr>
                    </thead>
                    <tbody ng-init="getListSecretariaAmbiente()">
                        <tr dir-paginate="poo in secretariaAmbiente| filter:searchText | itemsPerPage:15" pagination-id="prodx">
                            <td><a ng-href="{{poo.url}}">{{poo.nome_titulo}}</a></td>
                            <td><a ng-href="{{poo.url}}">{{poo.data_postagem}}</a></td>
                            <td> <a ng-href="{{poo.url}}"><img src="App_Imagens/icons/pdf-icon.png" /></a> </td>
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