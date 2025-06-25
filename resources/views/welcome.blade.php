<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FindenHub</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Inter', Arial, sans-serif; }
        .font-title { font-weight: 700; }
        .font-subtitle { font-weight: 600; }
        .font-light { font-weight: 400; }
        .shadow-card { box-shadow: 0 2px 12px 0 rgba(0,0,0,0.07); }
        .footer-link { color: #5A5F66; font-size: 0.95rem; margin: 0 1rem; }
    </style>
</head>

<body class="bg-[#F5F8FA] text-[#1E2A38]">
    <header class="bg-[#F5F8FA] py-4 px-6 md:px-12 flex items-center justify-between shadow-sm">
        <div class="flex items-center gap-2">
            <img src="{{ asset('images/LOGO TRANSPARENTE.png') }}" alt="Logo FINDENHUB" class="h-20">
            <span class="text-xl font-bold text-[#1E2A38]"></span>
        </div>
        <nav class="hidden md:flex gap-6 text-center text-[#1E2A38] font-medium">
            <a href="#">Início</a>
            <a href="#">Benefícios</a>
            <a href="#">Como funciona</a>
            <a href="#">Segmentos</a>
            <a href="#">Depoimentos</a>
            <a href="#">Blog</a>
        </nav>
        <a href="{{ route('login') }}" class="ml-4 px-5 py-2 rounded-full text-white bg-[#00D1C1] hover:bg-[#02b4a8] text-sm font-semibold shadow-md">
            Acesse
        </a>
    </header>

    <main>
        <!-- HERO -->
        <section class="bg-[#F5F8FA] py-16 px-6 md:px-12 flex flex-col lg:flex-row items-center gap-0 lg:gap-0 relative min-h-[600px]">
            <!-- Grid de imagens customizado -->
            <div class="relative w-full lg:w-1/2 flex justify-center items-center min-h-[500px]">
                <!-- Imagem pequena topo esquerda -->
                <img src="{{ asset('images/image_fx (22).jpg') }}" alt="Evento 1" class="absolute top-0 left-8 w-40 h-28 object-cover rounded-[32px] shadow-card z-10">
                <!-- Imagem grande centro esquerda -->
                <img src="{{ asset('images/image_fx (24).jpg') }}" alt="Evento 2" class="absolute top-24 left-0 w-72 h-48 object-cover rounded-[40px] shadow-card z-20">
                <!-- Imagem média topo direita -->
                <img src="{{ asset('images/casamento1.jpg') }}" alt="Evento 3" class="absolute top-8 left-64 w-48 h-40 object-cover rounded-[36px] shadow-card z-30">
                <!-- Imagem grande centro baixo -->
                <img src="{{ asset('images/image_fx (5).jpg') }}" alt="Evento 4" class="absolute top-56 left-40 w-80 h-44 object-cover rounded-[40px] shadow-card z-20">
                <!-- Imagem pequena canto inferior esquerdo -->
                <img src="{{ asset('images/Flux_Dev_A_sophisticated_business_conference_with_professional_1.jpg') }}" alt="Evento 5" class="absolute top-80 left-0 w-40 h-28 object-cover rounded-[32px] shadow-card z-10">
                <!-- Container para responsividade -->
                <div class="invisible lg:visible w-[420px] h-[400px]"></div>
            </div>
            <!-- Texto e botão -->
            <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-end justify-center mt-12 lg:mt-0">
                <div class="text-right">
                    <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-2 text-[#1E2A38] drop-shadow-[2px_4px_0px_rgba(44,74,122,0.18)]" style="text-shadow: 2px 4px 0px #2C4A7A33;">
                        <span class="block">Conecte</span>
                        <span class="block">Personalize</span>
                        <span class="block">Celebre</span>
                    </h1>
                </div>
                <p class="mt-6 text-lg md:text-xl text-[#1E2A38] font-medium text-center lg:text-right max-w-lg">
                    A plataforma inteligente que transforma a sua ideia de evento em uma experiência personalizada, prática e sob medida.
                </p>
                <a href="#" class="mt-8 inline-block bg-[#00D1C1] hover:bg-[#02b4a8] text-white font-semibold text-lg px-10 py-4 rounded-full shadow-md transition text-center">
                    Comece agora seu evento ideal
                </a>
            </div>
        </section>

        <!-- SOBRE -->
        <section class="bg-white py-16 px-6 md:px-12 text-[#1E2A38]">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-2xl md:text-3xl font-extrabold mb-2">Eventos personalizados com</h2>
                <h2 class="text-2xl md:text-3xl font-extrabold text-[#2C4A7A] mb-6">inteligência real</h2>
                <p class="text-[#1E2A38] max-w-2xl mx-auto text-base md:text-lg mb-4 leading-relaxed">
                    Você sonha. Nós planejamos, otimizamos e entregamos.
                </p>
                <div class="flex flex-col md:flex-row gap-8 md:gap-12 justify-center mb-8">
                    <p class="text-[#5A5F66] text-sm md:text-base leading-relaxed md:w-1/2">
                        No FINDENHUB, entendemos que cada evento é único — e é por isso que usamos tecnologia para criar experiências sob medida. De forma simples e objetiva, você define o tipo de evento, data, público e localização, e nossa plataforma cuida do resto.<br><br>
                        Queremos que cada evento seja um sucesso com impacto visual e celebração do seu jeito. Nossa missão é facilitar, otimizar e surpreender em cada detalhe.
                    </p>
                    <ul class="list-disc list-inside space-y-2 text-[#5A5F66] text-sm md:text-base md:w-1/2">
                        <li>Planejamento inteligente com base nas suas preferências</li>
                        <li>Curadoria de fornecedores com inteligência real</li>
                        <li>Economia de tempo e dinheiro</li>
                        <li>Facilidade e praticidade na organização</li>
                        <li>Resultados sob medida para seu público</li>
                        <li>Suporte humano e tecnologia integrada</li>
                    </ul>
                </div>
                <a href="#" class="inline-block bg-[#00D1C1] hover:bg-[#02b4a8] text-white font-semibold text-base px-8 py-3 rounded-full shadow-md transition">
                    Crie sua experiência ideal
                </a>
            </div>
        </section>

        <!-- COMO FUNCIONA -->
        <section class="bg-[#F5F8FA] py-16 px-6 md:px-12 text-center text-[#1E2A38]">
            <h2 class="text-2xl md:text-3xl font-extrabold mb-12">Como a FINDENHUB funciona?</h2>
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto text-left">
                <div class="bg-white p-6 rounded-xl shadow-card flex flex-col items-center">
                    <h3 class="font-bold text-lg mb-2 text-center">Você responde ao nosso assistente inteligente</h3>
                    <p class="text-[#5A5F66] text-sm leading-relaxed text-center">
                        Diga o que você quer: tipo de evento, número de convidados, localização, preferências...
                    </p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-card flex flex-col items-center">
                    <h3 class="font-bold text-lg mb-2 text-center">Nós cuidamos do planejamento personalizado</h3>
                    <p class="text-[#5A5F66] text-sm leading-relaxed text-center">
                        Nossa tecnologia calcula, seleciona e organiza as melhores opções para o seu perfil.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-card flex flex-col items-center">
                    <h3 class="font-bold text-lg mb-2 text-center">Você aprova e celebra!</h3>
                    <p class="text-[#5A5F66] text-sm leading-relaxed text-center">
                        Simples, Eficiente e totalmente sob seu controle.
                    </p>
                </div>
            </div>
        </section>

        <!-- DEPOIMENTOS -->
        <section class="bg-white py-16 px-6 md:px-12 text-[#1E2A38]">
            <div class="max-w-5xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-extrabold text-center mb-12">
                    Clientes felizes. Eventos inesquecíveis
                </h2>
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div class="flex flex-col items-center text-center md:items-start md:text-left">
                        <img src="{{ asset('images/mulher_brindando.jpg') }}" alt="Cliente 1" class="rounded-xl w-72 h-auto mb-4 shadow-card">
                        <p class="text-[#1E2A38] text-base italic mb-2">
                            "Fiquei impressionado com o quanto economizei. O sistema sugeriu opções que eu nunca teria pensado."
                        </p>
                        <span class="text-sm font-semibold text-[#2C4A7A]">Gabriela R., Evento de lançamento</span>
                    </div>
                    <div class="flex flex-col items-center text-center md:items-start md:text-left">
                        <img src="{{ asset('images/Image_fx (8).jpg') }}" alt="Cliente 2" class="rounded-xl w-72 h-auto mb-4 shadow-card">
                        <p class="text-[#1E2A38] text-base italic mb-2">
                            "Organizar um evento corporativo no interior com esse nível de sofisticação? Só com a FINDENHUB."
                        </p>
                        <span class="text-sm font-semibold text-[#2C4A7A]">Rafael M., Evento corporativo</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEGMENTOS -->
        <section class="bg-[#F5F8FA] py-16 px-6 md:px-12 text-[#1E2A38]">
            <div class="max-w-5xl mx-auto text-center">
                <h2 class="text-2xl md:text-3xl font-extrabold mb-6">
                    Para qualquer tipo de evento.<br>Personalização sem limites.
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-8 text-center text-sm">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/casamento2.jpg') }}" alt="Casamentos" class="w-32 h-24 object-cover rounded-xl mb-3 shadow-card">
                        <span class="font-medium">Casamentos</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/Image_fx (120.jpg') }}" alt="Festas particulares" class="w-32 h-24 object-cover rounded-xl mb-3 shadow-card">
                        <span class="font-medium">Festas particulares</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/Image_fx 1002.jpg') }}" alt="Formaturas" class="w-32 h-24 object-cover rounded-xl mb-3 shadow-card">
                        <span class="font-medium">Formaturas</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/Image_fx 101.jpg') }}" alt="Eventos híbridos e ao ar livre" class="w-32 h-24 object-cover rounded-xl mb-3 shadow-card">
                        <span class="font-medium">Eventos híbridos e ao ar livre</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/Flux_Dev_A_sophisticated_business_conference_with_professional_2.jpg') }}" alt="Corporativos e empresariais" class="w-32 h-24 object-cover rounded-xl mb-3 shadow-card">
                        <span class="font-medium">Corporativos e empresariais</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('images/Image_fx 100.jpg') }}" alt="Lançamentos e premiações" class="w-32 h-24 object-cover rounded-xl mb-3 shadow-card">
                        <span class="font-medium">Lançamentos e premiações</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA FINAL -->
        <section class="bg-[#E6EDF4] py-24 px-6 md:px-12">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-extrabold mb-12 drop-shadow-[2px_4px_0px_rgba(44,74,122,0.18)]" style="text-shadow: 2px 4px 0px #2C4A7A33;">Seu evento começa aqui</h2>
                <p class="text-[#5A5F66] text-xl md:text-2xl leading-relaxed mb-12 max-w-2xl mx-auto">
                    Esqueça orçamentos confusos, buscas intermináveis e decisões arriscadas. Com a FINDENHUB, você planeja com inteligência, personaliza com liberdade e celebra com confiança.
                </p>
                <a href="#" class="inline-block bg-[#00D1C1] hover:bg-[#02b4a8] text-white font-semibold text-xl px-10 py-4 rounded-full shadow-lg transition text-center" style="box-shadow: 2px 4px 0px #2C4A7A33;">
                    Comece agora o seu evento ideal!
                </a>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="bg-[#E6EDF4] py-10 px-6 md:px-12 text-center">
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 mb-4">
                <a href="#" class="footer-link font-medium text-[#1E2A38]">Sobre nós</a>
                <a href="#" class="footer-link font-medium text-[#1E2A38]">Termos e privacidade</a>
                <a href="#" class="footer-link font-medium text-[#1E2A38]">Contato e suporte</a>
                <a href="#" class="footer-link font-medium text-[#1E2A38]">Redes Sociais</a>
            </div>
            <div class="text-xs text-[#A0A4AA]">© FindenHub 2025 - Todos os direitos reservados.</div>
        </footer>
    </main>
</body>
</html>
