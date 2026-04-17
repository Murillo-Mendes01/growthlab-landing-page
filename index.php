 <?php

 if(isset($_POST['submit'])) {
    
    include_once('php/config.php');

    $nome = $_POST['nome']; 
    $email = $_POST['email']; 
    $telefone = $_POST['telefone']; 
    $mensagem = $_POST['mensagem'];

   $result = mysqli_query($conexao, "INSERT INTO usuario(nome, email, telefone, descricao) VALUES ('$nome', '$email', '$telefone', '$mensagem')");
 }

?> 

<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS -->
    <link rel="stylesheet" href="css/index.css">
    <!-- JavaScript -->
    <script src="js/index.js" defer></script>
    <!-- ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/scrollReveal.js" defer></script>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>GrowthLab</title>

    <style>
</style>
</head>
<body>
    
     <header>
        <div class="cabecalho">
            <div class="logo">
                <img class="logo" src="img/growthlab_logo_header_36px.png" alt="">
            </div> 
            <div class="whatsapp">
                <span><i class="fa-brands fa-whatsapp"></i></span> 
            </div>
        </div>
    </header> 
    <main>
        <!-- Hero -->
            <section class="hero">
                <div class="container-hero">
                    <div class="hero-text efeito-txt-hero">
                        <h1>Aumente suas vendas com estratégias digitais <span id="typing-word"></span><span class="cursor">|</span></h1>
                        <h2>A GrowthLab cria campanhas de alta performance para gerar leads qualificados e acelerar o crescimento do seu negócio.</h2>
                        <a href="#" class="btn">Quero crescer agora <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <!-- Formulario -->
                    <div class="hero-form efeito-form-hero">
                        <h3>Fale com um especialista</h3>
                        <p>Preencha e receba um diagnóstico gratuito</p>
                        <form action="index.php" method="POST">
                            <input name="nome" type="text" placeholder="Nome Completo" required>
                            <input name="email" type="email" placeholder="Email" required>
                            <input name="telefone" type="tel" placeholder="Telefone" required>
                            <textarea name="mensagem" placeholder="Como posso ajudar?" required></textarea>
                            <button type="submit" name="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </section>
            <!-- Sobre -->
            <section class="sobre">
                <div class="container-sobre">
                    <div class="img-sobre efeito-img-sobre">
                        <img src="img/Crescimento digital e análise de dados.png" alt="">
                    </div>
                    <div class="text-sobre efeito-text-sobre">
                        <h5><span>Sobre a GrowthLab</span></h5>
                        <h2>Somos especialistas em <span>crescimento digital</span></h2>
                        <p>A GrowthLab nasceu com a missão de transformar negócios por meio de estratégias digitais baseadas em dados. Combinamos tecnologia, criatividade e performance para gerar resultados reais.</p>
                        <p>Nossa equipe multidisciplinar atua desde o planejamento estratégico até a execução de campanhas, garantindo que cada investimento traga o máximo retorno.</p>
                    </div>
                </div>
            </section>
            <section class="servicos">
                <div class="container-servicos">
                    <h5><span>Nossos Serviços</span></h5>
                    <h2>Por que escolher a GrowthLab?</h2>
                    <h4>Oferecemos soluções completas para impulsionar seu negócio no digital</h4>
                    <div class="container-cards">
                        <div class="card efeito-card-1">
                            <div class="icone">
                                <i class="fa-solid fa-rocket"></i>
                            </div>
                            <h3>Campanhas de Performance</h3>
                                <p>Campanhas otimizadas para gerar leads qualificados e aumentar vendas.</p>
                        </div>
                        <div class="card efeito-card-2">
                            <div class="icone">
                                <i class="fa-solid fa-bullseye"></i>
                            </div>
                            <h3>Estratégia Personalizada</h3>
                            <p>Plano de marketing sob medida para as necessidades do seu negócio.</p>
                        </div>
                        <div class="card efeito-card-3">
                            <div class="icone">
                                <i class="fa-solid fa-arrow-trend-up"></i>
                            </div>
                            <h3>Crescimento Acelerado</h3>
                            <p>Metodologia comprovada para escalar seus resultados de forma consistente.</p>
                        </div>
                        <div class="card efeito-card-4">
                            <div class="icone">
                                <i class="fa-solid fa-user-group"></i>
                            </div>
                            <h3>Equipe Especializada</h3>
                            <p>Profissionais certificados em Google, Meta e principais plataformas.</p>
                        </div>
                        <div class="card efeito-card-5">
                            <div class="icone">
                                <i class="fa-solid fa-chart-column"></i>
                            </div>
                            <h3>Relatórios Detalhados</h3>
                            <p>Dashboards em tempo real para acompanhar cada métrica que importa.</p>
                        </div>
                        <div class="card efeito-card-6">
                            <div class="icone">
                                <i class="fa-solid fa-bolt"></i>
                            </div>
                            <h3>Automação Inteligente</h3>
                            <p>Fluxos automatizados que nutrem leads e otimizam seu funil de vendas.</p>
                        </div>
                    </div>
                    <a class="btn">Solicitar Orçamento Gratuito</a>
                </div>
            </section>
            <!-- FAQ -->
            <section class="faq">
                <div class="container-faq">
                    <h5><span>FAQ</span></h5>
                    <h2>Perguntas Frequentes</span></h2>
                    <div class="containder-accordion" id="accordion">
                        <div class="accordion efeito-accordion-1">
                            <button class="accordion-header">
                                <span>Quanto tempo leva para ver resultados? </span>
                                <i class="fa-solid fa-chevron-down arrow"></i>
                            </button>
                            <div class="accordion-body">
                                <p>
                                    Os primeiros resultados aparecem nas primeiras semanas, mas estratégias consolidadas de crescimento levam de 3 a 6 meses para atingir o máximo potencial. Trabalhamos com metas mensais para garantir evolução contínua.
                                </p>
                            </div>
                        </div>
                        <div class="accordion efeito-accordion-2">
                            <button class="accordion-header">
                                <span>Qual o investimento mínimo em mídia? </span>
                                <i class="fa-solid fa-chevron-down arrow"></i>
                            </button>
                            <div class="accordion-body">
                                <p>
                                    O investimento em mídia depende dos seus objetivos e mercado. Recomendamos um mínimo de R$ 1.500/mês para campanhas eficazes, mas personalizamos de acordo com cada caso.
                                </p>
                            </div>
                        </div>
                        <div class="accordion efeito-accordion-3">
                            <button class="accordion-header">
                                <span>Atendem qualquer tipo de empresa?</span>
                                <i class="fa-solid fa-chevron-down arrow"></i>
                            </button>
                            <div class="accordion-body">
                                <p>
                                   Sim! Temos experiência em e-commerce, serviços, SaaS, educação, saúde e diversos outros segmentos. Adaptamos nossa metodologia para as particularidades de cada mercado.
                                </p>
                            </div>
                        </div>
                        <div class="accordion efeito-accordion-4">
                            <button class="accordion-header">
                                <span>Como funciona o acompanhamento? </span>
                                <i class="fa-solid fa-chevron-down arrow"></i>
                            </button>
                            <div class="accordion-body">
                                <p>
                                    Você terá acesso a dashboards em tempo real e reuniões periódicas com seu gestor de conta. Enviamos relatórios detalhados com insights e recomendações de otimização.
                                </p>
                            </div>
                        </div>
                        <div class="accordion efeito-accordion-5">
                            <button class="accordion-header">
                                <span>Posso cancelar a qualquer momento? </span>
                                <i class="fa-solid fa-chevron-down arrow"></i>
                            </button>
                            <div class="accordion-body">
                                <p>
                                    Sim, não temos fidelidade contratual. Trabalhamos com transparência e confiança — nossos clientes ficam porque veem resultados, não por obrigação.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- Chamada -->
            <section class="chamada">
                <div class="container-chamada efeito-chamada" >
                    <h1>Pronto para acelerar o crescimento do seu negócio?</h1>
                    <h2>Solicite agora um diagnóstico gratuito e descubra como a GrowthLab pode transformar seus resultados digitais.</h2>
                    <a href="#" class="btn">Quero meu diagnóstico <i class="fas fa-arrow-right"></i></a>
                </div>

            </section>
    </main>
    <footer>
        <div class="container-footer">
            <div class="footer-info">
                <img src="img/Banner digital da GrowthLab com logo.png" alt="">
            </div>
            <div class="footer-direitos">
                <p>© 2026 GrowthLab. Todos os direitos reservados.</p>
                <p>CNPJ: 00.000.000/0001-00</p>
                <a href="/termos-de-uso" target="_blank"><p>Termos de Uso</p></a> 
                <a href="/politica-de-privacidade" target="_blank"><p>Política de Privacidade</p></a>
            </div>
        </div>
    </footer>
    
</body>
</html>