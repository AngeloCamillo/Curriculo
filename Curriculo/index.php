<?php

$nome = "Angelo Malavasi Camillo";


$nascimento = new DateTime("2005-03-02");

$hoje = new DateTime();
$idade = $hoje->diff($nascimento)->y;
$dataAcesso = date("d/m/Y H:i:s");

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Curriculo Angelo</title>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

<header>
    <div class="perfil">
        <img src="img/foto.jpg" alt="Foto">

        <h1><?php echo $nome; ?></h1>

        <p>Estudante de Ciência da Computação | Desenvolvedor Web em Formação</p>

    <div class="theme-switch">
        <input type="checkbox" id="theme-btn">

        <label for="theme-btn" class="slider">

            <span class="icon sun">
                <i class="fas fa-sun"></i>
            </span>

            <span class="icon moon">
                <i class="fas fa-moon"></i>
            </span>

        </label>
    </div>

    </div>
</header>

<nav>
    <a href="#sobre">Sobre</a>
    <a href="#formacao">Formação</a>
    <a href="#experiencia">Experiência</a>
    <a href="#habilidades">Habilidades</a>
    <a href="#projetos">Projetos</a>
    <a href="#contato">Contato</a>
</nav>

<main>

<section id="sobre">
    <h2>Sobre Mim</h2>

    <p>
        Meu nome é <strong><?php echo $nome; ?></strong> e tenho
        <strong><?php echo $idade; ?> anos</strong>.
    </p>

    <p>
        Cursado em inglês durante 5 anos, possuo bom sotaque e busco melhorar.
        Buscando mais experiência durante o trabalho e aprender sempre,
        com melhorias constantes.
    </p>
</section>

<section id="formacao">
    <h2>Formação Acadêmica</h2>

    <div class="card">
        <h3>Ensino Médio</h3>

        <p>
            Instituição:
            <a href="https://maps.app.goo.gl/4TDpoBUE3zoPoqYe6"
               target="_blank">
               Florentino Avidos
            </a>
        </p>

        <p>2020 - 2022</p>
    </div>

    <div class="card">
        <h3>Ciencias da Computação</h3>

        <p>
            Instituição:
            <a href="https://estacio.br/?srsltid=AfmBOoo1n6U17Rpqz3ZkGdn31PYvIjN3BKEOyNbyrmbLq8RzqxS9dOEV"
               target="_blank">
                Estacio
            </a>
        </p>

        <p>2026 - 2030</p>
    </div>
</section>

<section id="experiencia">
    <h2>Experiência Profissional</h2>

    <div class="card">
        <h3>Casa Nova Material de Construção</h3>

        <p>Cargo: Vendedor e Caixa</p>

        <p>
            Realizei o trabalho de vendedor de dentro da loja juntamente a registrar
            tanto vendas como entregas, danfes e alguns produtos no sistema.
        </p>

        <p>2025 - Atual</p>
    </div>
</section>

<section id="habilidades">
    <h2>Habilidades</h2>

    <div class="skill">
        <span>HTML</span>
        <div class="barra">
            <div style="width:70%"></div>
        </div>
    </div>

    <div class="skill">
        <span>CSS</span>
        <div class="barra">
            <div style="width:50%"></div>
        </div>
    </div>

    <div class="skill">
        <span>JavaScript</span>
        <div class="barra">
            <div style="width:30%"></div>
        </div>
    </div>

    <div class="skill">
        <span>PHP</span>
        <div class="barra">
            <div style="width:30%"></div>
        </div>
    </div>

   <div class="skill">
        <span>Compreenção Ingles</span>
        <div class="barra">
            <div style="width:90%"></div>
        </div>
    </div>

   <div class="skill">
        <span>Pronuncia Ingles</span>
        <div class="barra">
            <div style="width:80%"></div>
        </div>
    </div>
</section>

<section id="projetos">
    <h2>Projetos</h2>
</section>

<section>
    <h2>Certificações</h2>

    <ul>
        <li>Curso Tecnico Mecanica</li>
    </ul>
</section>

<section id="contato">
    <h2>Contato</h2>

    <div class="redes">

        <a href="https://www.linkedin.com/in/angelo-malavasi-65ba08371?utm_source=share_via&utm_content=profile&utm_medium=member_android"
           target="_blank">
           <i class="fab fa-linkedin"></i>
           LinkedIn
        </a>

        <a href="https://www.instagram.com/angelomcamillo?igsh=M2locDU4b2IxYTUz"
           target="_blank">
           <i class="fab fa-instagram"></i>
           Instagram
        </a>

        <a href="https://wa.me/qr/CJ7PFTYJBQ5EC1"
           target="_blank">
           <i class="fab fa-whatsapp"></i>
           WhatsApp
        </a>

        <a href="https://github.com/AngeloCamillo"
           target="_blank">
           <i class="fab fa-github"></i>
           GitHub
        </a>

    </div>
</section>

<section>
    <h2>Informações do Sistema</h2>

    <div class="card">
        <p>
            Página acessada em:
            <strong><?php echo $dataAcesso; ?></strong>
        </p>

        
    </div>
</section>

</main>

<footer>
    <p>© <?php echo date("Y"); ?> - <?php echo $nome; ?></p>
</footer>

<script src="script.js"></script>

</body>
</html>