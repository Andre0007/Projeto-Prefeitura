var app = angular.module('myApp', ['ngCpfCnpj','angular-toasty']);
app.controller('ControllerOuvidoria', function($scope, $http, toasty) {

    function verificaNumero(e) {
        if (e.which !== 8 && e.which !== 0 && (e.which < 48 || e.which > 57)) {
            return false;
        }
    }

    $(document).ready(function () {
        $("#CampoCnpj").hide();
        $("#CampoCpf").hide();
    });

    //Mascara
    $(document).ready(function () {
        $("#cpf").mask("999.999.999-99");
        $("#cnpj").mask("99.999.999/9999-99");
        $("#data_nascimento").mask("99/99/9999");
        $("#cep").mask("99999-999");
        $("#telefone").mask("(99)9999-9999?9");
        $("#numero").keypress(verificaNumero);
        $("#rg").keypress(verificaNumero);
    });
              
    $scope.createCidadao = function () {
        $http({
            method: 'POST',
            data: {
                'nome': $scope.nome,
                'cnpj': $scope.cnpj,
                'cpf': $scope.cpf,
                'rg': $scope.rg,                
                'dataNasci': $scope.dataNasci,
                'IDsexo': $scope.IDsexoSelected,
                'email': $scope.email,
                'pontoRef': $scope.pontoRef,
                'senha': $scope.senha,               
                'cep': $scope.cep,
                'numero': $scope.numero,
                'bairro': $scope.bairro,
                'cidade': $scope.cidade,
                'uf': $scope.uf,
                'tel': $scope.tel,
                'endereco': $scope.endereco,
                'completo': $scope.completo
            },
            url: '../../Controller/ouvidoria/-controller/create.php'
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
            $scope.clearForm();
        });
        toasty.success({
            title: 'Cadastrar!',
            msg: 'Usúario cadastrado com sucesso!'
        });
    };
    
    $scope.clearForm = function () {
        $scope.id = "";
        $scope.nome = "";
        $scope.cnpj = "";
        $scope.cpf = "";
        $scope.rg = "";
        $scope.dataNasci = "";
        $scope.IDsexoSelected = "";
        $scope.email = "";         
        $scope.pontoRef = "";
        $scope.senha = "";
        $scope.cep = "";
        $scope.numero = "";
        $scope.bairro = "";
        $scope.cidade = "";
        $scope.uf = "";
        $scope.tel = "";
        $scope.endereco = "";
        $scope.completo = "";
    };
    
    $scope.submitSenha = function() {
        // verifica se o formulário é válido
        if ($scope.userSenha.$valid) {
            alert('our form is amazing');
        }
    };

});

function cnpj()
{      
    $("#CampoCnpj").show();
    $("#CampoCpf").hide();        
}

function cpf()
{        
    $("#CampoCpf").show();
    $("#CampoCnpj").hide();
}