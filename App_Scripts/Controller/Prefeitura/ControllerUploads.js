var app = angular.module('myApp', ['angularUtils.directives.dirPagination','ngFileUpload','angular-toasty']);
app.controller('ControllerUpload',  ['$scope', '$http', 'Upload', '$timeout', 'toasty', function ($scope, $http, Upload, $timeout, toasty) { 
      
    /* ======== Upload Imagens Noticias ======= */   
    $scope.submitImgNoticia = function (file) {       
        file.upload = Upload.upload({
            url: '../../Controller/prefeitura/upload-noticia-controller/upload.php',
            data: {file: file}
        });
        file.upload.then(function (response) {
            $timeout(function () {
                file.result = response.data;
                $('#myModal').modal('hide');  
                $scope.clearForm();
                $scope.getAllimgNoticias();         
            });
        }, function (response) {
            if (response.status > 0)
                $scope.errorMsg = response.status + ': ' + response.data;
        }, function (evt) {
            file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
        });
        toasty.success({
            title: 'Upload!',
            msg: 'Noticia carregada com sucesso!'
        });
    };  
    
    $scope.getAllimgNoticias = function () {
        $http({
            method: 'GET',
            url: '../../Controller/prefeitura/upload-noticia-controller/read.php'
        }).then(function successCallback(response) {
            $scope.ImagNoticias = response.data.records;
        });
    };
    
    $scope.deleteUpload = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/prefeitura/upload-noticia-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAllimgNoticias();
            });
            toasty.success({
                title: 'Deletar!',
                msg: 'Noticia deletar com sucesso!'
            });
        }
    };
    
    /* ======== Upload PDF Imprensa ======= */ 
    $scope.submitPdfImprensa = function (file) {       
        file.upload = Upload.upload({
            url: '../../Controller/prefeitura/upload-imprensa-controller/upload.php',
            data: {file: file}
        });
        file.upload.then(function (response) {
            $timeout(function () {
                file.result = response.data;
                $('#myModal').modal('hide');  
                $scope.clearForm();
                $scope.getAllPdfImprensa();         
            });
        }, function (response) {
            if (response.status > 0)
                $scope.errorMsg = response.status + ': ' + response.data;
        }, function (evt) {
            file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
        });
        toasty.success({
            title: 'Upload!',
            msg: 'Imprensa carregada com sucesso!'
        });
    };    
    
    $scope.getAllPdfImprensa = function () {
        $http({
            method: 'GET',
            url: '../../Controller/prefeitura/upload-imprensa-controller/read.php'
        }).then(function successCallback(response) {
            $scope.PdfImprensa = response.data.records;
        });
    };
    
    $scope.deletePdfImprensa = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/prefeitura/upload-imprensa-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAllPdfImprensa();
            });
            toasty.success({
                title: 'Deletar!',
                msg: 'Imprensa deletado com sucesso!'
            });
        }
    };
    
    /* ======== Upload Imagem Governo  ======= */ 
    $scope.submitImgGoverno = function (file) {       
        file.upload = Upload.upload({
            url: '../../Controller/prefeitura/upload-governo-controller/upload.php',
            data: {nome_titulo: $scope.nome_titulo, file: file}
        });
        file.upload.then(function (response) {
            $timeout(function () {
                file.result = response.data;
                $('#myModal').modal('hide');  
                $scope.clearForm();
                $scope.getAllimgGoverno();         
            });
        }, function (response) {
            if (response.status > 0)
                $scope.errorMsg = response.status + ': ' + response.data;
        }, function (evt) {
            file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
        });
        toasty.success({
            title: 'Upload!',
            msg: 'Imagem Gestor carregado com sucesso!'
        });
    };

    $scope.getAllimgGoverno = function () {
        $http({
            method: 'GET',
            url: '../../Controller/prefeitura/upload-governo-controller/read.php'
        }).then(function successCallback(response) {
            $scope.ImgGoverno = response.data.records;
        });
    };
    
    $scope.deleteimgGoverno = function (id) {
        if (confirm("Você tem certeza?")) {
            $http({
                method: 'POST',
                data: {'id': id},
                url: '../../Controller/prefeitura/upload-governo-controller/delete.php'
            }).then(function successCallback(response) {
                $scope.getAllimgGoverno();
            });
            toasty.success({
                title: 'Deletar!',
                msg: 'Imagem Gestor deletado com sucesso!'
            });
        }
    };
    
    /* ======== Geral Clear  ========= */ 
    $scope.clearForm = function () {
        $scope.nome_titulo = "";
        $scope.arquivo = "";
        $scope.picFile = "";
        $('.image-preview').attr("data-content", "").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Procurar"); 
    };
    
}]);