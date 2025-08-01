<?php
include $_SERVER['DOCUMENT_ROOT'] . '/conn.php';
?>
<!DOCTYPE html>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="/tailwind.js"></script>
<meta name="theme-color" content="#14b8a6">
    <!-- Bootstrap Icons CDN -->
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="/vendor/font-awesome/css/all.css">

    <style>
        /* Dotted border background pattern */
        .dotted-bg {
            background-image: radial-gradient(currentColor 1px, transparent 1px);
            background-size: 10px 10px;
            border: 1.5px dotted;
            border-radius: 12px;
        }
        #loadin {
  opacity: 0;
  transition: opacity 0.4s ease-in-out;
  white-space: pre-wrap;
}
#loadin.visible {
  opacity: 1;
}
#preloader {
  transition: opacity 0.2s ease;
}
    </style>

<body class="bg-gray-100 dark:bg-gray-900 transition-colors duration-500">
<nav 
    id="navbar"
    class="fixed top-[30px] left-1/2 transform -translate-x-1/2 w-[90vw] max-w-6xl
           dotted-bg 
           bg-white/30 dark:bg-gray-900/40 
           backdrop-blur-md
           border-gray-500/50 dark:border-gray-400/50
           shadow-lg
           flex items-center justify-between px-6 py-3
           z-50
           transition-colors duration-500
           rounded-xl
           "
>
    <!-- Logo -->
    <a href="/" class="text-2xl font-extrabold text-gray-900 dark:text-white flex items-center gap-2">
        <i class="bi bi-code-slash"></i> AP.
    </a>
<!-- Nav Container (used both tailwind classes and my custom classes) -->
<div class="w-full flex justify-center">
    <!-- Nav Links -->
    <ul class="hidden md:flex gap-8 text-gray-800 dark:text-gray-300 font-semibold absolute left-1/2 transform -translate-x-1/2">
        <li><a href="/" class="hover:text-teal-500 dark:hover:text-teal-400 transition">Home</a></li>
        <li><a href="/projects" class="hover:text-teal-500 dark:hover:text-teal-400 transition">Projects</a></li>
        <li><a href="/#contact" class="hover:text-teal-500 dark:hover:text-teal-400 transition">Contact</a></li>
        <li><a href="https://blog.preciousadedokun.com.ng" class="hover:text-teal-500 dark:hover:text-teal-400 transition">Blog</a></li>
                <li><a href="/github" class="hover:text-teal-500 dark:hover:text-teal-400 transition">Github</a></li>
    </ul>
</div>
    
   <div class="relative w-full h-12">
  <button id="themeToggle" 
      aria-label="Toggle Dark Mode" 
      class="absolute right-4 top-2 text-gray-800 dark:text-gray-200 hover:text-teal-500 dark:hover:text-teal-400 transition text-xl"
  >
      <i id="themeIcon" class="bi bi-moon-fill"></i>
  </button>
</div>

    <!-- Mobile Hamburger -->
    <button id="menuToggle" aria-label="Toggle Menu" class="md:hidden text-gray-800 dark:text-gray-200 text-2xl">
        <i class="bi bi-list"></i>
    </button>
</nav>

<!-- Mobile Menu -->
<div id="mobileMenu" class="fixed top-[90px] left-1/2 transform -translate-x-1/2 w-[90vw] max-w-6xl
    bg-white/90 dark:bg-gray-900/90
    backdrop-blur-md
    border border-gray-400/40 dark:border-gray-500/40
    rounded-xl
    shadow-lg
    p-6
    space-y-4
    md:hidden
    hidden
    z-40
    ">
    <a href="/" class="block text-gray-900 dark:text-gray-100 font-semibold text-lg hover:text-teal-500 dark:hover:text-teal-400 transition">Home</a>
    <a href="/projects" class="block text-gray-900 dark:text-gray-100 font-semibold text-lg hover:text-teal-500 dark:hover:text-teal-400 transition">Projects</a>
    <a href="/#contact" class="block text-gray-900 dark:text-gray-100 font-semibold text-lg hover:text-teal-500 dark:hover:text-teal-400 transition">Contact</a>
    <a href="https://blog.preciousadedokun.com.ng" class="block text-gray-900 dark:text-gray-100 font-semibold text-lg hover:text-teal-500 dark:hover:text-teal-400 transition">Blog</a>
        <a href="/github" class="block text-gray-900 dark:text-gray-100 font-semibold text-lg hover:text-teal-500 dark:hover:text-teal-400 transition">Github</a>
</div>

<script>
    // Dark/Light Mode Toggle Logic
    const themeToggleBtn = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');
    const htmlElement = document.documentElement;

    // Load theme from localStorage or system preference
    const storedTheme = localStorage.getItem('theme');
    const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

    if (storedTheme === 'dark' || (!storedTheme && systemPrefersDark)) {
        htmlElement.classList.add('dark');
        themeIcon.className = 'bi bi-sun-fill';
    } else {
        htmlElement.classList.remove('dark');
        themeIcon.className = 'bi bi-moon-fill';
    }

    themeToggleBtn.addEventListener('click', () => {
        if (htmlElement.classList.contains('dark')) {
            htmlElement.classList.remove('dark');
            themeIcon.className = 'bi bi-moon-fill';
            localStorage.setItem('theme', 'light');
        } else {
            htmlElement.classList.add('dark');
            themeIcon.className = 'bi bi-sun-fill';
            localStorage.setItem('theme', 'dark');
        }
    });

    // Mobile Menu Toggle
    const menuToggleBtn = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');

    menuToggleBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

</body>
<?php
// Output a spacer div to create space below fixed navbar (did'nt understand fully cause i am just learning tailwind css)
echo '<div style="height: 100px;"></div>';
?>


</html>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>