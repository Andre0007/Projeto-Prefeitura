<footer class="BackRodape col-lg-12">
    
    <a class="Ponte col-lg-2" href="#">estou aqui</a>
    <div class="text-center LetrasBrancas PosicaoDescricaoRodape">
        Prefeitura Municipal de Mairiporã - Alameda Tibiriça, 344 - Vila Nova - Mairiporã/SP - Tel.:4419-8000<br>
        Copyright © 2017 Prefeitura de Mairiporã. Todos os direitos reservados. Política de privacidade.
    </div>
</footer>

View - JavaScripAngularController - Controller PHP - Model - BD

<script src="App_Scripts/jquery.min.js"></script>
<script src="App_Scripts/wow.min.js"></script>  
<script src="App_Bootstrap/Framework-Bootstrap/js/bootstrap.min.js"></script>
<script src="App_Scripts/jquery.animate-enhanced.min.js"></script>
<script src="App_Scripts/ScrollUp.js"></script>
<?php 
    if($pagina == 'Inicial'){
        echo'<script src="App_Scripts/customHome.js"></script>
             <script src="App_Scripts/Apps_Angular/angular.min.js"></script>
             <script src="App_Scripts/Apps_Angular/angular-sanitize.min.js"></script>
             <script src="App_Scripts/Controller/AppSanitize.js"></script>
             <script src="App_Scripts/Controller/ControllerPrefeitura.js"></script>
             <script src="App_Scripts/html5gallery.js"></script>';
    }else if($pagina == 'Imprensa' || $pagina == 'Email' || $pagina == 'Telefone' || $pagina == 'Legislacao'){
        echo'<script src="App_Scripts/Apps_Angular/angular.min.js"></script>
             <script src="App_Scripts/Controller/App.js"></script>  
             <script src="App_Scripts/Controller/ControllerPrefeitura.js"></script>';
    }else if($pagina == 'Atendimento' || $pagina == '404' || $pagina == 'Licitacao' || $pagina == 'Servicos' || $pagina == 'CadFornecedores' || $pagina == 'Secretarias'){
        echo'<script src="App_Scripts/jquery.animate-enhanced.min.js"></script>
             <script src="App_Scripts/ScrollUp.js"></script>';
    }else if($pagina == 'Ouvidoria'){
        echo'<script src="App_Scripts/Apps_Angular/angular.min.js"></script>
             <script src="App_Scripts/Apps_Angular/angular.cpf.min.js"></script>
             <script src="App_Scripts/Apps_Angular/angular.cnpj.min.js"></script>
             <script src="App_Scripts/Apps_Angular/ngCpfCnpj.js"></script>
             <script src="App_Scripts/jquery.maskedinput.min.js"></script>     
             <script src="App_Scripts/Apps_Angular/angular-toasty.min.js"></script>
             <script src="App_Scripts/Controller/Ouvidoria/ControllerOuvidoria.js"></script> ';
    }else if($pagina == 'ListaNoticias' || $pagina == 'ListaConcursoEstagio' || $pagina == 'ListaConcursoEditais' || $pagina == 'SecretariaAmbiente' || $pagina == "RepasseFederal" || $pagina == 'AudienciaPublica'){
        echo'<script src="App_Scripts/Apps_Angular/angular.min.js"></script>
             <script src="App_Scripts/Apps_Angular/dirPagination.js"></script>
             <script src="App_Scripts/Controller/AppPagination.js"></script>
             <script src="App_Scripts/Controller/ControllerPrefeitura.js"></script>';
    }else if($pagina == 'Noticia' || $pagina == 'Governo'){
        echo'<script src="App_Scripts/rrssb.min.js"></script>
             <script src="App_Scripts/Apps_Angular/angular.min.js"></script>
             <script src="App_Scripts/Apps_Angular/angular-sanitize.min.js"></script>  
             <script src="App_Scripts/Controller/AppSanitize.js"></script> 
             <script src="App_Scripts/Controller/ControllerPrefeitura.js"></script>';
    }else if($pagina == "BaixarLicitacoes"){
        echo '<script src="App_Scripts/jquery.maskedinput.min.js"></script>
              <script src="App_Scripts/custom-download.js"></script>';
    }else if($pagina == "Licitacoes"){
        echo '<script src="App_Scripts/Apps_Angular/angular.min.js"></script>
              <script src="App_Scripts/Controller/Licitacao/ControllerLicitacoes.js"></script>';
    }else if($pagina == "Calendario"){
        echo '<script src="App_Scripts/App_Calendar/moment.min.js"></script>            
              <script src="App_Scripts/App_Calendar/fullcalendar.min.js"></script>
              <script src="App_Scripts/App_Calendar/locale-all.js"></script>
              <script src="App_Scripts/App_Calendar/config-calendar.js"></script>';
    }else if($pagina == "HabitacaoDescricoes"){
        echo '<script src="App_Scripts/jquery.maskedinput.min.js"></script>
              <script src="App_Scripts/Apps_Angular/angular.min.js"></script>
              <script src="App_Scripts/Apps_Angular/angular-toasty.min.js"></script>
              <script src="App_Scripts/Apps_Angular/angular-sanitize.min.js"></script>
              <script src="App_Scripts/Controller/ControllerHabitacao.js"></script>';
    }else if($pagina == "RegularizacaoNoticia" || $pagina == "McmvNoticia"){
        echo '<script src="App_Scripts/Apps_Angular/angular.min.js"></script>
             <script src="App_Scripts/Apps_Angular/angular-sanitize.min.js"></script>         
             <script src="App_Scripts/Controller/ControllerHabitacaoNoticia.js"></script>';
    }else if($pagina == 'FaleConosco'){
        echo '<script src="App_Scripts/Apps_Angular/angular.min.js"></script>
              <script src="App_Scripts/Apps_Angular/angular-toasty.min.js"></script>
              <script src="App_Scripts/Controller/ControllerFaleConosco.js"></script>';
    }
?>
<toasty></toasty>