<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <!-- PAGE INFO -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sparta Barbershop</title>

    <!-- Icons -->
    <link rel="stylesheet" href="icons/style.css" />
    <link rel="shortcut icon" href="images/img.ico" type="image/x-icon">

    <!-- Style -->
    <link rel="stylesheet" href="style.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"rel="stylesheet"/>
  </head>

  <body>
    
    <header id="header">
      <nav class="container">
        <a class="logo" href="#"><i class="icon-spartans"></i> Sparta<span> Barbershop</span></a>
        <!-- menu -->
        <div class="menu">
          <ul class="grid">
            <li><a class="title" href="#home">Início</a></li>
            <li><a class="title" href="./login.php">login</a></li>
            <li><a class="title" href="#about">Sobre nós</a></li>
            <li><a class="title" href="#services">Serviços</a></li>
            <li><a class="title" href="#contact">Contato</a></li>
          </ul>
        </div>
    
        <div class="toggle icon-menu"></div>
        <div class="toggle icon-close"></div>
      </nav>
    </header>
    
    <main>
            <!-- HOME -->
            <section class="section" id="home">
              <div class="container grid">
                <div class="image">
                  <img src="https://images.unsplash.com/photo-1592647420148-bfcc177e2117?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1139&q=80"
                    alt="cadeira de barbear"/>
                </div>
                <div class="text">
                  <h2 class="title">Cabelo e barba no estilo mais moderno</h2>
                  <p>
                    Barbershop em João Pessoa - PB, especializado em corte de cabelo masculino.
                  </p>
                  <a class="button" href="./login.php">Agendar um horário</a>
                </div>
              </div>
            </section>

            
      <div class="divider-1"></div>

      
      <!-- ABOUT -->
      <section class="section" id="about">
        <div class="container grid">
          <div class="image">
            <img
              src="https://images.unsplash.com/photo-1634480256802-7cb50e5a196a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
              alt="utensilios de Barbershop"/>
          </div>
          <div class="text">
            <h2 class="title">Sobre nós</h2>
            <p>
            Bem-vindo à nossa barbearia moderna, onde a ciência e a música se encontram! 
            Se você é um amante do rock e da física quântica, você está no lugar certo.
            <br>
            Nós oferecemos um ambiente único, com decoração inspirada no rock n' roll e 
            na física quântica, com posters de bandas lendárias e diagramas de equações científicas nas paredes. 
            Nossa equipe de barbeiros é altamente qualificada e apaixonada por ciência, o que se reflete em nossos serviços.
            </p>
            <br/>
            <p>
            Além de oferecer cortes de cabelo e barbas de alta qualidade, nós também promovemos eventos e 
            palestras sobre física quântica, onde você pode aprender mais sobre o mundo fascinante da ciência 
            enquanto cuida de sua aparência.
            </p>
            <br/>
            <p>
            Não importa se você é um cientista ou apenas um fã da física quântica, aqui você pode relaxar e aproveitar uma experiência 
            única que une ciência e música. Venha nos visitar e descubra uma nova dimensão da barbearia moderna!
            </p>
          </div>
        </div>
      </section>

      
      <div class="divider-2"></div>

       <!-- SERVICES -->
       <section class="section" id="services">
        <div class="container grid">
          <header>
            <h2 class="title">Serviços</h2>
            <p class="subtitle">
              Com mais de 10 anos no mercado, a <strong>Sparta Barbershop</strong> já conquistou clientes de várias regiões.
            </p>
          </header>
          <div class="cards grid">
            <div class="card">
              <i class="icon-icons8-barbeiros-clippers-50"></i>
              <h3 class="title">Cabelo</h3>
              <p>
              Um bom corte de cabelo pode realçar a aparência, melhorar a autoestima e refletir a personalidade de quem o usa.
              </p>
            </div>
            <div class="card">
              <i class="icon-icons8-bigode-50"></i>
              <h3 class="title">Barba</h3>
              <p>
              Uma barba bem feita pode conferir um visual elegante e confiante, além de realçar a aparência e personalidade do indivíduo.
              </p>
            </div>
            <div class="card">
              <i class="icon-icons8-cadeira-de-barbeiro-50"></i>
              <h3 class="title">Cabelo e Barba</h3>
              <p>
              Ao combinar um corte de cabelo bem feito com uma barba cuidadosamente aparada e modelada, é possível criar um visual único e elegante que reflete a personalidade e o estilo pessoal de cada indivíduo.
              </p>
            </div>
          </div>
        </div>
      </section>

      <div class="divider-1"></div>

      <!-- CONTACT -->
      <section class="section" id="contact">
        <div class="container grid">
          <div class="text">
            <h2 class="title">Entre em contato com a gente!</h2>
            <p>
              Entre em contato com a Sparta Barbershop, queremos tirar suas dúvidas,ouvir suas críticas e sugestões.
            </p>
            <a
              href="https://api.whatsapp.com/send?phone=+5583999898887&text=Oi!"
              class="button"
              target="_blank"
              ><i class="icon-whatsapp"></i> Entrar em contato</a
            >
          </div>

          <div class="links">
            <ul class="grid">
              <li><i class="icon-phone"></i> 11 9999-0000</li>
              <li><i class="icon-map-pin"></i> R. dos Bobos, Nº 0</li>
              <li><i class="icon-mail"></i> andersonfdc47@gmail.com</li>
            </ul>
          </div>
        </div>
      </section>

      <div class="divider-1"></div>

    </main>

    <footer class="section">
      <div class="container grid">
        <div class="brand">
          <a class="logo logo-alt" href="#home"> <i class="icon-spartans"></i> Sparta<span>Barbershop</span>.</a>
          <p>&copy;2021 Anderson Costa.</p>
          <p>Todos os direitos reservados.</p>
        </div>

        <div class="social grid">
          <a href="https://instagram.com" target="_blank">
            <i class="icon-instagram"></i>
          </a>
          <a href="https://facebook.com" target="_blank">
            <i class="icon-facebook"></i
          ></a>
          <a href="https://youtube.com" target="_blank"
            ><i class="icon-youtube"></i
          ></a>
        </div>
      </div>
    </footer>

    <a href="#home" class="back-to-top"><i class="icon-arrow-up"></i></a>


    <!-- scrollreveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <!-- main.js -->
    <script src="main.js"></script>

    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  </body>
</html>
