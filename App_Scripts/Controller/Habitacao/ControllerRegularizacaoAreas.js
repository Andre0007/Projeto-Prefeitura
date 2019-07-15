var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngSanitize','textAngular','angular-toasty']); 
app.controller('ControllerRegularizacaoAreas',function($scope, $http, toasty){
    
    function verificaNumero(e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
        }
    }
    
    $(document).ready(function () {
        $("#numFase").keypress(verificaNumero);
    });
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar novo texto Área");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/habitacao/RegularizacaoAreas-controller/read.php'
        }).then(function successCallback(response) {
            $scope.ReguAreas = response.data.records;
        });
    };
    
    $scope.createRegularizacaoAreas = function () {
        $http({
            method: 'POST',
            data: {
                'numFase': $scope.numFase,
                'descricao': $scope.descricao
            },
            url: '../../Controller/habitacao/RegularizacaoAreas-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Regularização Área cadastrada com sucesso!'
        });
    };
    
    $scope.updateRegularizacaoAreas = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'numFase': $scope.numFase,
                'descricao': $scope.descricao
            },
            url: '../../Controller/habitacao/RegularizacaoAreas-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'Regularização Área alterada com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar Legislação");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/habitacao/RegularizacaoAreas-controller/read_one.php'
        }).then(function successCallback(response) {

            $scope.id = response.data[0]["id"];
            $scope.numFase = response.data[0]["numFase"],
            $scope.descricao = response.data[0]["descricao"];

            $('#myModal').modal('show');
        });
    };

    $scope.deleteRegularizacaoAreas = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/habitacao/RegularizacaoAreas-controller/delete.php'
            }).then(function successCallback(response) {

                $scope.getAll();
            });
            toasty.success({
                title: 'Deletado!',
                msg: 'Regularização Área deletada com sucesso!'
            });
        }
    };

    $scope.clearForm = function () {
        $scope.id = "";
        $scope.numFase = "";
        $scope.descricao = "";
    };
    
});