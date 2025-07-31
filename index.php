<?php
require 'enviar_email.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>João Paulo - Dev Fullstack</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen dark:bg-gray-900">
    <header>
        <nav class="bg-gray-800 shadow-lg dark:bg-gray-950">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center" id="casa">
                        <a href="index.html" class="text-white text-lg font-semibold"><img src="assets/icons/Logotipo_empresa_de_programação_sistemas_e_tecnologia-removebg-preview.png" alt="" class="h-16"></a>
                    </div>
                    
                    <!-- Menu Desktop -->
                    <div class="hidden md:flex space-x-8 items-center">
                        <a href="#" class="text-white hover:text-gray-300 px-3 py-2 transition duration-300 dark:hover:text-gray-400">Home</a>
                        <a href="#" class="text-gray-300 hover:text-white px-3 py-2 transition duration-300 dark:text-gray-400 dark:hover:text-gray-200">Sobre</a>
                        <a href="#newWork" class="text-gray-300 hover:text-white px-3 py-2 transition duration-300 dark:text-gray-400 dark:hover:text-gray-200">Projetos</a>
                        <div class="flex space-x-4 ml-4">
                            <a href="#" class="text-gray-300 hover:text-white transition duration-300 dark:hover:text-gray-400">
                                <i class="fab fa-linkedin-in text-lg"></i>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-white transition duration-300 dark:hover:text-gray-400">
                                <i class="fab fa-github text-lg"></i>
                            </a>
                        </div>
                        <!-- Botão Dark Mode -->
                        <button id="theme-toggle" type="button" class="text-gray-300 hover:text-white focus:outline-none dark:text-gray-400 dark:hover:text-gray-200 p-2 rounded-full hover:bg-gray-700 dark:hover:bg-gray-800">
                            <i id="theme-icon" class="fas fa-moon text-xl"></i>
                        </button>
                    </div>
                    <button id="backToTop" class="fixed bottom-8 right-8 z-50 p-3 bg-blue-600 text-white shadow-lg hover:bg-blue-700 transition-all duration-300 opacity-0 invisible dark:bg-blue-500 dark:hover:bg-blue-600 rounded-md">
                    <i class="fas fa-arrow-up text-xl"></i>
                    </button>
                    <!-- Botão Mobile -->
                    <div class="md:hidden flex items-center space-x-4">
                        <!-- Botão Dark Mode Mobile -->
                        <button id="theme-toggle-mobile" type="button" class="text-gray-300 hover:text-white focus:outline-none dark:text-gray-400 dark:hover:text-gray-200 p-2 rounded-full hover:bg-gray-700 dark:hover:bg-gray-800">
                            <i id="theme-icon-mobile" class="fas fa-moon text-xl"></i>
                        </button>
                        <button class="hamburger focus:outline-none" id="menu-btn">
                            <div class="hamburger-line dark:bg-gray-200"></div>
                            <div class="hamburger-line dark:bg-gray-200"></div>
                            <div class="hamburger-line dark:bg-gray-200"></div>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Menu Mobile -->
            <div class="mobile-menu md:hidden bg-gray-800 dark:bg-gray-950" id="mobile-menu">
                <ul class="px-2 pt-2 pb-4 space-y-1">
                    <li class="menu-item">
                        <a href="#" class="block px-3 py-3 text-white bg-gray-900 rounded-md text-base font-medium dark:bg-gray-800">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="block px-3 py-3 text-gray-300 hover:bg-gray-700 rounded-md text-base font-medium dark:text-gray-400 dark:hover:bg-gray-800">Sobre</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="block px-3 py-3 text-gray-300 hover:bg-gray-700 rounded-md text-base font-medium dark:text-gray-400 dark:hover:bg-gray-800">Projetos</a>
                    </li>
                    <li class="menu-item flex space-x-4 justify-center py-3">
                        <a href="#" class="text-gray-300 hover:text-white transition duration-300 dark:hover:text-gray-400">
                            <i class="fab fa-linkedin-in text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition duration-300 dark:hover:text-gray-400">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <!-- Conteúdo Principal -->
    <main class="flex-grow pt-12 pb-8 px-4 mx-auto w-full">
        <div class="flex flex-col items-center">
            <!-- Foto -->
            <div class="mb-6">
                <img src="assets/images/perfil.webp" alt="João Paulo" 
                     class="profile-pic rounded-full shadow-lg object-cover dark:border-gray-600">
            </div>
            
            <!-- Texto -->
            <div class="text-center w-full px-4">
                <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">Hello World!</h1>
                <p class="text-gray-600 mt-1 dark:text-gray-400">Meu nome é</p>
                <h2 class="text-3xl font-bold text-blue-600 mt-2 dark:text-blue-400">João Paulo</h2>
                <p class="text-lg text-gray-700 mt-1 dark:text-gray-300">Desenvolvedor Fullstack</p>
                
                <p class="text-gray-600 mt-4 mx-auto leading-relaxed max-w-md dark:text-gray-400">
                    Transformo necessidades em aplicações reais e funcionais. 
                    Desenvolvo sistemas através da minha paixão por tecnologia, 
                    criando soluções inovadoras para desafios complexos.
                </p>
                
                <!-- Tecnologias em linha única -->
                <div class="tech-tags-container mt-6 w-full">
                    <div class="tech-tags flex flex-wrap justify-center gap-2 px-2">
                        <span class="tech-tag dark:bg-gray-700 dark:text-gray-200">
                            <img src="./assets/icons/tech/github.svg" alt="GitHub" class="tech-icon">
                            GitHub
                        </span>
                        <span class="tech-tag dark:bg-gray-700 dark:text-gray-200">
                            <img src="./assets/icons/tech/html.svg" alt="HTML" class="tech-icon">
                            HTML
                        </span>
                        <span class="tech-tag dark:bg-gray-700 dark:text-gray-200">
                            <img src="./assets/icons/tech/css.svg" alt="CSS" class="tech-icon">
                            CSS
                        </span>
                        <span class="tech-tag dark:bg-gray-700 dark:text-gray-200">
                            <img src="./assets/icons/tech/javascript.svg" alt="JavaScript" class="tech-icon">
                            JavaScript
                        </span>
                        <span class="tech-tag dark:bg-gray-700 dark:text-gray-200">
                            <img src="./assets/icons/tech/reactjs.svg" alt="React" class="tech-icon">
                            React
                        </span>
                        <span class="tech-tag dark:bg-gray-700 dark:text-gray-200">
                            <img src="./assets/icons/tech/nodejs.svg" alt="Node.js" class="tech-icon">
                            Node.js
                        </span>
                        <span class="tech-tag dark:bg-gray-700 dark:text-gray-200">
                            <img src="./assets/icons/tech/php.svg" alt="Node.js" class="tech-icon">
                            PHP
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </main>
     <div class="w-full py-4 flex justify-center relative z-10" style="margin-top: 25px;">
        <button id="scrollToProjects" class="flex flex-col items-center group cursor-pointer animate-bounce">
            <span class="text-sm text-gray-600 dark:text-gray-300 mb-2">Role para baixo</span>
            <div class="w-6 h-6 border-r-2 border-b-2 border-blue-600 dark:border-blue-400 transform rotate-45 group-hover:border-blue-800 dark:group-hover:border-blue-300 transition-colors duration-300"></div>
        </button>
    </div>

    <!-- Seção de Projetos -->
