var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngFileUpload','angular-toasty']); 
app.controller('ControllerCMHConvocacoes', ['$scope', '$http', 'Upload', '$timeout', 'toasty', function ($scope, $http, Upload, $timeout, toasty) {
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Enviar novo upload CMH Lista Convocações");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/habitacao/CMHConvocacoes-controller/read.php'
        }).then(function successCallback(response) {
            $scope.CMHResolucoes = response.data.records;
        });
    };
    
    $scope.uploadCMHConvocacoes = function (file) {       
        file.upload = Upload.upload({
            url: '../../Controller/habitacao/CMHConvocacoes-controller/upload.php',
            data: {titulo: $scope.titulo, file: file}
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
            msg: 'CMH Lista Convocações carregada com sucesso!'
        });
    };
    
    $scope.updateCMHConvocacoes = function (file) {       
        file.upload = Upload.upload({
            url: '../../Controller/habitacao/CMHConvocacoes-controller/update.php',
            data: {id: $scope.id, titulo: $scope.titulo, file: file}
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
            msg: 'CMH Lista Convocações carregada com sucesso!'
        });
    };
    
    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar upload CMH Lista Convocações");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/habitacao/CMHConvocacoes-controller/read_one.php'
        }).then(function successCallback(response) {
            
            $scope.id = response.data[0]["id"];
            $scope.titulo = response.data[0]["titulo"];
            
            $('#myModal').modal('show');
        });
    };
    
    $scope.deleteCMHConvocacoes = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/habitacao/CMHConvocacoes-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAll();
            });
            toasty.success({
                title: 'Deletar!',
                msg: 'CMH Lista Convocações deletada com sucesso!'
            });
        }
    };
    
    $scope.clearForm = function () {       
        $scope.titulo = "";
        $scope.picFile = "";
        $('.image-preview').attr("data-content", "").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Procurar");        
    };
    
}]);