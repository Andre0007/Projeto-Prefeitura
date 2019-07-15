var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngFileUpload','angular-toasty']); 
app.controller('ControllerMCMVListaHierarquizada', ['$scope', '$http', 'Upload', '$timeout', 'toasty', function ($scope, $http, Upload, $timeout, toasty) {
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Enviar novo upload Lista Hierarquizada");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/habitacao/MCMVListaHierarquizada-controller/read.php'
        }).then(function successCallback(response) {
            $scope.listaHierarquizada = response.data.records;
        });
    };
    
    $scope.uploadListaHierarquizada = function (file) {       
        file.upload = Upload.upload({
            url: '../../Controller/habitacao/MCMVListaHierarquizada-controller/upload.php',
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
            msg: 'Lista Hierarquizada carregada com sucesso!'
        });
    };
    
    $scope.updateListaHierarquizada = function (file) {       
        file.upload = Upload.upload({
            url: '../../Controller/habitacao/MCMVListaHierarquizada-controller/update.php',
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
            msg: 'Lista Hierarquizada carregada com sucesso!'
        });
    };
    
    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar upload Lista Hierarquizada");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/habitacao/MCMVListaHierarquizada-controller/read_one.php'
        }).then(function successCallback(response) {
            
            $scope.id = response.data[0]["id"];
            $scope.nome_titulo = response.data[0]["nome_titulo"];
            
            $('#myModal').modal('show');
        });
    };
    
    $scope.deleteListaHierarquizada = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/habitacao/MCMVListaHierarquizada-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAll();
            });
            toasty.success({
                title: 'Deletar!',
                msg: 'Lista Hierarquizada deletada com sucesso!'
            });
        }
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
    
}]);