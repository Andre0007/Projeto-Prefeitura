var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngFileUpload','angular-toasty']);
app.controller('ControllerUploadsArquivos',  ['$scope', '$http', 'Upload', '$timeout', 'toasty', function ($scope, $http, Upload, $timeout, toasty) { 
    
    $scope.uploadFiles = function (file) {       
        file.upload = Upload.upload({
            url: '../../Controller/Licitacao/upload-controller/upload.php',
            data: {file: file}
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
            msg: 'Arquivo carregado com sucesso!'
        });
    };
    
    $scope.clearForm = function () {       
        $scope.picFile = "";
        $('.image-preview').attr("data-content", "").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Procurar");        
    };
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Adicionar novo arquivo");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/Licitacao/upload-controller/read.php'
        }).then(function successCallback(response) {
            $scope.listaArquivoUp = response.data.records;
        });
    };
    
    $scope.deleteUpload = function (id_upload) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id_upload': id_upload},
                url: '../../Controller/Licitacao/upload-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAll();
            });
            toasty.success({
                title: 'Deletar!',
                msg: 'Upload arquivo deletado com sucesso!'
            });
        }
    };
    
}]);