<section class="py-16 px-4 mx-auto max-w-7xl relative">
    <!-- Cabeçalho com seta -->
    <div class="flex justify-between items-center mb-12">
        <div>
            <p class="text-blue-600 font-medium dark:text-blue-400" id="newWork">Novo trabalho</p>
            <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mt-2">Veja os projetos em destaque</h2>
        </div>
        
    </div>

    <!-- Grid de Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="project-cards">
        <!-- Card 1: Travalgram -->
        <div class="project-card group">
            <div class="project-image-container">
                <img src="assets/images/thumbnail/card01.png" 
                     alt="Client CLI" class="project-image">
            </div>
            <div class="project-content">
                <h3 class="project-title">Client CLI</h3>
                <p class="project-description">Gerencia clientes e produtos em débito com funções básicas: cadastrar, visualizar, editar e excluir registros.</p>
            </div>
        </div>

        <!-- Card 2: Tech News -->
        <div class="project-card group">
            <div class="project-image-container">
                <img src="assets/images/thumbnail/card02.webp" 
                     alt="Tech News" class="project-image">
            </div>
            <div class="project-content">
                <h3 class="project-title">API CAR</h3>
                <p class="project-description">Aplicação que consome a API da tabela FIPE para Buscar Informações de veículos, como preço, marca, modelo e ano de fabricação</p>
            </div>
        </div>

        <!-- Card 3: Zingen -->
        <div class="project-card group">
            <div class="project-image-container">
                <img src="assets/images/thumbnail/card03.jpg" 
                     alt="Zingen" class="project-image">
            </div>
            <div class="project-content">
                <h3 class="project-title">RC Barbearia</h3>
                <p class="project-description">Página institucional responsiva para divulgar serviços, preços e contatos da barbearia para agendamentos.</p>
            </div>
        </div>

        <!-- Card 4: Refund -->
        <div class="project-card group">
            <div class="project-image-container">
                <img src="assets/images/thumbnail/card06.jpg" 
                     alt="Refund" class="project-image">
            </div>
            <div class="project-content">
                <h3 class="project-title">Gerenciador De Grupos Universitários</h3>
                <p class="project-description">Um sistema de gerenciamento de grupos</p>
            </div>
        </div>

        <!-- Card 5: Página de receita -->
        <div class="project-card group">
            <div class="project-image-container">
                <img src="assets/images/thumbnail/card05.avif" 
                     alt="Página Conversão de moedas" class="project-image">
            </div>
            <div class="project-content">
                <h3 class="project-title">Conversor de Moedas</h3>
                <p class="project-description">Converta moedas de forma rápida e precisa com nosso conversor online! Taxas atualizadas em tempo real e interface simples para cálculos fáceis</p>
            </div>
        </div>

        <!-- Card 6: Página de turismo -->
        <div class="project-card group">
            <div class="project-image-container">
                <img src="assets/images/thumbnail/card04.jpeg" 
                     alt="Calculadora" class="project-image">
            </div>
            <div class="project-content">
                <h3 class="project-title">Calculadora</h3>
                <p class="project-description">Calculadora prática e eficiente para operações matemáticas básicas e avançadas.</p>
            </div>
        </div>
    </div>
