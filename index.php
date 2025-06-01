<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sapo Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
     <header>
        <!--Navbar do site-->
        <nav id="navbar">
            <i id="nav-logo">
                <a href="#home">
                    <img src="imagens/sapo_logo.png" width="50" height="50" alt="Logo">
                </a>
            </i>
            <ul id="nav-list">
                <li class="nav-item active">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#equipamentos">Alugar</a>
                </li>
                <li class="nav-item">
                    <a href="#sobre">Sobre</a>
                </li>
                <li class="nav-item">
                    <a href="#contato">Contato</a>
                </li>
                <li class="nav-item">
                    <a href="#admin">Admin</a>
                </li>
            </ul>
            <button class="btn-whatsapp"
               <button onclick="window.open('https://wa.me/5511952090673?text=Ol%C3%A1%20Sapo%21%0AMe%20interessei%20na%20loca%C3%A7%C3%A3o%20dos%20seu%20aparelhos%2C%20poderia%20me%20informar%20a%20diponibilidade%20desse%2F%20desses%20que%20selecionei%3F%0A', '_blank')">WhatsApp</button>
        </nav>
    </header>
    <!-- Inicio -->
        <section class="p-5">
            <div class="container">
                <div class="container-description">
                    <h1 class="title"><span>Sapo Shop!</span></h1>
                    <p class="subtitle">Locação de equipamentos e música ao vivo!</p>
                </div>
                <img class="baner" src="imagens/baner-sapo-instrumentos.png" width="500" height="500" alt="Logo">
            </div>
        </section>

    <!-- Anúncios -->
    <section class="bg-light p-5">
        <div class="container">
            <h2>Anúncios Recentes</h2>
            <a href="anuncios.php" class="btn btn-primary">Ver Todos</a>
        </div>
    </section>
    <!-- Sobre -->
    <section class="bg-light p-5">
        <div class="container">
            <h2>Sobre</h2>
        </div>
    </section>

</body>

</html>