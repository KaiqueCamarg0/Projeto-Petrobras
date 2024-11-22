<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0%;
            padding: 0%;
        }

        header {
            border-bottom: 5px solid #208445;
            margin-bottom: 10px;
            padding: 6px;
        }

        #btn-confirmar {
            background-color: #208445;
            color: #FFFFFF;
            border: none;
            padding: 7px;
            cursor: pointer;
            width: 15%;
            border-radius: 12px;
            margin-top: 10px;

        }

        #formulario {
            margin: auto;
            width: 50vw;
            padding: 12px;
            border: 2px solid black;

        }

        .img-logo {
            margin-left: 10px;
        }
    </style>
</head>

<body>

    <header>
        <div>
            <img src='./imgs/logo_petrobras.png' width="200px" class="img-logo" />
        </div>
    </header>

    <form id="formulario">
        <h3>Impacto nas comunidades</h3>
        <p>Esta Pesquisa está sendo feita para sabermos se a Petrobrás está tendo um impacto positivo ou negativo
            nas comunidades por perto de pontos de coleta de petroléo</p>
        <label for=''>Nome</label>
        <br />
        <input type='text' placeholder='' class='input-nome' />
        </br>
        <label for=''>Email</label>
        <br />
        <input type='text' placeholder='' class='input-email' />
        </br>
        <label>Data de nascimento</label>
        <input type='date' />
        </br>
        <span>Genero</span>
        <select class="form-select" aria-label="Genero">
            <option selected>Selecione uma opção</option>
            <option value="1">Masculino</option>
            <option value="2">Feminino</option>
            <option value="2">Helicoptero</option>
            <option value="2">Dominic Torreto</option>
            <option value="2">hermafrodita</option>
            <option value="2">hermafrodito</option>
            <option value="2">Gay</option>
            <option value="2">carro fiat</option>
            <option value="3">Prefiro não informar</option>
        </select>
        <br>
        <label for=''>Cidade</label>
        <br />
        <input type='text' placeholder='' class='input-cidade' />
        </br>
        <span>UF</span>
        <select class="form-select" aria-label="Genero">
            <option selected>Selecione uma opção</option>
            <option value="1">SP</option>
            <option value="2">RJ</option>
            <option value="2">RS</option>
            <option value="2">SC</option>
            <option value="2">PA</option>
            <option value="2">BA</option>
            <option value="2">MG</option>
            <option value="2">MT</option>
            <option value="3">MS</option>
            <option value="3">PE</option>
            <option value="3">AM</option>
            <option value="3">SE</option>
            <option value="3">RO</option>
            <option value="3">RR</option>
            <option value="3">AP</option>
            <option value="3">AC</option>
            <option value="3">DF</option>
            <option value="3">GO</option>
            <option value="3">ES</option>
            <option value="3">RR</option>
            <option value="3">RR</option>
        </select>
        <br>
        <span>Você esta tendo problemas com energia ou internet?</span>
        <br>
        <textarea rows="6" cols="60"></textarea>
        <br>
        <span>O que você acha sobre o ponto de coleta de Petroléo perto de sua comunidade?
            Está encomodado ou não?
        </span>
        <br>
        <textarea rows="6" cols="60"></textarea>
        <br>

        <button id='btn-confirmar'>Confirmar</button>



    </form>
</body>

</html>