</section>
    <!-- Seção de Formação Acadêmica -->
    <section class="py-16 px-4 mx-auto max-w-7xl bg-gray-50 dark:bg-gray-800 rounded-lg my-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">Formação Acadêmica</h2>
            <p class="text-gray-600 mt-2 dark:text-gray-400">Minha jornada educacional e certificações</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Formação 1 - Uniceub -->
            <div class="education-card p-6 rounded-lg shadow-md bg-white dark:bg-gray-700 transition-all hover:shadow-lg">
                <div class="flex items-start">
                    <div class="education-icon mr-4 text-blue-600 dark:text-blue-400">
                        <i class="fas fa-graduation-cap text-3xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Análise e Desenvolvimento de Sistemas</h3>
                        <p class="text-gray-600 dark:text-gray-300 mt-1">Uniceub - Centro Universitário de Brasília</p>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mt-2">2023 - 2025 (Concluído)</p>
                        <p class="text-gray-700 dark:text-gray-200 mt-3">Graduação com foco em desenvolvimento de software, arquitetura de sistemas, banco de dados e engenharia de software.</p>
                    </div>
                </div>
            </div>

            <!-- Formação 2 - DIO -->
            <div class="education-card p-6 rounded-lg shadow-md bg-white dark:bg-gray-700 transition-all hover:shadow-lg">
                <div class="flex items-start">
                    <div class="education-icon mr-4 text-blue-600 dark:text-blue-400">
                        <i class="fas fa-certificate text-3xl"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Desenvolvimento Web Fullstack</h3>
                        <p class="text-gray-600 dark:text-gray-300 mt-1">Digital Innovation One</p>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mt-2">2023 - 120 horas</p>
                        <p class="text-gray-700 dark:text-gray-200 mt-3">Bootcamp intensivo com foco em HTML, CSS, JavaScript, React, Node.js e bancos de dados.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Seção Sobre Mim -->
    <section class="py-16 px-4 mx-auto max-w-4xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">Sobre Mim</h2>
            <p class="text-gray-600 mt-2 dark:text-gray-400">Minha jornada e experiência</p>
        </div>

        <div class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-md">
            <div class="prose dark:prose-invert max-w-none">
                <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-4">Minha Introdução</h3>
                
                <p class="text-gray-700 dark:text-gray-300 mb-6">
                    Olá, meu nome é João Paulo e sou apaixonado por transformar ideias em código! Meu interesse por desenvolvimento começou em 2019 quando tive meu primeiro contato com programação na faculdade. Desde então, venho me dedicando a criar soluções tecnológicas inovadoras.
                </p>
                
                <p class="text-gray-700 dark:text-gray-300 mb-6">
                    Atualmente, tenho o privilégio de atuar como Desenvolvedor Fullstack, trabalhando com diversas tecnologias para construir aplicações web completas e eficientes. Meu foco principal está em desenvolver sistemas robustos, interfaces intuitivas e experiências digitais que realmente agregam valor aos usuários.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                    <div class="bg-gray-50 dark:bg-gray-600 p-4 rounded-lg text-center">
                        <span class="text-3xl font-bold text-blue-600 dark:text-blue-400">03+</span>
                        <p class="text-gray-600 dark:text-gray-300 mt-2">Anos de experiência</p>
                    </div>
                    
                    <div class="bg-gray-50 dark:bg-gray-600 p-4 rounded-lg text-center">
                        <span class="text-3xl font-bold text-blue-600 dark:text-blue-400">15+</span>
                        <p class="text-gray-600 dark:text-gray-300 mt-2">Projetos completos</p>
                    </div>
                    
                    <div class="bg-gray-50 dark:bg-gray-600 p-4 rounded-lg text-center">
                        <span class="text-3xl font-bold text-blue-600 dark:text-blue-400">02+</span>
                        <p class="text-gray-600 dark:text-gray-300 mt-2">Empresas trabalhadas</p>
                    </div>
                </div>
                
                <div class="mt-8 text-center">
                    <a href="assets/docs/Currículo João Paulo Resende Costa.pdf" download="JoaoPaulo-Curriculo.pdf" 
                    class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300 dark:bg-blue-500 dark:hover:bg-blue-600">
                    Download CV
                    <i class="fas fa-download ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    </div>

   <!-- Seção de Contato Estilizada -->
