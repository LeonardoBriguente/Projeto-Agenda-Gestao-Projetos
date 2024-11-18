<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços</title>
</head>

<body>
    <div id="container">
        <h2 class="title">Perfil de Usuário</h2>
        <div id="content">
            <div id="form-container">
                <form id="form">
                    <label for="name" class="label">Nome</label>
                    <input class="input" id="name" type="text" placeholder="Nome Sobrenome" value="Sérgio Martins">

                    <label for="cpf" class="label">CPF</label>
                    <input class="input" id="cpf" type="text" placeholder="000.000.000-00" value="123.456.789-10">

                    <label for="select" class="label">Função</label>
                    <select id="select" class="input" style="min-width: 22.2rem;">
                        <div>services
                            <option class="option" value="1">CABELELEIRO</option>
                            <option class="option" value="2">ESTETICISTA</option>
                            <option class="option" value="3">MANICURE</option>
                            <option class="option" value="4">MASSAGISTA</option>
                            <option class="option" value="5">MAQUIADOR</option>
                            <option class="option" value="6">PODÓLOGO</option>
                        </div>
                        </optgroup>
                    </select>

                    <label for="phone" class="label">Telefone</label>
                    <input class="input" id="phone" type="tel" placeholder="(00) 00000-0000" value="(12) 34567-8910">

                    <label for="birth" class="label">Data de Nascimento</label>
                    <input class="input" id="birth" type="date" placeholder="dd/mm/aaaa" value="1981-07-18">

                    <label for="email" class="label">E-mail</label>
                    <input class="input" id="email" type="email" placeholder="nome@email.com" value="sergiom@assim.net">

                    <label for="city" class="label">Cidade</label>
                    <input class="input" id="city" type="text" placeholder="Cidade" value="Presidente Prudente">
                </form>
            </div>
            <div id="picture">
                <span class="label">Colaborador</span>
                <img id="profileImage" src="assets/image/sergio.png" alt="Imagem do colaborador" width="100" height="120">
                <label for="fileInput" id="update">Alterar foto</label>
                <!-- Input escondido abaixo, lidar com na logica de upload/salvar foto (há um script no final
                    da pagina para mudar a imagem, mas precisa implementar no back-end)-->
                <input type="file" id="fileInput" style="display: none;">
                <textarea id="notes" placeholder="Anotações:" cols="45" rows="5"></textarea>
            </div>
        </div>
    </div>
</body>
<script>
    // JavaScript para exibir a imagem selecionada
    document.getElementById("fileInput").addEventListener("change", function (event) {
        const file = event.target.files[0];
        if (file) {
            const imageURL = URL.createObjectURL(file);
            document.getElementById("profileImage").src = imageURL;
        }
    });
</script>

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

    .label {
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

    #picture {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #notes {
        margin-top: 60px;
        background-color: #d7d7d7;
        border-radius: 1rem;
        padding: 8px 10px;
        font-size: 16px;
    }

    #notes::placeholder {
        opacity: 100%;
        color: #000000;
        font-size: 16px;
        font-weight: bold;
    }

    #form-container {
        display: flex;
        flex-direction: column;
    }

    #form {
        align-items: start;
        display: flex;
        flex-direction: column;
    }

    .input {
        display: block;
        width: 20rem;
        height: 1.8rem;
        border-radius: 0.5rem;
        border-width: 2px;
        padding: 0 1rem;
        border: 1;
        margin-bottom: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        outline: none;
        box-shadow: none;
    }

    #update {
        margin-top: 20px;
        background-color: #3e966b;
        color: #ffffff;
        border-radius: 20px;
        border-color: #3e966b;
        font-size: 15px;
        padding: 6px 20px;
        max-width: 120px;
        cursor: pointer;
    }
</style>

</html>