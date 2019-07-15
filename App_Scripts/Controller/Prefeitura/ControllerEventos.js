var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngSanitize','textAngular','angular-toasty']); 
app.controller('ControllerEventos',function($scope, $http, toasty){
           
    $scope.updateEvento = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'title': $scope.title,
                'data_inicio': $scope.data_inicio,
                'data_termino': $scope.data_termino,
                'descricao': $scope.descricao
            },
            url: '../../Controller/prefeitura/evento-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterado!',
            msg: 'Evento alterado com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar Evento");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/prefeitura/evento-controller/read_one.php'
        }).then(function successCallback(response) {
            
            $scope.id = response.data[0]["id"];
            $scope.title = response.data[0]["title"];
            $scope.data_inicio = response.data[0]["data_inicio"];
            $scope.data_termino = response.data[0]["data_termino"];
            $scope.descricao = response.data[0]["descricao"];
            
            $('#myModal').modal('show');
        });
    };

    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/prefeitura/evento-controller/read.php'
        }).then(function successCallback(response) {
            $scope.eventos = response.data.records;
        });
    };

    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar novo evento");
        $('#btn-update').hide();
        $('#btn-create').show();
    };

    $scope.clearForm = function () {
        $scope.id = "";
        $scope.title = "";
        $scope.data_inicio = "";
        $scope.data_termino = "";
        $scope.descricao = "";
    };

    $scope.createEvento = function () {
        $http({
            method: 'POST',
            data: {
                'title': $scope.title,
                'data_inicio': $scope.data_inicio,
                'data_termino': $scope.data_termino,
                'descricao': $scope.descricao
            },
            url: '../../Controller/prefeitura/evento-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Evento cadastrado com sucesso!'
        });
    };

    $scope.deleteEvento = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/prefeitura/evento-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAll();
            });
            toasty.success({
                title: 'Deletar!',
                msg: 'Evento deletado com sucesso!'
            });
        }
    };
    
    /* =====================================
        Datepicker Bootstrap - Date e Hora
      ======================================*/
    $(function () {
        $('.datetimepicker').datetimepicker({
            locale: 'pt-br'
        });
        $("#data_inicio").mask("99/99/9999 99:99");
        $("#data_termino").mask("99/99/9999 99:99");
    });
    
});