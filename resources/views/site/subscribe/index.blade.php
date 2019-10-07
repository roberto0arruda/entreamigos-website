@extends('layouts.site')

@section('title', 'Pré-Inscrição')

@section('content')
<h1 class="mt-4 mb-3">Cadastro Reserva <small>{{date('Y')}}.{{date('m') <= '06' ? '1' : '2' }}</small></h1>
<p>Para o processo seletivo de novos voluntários</p>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/">Home</a>
    </li>
    <li class="breadcrumb-item active">Cadastro</li>
</ol>

<form action="" id="form-submit" method="post">
    {!! csrf_field() !!}
    <fieldset id="voluntario">
        <legend>Identificação</legend>
        <div class="form-group">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome_completo" id="nome" class="form-control" required>
        </div>

        <div class="formp-group">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <label for="nasc"> Data Nascimento</label>
                    <input type="date" name="data_nascimento" id="nasc" class="form-control" onblur="validadata();" aria-describedby="nascHelpId" required>
                    <small id="nascHelpId" class="form-text text-muted">Ter 18 anos ou mais</small>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <label for="celular">contato</label>
                    <input type="text" class="form-control" name="celular" id="celular" aria-describedby="cellHelpId" placeholder="(99) 9 9999-9999" required>
                    <small id="cellHelpId" class="form-text text-muted">de preferência com <i class="fa fa-whatsapp" aria-hidden="true"></i></small>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="email@example.com" required>
                    <small id="emailHelpId" class="form-text text-muted">Peencha com seu melhor Email</small>
                </div>
            </div>
        </div>
    </fieldset>

    <fieldset id="endereco">
        <legend><i class="fa fa-home" aria-hidden="true"></i> Endereço</legend>
        <div class="form-group">
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <label for="cep">Cep</label>
                    <input type="text" name="cep" id="cep" class="form-control" aria-describedby="cepHelpId" placeholder="" required>
                    <small id="cepHelpId" class="form-text text-muted">Endereço Automático, peencha seu cep</small>
                </div>
                <div class="col-xs-12 col-sm-7">
                    <label for="cRua">Logradouro</label>
                    <input type="text" class="form-control" name="logradouro" id="cRua" aria-describedby="ruaHelpId" placeholder="Rua, Av, Trav ..." required>
                    <small id="ruaHelpId" class="form-text text-muted">Fique a vontade para editar</small>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <label for="numero">Número</label>
                    <input type="text" name="numero" id="numero" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <label for="comp">Complemento</label>
                    <input type="text" class="form-control" name="complemento" id="comp" aria-describedby="compHelpId" placeholder="">
                    <small id="compHelpId" class="form-text text-muted">Algum complemento para seu endereço?</small>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" name="bairro" id="bairro" required>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade" required>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <label for="estado">Estado</label>
                    <input type="text" name="uf" id="estado" class="form-control" required>
                </div>
            </div>
        </div>
    </fieldset>

    <fieldset>
        <legend><i class="fa fa-question" aria-hidden="true"></i> Questionário</legend>
        <div class="form-row">
            <div class="form-group col-md-3">
                <i class="fa fa-tint" aria-hidden="true"></i>
                <label for="doador">Doador</label>
                <small class="form-text text-muted" id="dSNG"></small>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="doador" id="dS" value="S">
                        </div>
                        <div class="input-group-text">
                            <input type="radio" name="doador" id="dN" value="N">
                        </div>
                        <div class="input-group-text" id="dT" style="display:none">
                            <input type="radio" name="doador" id="dG" value="G">
                        </div>
                    </div>
                    <input type="text" class="form-control" name="tp_sang" id="tp_sang" minlength="2" placeholder="Tipo sanguíneo"
                        title="São eles: A, B, AB e O, que se subdividem em Rh positivo(+) e Rh negativo(-).">
                </div>
            </div>
            <div class="form-group col-md-2">
                <i class="fa fa-users" aria-hidden="true"></i>
                <label for="filhos">Filhos?</label>
                <small class="form-text text-muted" id="fNSQ"></small>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="filhos" id="fN">
                        </div>
                        <div class="input-group-text">
                            <input type="radio" name="filhos" id="fS">
                        </div>
                    </div>
                    <input type="number" class="form-control" name="filhos" id="fQ" title="Quantos Filhos"
                        min="1" max="9999" disabled>
                </div>
            </div>
            <div class="form-group col-md-4">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                <label for="trabalha">trabalha?</label>
                <small class="form-text text-muted" id="tNSO"></small>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="trabalha" id="tN" value="N">
                        </div>
                        <div class="input-group-text">
                            <input type="radio" name="trabalha" id="tS">
                        </div>
                    </div>
                    <input type="text" class="form-control" name="trabalha" id="tO" title="Empresa"
                        placeholder="Empresa" disabled>
                    <input type="text" class="form-control" name="cargo" id="tC" title="Cargo"
                        placeholder="Cargo" disabled>
                </div>
            </div>
            <div class="form-group col-md-3">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                <label for="escolaridade">Escolaridade</label>
                <small class="form-text text-muted text-right">Curs. | Comp.</small>
                <div class="input-group">
                    <select name="escolaridade" id="escolaridade" class="form-control" required>
                        <option value=""></option>
                        <option value="MEDIO">Ens. Médio</option>
                        <option value="SUPERIOR">Ens. Superior</option>
                        <option value="POS">Pós Graduação</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <input type="radio" name="situa" value=" CURSANDO">
                        </div>
                        <div class="input-group-text">
                            <input type="radio" name="situa" value=" COMPLETO">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group" id="curso"></div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="civil">Estado Civil</label>
                <small class="form-text text-muted">&nbsp;</small>
                <select name="est_civil" id="civil" class="form-control" required>
                    <option value=""></option>
                    <option value="solteiro">Solteiro (a)</option>
                    <option value="casado">Casado (a)</option>
                    <option value="divorciado">Divorciado (a)</option>
                </select>
            </div>
            <div class="form-group col-md-1">
                <label for="blusa">Tam. Blusa</label>
                <small class="form-text text-muted">&nbsp;</small>
                <select name="blusa" id="" class="form-control" required>
                    <option></option>
                    <option value="PP">PP</option>
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                    <option value="XXG">XXG</option>
                </select>
            </div>
            <div class="form-group col-md-8">
                <label for="vN">Outro Projeto</label>
                <small class="form-text text-muted" id="vOPNS"></small>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" name="outro" id="vN">
                        </div>
                        <div class="input-group-text">
                            <input type="radio" name="outro" id="vS">
                        </div>
                    </div>
                    <input type="text" class="form-control" name="outro_projeto" id="vOP" disabled>
                </div>
            </div>
        </div>
    </fieldset>

    <div class="form-group text-center">
        <button class="btn btn-warning" type="submit">
            <span class="fa-stack">
                <i class="fa fa-spinner fa-spin fa-stack-2x"></i>
                <i class="fa fa-paper-plane-o"></i>
            </span> Enviar
        </button>
    </div>
