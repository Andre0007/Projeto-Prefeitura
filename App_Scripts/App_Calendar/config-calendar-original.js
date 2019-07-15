/* criptografia em http://www.javascriptobfuscator.com/Javascript-Obfuscator.aspx */
$(document).ready(function() {

    var date = new Date();
    var initialLocaleCode = 'pt-br';

    $('#calendar').fullCalendar({
        defaultDate: date,
        locale: initialLocaleCode,
        editable: false,
        eventLimit: true,
        events: {
            url: 'Controller/prefeitura/evento-controller/Eventos.php',
            error: function() {
                $('#script-warning').show();
            }
        },
        eventClick:  function(event, jsEvent, view) {
            $('#modalTitle').html(event.title);
            $('#modalBody').html(event.descricao);
            $('#calendarModal').modal();
        }                
    });

});