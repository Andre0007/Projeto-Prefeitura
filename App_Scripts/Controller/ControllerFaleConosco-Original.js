var app = angular.module('myApp',['angular-toasty']);
app.controller('ControllerPrefeitura',function($scope, $http, toasty){
    
    $scope.SendMail = function () {       
        if ($scope.contactForm.$valid) {              
            $http({
                method: 'POST',
                data: {
                    'nome': $scope.nome,
                    'email': $scope.email,
                    'departamento': $scope.IDepartamentoSelected,
                    'assunto': $scope.assunto,                               
                    'mensagem': $scope.mensagem
                },
                url: 'Controller/Contato-Controller/FaleMail.php'
            }).then(function successCallback(response) {
                window.setTimeout('location.reload()', 3000);
                toasty.success({
                    title: 'Sucesso!!',
                    msg: 'Mensagem enviada com sucesso.'
                });
            });
        }
    };

});