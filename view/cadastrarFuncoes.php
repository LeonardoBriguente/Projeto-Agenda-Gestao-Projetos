<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços</title>
</head>

<body>
    <div id="container">
        <h2 class="title">Cadastro de Funções</h2>
        <div id="content">
            <div id="form-container">
                <span class="subtitle">Função</span>
                <form id="form">
                    <input id="input" type="text" placeholder="Digite a função do Colaborador">
                    <!-- Ao clicar no botão, adicionar o value do input no banco -->
                    <button id="create" type="reset">Adicionar</button>
                </form>
            </div>
            <div id="list">
                <select id="select" name="services" size="6" onchange="console.log(this.value)">
                    <div>
                        <option class="option" value="1">CABELELEIRO</option>
                        <option class="option" value="2">ESTETICISTA</option>
                        <option class="option" value="3">MANICURE</option>
                        <option class="option" value="4">MASSAGISTA</option>
                        <option class="option" value="5">MAQUIADOR</option>
                        <option class="option" value="6">PODÓLOGO</option>
                    </div>
                    </optgroup>
                </select>
                <div id="buttons">
                    <!-- Ao clicar em editar, atualizar o item no banco de dados onde o ID é igual ao valor da <option> selecionada, usando o novo texto do <input> -->
                    <button id="update">Editar</button>
                    <!-- Ao clicar em Excluir, deletar do banco de dados o item com ID igual ao valor da <option> selecionada -->
                    <button id="delete">Excluir</button>
                </div>
            </div>
        </div>
    </div>
</body>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        display: flex;
        justify-content: center;
    }

    #container {
        margin: 1rem 4rem;
        padding: 2rem;
        border-style: solid;
        border-width: 3px;
        border-radius: 1rem;
        border-color: #000000;
        width: 70%;
        height: 90%;
        box-shadow: 0 8px 10px rgba(0, 0, 0, 0.3);
    }

    .title {
        text-align: center;
        font-weight: bold;
        color: #26742b;
    }

    .subtitle {
        display: block;
        margin-bottom: 3px;
        font-size: 18px;
        font-weight: bold;
        color: #26742b;
    }

    #content {
        margin-top: 15px;
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    #form-container {
        display: flex;
        flex-direction: column;
    }

    #form {
        align-items: center;
        display: flex;
        flex-direction: column;
    }

    #input {
        width: 20rem;
        height: 1.8rem;
        border-radius: 0.5rem;
        padding: 0 1rem;
    }

    #select {
        width: 20rem;
        height: 25rem;
        padding: 3rem 2rem;
        border-style: solid;
        border-width: 4px;
        border-radius: 1.5rem;
        border-color: #3a86ef;
        background-color: #d7d7d7;

    }

    .option {
        font-size: 20px;
        padding: 5px 5px 5px 40px;
    }

    select option:hover,
    select option:focus,
    select option:active {
        background: linear-gradient(#e3e3e3, #e3e3e3);
        background-color: #000000 !important;
        color: #000000 !important;
        border-radius: 20px;
    }

    select option:checked {
        background: linear-gradient(#3e966b, #3e966b);
        background-color: #3e966b !important;
        color: #000000 !important;
        border-radius: 20px;
    }

    #buttons {
        display: flex;
        justify-content: space-evenly;
        margin: 10px;
    }

    #create {
        margin: 10px 0;
        background-color: #3e966b;
        color: #ffffff;
        border-radius: 20px;
        border-color: #3e966b;
        font-size: 15px;
        padding: 10px 20px;
        max-width: 120px;
    }

    #update {
        background-color: #3e966b;
        color: #ffffff;
        border-radius: 20px;
        border-color: #3e966b;
        font-size: 15px;
        padding: 6px 20px;
        max-width: 120px;
    }

    #delete {
        background-color: #fe4808;
        color: #ffffff;
        border-radius: 20px;
        border-color: #fe4808;
        font-size: 15px;
        padding: 6px 20px;
    }

    select::-webkit-scrollbar {
        width: 7px;
    }

    select::-webkit-scrollbar-track {
        background: #e8e6e6 !important;
        border-radius: 18px !important;
        margin: 2rem;
    }

    select::-webkit-scrollbar-thumb {
        background: #fbfbfb !important;
        border-radius: 18px !important;
    }

    @supports not selector(::-webkit-scrollbar) {
        select {
            scrollbar-color: #ffffff #e8e6e6 !important;
        }
    }
</style>

</html>