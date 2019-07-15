<!DOCTYPE html>
<html lang="pt-br">
    
    <?php $pagina = '404'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Erro 404 - Página não encontrada'; include './App_Includes/Header.php'; ?>   
    
    <body>
        <?php include_once("./App_Includes/analyticstracking.php") ?>
        
        <?php include './App_Includes/Menu.php'; ?>

        <main id="errorpage">
            <div class="container">
                <div class="error_page_content">
                    <h1>404</h1>
                    <h2>Desculpe :(</h2>
                    <h3>Está página não existe <b>ou mudou a URL de direcionamento</b>. </h3>
                    <p class="wow fadeInLeftBig animated" style="visibility: visible; animation-name: fadeInLeftBig;">Por favor, volte para <a href="/">Home</a></p>
                </div>
            </div>
        </main>
        
        <?php include './App_Includes/Footer.php'; ?>
    </body>
</html>