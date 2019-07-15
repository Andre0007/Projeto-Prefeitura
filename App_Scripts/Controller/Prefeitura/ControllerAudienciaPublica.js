var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngFileUpload','angular-toasty']);
app.controller('ControllerAudienciaPublica', ['$scope', '$http', 'Upload', '$timeout', 'toasty', function ($scope, $http, Upload, $timeout, toasty) { 
    
    $scope.showCreateForm = function () {
        $scope.clearForm();
        $('#modal-title').text("Enviar novo upload Audiencia Publica");
        $('#btn-update').hide();
        $('#btn-create').show();
    };
    
    $scope.uploadAudienciaPublica = function (file) {       
        file.upload = Upload.upload({
            url: '../../Controller/prefeitura/audiencia-publica-controller/create.php',
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
            msg: 'Audiencia Publica carregada com sucesso!'
        });
    };
    
    $scope.updateAudienciaPublica = function (file) {       
        file.upload = Upload.upload({
            url: '../../Controller/prefeitura/audiencia-publica-controller/update.php',
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
            msg: 'Audiencia Publica alterada com sucesso!'
        });
    };

    $scope.readOne = function (id) {

        $('#modal-title').text("Alterar upload Audiencia Publica");
        $('#btn-update').show();
        $('#btn-create').hide();

        $http({
            method: 'POST',
            data: {'id': id},
            url: '../../Controller/prefeitura/audiencia-publica-controller/read_one.php'
        }).then(function successCallback(response) {
            
            $scope.id = response.data[0]["id"];
            $scope.titulo = response.data[0]["titulo"];
            
            $('#myModal').modal('show');
        });
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
    
    $scope.getAll = function () {
        $http({
            method: 'GET',
            url: '../../Controller/prefeitura/audiencia-publica-controller/read.php'
        }).then(function successCallback(response) {
            $scope.listaAudienciaPublica = response.data.records;
        });
    };
    
    $scope.deleteAudienciaPublica = function (id) {

        if (confirm("Você tem certeza?")) {

            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/prefeitura/audiencia-publica-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAll();
            });
            toasty.success({
                title: 'Detelar!',
                msg: 'Audiencia Publica deletada com sucesso!'
            });
        };
    };
    
}]);