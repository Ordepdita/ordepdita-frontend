<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Carteiras Técnicos de Saúde')</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    {{-- IMPORTAÇÃO DOS ÍCONES DO GOOGLE  --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @yield('styles')
</head>
<body>

    {{-- MENU COM SUBMENUS --}}
   <nav class="navbar">
    <ul class="menu">

        <li>
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.jpg') }}" class="logo" alt="logo">
            </a>
        </li>

        <li><a href="{{ url('/') }}"><span class="material-icons">home</span> Início</a></li>
        
        <li class="has-submenu"><span class="material-icons">business</span> Institucional
            <ul class="submenu">
                <li><a href="#">Histórico</a></li>
                <li><a href="#">Missão e Visão</a></li>
                <li><a href="#">Estatuto</a></li>
            </ul>
        </li>
        <li class="has-submenu"><span class="material-icons">groups</span> Órgãos Sociais
            <ul class="submenu">
                <li><a href="#">Direção</a></li>
                <li><a href="#">Assembleia</a></li>
                <li><a href="#">Conselhos</a></li>
            </ul>
        </li>
        <li class="has-submenu"><span class="material-icons">person</span> A Profissão
            <ul class="submenu">
                <li><a href="#">Perfil Profissional</a></li>
                <li><a href="#">Áreas de Atuação</a></li>
            </ul>
        </li>
        <li class="has-submenu"><span class="material-icons">gavel</span> Regulamentos
            <ul class="submenu">
                <li><a href="#">Código Deontológico</a></li>
                <li><a href="#">Normas</a></li>
            </ul>
        </li>
        <li class="has-submenu"> <span class="material-icons">medical_services</span> INFORMAÇÃO ORDEPDITA
            <ul class="submenu">
                <li><a href="#">Boletins</a></li>
                <li><a href="#">Estudos</a></li>
            </ul>
        </li>
    </ul>
    <a id="area_restrita" href="/login">Área Restrita</a>
</nav>


    {{-- CONTEÚDO PRINCIPAL--}} 
    <div class="main-content">
        @yield('content')
    </div>

   {{-- FOOTER --}}
      <footer>
        <div id="footer">    
            <div class="info">
                <h3>Ordepdtita</h3>
                <p class="barra"></p>
                <div class="logo-foot">
                    <img src="/images/logotipo.png" alt="Logotipo da ordepdita">
                </div>
                <div class="download-apps">
                    <h3>Download Ordepdita App</h3>
                    <a href="#" class="apps-dowload">
                        <img src="/images/icone-app-store.svg" alt="icone da app store">
                    </a>
                    <a href="#" class="apps-dowload">
                        <img src="/images/icone-play-store-c.png" alt="icone da play store">
                    </a>
                </div>
            </div>
            <div class="info">
                <h3>Contactos</h3>
                <p class="barra"></p>
                <p>Em caso de dúvidas ou sugestões, <br>contacte-nos.</p>
                <p>Endereço e Telefones</p>
            </div>
            <div class="info">
                <h3>Comunicação</h3>
                <p class="barra"></p>
                <p>Comunicados, discursos e eventos</p>
                <ul>
                    <li>Agenda OPD</li>
                    <li>Texto</li>
                    <li>Eventos</li>
                    <li>Galeria de imagens</li>
                </ul>
            </div>
            <div class="info">
                <h3>Redes Sociais</h3>
                <p class="barra"></p>
                <p>
                    Para facilitar o contacto e disseminação das informações, a ordem dos [nome associação] de Angola
                </p>
                <p>
                    Siga nossas redes sociais e mantenha-se informado(a)
                </p>
            </div>
        </div>
        <div class="foot">
            <p>&copy;Ordepdita - 2025 Todos os direitos reservados</p>
        </div>
    </footer>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const items = document.querySelectorAll('.has-submenu');

        items.forEach(item => {
            item.addEventListener('click', function (e) {
                // Evita abrir todos ao mesmo tempo
                items.forEach(i => {
                    if (i !== item) i.classList.remove('active');
                });

                // Toggle da classe
                item.classList.toggle('active');
                e.stopPropagation();
            });
        });

        // Fecha submenu clicando fora
        document.body.addEventListener('click', function () {
            items.forEach(i => i.classList.remove('active'));
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        let index = 0;
        let interval = setInterval(nextSlide, 5000); // 5 segundos

        function showSlide(i) {
            slides.forEach((slide, idx) => {
                slide.classList.toggle('active', idx === i);
                dots[idx].classList.toggle('active', idx === i);
            });
            index = i;
        }

        function nextSlide() {
            index = (index + 1) % slides.length;
            showSlide(index);
        }

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                clearInterval(interval);
                showSlide(parseInt(dot.dataset.index));
                interval = setInterval(nextSlide, 5000); // reinicia intervalo
            });
        });
    });
</script>


</body>
</html>
