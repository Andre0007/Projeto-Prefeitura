<script src="../../App_Scripts/jquery.min.js"></script>
<script src="../../App_Scripts/queryloader2.min.js" type="text/javascript"></script>
<script src="../../App_Scripts/queryloader1.js"></script>
<script src="../../App_Bootstrap/Framework-Bootstrap/js/bootstrap.min.js"></script>
<script src="../../App_Scripts/Apps_Angular/angular.min.js"></script>
<script src="../../App_Scripts/Apps_Angular/dirPagination.js"></script>
<script src="../../App_Scripts/jquery.nicescroll.js"></script>
<script src="../../App_Scripts/Apps_Angular/angular-toasty.min.js"></script>
<?php 
    //Prefeitura
    if($pagina == 'MNoticias'){
        echo'<script src="../../App_Scripts/Apps_Angular/textAngular-rangy.min.js"></script>
             <script src="../../App_Scripts/Apps_Angular/textAngular-sanitize.min.js"></script>
             <script src="../../App_Scripts/Apps_Angular/textAngular.min.js"></script>
             <script src="../../App_Scripts/Controller/Prefeitura/ControllerNoticias.js"></script>';
    }else if ($pagina == 'MUsuario'){
        echo'<script src="../../App_Scripts/Controller/Prefeitura/ControllerUsuarios.js"></script>';
    }else if ($pagina == 'MCreche'){
        echo'<script src="../../App_Scripts/jquery.maskedinput.min.js" type="text/javascript"></script>
             <script src="../../App_Scripts/Apps_Angular/ng-file-upload-shim.js"></script>
             <script src="../../App_Scripts/Apps_Angular/ng-file-upload.js"></script>
             <script src="../../App_Scripts/Controller/Prefeitura/ControllerCreche.js"></script>';
    }else if ($pagina == 'MImprensa'){
        echo'<script src="../../App_Scripts/jquery.maskedinput.min.js" type="text/javascript"></script>'
          . '<script src="../../App_Scripts/Controller/Prefeitura/ControllerImprensa.js"></script>';
    }else if ($pagina == 'Upload'){
        echo'<script src="../../App_Scripts/Apps_Angular/ng-file-upload-shim.js"></script> '
          . '<script src="../../App_Scripts/Apps_Angular/ng-file-upload.js"></script>'
          . '<script src="../../App_Scripts/Controller/Prefeitura/ControllerUploads.js"></script>';
    }else if ($pagina == 'MGoverno'){
        echo'<script src="../../App_Scripts/jquery.maskedinput.min.js" type="text/javascript"></script>
             <script src="../../App_Scripts/Apps_Angular/textAngular-rangy.min.js"></script>
             <script src="../../App_Scripts/Apps_Angular/textAngular-sanitize.min.js"></script>
             <script src="../../App_Scripts/Apps_Angular/textAngular.min.js"></script>
             <script src="../../App_Scripts/Controller/Prefeitura/ControllerGoverno.js"></script>';
    }else if ($pagina == 'MTelefone'){
        echo'<script src="../../App_Scripts/Controller/Prefeitura/ControllerTelefone.js"></script>';
    }else if ($pagina == 'MEmail'){
        echo'<script src="../../App_Scripts/Controller/Prefeitura/ControllerEmail.js"></script>';
    }else if($pagina == "MConcurso"){
        echo '<script src="../../App_Scripts/Apps_Angular/ng-file-upload-shim.js"></script>'
           . '<script src="../../App_Scripts/Apps_Angular/ng-file-upload.js"></script>'
           . '<script src="../../App_Scripts/Controller/Prefeitura/ControllerConcursoEstagiario.js"></script>';
    }else if($pagina == "MConcursoEdital"){
        echo '<script src="../../App_Scripts/Apps_Angular/ng-file-upload-shim.js"></script>'
           . '<script src="../../App_Scripts/Apps_Angular/ng-file-upload.js"></script>'
           . '<script src="../../App_Scripts/Controller/Prefeitura/ControllerConcursoEdital.js"></script>';
    }else if($pagina == "MEventos"){
        echo '<script src="../../App_Scripts/jquery.maskedinput.min.js" type="text/javascript"></script>
              <script src="../../App_Scripts/Apps_Angular/textAngular-rangy.min.js"></script>
              <script src="../../App_Scripts/Apps_Angular/textAngular-sanitize.min.js"></script>
              <script src="../../App_Scripts/Apps_Angular/textAngular.min.js"></script>
              <script src="../../App_Scripts/Controller/Prefeitura/ControllerEventos.js"></script>
              <script src="../../App_Scripts/App_Calendar/moment.min.js"></script> 
              <script src="../../App_Scripts/App_Calendar/moment-with-locale-BR.js"></script>
              <script src="../../App_Scripts/App_Calendar/bootstrap-datetimepicker.min.js"></script>';
    }else if($pagina == "MComunicado"){
        echo '<script src="../../App_Scripts/Apps_Angular/textAngular-rangy.min.js"></script>
              <script src="../../App_Scripts/Apps_Angular/textAngular-sanitize.min.js"></script>
              <script src="../../App_Scripts/Apps_Angular/textAngular.min.js"></script>
              <script src="../../App_Scripts/Controller/Prefeitura/ControllerComunicadosImportante.js"></script>';
    }else if($pagina == "MRepasseFederal"){
        echo '<script src="../../App_Scripts/Apps_Angular/ng-file-upload-shim.js"></script>
              <script src="../../App_Scripts/Apps_Angular/ng-file-upload.js"></script>
              <script src="../../App_Scripts/Controller/Prefeitura/ControllerRepasseFederal.js"></script>';
    }else if($pagina == "MMeioAmbiente"){
        echo '<script src="../../App_Scripts/Apps_Angular/ng-file-upload-shim.js"></script>
              <script src="../../App_Scripts/Apps_Angular/ng-file-upload.js"></script>
              <script src="../../App_Scripts/Controller/Prefeitura/ControllerMeioAmbiente.js"></script>';
    }else if ($pagina == 'MAudienciaPublica'){
        echo'<script src="../../App_Scripts/Apps_Angular/ng-file-upload-shim.js"></script> '
          . '<script src="../../App_Scripts/Apps_Angular/ng-file-upload.js"></script>'
          . '<script src="../../App_Scripts/Controller/Prefeitura/ControllerAudienciaPublica.js"></script>';
    }//===Licitacao
    else if ($pagina == 'ManutencaoUsuarios'){
        echo'<script src="../../App_Scripts/Controller/Licitacao/ControllerUsuarios.js"></script>';
    }else if ($pagina == 'ListaCategoria'){
        echo'<script src="../../App_Scripts/Controller/Licitacao/ControllerCategoria.js"></script>';
    }else if ($pagina == 'ManutencaoArquivos'){
        echo'<script src="../../App_Scripts/Controller/Licitacao/ControllerArquivo.js"></script>';
    }else if($pagina == "ListaDownload"){
        echo '<script src="../../App_Scripts/Controller/Licitacao/ControllerDownloads.js"></script>';
    }else if($pagina == "ManutencaoUploads"){
        echo '<script src="../../App_Scripts/Apps_Angular/ng-file-upload-shim.js"></script>
              <script src="../../App_Scripts/Apps_Angular/ng-file-upload.js"></script>
              <script src="../../App_Scripts/Controller/Licitacao/ControllerUploadsArquivos.js"></script>';
    }else if($pagina == "Dashboard"){
        echo '<script src="../../App_Scripts/Controller/Licitacao/ControllerHome.js"></script>';
    }
?>
<script src="../../App_Scripts/custom-prefeitura.js"></script>
<toasty></toasty>