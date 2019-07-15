<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">   
    
    <?php $pagina = 'RepasseFederal'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Lista de Repasse dos Recursos Federais PDF'; include './App_Includes/Header.php'; ?>    

    <body ng-controller="ControllerPrefeitura"> 
        <?php include_once("./App_Includes/analyticstracking.php") ?>

        <?php include './App_Includes/Menu.php'; ?> 
        
            <main class="ConteudoCentral">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12 col-md-12"> 
                            <div class="title_area">
                                <h2 class="title_two">Repasse dos Recursos Federais</h2>
                                <span></span>   
                                <p>“Em atenção ao disposto no artigo 2° da Lei Federal nº 9.452/1997, notificamos Partidos Políticos, 
                                    Sindicatos de Trabalhadores e as Entidades Empresariais, com sede no Município, que no Portal da Transparência da Prefeitura, 
                                    na seção encontram se disponíveis os valores atualizados das transferências recebidas da União”.</p> 
                            </div>
                        </div>
                    </div>

                    <div class="search">              
                        <input type="text" id="search-input" ng-model="searchText" placeholder="Pesquisar..."/>
                    </div>
                    <table id="test-table" class="sticky-thead">
                        <thead>
                            <tr>
                                <th>Data do Repasse</th>
                                <th>Ver</th>
                            </tr>
                        </thead>
                        <tbody ng-init="getListRepasseFederal()">
                            <tr dir-paginate="re in listaRepasseFederal| filter:searchText | itemsPerPage:15" pagination-id="prodx">
                                <td> <a ng-href="{{re.url}}">{{re.nome_titulo}}</a> </td>
                                <td> <a ng-href="{{re.url}}"><img src="App_Imagens/icons/pdf-icon.png" /></a> </td>
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