document.addEventListener('DOMContentLoaded', function() {
    // ========== Menu Mobile ==========
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    menuBtn.addEventListener('click', function() {
        // Alternar estado do menu
        this.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        
        // Animar itens do menu
        const menuItems = document.querySelectorAll('.menu-item');
        if (mobileMenu.classList.contains('active')) {
            menuItems.forEach((item, index) => {
                item.style.transitionDelay = `${index * 0.1}s`;
                item.style.opacity = '1';
                item.style.transform = 'translateX(0)';
            });
        } else {
            menuItems.forEach(item => {
                item.style.transitionDelay = '0s';
                item.style.opacity = '0';
                item.style.transform = 'translateX(-16px)';
            });
        }
    });
    
    // Fechar menu ao clicar em um item
    document.querySelectorAll('.menu-item a').forEach(item => {
        item.addEventListener('click', () => {
            menuBtn.classList.remove('active');
            mobileMenu.classList.remove('active');
            document.querySelectorAll('.menu-item').forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateX(-16px)';
            });
        });
    });

    // ========== Dark Mode Toggle ==========
    const themeToggle = document.getElementById('theme-toggle');
    const themeToggleMobile = document.getElementById('theme-toggle-mobile');
    const themeIcon = document.getElementById('theme-icon');
    const themeIconMobile = document.getElementById('theme-icon-mobile');
    
    function toggleDarkMode() {
        const isDark = document.documentElement.classList.toggle('dark');
        localStorage.setItem('darkMode', isDark);
        
        if (isDark) {
            themeIcon.classList.replace('fa-moon', 'fa-sun');
            themeIconMobile.classList.replace('fa-moon', 'fa-sun');
        } else {
            themeIcon.classList.replace('fa-sun', 'fa-moon');
            themeIconMobile.classList.replace('fa-sun', 'fa-moon');
        }
    }
    
    // Verificar preferência do usuário
    if (localStorage.getItem('darkMode') === 'true' || 
        (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
        themeIcon.classList.replace('fa-moon', 'fa-sun');
        themeIconMobile.classList.replace('fa-moon', 'fa-sun');
    }
    
    themeToggle.addEventListener('click', toggleDarkMode);
    themeToggleMobile.addEventListener('click', toggleDarkMode);

    // ========== Scroll para Projetos ==========
    document.getElementById('scrollToProjects').addEventListener('click', () => {
        const projectsSection = document.getElementById('newWork');
        projectsSection.scrollIntoView({
            behavior: 'smooth'
        });
    });

    // Esconder/mostrar botão de scroll para projetos
    window.addEventListener('scroll', () => {
        const scrollBtn = document.getElementById('scrollToProjects');
        const projectsSection = document.getElementById('newWork');
        const projectsPosition = projectsSection.getBoundingClientRect().top;
        
        if (projectsPosition < window.innerHeight / 2) {
            scrollBtn.parentElement.classList.add('opacity-0', 'pointer-events-none');
            scrollBtn.parentElement.classList.remove('animate-bounce');
        } else {
            scrollBtn.parentElement.classList.remove('opacity-0', 'pointer-events-none');
            scrollBtn.parentElement.classList.add('animate-bounce');
        }
    });

    // ========== Botão Voltar ao Topo ==========
    const backToTopButton = document.getElementById('backToTop');
    
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.remove('opacity-0', 'invisible');
            backToTopButton.classList.add('opacity-100', 'visible');
        } else {
            backToTopButton.classList.add('opacity-0', 'invisible');
            backToTopButton.classList.remove('opacity-100', 'visible');
        }
    });

    backToTopButton.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