<section class="py-16 px-4 mx-auto max-w-2xl" id="contato">
    <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-2">Contato</h2>
        <div class="w-20 h-1 bg-blue-600 mx-auto dark:bg-blue-500"></div>
        <p class="text-gray-600 mt-4 dark:text-gray-400">Vamos conversar sobre seu projeto!</p>
    </div>

    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden">
        <!-- Card de Contato -->
        <div class="p-8">
            <!-- Item de Email -->
            <div class="flex items-start mb-8 group">
                <div class="bg-blue-100 dark:bg-blue-900/30 p-3 rounded-lg mr-4 group-hover:bg-blue-200 dark:group-hover:bg-blue-900/50 transition">
                    <i class="fas fa-envelope text-blue-600 dark:text-blue-400 text-xl"></i>
                </div>
                <div>
                    <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium uppercase tracking-wider">Email</h3>
                    <a href="mailto:joao.paulorcsilva@gmail.com" class="text-lg font-medium text-gray-800 dark:text-gray-100 hover:text-blue-600 dark:hover:text-blue-400 transition">joao.paulorcsilva@gmail.com</a>
                </div>
            </div>

            <!-- Item de Telefone -->
            <div class="flex items-start mb-8 group">
                <div class="bg-blue-100 dark:bg-blue-900/30 p-3 rounded-lg mr-4 group-hover:bg-blue-200 dark:group-hover:bg-blue-900/50 transition">
                    <i class="fas fa-phone-alt text-blue-600 dark:text-blue-400 text-xl"></i>
                </div>
                <div>
                    <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium uppercase tracking-wider">Telefone</h3>
                    <a href="tel:61998278558" class="text-lg font-medium text-gray-800 dark:text-gray-100 hover:text-blue-600 dark:hover:text-blue-400 transition">(61) 99827-8558</a>
                </div>
            </div>

            <!-- Item de LinkedIn -->
            <div class="flex items-start group">
                <div class="bg-blue-100 dark:bg-blue-900/30 p-3 rounded-lg mr-4 group-hover:bg-blue-200 dark:group-hover:bg-blue-900/50 transition">
                    <i class="fab fa-linkedin-in text-blue-600 dark:text-blue-400 text-xl"></i>
                </div>
                <div>
                    <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium uppercase tracking-wider">LinkedIn</h3>
                    <a href="https://www.linkedin.com/in/joaopauloresende/" target="_blank" class="text-lg font-medium text-gray-800 dark:text-gray-100 hover:text-blue-600 dark:hover:text-blue-400 transition">João Paulo</a>
                </div>
            </div>
        </div>

        <!-- Barra inferior decorativa -->
        <div class="bg-blue-600 dark:bg-blue-500 h-2 w-full"></div>
    </div>
