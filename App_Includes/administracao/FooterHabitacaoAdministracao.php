<script src="../../App_Scripts/jquery.min.js"></script>
<script src="../../App_Scripts/queryloader2.min.js" type="text/javascript"></script>
<script src="../../App_Scripts/queryloader1.js"></script>
<script src="../../App_Bootstrap/Framework-Bootstrap/js/bootstrap.min.js"></script>
<script src="../../App_Scripts/Apps_Angular/angular.min.js"></script>
<script src="../../App_Scripts/Apps_Angular/dirPagination.js"></script>
<script src="../../App_Scripts/Apps_Angular/angular-toasty.min.js"></script>
<!-- Maior N paginas -->
<script src="../../App_Scripts/Apps_Angular/textAngular-rangy.min.js"></script>
<script src="../../App_Scripts/Apps_Angular/textAngular-sanitize.min.js"></script>
<script src="../../App_Scripts/Apps_Angular/textAngular.min.js"></script>
<script src="../../App_Scripts/custom-habitacao.js"></script>
<?php 
    if ($pagina == 'MSecEquipe'){
        echo'<script src="../../App_Scripts/Controller/Habitacao/ControllerSecretariaEquipeHabitacao.js"></script>';
    }else if ($pagina == 'MSecBiografia'){
        echo'<script src="../../App_Scripts/Controller/Habitacao/ControllerSecretariaBiografia.js"></script>';
    }else if ($pagina == 'MSecAtribuicoes'){
        echo'<script src="../../App_Scripts/Controller/Habitacao/ControllerSecretariaAtribuicoes.js"></script>';
    }else if ($pagina == 'MRegularizacaoPrograma'){
        echo'<script src="../../App_Scripts/Controller/Habitacao/ControllerRegularizacaoPrograma.js"></script>';
    }else if ($pagina == 'MRegularizacaoPriorizacao'){
        echo'<script src="../../App_Scripts/Controller/Habitacao/ControllerRegularizacaoPriorizacao.js"></script>';
    }else if ($pagina == 'MRegularizacaoPerguntas'){
        echo'<script src="../../App_Scripts/Controller/Habitacao/ControllerRegularizacaoPerguntasFrequentes.js"></script>';
    }else if ($pagina == 'MRegularizacaoNoticias'){
        echo'<script src="../../App_Scripts/Controller/Habitacao/ControllerRegularizacaoNoticias.js"></script>';
    }else if ($pagina == 'MRegularizacaoLegislacao'){
        echo'<script src="../../App_Scripts/Controller/Habitacao/ControllerRegularizacaoLegislacao.js"></script>';
    }else if ($pagina == 'MRegularizacaoAreas'){
        echo'<script src="../../App_Scripts/Controller/Habitacao/ControllerRegularizacaoAreas.js"></script>';
    }else if ($pagina == 'MRegularizacaoEtapas'){
        echo'<script src="../../App_Scripts/Controller/Habitacao/ControllerRegularizacaoEtapas.js"></script>';
    }else if ($pagina == 'MCMVPrograma'){
        echo'<script src="../../App_Scripts/Controller/Habitacao/ControllerMCMVPrograma.js"></script>';
    }else if ($pagina == 'MCMVPerguntas'){
        echo'<script src="../../App_Scripts/Controller/Habitacao/ControllerMCMVPerguntasFrequentes.js"></script>';
    }else if ($pagina == 'MCMVNoticias'){
        echo'<script src="../../App_Scripts/Controller/Habitacao/ControllerMCMVNoticias.js"></script>';
    }else if ($pagina == 'MCMVListaHierarquizada'){
        echo'<script src="../../App_Scripts/Apps_Angular/ng-file-upload-shim.js"></script>
             <script src="../../App_Scripts/Apps_Angular/ng-file-upload.js"></script>
             <script src="../../App_Scripts/Controller/Habitacao/ControllerMCMVListaHierarquizada.js"></script>';
    }else if ($pagina == 'MCMVListaComplementar'){
        echo'<script src="../../App_Scripts/Apps_Angular/ng-file-upload-shim.js"></script>
             <script src="../../App_Scripts/Apps_Angular/ng-file-upload.js"></script>
             <script src="../../App_Scripts/Controller/Habitacao/ControllerMCMVListaComplementar.js"></script>';
    }else if ($pagina == 'MCMVLegislacao'){
        echo'<script src="../../App_Scripts/Controller/Habitacao/ControllerMCMVLegislacao.js"></script>';
    }else if ($pagina == 'MCMVCriterios'){
        echo'<script src="../../App_Scripts/Controller/Habitacao/ControllerMCMVCriterios.js"></script>';
    }else if ($pagina == 'MUpload'){
        echo'<script src="../../App_Scripts/Apps_Angular/ng-file-upload-shim.js"></script>
             <script src="../../App_Scripts/Apps_Angular/ng-file-upload.js"></script>
             <script src="../../App_Scripts/Controller/Habitacao/ControllerUpload.js"></script>';
    }else if ($pagina == 'MCMHReunioes'){
        echo'<script src="../../App_Scripts/Apps_Angular/ng-file-upload-shim.js"></script>
             <script src="../../App_Scripts/Apps_Angular/ng-file-upload.js"></script>
             <script src="../../App_Scripts/Controller/Habitacao/ControllerCMHReunioes.js"></script>';
    }else if ($pagina == 'MCMHResolucoes'){
        echo'<script src="../../App_Scripts/Apps_Angular/ng-file-upload-shim.js"></script>
             <script src="../../App_Scripts/Apps_Angular/ng-file-upload.js"></script>
             <script src="../../App_Scripts/Controller/Habitacao/ControllerCMHResolucoes.js"></script>';
    }else if ($pagina == 'MCMHLegislacao'){
        echo'<script src="../../App_Scripts/Controller/Habitacao/ControllerCMHLegislacoes.js"></script>';
    }else if ($pagina == 'MCMHConvocacoes'){
        echo'<script src="../../App_Scripts/Apps_Angular/ng-file-upload-shim.js"></script>
             <script src="../../App_Scripts/Apps_Angular/ng-file-upload.js"></script>
             <script src="../../App_Scripts/Controller/Habitacao/ControllerCMHConvocacoes.js"></script>';
    }else if ($pagina == 'ManuHabUsuario'){
        echo'<script src="../../App_Scripts/Controller/Habitacao/ControllerUsuarios.js"></script>';
    }else if ($pagina == 'MCMVCronograma'){
        echo'<script src="../../App_Scripts/Apps_Angular/ng-file-upload-shim.js"></script>
             <script src="../../App_Scripts/Apps_Angular/ng-file-upload.js"></script>
             <script src="../../App_Scripts/Controller/Habitacao/ControllerMCMVCronograma.js"></script>';
    }
?>
<toasty></toasty>