$(document).ready(function () {
    $("#cpfcnpj").mask("999.999.999-99");
    $("#telefone").mask("(99)9999-9999?9");
    $("#CampoCpfCnpj").hide();
});

function cnpj()
{
    $("#cpfcnpj").mask("99.999.999/9999-99");
    setTimeout($("#cpfcnpj").focus(), 300);
    $("#label").text('CNPJ:');
    $("#CampoCpfCnpj").show();
    $('#Icon').removeClass('fa fa-user fa');
    $('#Icon').addClass('fa fa-building fa');
}

function cpf()
{
    $("#cpfcnpj").mask("999.999.999-99");
    setTimeout($("#cpfcnpj").focus(), 300);
    $("#label").text('CPF:');
    $("#CampoCpfCnpj").show();
    $('#Icon').removeClass('fa fa-building fa');
    $('#Icon').addClass('fa fa-user fa');
}