</form>

@endsection

@push('scripts')
<!-- Adicionando SweetAlert2-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<!-- MaskJQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
<script>
    $('#cep').mask('00.000-000');
    $('#celular').mask('(00) 0 0000-0000');
</script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    document.getElementById("dSNG").textContent = "   SIM    NÃO"; // doador SIM, NAO, GOSTARIA?
    document.getElementById("fNSQ").textContent = "   NÃO    SIM"; // filhos NAO, SIM QUANTOS?
    document.getElementById("tNSO").textContent = "   NÃO    SIM"; // trabalha, NAO, SIM ONDE? CARGO?
    document.getElementById("vOPNS").textContent = "   NÃO    SIM"; // voluntario outro projeto? onde?
    $(document).ready(function() {
        $('#dN').click(function() {
            $('#dG').show();
            document.getElementById("dSNG").textContent = "   SIM    NÃO   GOStaria";
        })
        $('#dS').click(function() {
            $('#dG').hide();
            document.getElementById("dSNG").textContent = "   SIM    NÃO";
        })

        $('#fS').click(function() {
            $('#fQ').attr('value', 1);
            $('#fQ').attr('disabled', false);
            document.getElementById("fNSQ").textContent = "   NÃO    SIM   Quantos?";
        })
        $('#fN').click(function() {
            $('#fQ').removeAttr('value');
            $('#fQ').attr('disabled', true);
            document.getElementById("fNSQ").textContent = "   NÃO    SIM";
        })

        $('#tS').click(function() {
            $('#tO').attr('disabled', false);
            $('#tC').attr('disabled', false);
            document.getElementById("tNSO").textContent = "   NÃO    SIM   Onde?";
        })
        $('#tN').click(function() {
            $('#tO').attr('disabled', true);
            $('#tC').attr('disabled', true);
            document.getElementById("tNSO").textContent = "   NÃO    SIM";
        })

        $('#vS').click(function() {
            $('#vOP').attr('disabled', false);
            $('#vOP').attr('placeholder', 'Nome do Outro Projeto');
            document.getElementById("vOPNS").textContent = "   NÃO    SIM   Onde você é voluntario?";
        })
        $('#vN').click(function() {
            $('#vOP').attr('disabled', true);
            $('#vOP').removeAttr('placeholder');
            document.getElementById("vOPNS").textContent = "   NÃO    SIM";
        })
        $('#escolaridade').change(function() {
            if ($('#escolaridade').val() == 'SUPERIOR' || $('#escolaridade').val() == 'POS' ) {
                $('#curso').empty();
                $('#curso').append(`<label for="curso">Seu curso</label>
                                    <input type="text" name="curso" class="form-control" placeholder="" aria-describedby="helpCurso" required>
                                    <small id="helpCurso" class="text-muted">Qual curso você estuda ou se formou?</small>`);
            } else {
                $('#curso').empty();
            }
        })
    })

    $('#form-submit').submit(function(e) {
        e.preventDefault();

        // validar form
        const Toast = Swal.mixin({
            toast: true,
            position: 'bottom',
            showConfirmButton: false,
            timer: 4000
        });
        var situaCurso = $("input[name='situa']:checked").val();
        if (situaCurso) {
            var escolaridade = $('#escolaridade').val() + situaCurso;
            $('<input>').attr({
                type: 'text',
                name: 'escolaridade',
                value: escolaridade
            }).appendTo('#form-submit');
        } else {
            Toast.fire({
                type: 'error',
                title: 'Por favor! informe a situação do seu curso',
            });
            return false;
        }
        var form = $(this);
        var data = form.serialize();

        axios.post('/api/subscribe', data)
        .then(function (response) {
            console.log(response);
            Swal.fire({
                title: 'Obrigado',
                text: 'Agradecemos sua inscrição.',
                type: 'success',
                confirmButtonColor: '#ff4500',
                confirmButtonText: 'OK',
                onAfterClose: () => window.location.href = "/"
            })
        })
        .catch(function (error) {
            console.log(error);
        });
    })
