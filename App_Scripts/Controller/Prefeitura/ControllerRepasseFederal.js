var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngFileUpload','angular-toasty']);
app.controller('ControllerRepasseFederal', ['$scope', '$http', 'Upload', '$timeout', 'toasty', function ($scope, $http, Upload, $timeout, toasty) { 
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Enviar novo upload Repasse Federal");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.uploadRepasseFederal = function (file) {       
        file.upload = Upload.upload({
            url: '../../Controller/prefeitura/repasse-federal-controller/upload.php',
            data: {nome_titulo: $scope.nome_titulo, file: file}
        });
        file.upload.then(function (response) {
            $timeout(function () {
                file.result = response.data;
                $('#myModal').modal('hide');  
                $scope.clearForm();
                $scope.getAll();         
            });
        }, function (response) {
            if (response.status > 0)
                $scope.errorMsg = response.status + ': ' + response.data;
        }, function (evt) {
            file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
        });
        toasty.success({
            title: 'Upload!',
            msg: 'Repasse carregado com sucesso!'
        });
    };
    
    $scope.updateRepasseFederal = function (file) {       
        file.upload = Upload.upload({
            url: '../../Controller/prefeitura/repasse-federal-controller/update.php',
            data: {id: $scope.id, nome_titulo: $scope.nome_titulo, file: file}
        });
        file.upload.then(function (response) {
            $timeout(function () {
                file.result = response.data;
                $('#myModal').modal('hide');  
                $scope.clearForm();
                $scope.getAll();         
            });
        }, function (response) {
            if (response.status > 0)
                $scope.errorMsg = response.status + ': ' + response.data;
        }, function (evt) {
            file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
        });
        toasty.success({
            title: 'Alterar!',
            msg: 'Repasse alterado com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar upload Repasse Federal");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/prefeitura/repasse-federal-controller/read_one.php'
        }).then(function successCallback(response) {
            
            $scope.id = response.data[0]["id"];
            $scope.nome_titulo = response.data[0]["nome_titulo"];
            
            $('#myModal').modal('show');
        });
    };
    
    $scope.clearForm = function () {       
        $scope.nome_titulo = "";
        $scope.picFile = "";
        $('.image-preview').attr("data-content", "").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Procurar");        
    };
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/prefeitura/repasse-federal-controller/read.php'
        }).then(function successCallback(response) {
            $scope.listaRepasseFederal = response.data.records;
        });
    };
    
    $scope.deleteRepasseFederal = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/prefeitura/repasse-federal-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAll();
            });
            toasty.success({
                title: 'Deletar!',
                msg: 'Repasse deletado com sucesso!'
            });
        }
    };
    
}]);