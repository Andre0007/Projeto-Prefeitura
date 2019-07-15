<!DOCTYPE html>
<html lang="pt-br">   
    <?php $pagina = 'Home'; $titulo = 'Área do Cidadão Manifestante'; include '../App_Includes/Cidadao-Header.php'; ?>    
    <body> 
        <?php include_once("../../../App_Includes/analyticstracking.php") ?>

        <?php include '../App_Includes/Cidadao-Menu.php'; ?>

        <div class="container">

            <div class="page-header text-center LetrasAzul">
                <h1>Qual tipo de manifestação deseja fazer?</h1>
            </div>

            <div class="pager Margin30">
                <a href="FormularioOcorrencia.php?p=Denuncia"><input type="image" src="../../../App_Imagens/Ouvidoria/linkDenuncia.png" alt="Denúncia" /></a>
                <a href="FormularioOcorrencia.php?p=Elogio"><input type="image" src="../../../App_Imagens/Ouvidoria/linkElogio.png" alt="Elogio" /></a>
                <a href="FormularioOcorrencia.php?p=Reclamacao"><input type="image" src="../../../App_Imagens/Ouvidoria/linkReclamacao.png" alt="Reclamação" /></a>
                <a href="FormularioOcorrencia.php?p=Solicitacao"><input type="image" src="../../../App_Imagens/Ouvidoria/linkSolicitacao.png" alt="Solicitação" /></a>
                <a href="FormularioOcorrencia.php?p=Sugestao"><input type="image" src="../../../App_Imagens/Ouvidoria/linkSugestao.png" alt="Sugestão" /></a>            
            </div>
        </div>
        
        <?php include '../App_Includes/Cidadao-Footer.php'; ?>  
    </body>
</html>