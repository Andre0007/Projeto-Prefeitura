<!DOCTYPE html>
<html lang="pt-br">
    
    <?php $pagina = 'Calendario'; include './App_Includes/TagSeo.php';?>
    
    <?php $titulo = 'Calendário de Eventos em Mairiporã'; include './App_Includes/Header.php'; ?> 
    
    <body>
        <?php include_once("./App_Includes/analyticstracking.php") ?>

        <?php include './App_Includes/Menu.php'; ?>  
        
            <main class="ConteudoCentral">

                <section id="services">
                    <div class="container">
                        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="col-lg-12 col-md-12"> 
                                <div class="title_area">
                                    <h2 class="title_two">Calendário Prefeitura de Mairiporã</h2>
                                    <span></span> 
                                    <p>Calendário de eventos da cidade, <b>clique em um evento e veja os detalhes.</b></p>
                                </div>
                            </div>
                        </div>
                        
                        <div id="calendar"></div>
                        
                        <div id="calendarModal" class="modal fade">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> </button>
                                        <h4 id="modalTitle" class="modal-title"></h4>
                                    </div>
                                    <div id="modalBody" class="modal-body text-center modal-body-img"> </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </section>
                
            </main>
        
        <?php include './App_Includes/Footer.php'; ?>
    </body>
</html>