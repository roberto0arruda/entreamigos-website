@extends('layouts.site')

@section('content')

    <h1 class="mt-4 mb-3">Cadastro Reserva
        <small>2019.1</small> - Entre Amigos
    </h1>
    <p>Para o processo seletivo de novos voluntários</p>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">Cadastro</li>
    </ol>

    <form action="" method="post">
        
            <div class="form-group">
                <label for="nome">Nome Completo:</label><br>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Rua, número, bairro - complemento</small>
            </div>
            <div class="form-group">
                <label for="dt_nasc">Data de Nascimento</label>
                <input type="date" class="form-control" name="dt_nasc" id="dt_nasc" aria-describedby="helpId">
                <small id="helpId" class="form-text text-muted">Dia/Mês/Ano</small>
            </div>
            <div class="row form-group">
                <div class="col-lg-6">
                    <label for="celular">Telefone</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" aria-describedby="telefoneHelpId" placeholder="">
                    <small id="telefoneHelpId" class="form-text text-muted">de preferência com whatsapp</small>
                </div>
                <div class="col-lg-6">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="">
                    <small id="emailHelpId" class="form-text text-muted">Peencha com seu melhor Email</small>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-3">
                    <label for="blusa">Tamanho da Blusa</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="blusa" id="pp" value="PP">
                        <label class="form-check-label" for="pp">PP</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="blusa" id="p" value="P">
                        <label class="form-check-label" for="p">P</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="blusa" id="m" value="M">
                        <label class="form-check-label" for="m">M</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="blusa" id="g" value="G">
                        <label class="form-check-label" for="g">G</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="blusa" id="gg" value="GG">
                        <label class="form-check-label" for="gg">GG</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="blusa" id="xgg" value="XGG">
                        <label class="form-check-label" for="xgg">XGG</label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <label for="escolaridade">Qual sua Escolaridade</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escolaridade" id="medioCursando" value="PP">
                        <label class="form-check-label" for="medioCursando">Ensino Médio Cursando</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escolaridade" id="medioCompleto" value="P">
                        <label class="form-check-label" for="medioCompleto">Ensino Médio Completo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escolaridade" id="superiorCursando" value="M">
                        <label class="form-check-label" for="superiorCursando">Ensino Superior Cursando</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escolaridade" id="superiorCompleto" value="G">
                        <label class="form-check-label" for="superiorCompleto">Ensino Superior Completo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escolaridade" id="pos" value="GG">
                        <label class="form-check-label" for="pos">Pós Graduação</label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <label for="estadocivil">Estado civil</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estado_civil" id="solteiro" value="Solteiro(a)">
                        <label class="form-check-label" for="solteiro">Solteiro(a)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estado_civil" id="cadado" value="Casado(a)">
                        <label class="form-check-label" for="cadado">Casado(a)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estado_civil" id="divorciado" value="Divorciado(a)">
                        <label class="form-check-label" for="divorciado">Divorciado(a)</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estado_civil" id="outro" value="Outro">
                        <label class="form-check-label" for="outro">Outro:</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="doador">Você é doador de Sangue?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="doador" id="sim" value="sim">
                    <label class="form-check-label" for="sim">SIM</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="doador" id="nao" value="nao">
                    <label class="form-check-label" for="nao">NÃO</label>
                </div>
            </div>
            <div class="form-group">
                <label for="trabalha">Você tem Filhos?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="filhos" id="sim" value="sim">
                    <label class="form-check-label" for="sim">SIM</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="filhos" id="nao" value="nao">
                    <label class="form-check-label" for="nao">NÃO</label>
                </div>
            </div>
            <div class="form-group">
                <label for="trabalha">Você trabalha?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="trabalha" id="sim" value="sim">
                    <label class="form-check-label" for="sim">SIM</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="trabalha" id="nao" value="nao">
                    <label class="form-check-label" for="nao">NÃO</label>
                </div>
            </div>
            <div class="form-group">
                <label for="voluntario">É voluntário em outro projeto social?</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="voluntario" id="sim" value="sim">
                    <label class="form-check-label" for="sim">SIM</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="voluntario" id="nao" value="nao">
                    <label class="form-check-label" for="nao">NÃO</label>
                </div>
            </div>
    </form>

@endsection