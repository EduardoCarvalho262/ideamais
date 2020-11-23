<!DOCTYPE html>
<html lang="pt-bt">

<!-- HEAD -->

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="idea mais, tecnologia, infraestrutura">
    <meta name="description" content="Empresa de Tecnologia voltada para a criação de projeto de infraestrutura">
    <meta name="author" content="Christopher Brendo">
    <meta name="robots" content="index, follow">
    <!-- Links -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!-- icone -->
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <!-- Title -->
    <title>Idea Mais</title>
</head>

<!-- BODY -->

<body>    
    <!-- Menu -->
    <nav class="menu">
        <!-- logo -->
        <figure class="logo">
            <img src="img/logo.png" alt="Logo da Idea Mais">
        </figure>
        <!-- links -->
        <article class="links">
            <a href="#home">Home</a>
            <a href="#sobre">Quem Somos</a>
            <a href="#servicos">Serviços</a>
            <a href="#contato">Contato</a>
        </article>
        <!-- btn mobile -->
        <a class="btn-mobile"><i class="material-icons">menu</i></a>
    </nav>

    <!-- Container Menu -->
    <div class="container-menu">
        <!-- Menu Mobile -->
        <nav class="menu-mobile">
            <a href="#home">Home</a>
            <a href="#sobre">Quem Somos</a>
            <a href="#servicos">Serviços</a>
            <a href="#contato">Contato</a>
        </nav>
    </div>

    <!-- Home -->
    <section class="home" id="home">
        <!-- illustration -->
        <figure class="illustration">
            <img src="img/img_home.svg" alt="Nossos serviços">
        </figure>
        <!-- info -->
        <main class="info">
            <h3>Dúvidas sobre a infraestrutura da sua empresa?</h3>

            <h1>Tenha auxilio <strong>profissional</strong> para a criação da <strong>infraestrutura</strong> da sua
                empresa</h1>

            <!-- buttons -->
            <div class="buttons">
                <a href="#cases">Nossos Cases</a>
                <a href="#orcamento">Orçamentos</a>
            </div>
        </main>
    </section>

    <!-- Sobre -->
    <section class="sobre" id="sobre">
        <!-- logo -->
        <figure class="logo">
            <img src="img/idea_mais.gif" alt="Idea Mais animation">
        </figure>
        <!-- info -->
        <article class="info">
            <p>O nome <strong>Idea Mais</strong> surgiu para representar a capacidade da nossa equipe de transformar
                ideias em cases de sucessos, com inovação e profissionalismo.</p>
        </article>
        <!-- topicos -->
        <section class="topicos">
            <!-- topico -->
            <article class="topico">
                <!-- icone -->
                <figure class="icone">
                    <img src="img/mission.svg" alt="Missão da Idea Mais">
                </figure>
                <!-- descricao -->
                <article class="descricao">
                    <h3>Missão</h3>
                    <p>Inovar as áreas de infraestrutura de TI, visando o aumento da produtivade e qualiade de serviço.
                    </p>
                </article>
            </article>
            <!-- topico -->
            <article class="topico">
                <!-- icone -->
                <figure class="icone">
                    <img src="img/eye.svg" alt="Visão da Idea Mais">
                </figure>
                <!-- descricao -->
                <article class="descricao">
                    <h3>Visão</h3>
                    <p>Ampliar nosso segmento, visando a inovação, projetando e implantando infraestruturas para empresa
                        de diversos setores.
                    </p>
                </article>
            </article>
            <!-- topico -->
            <article class="topico">
                <!-- icone -->
                <figure class="icone">
                    <img src="img/team.svg" alt="Valores da Idea Mais">
                </figure>
                <!-- descricao -->
                <article class="descricao">
                    <h3>Valores</h3>
                    <p>Confiança, qualidade, respeito, profissionalismo e inovação.
                    </p>
                </article>
            </article>
        </section>
    </section>

    <!-- Servicos -->
    <section class="servicos" id="servicos">
        <h1 class="titulo">Serviços</h1>
        <!-- illustration -->
        <figure class="illustration">
            <img src="img/img_servico_1.svg" alt="Serviço de Hardwares e Sistemas">
        </figure>
        <!-- descricao -->
        <article class="descricao">
            <h4 class="subtitulo">Hardwares e Sistemas</h4>
            <p class="comentario">Definimos os hardwares e SO que mais se adeque ao tipo de serviço prestado, para que
                todo e qualquer tipo
                de sistema utilizado possa ter compatibilidade e ser exercido.</p>

            <!-- container-btn -->
            <div class="container-btn">
                <button class="btn-servicos"><i class="material-icons">keyboard_arrow_right</i></button>
            </div>
        </article>
    </section>

    <!-- Cases -->
    <section class="cases" id="cases">
        <h1 class="titulo">Nossos Cases</h1>
        <!-- illustration -->
        <figure class="illustration">
            <img src="img/img_cases.svg" alt="Nossos cases">
        </figure>
        <!-- avaliação -->
        <article class="avaliacao">
            <!-- descrição -->
            <header class="descricao">
                <!-- foto -->
                <div class="foto">
                    <img src="img/foto_1.png" alt="Evelyn Ford">
                </div>
                <!-- info -->
                <article class="info">
                    <h3 class="nome">Evelyn Ford</h3>
                    <h4 class="cargo">Gerente da Bayer</h4>
                </article>
            </header>
            <!-- comentario -->
            <article class="comentario">
                <p>A demasiada preocupação para a satisfação de seus clientes são claramente uma marca da empresa e me
                    sinto completamente satisfeita com o resultado do projeto</p>
            </article>
            <!-- container-btn -->
            <div class="container-btn">
                <button class="btn-cases"><i class="material-icons">keyboard_arrow_right</i></button>
            </div>
        </article>
    </section>

    <!-- Orçamento -->
    <section class="orcamento" id="orcamento">
        <!-- illustration -->
        <figure class="illustration">
            <img src="img/img_orcamento.svg" alt="Faça seu orçamento com a Idea Mais">
        </figure>
        <!-- info -->
        <article class="info">
            <h1 class="titulo">Crie seu orçamento</h1>
            <p>Nossa equipe irá garantir o sucesso do seu projeto e empresa.</p>
            <!-- input -->
            <form class="input">
                <input type="text" name="name" id="nam" placeholder="Name">
                <input type="text" name="telefone" id="te" placeholder="Telefone">
                <input type="email" name="email" id="email" placeholder="Email">
                <!-- container-btn -->
                <div class="container-btn">
                    <a id="bn" onclick="ok()" class="btn-orcamento"><i type="submit" class="material-icons">send</i></a>
                </div>
    </form>
        </article>
    </section>

    <!-- Contato -->
    <section class="contato" id="contato">
        <!-- illustration -->
        <figure class="illustration">
            <img src="img/img_contato.svg" alt="Entre em contato com a Idea Mais">
        </figure>
        <!-- container -->
        <article class="container">
            <h1 class="titulo">Tire suas dúvidas</h1>
            <div class="input-group">
                <input type="nome" name="nome" id="nam1" placeholder="Nome"><br>
            </div>
            <div class="input-group">
                <input type="text" name="telefone" id="te1" placeholder="Telefone"><br>
                <label class="alerta" for="telefone">Opcional</label>
            </div>
            <div class="input-group">
                <input type="email" name="email" id="email1" placeholder="Email"><br>
            </div>
            <div class="input-group">
                <textarea name="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
                <label class="alerta" for="telefone">255</label>
            </div>
            <!-- container-btn -->
            <div class="container-btn">
                <a class="btn-contato" type="submit" onclick="ok1()">Enviar</a>
            </div>
        </article>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <!-- midias -->
        <article class="midias">
            <a href="#"><i class="material-icons">mail</i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="material-icons">phone</i></a>
            <a href="#"><i class="material-icons">map</i></a>
        </article>
        <!-- copyright -->
        <article class="copyright">
            <p>Idea Mais &copy - 2020</p>
            <p>Todos os direitos reservados.</p>
        </article>
    </footer>

    <!-- Scripts -->
    <script>
    var nome;
    var telefone;
    var email;
    var nome1;
    var telefone1;
    var email1;
    var mensagem;
    var resp = [];

    function ok() {
    nome = document.getElementById("nam").value; // capturando valor das inputs
    telefone = document.getElementById("te").value;
    email = document.getElementById("email").value;
    nome1 = 0;
    telefone1 = 0;
    email1 = 0;
    mensagem = 0;
        if(nome != "" && telefone != "" && email != "") {
            var xmlhttp = new XMLHttpRequest(); // fazendo um requimento ao php
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200){
            var response = this.responseText; // resposta do php
            resp = this.responseText; // resposta armazenada em um array
            if(resp == "Inserido") {
                nome = document.getElementById("nam").value = ""; // capturando valor das inputs
                telefone = document.getElementById("te").value = "";
                email = document.getElementById("email").value = "";
                Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Informações salvas com sucesso',
                showConfirmButton: false,
                timer: 1500
                })
            }
            
            };
            }
            xmlhttp.open("GET","banco.php?&nome="+nome+"&telefone="+telefone+"&email="+email+"&nome1="+nome1+"&telefone1="+telefone1+"&email1="+email1+"&mensagem="+mensagem+"&op=0", true); // passa na url todos os dados que quero mandar para o php capturar
            xmlhttp.send();
        }else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Falta um campo a ser preenchido',
                allowOutsideClick: false
            })
        }
   
    }  

    function ok1() {
    nome1 = document.getElementById("nam1").value;
    telefone1 = document.getElementById("te1").value;
    email1 = document.getElementById("email1").value;
    mensagem = document.getElementById("mensagem").value;
    nome = 0;
    telefone = 0; // zerando variáveis que não irei utilizar para que não fique como indefinido 
    email = 0;

    if(nome1 != "" && telefone1 != "" && email1 != "" && mensagem != "") {
        var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          var response = this.responseText;
          resp = this.responseText;
          if(resp == "Inserido"){
            nome1 = document.getElementById("nam1").value = "";
            telefone1 = document.getElementById("te1").value = "";
            email1 = document.getElementById("email1").value = "";
            mensagem = document.getElementById("mensagem").value = "";
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Informações salvas com sucesso',
                showConfirmButton: false,
                timer: 1500
                })
          }
            
      };
    }
      xmlhttp.open("GET","banco.php?&nome1="+nome1+"&telefone1="+telefone1+"&email1="+email1+"&mensagem="+mensagem+"&nome="+nome+"&telefone="+telefone+"&email="+email+"&op=1", true);
      xmlhttp.send();
    }else {
        Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Falta um campo a ser preenchido',
                allowOutsideClick: false
            })
    }    
  }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/script.js"></script>
</body>

</html>