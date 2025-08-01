<?php include 'navbar.php' ?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 - Page Not Found</title>
  <script>
            tailwind.config = {
                darkMode: 'class',
            };
        </script>
  <script>
    // dark/light theme based on system
    if (window.matchMedia('(prefers-color-scheme: light)').matches) {
      document.documentElement.classList.remove('dark');
    }
  </script>
</head>
<body class="bg-white dark:bg-[#0D0D0D] text-gray-800 dark:text-gray-100 flex items-center justify-center min-h-screen px-6">
  <div class="text-center animate-fade-in">
    <!-- Back Arrow -->

    <!-- 404 Content -->
    <h1 class="text-7xl font-bold mb-4 text-teal-600 dark:text-teal-400 tracking-tight">404</h1>
    <p class="text-2xl font-semibold mb-2">Oops! Page Not Found</p>
    <p class="text-gray-500 dark:text-gray-400 mb-8">The page you're looking for doesn't exist or has been moved.</p>

    <a href="/" class="inline-block px-6 py-3 bg-teal-600 text-white rounded-xl shadow hover:bg-teal-700 dark:bg-teal-500 dark:hover:bg-teal-600 transition">
      Go to Homepage
    </a>
  </div>

  <style>
    @keyframes fade-in {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fade-in {
      animation: fade-in 0.7s ease-out both;
    }
  </style>
</body>
</html>