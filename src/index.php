<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="#">Menu</a>
        <h1>
            <img src="https://placehold.co/520x520?text=Logo" alt="">
        </h1>
        
    </header>

    <div id="cadastro_news">

        <h2> Cadastra-se para receber nossas novidades!</h2>

        <!--    Envio síncrono quando é feito direto pelo html    -->
        <form action="app/processa_news.php" method="POST">

            <label class="esconde" for="email">Seu melhor e-mail</label>
            <input type="email" name="email" id="email" placeholder="Seu melhor e-mail" required>
            <input type="checkbox" id="termos" required>
            <label for="termos">Concordo que meus dados serão armazenado e tratodos de acordo com a Politica de Privacidade</label>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M480-440 160-640v400h360v80H160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v280h-80v-200L480-440Zm0-80 320-200H160l320 200ZM760-40l-56-56 63-64H600v-80h167l-64-64 57-56 160 160L760-40ZM160-640v440-240 3-283 80Z"/></svg>
                Cadastrar</button>

        </form>
    </div>
    

</body>
</html>