</section>

<!-- Seção do Formulário de Contato -->
<section class="py-16 px-4 mx-auto max-w-4xl" id="formulario">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">Envie uma mensagem</h2>
        <p class="text-gray-600 mt-2 dark:text-gray-400">Preencha o formulário abaixo</p>
    </div>

    <div class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-md">
        <form action="enviar_email.php" method="POST" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="nome" class="block text-gray-600 dark:text-gray-300 mb-2">Nome</label>
                    <input type="text" id="nome" name="nome" required class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label for="email" class="block text-gray-600 dark:text-gray-300 mb-2">Email</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
            
            <div>
                <label for="assunto" class="block text-gray-600 dark:text-gray-300 mb-2">Assunto</label>
                <input type="text" id="assunto" name="assunto" required class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div>
                <label for="mensagem" class="block text-gray-600 dark:text-gray-300 mb-2">Mensagem</label>
                <textarea id="mensagem" name="mensagem" rows="5" required class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>
            
            <button type="submit" class="w-full py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition duration-300 dark:bg-blue-500 dark:hover:bg-blue-600">
                Enviar Mensagem
            </button>
        </form>
    </div>
</section>

  <footer class="bg-gray-800 text-gray-300 py-12 dark:bg-gray-950">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Coluna 1: Logo e descrição -->
            <div class="md:col-span-2">
                <div class="flex items-center mb-4">
                    <img src="assets/icons/Logotipo_empresa_de_programação_sistemas_e_tecnologia-removebg-preview.png" 
                         alt="João Paulo - Dev Fullstack" 
                         class="h-12">
                    <span class="ml-2 text-xl font-semibold text-white">João Paulo</span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Desenvolvedor Fullstack apaixonado por criar soluções inovadoras e eficientes. 
                    Transformando ideias em realidade através do código.
                </p>
            </div>

            <!-- Coluna 2: Links rápidos -->
            <div>
                <h3 class="text-white font-semibold text-lg mb-4 uppercase tracking-wider">Links Rápidos</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Sobre</a></li>
                    <li><a href="#newWork" class="text-gray-400 hover:text-white transition duration-300">Projetos</a></li>
                    <li><a href="#contato" class="text-gray-400 hover:text-white transition duration-300">Contato</a></li>
                </ul>
            </div>

            <!-- Coluna 3: Contato -->
            <div>
                <h3 class="text-white font-semibold text-lg mb-4 uppercase tracking-wider">Contato</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-envelope text-blue-400 mt-1 mr-3"></i>
                        <a href="mailto:joao.paulorcsilva@gmail.com" class="text-gray-400 hover:text-white transition duration-300">
                            joao.paulorcsilva@gmail.com
                        </a>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone-alt text-blue-400 mt-1 mr-3"></i>
                        <a href="tel:61998278558" class="text-gray-400 hover:text-white transition duration-300">
                            (61) 99827-8558
                        </a>
                    </li>
                    <li class="flex items-start">
                        <i class="fab fa-linkedin-in text-blue-400 mt-1 mr-3"></i>
                        <a href="https://www.linkedin.com/in/joaopauloresende/" target="_blank" 
                           class="text-gray-400 hover:text-white transition duration-300">
                            LinkedIn
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Divisor -->
        <div class="border-t border-gray-700 dark:border-gray-800 mt-10 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <!-- Direitos autorais -->
                <div class="mb-4 md:mb-0">
                    <p class="text-sm text-gray-500">
                        &copy; 2023 João Paulo. Todos os direitos reservados.
                    </p>
                </div>

                <!-- Redes sociais -->
                <div class="flex space-x-6">
                    <a href="https://github.com/joaopaulo-dev" target="_blank" 
                       class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/joaopauloresende/" target="_blank" 
                       class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </a>
                    <a href="https://wa.me/5561998278558" target="_blank" 
                       class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-whatsapp text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Créditos -->
            <div class="mt-6 text-center md:text-right">
                <p class="text-xs text-gray-600 dark:text-gray-500">
                    Feito com <i class="fas fa-heart text-red-500"></i> e <i class="fas fa-coffee text-amber-600"></i> por João Paulo
                </p>
            </div>
        </div>
    </div>
</footer>
    <script src="index.js"></script>
</body>
</html>