var app = angular.module('myApp', ['angularUtils.directives.dirPagination','angular-toasty']);
app.controller('ControllerArquivos',  function ($scope, $http, toasty) { 
    
    $scope.createArquivo = function () {
        $http({
            method: 'POST',
            data: {
                'StringTipoSelected': $scope.StringTipoSelected,
                'IDcategoriaSelected': $scope.IDcategoriaSelected,
                'url_arquivo': $scope.url_arquivo,
                'nome_arquivo': $scope.nome_arquivo,                               
                'ano': $scope.ano
            },
            url: '../../Controller/Licitacao/arquivo-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Arquivo cadastrado com sucesso!'
        });
    };
    
    $scope.updateArquivo = function () {
        $http({
            method: 'POST',
            data: {
                'id_arquivo': $scope.id_arquivo,
                'StringTipoSelected': $scope.StringTipoSelected,
                'IDcategoriaSelected': $scope.IDcategoriaSelected,
                'url_arquivo': $scope.url_arquivo,
                'nome_arquivo': $scope.nome_arquivo,                               
                'ano': $scope.ano
            },
            url: '../../Controller/Licitacao/arquivo-controller/update.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
            $scope.getAll();
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'Arquivo alterado com sucesso!'
        });
    };
    
    $scope.TiposArquivo = ["PDF","XLS","XLSX","DOC","DOCX","JPG","PNG","PPT","PPTX","TXT","RAR","ZIP"];    
    
    $scope.StringTipoSelected = "";
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Adicionar novo arquivo");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.clearForm = function () {
        $scope.nome_arquivo = "";
        $scope.ano = "";
        $scope.IDcategoriaSelected = "";
        $scope.StringTipoSelected = "";
        $scope.url_arquivo = "";
    };
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/Licitacao/arquivo-controller/read.php'
        }).then(function successCallback(response) {
            $scope.listaArquivo = response.data.records;
        });
    };
    
    $scope.ListCategoria = function () {
        $http({
            method: 'GET',
            url: '../../Controller/Licitacao/arquivo-controller/listCategoria.php'
        }).then(function successCallback(response) {
            $scope.categorias = response.data.records;
        });
    };
    
    $scope.deleteArquivo = function (id_arquivo) {
        if (confirm("Você tem certeza? Isso Apagará o arquivo e o histórico de downloads")) {
            $http({
                method: 'POST',
                data: {'id_arquivo': id_arquivo},
                url: '../../Controller/Licitacao/arquivo-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAll();
            });
            toasty.success({
                title: 'Deletar!',
                msg: 'Arquivo deletado com sucesso!'
            });
        }
    };
    
    $scope.readOne = function (id_arquivo) {
        $('#modal-title').text("Alterar arquivo");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id_arquivo': id_arquivo},
            url: '../../Controller/Licitacao/arquivo-controller/read_one.php'
        }).then(function successCallback(response) {
              
            $scope.id_arquivo = response.data[0]["id_arquivo"];
            $scope.url_arquivo = response.data[0]["nome_arquivo_url"];
            $scope.nome_arquivo = response.data[0]["nome_arquivo"];
            $scope.ano = response.data[0]["ano"];
            $scope.IDcategoriaSelected = response.data[0]["id_categoria"];            
            $scope.StringTipoSelected = response.data[0]["tipo"];
            
            $('#myModal').modal('show');
        });
    };
    
});