</script>

<script>
    // validar idade
    function validadata() {
        var data = document.getElementById("nasc").value; // pega o valor do input
        data = data.replace(/\//g, "-"); // substitui eventuais barras (ex. IE) "/" por hífen "-"
        var data_array = data.split("-"); // quebra a data em array
        var dataPTBR = data_array[2]+"/"+data_array[1]+"/"+data_array[0];

        // para o IE onde será inserido no formato dd/MM/yyyy
        if(data_array[0].length != 4){
            data = data_array[2]+"-"+data_array[1]+"-"+data_array[0]; // remonto a data no formato yyyy/MM/dd
        }

        // comparo as datas e calculo a idade
        var hoje = new Date();
        var nasc  = new Date(data);
        var idade = hoje.getFullYear() - nasc.getFullYear();
        var m = hoje.getMonth() - nasc.getMonth();
        if (m < 0 || (m === 0 && hoje.getDate() < nasc.getDate())) idade--;

        if(idade < 18) {
            Swal.fire({
                title: 'Que pena! sua data de nascimento ' + dataPTBR,
                text: 'Pessoas menores de 18 anos, não podem se inscrever.',
                type: 'error',
                confirmButtonColor: '#ff4500',
                confirmButtonText: 'OK'
            });
            document.getElementById("nasc").value = '';
            document.getElementById("nasc").focus();
            return false;

        }
        // se for maior que 60 não vai acontecer nada!
        return false;
    }
</script>

<!-- Adicionando JQuery viacep -->
<script type="text/javascript" >
    $(document).ready(function() {
        //adiciona mascara de cep
        function MascaraCep(cep) {
            if(mascaraInteiro(cep)==false){
                event.returnValue = false;
            }
            return formataCampo(cep, '00.000-000', event);
        }

        //valida CEP
        function ValidaCep(cep){
            exp = /\d{2}\.\d{3}\-\d{3}/
            if(!exp.test(cep.value))
                alert('Numero de Cep Invalido!');
        }

        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#cRua").val("");
            $("#bairro").val("");
            $("#cidade").val("");
            $("#estado").val("");
        }

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        //Quando o campo cep perde o foco.
        $("#cep").blur(function() {
            var cepMaskared = $(this).val();
            Toast.fire({
                type: 'success',
                title: 'Buscando... '+cepMaskared,
            });

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if(validacep.test(cep)) {

                    //Preenche os campos com "Buscando..." enquanto consulta webservice.
                    $("#cRua").val("Buscando...");
                    $("#bairro").val("Buscando...");
                    $("#cidade").val("Buscando...");
                    $("#estado").val("Buscando...");

                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#cRua").val(dados.logradouro);
                            $("#bairro").val(dados.bairro);
                            $("#cidade").val(dados.localidade);
                            $("#estado").val(dados.uf);
                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            Swal.fire({
                                title: cepMaskared,
                                text: 'CEP pesquisado não foi encontrado.',
                                type: 'error',
                                confirmButtonColor: '#ff4500',
                                confirmButtonText: 'Tente Outro!'
                            });
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        });
    });
</script>

@endpush
