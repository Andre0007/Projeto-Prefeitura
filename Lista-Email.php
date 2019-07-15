<!DOCTYPE html>
<html lang="pt-br" ng-app="myApp">
    
    <?php $pagina = 'Email'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Lista de E-mails'; include './App_Includes/Header.php'; ?>
    
    <body ng-controller="ControllerPrefeitura">
        <?php include_once("./App_Includes/analyticstracking.php") ?>
        
        <?php include './App_Includes/Menu.php'; ?>

        <main class="ConteudoCentral">
            <div class="container"> 

                <div class="row">
                    <div class="col-lg-12 col-md-12"> 
                        <div class="title_area">
                            <h2 class="title_two">E-mails para Contato</h2>
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
                            <th>E-mail</th>
                        </tr>
                    </thead>
                    <tbody ng-init="getListEmails()">
                        <tr ng-repeat="mail in emails| filter:searchText">
                            <td>{{mail.email}}</td>
                        </tr>
                    </tbody>
                </table>

            </div>      
        </main>         

        <?php include './App_Includes/Footer.php'; ?>   
    </body>
</html>