var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngFileUpload','angular-toasty']); 
app.controller('ControllerUpload', ['$scope', '$http', 'Upload', '$timeout', 'toasty', function ($scope, $http, Upload, $timeout, toasty) {
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Enviar novo upload Imagem");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/habitacao/UploadFotos-controller/read.php'
        }).then(function successCallback(response) {
            $scope.FotosHabitacao = response.data.records;
        });
    };
    
    $scope.uploadImagem = function (file) {       
        file.upload = Upload.upload({
            url: '../../Controller/habitacao/UploadFotos-controller/upload.php',
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
            msg: 'Imagem carregada com sucesso!'
        });
    };  
    
    $scope.deleteUpload = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/habitacao/UploadFotos-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAll();
            });
            toasty.success({
                title: 'Deletar!',
                msg: 'Imagem deletada com sucesso!'
            });
        }
    };
    
    $scope.clearForm = function () {       
        $scope.picFile = "";
        $('.image-preview').attr("data-content", "").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Procurar");        
    };
    
}]);