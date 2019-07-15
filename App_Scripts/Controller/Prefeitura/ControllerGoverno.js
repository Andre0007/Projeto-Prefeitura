var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngSanitize','textAngular','angular-toasty']); 
app.controller('ControllerGoverno',function($scope, $http, toasty){
           
    $scope.updateGoverno = function () {
        $http({
            method: 'POST',
            data: {
                'id': $scope.id,
                'nome': $scope.nome,
                'descricao': $scope.descricao,
                'categoria': $scope.StringCargoSelected,
                'imagem_perfil': $scope.imagem_perfil,
                'telefone_secretaria': $scope.telefone_secretaria,
                'endereco_secretaria': $scope.endereco_secretaria
            },
            url: '../../Controller/prefeitura/governo-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterado!',
            msg: 'Gestor alterado com sucesso!'
        });
    };   

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar Perfil");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/prefeitura/governo-controller/read_one.php'
        }).then(function successCallback(response) {
            
            $scope.id = response.data[0]["id"];
            $scope.nome = response.data[0]["nome"];
            $scope.descricao = response.data[0]["descricao"];
            $scope.StringCargoSelected = response.data[0]["categoria"];
            $scope.imagem_perfil = response.data[0]["imagem_perfil"];          
            $scope.telefone_secretaria = response.data[0]["telefone_secretaria"];
            $scope.endereco_secretaria = response.data[0]["endereco_secretaria"];
            
            $('#myModal').modal('show');
        });
    };

    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/prefeitura/governo-controller/read.php'
        }).then(function successCallback(response) {
            $scope.gestores = response.data.records;
        });
    };

    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Criar novo perfil");
        $('#btn-update').hide();
        $('#btn-create').show();
    };

    $scope.clearForm = function () {
        $scope.id = "";
        $scope.nome = "";
        $scope.descricao = "";
        $scope.StringCargoSelected = "";
        $scope.imagem_perfil = "";
        $scope.telefone_secretaria = "";
        $scope.endereco_secretaria = "";
    };

    $scope.createGoverno = function () {
        $http({
            method: 'POST',
            data: {
                'nome': $scope.nome,
                'descricao': $scope.descricao,
                'categoria': $scope.StringCargoSelected,
                'imagem_perfil': $scope.imagem_perfil,
                'telefone_secretaria': $scope.telefone_secretaria,
                'endereco_secretaria': $scope.endereco_secretaria
            },
            url: '../../Controller/prefeitura/governo-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Gestor cadastrado com sucesso!'
        });
    };

    $scope.deleteGoverno = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/prefeitura/governo-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAll();
            });
            toasty.success({
                title: 'Deletar!',
                msg: 'Gestor deletado com sucesso!'
            });
        };
    };
    
    $(document).ready(function () {
        $("#telefone").mask("(99)9999-9999?9");
    }); 
    
});