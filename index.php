<?php
include 'navbar.php';
?>
<script>
            tailwind.config = {
                darkMode: 'class',
            };
        </script>
        <style>
  @keyframes slide {
    0% { transform: translateX(0%); }
    100% { transform: translateX(-50%); }
  }

  .animate-slide {
    animation: slide 10s linear infinite;
    display: flex;
    min-width: max-content;
  }
</style>
        <style>
          html {
  scroll-behavior: smooth;
}
@keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(30px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes scaleIn {
  0% {
    opacity: 0;
    transform: scale(0.8);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}

.animate-fade-in-up {
  animation: fadeInUp 0.8s ease-out forwards;
}

.animate-fade-in-up.delay-200 {
  animation-delay: 0.2s;
}

.animate-fade-in-up.delay-300 {
  animation-delay: 0.3s;
}

.animate-fade-in-up.delay-500 {
  animation-delay: 0.5s;
}

.animate-scale-in {
  animation: scaleIn 0.8s ease-out forwards;
}
        </style>

<html>
<head>
  <!-- Essential Meta Tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="google-site-verification" content="mpfvExLjgj2MPsncOhhRIMSpfFm-zw9WJNEGflQNONU" />

  <!-- Title & Description -->
  <title>Precious Adedokun | Full Stack Web Developer – APCodeSphere</title>
  <meta name="title" content="Precious Adedokun - Full Stack Web Developer| APCodeSphere" />
  <meta name="description" content="Explore the official portfolio of Precious Adedokun, a Full Stack & App Developer in Nigeria. Building fast, secure, scalable web apps and elegant digital experiences with APCodeSphere." />

  <!-- SEO Keywords -->
  <meta name="keywords" content="Precious Adedokun, APCodeSphere, Full Stack Developer, App Developer, Web Developer in Nigeria, Backend Expert, Secure APIs, Scalable Web Apps, UI/UX Developer, Tech Mentor Nigeria" />
  <meta name="author" content="Precious Adedokun" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://preciousadedokun.com.ng" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://preciousadedokun.com.ng" />
  <meta property="og:title" content="Precious Adedokun | Full Stack & App Developer – APCodeSphere" />
  <meta property="og:description" content="Discover how Precious Adedokun builds powerful digital tools. From backend architecture to modern frontend experiences, see what APCodeSphere brings to life." />
  <meta property="og:image" content="https://preciousadedokun.com.ng/images/ap.jpg" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:url" content="https://preciousadedokun.com.ng" />
  <meta name="twitter:title" content="Precious Adedokun | Full Stack Developer – APCodeSphere" />
  <meta name="twitter:description" content="Clean Code. Real Impact. Explore the official portfolio of Precious Adedokun, Nigeria’s rising Full Stack and App Developer." />
  <meta name="twitter:image" content="https://preciousadedokun.com.ng/images/ap.jpg" />

  <!-- Theme & Favicon -->
  <meta name="theme-color" content="#14b8a6">
  <link rel="icon" type="image/png" href="https://preciousadedokun.com.ng/images/ap.jpg" />

  <!-- Schema Markup (JSON-LD for Google Snippets) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Precious Adedokun",
    "url": "https://preciousadedokun.com.ng",
    "image": "https://preciousadedokun.com.ng/images/ap.jpg",
    "sameAs": [
      "https://github.com/apreezofficial",
      "https://x.com/apcodesphere",
      "https://tiktok.com/@apcodesphere",
      "https://instagram.com/apcodesphere"
    ],
    "jobTitle": "Founder",
    "worksFor": {
      "@type": "Organization",
      "name": "Proforms"
    },
    "description": "Full Stack with expertise in secure backend systems, responsive frontends, and modern web architecture."
  }
  </script>
</head>
<body>
<!-- SEO Optimized Hero Section -->
<section 
  class="mx-auto px-6 pt-24 md:px-10 lg:pt-32 lg:pl-20 lg:pr-10 bg-white dark:bg-gray-900 transition-colors duration-500"
  itemscope itemtype="https://schema.org/Person"
>
  <div class="flex flex-col md:flex-row md:items-center md:gap-10 lg:gap-12 lg:justify-between">

    <!-- Text Content -->
    <div class="text-left">
      <header>
        <h1 itemprop="name" class="text-4xl md:text-5xl font-extrabold text-teal-500 mb-4">
          Hello, I'm <span class="text-black dark:text-white">Precious Adedokun</span>.
        </h1>
      </header>

      <p itemprop="description" class="text-gray-700 dark:text-gray-300 font-medium text-base md:text-lg max-w-xl mt-6 leading-relaxed">
        I’m a <strong>Full Stack Developer</strong> with expertise in <strong>backend architecture</strong>, <strong>database security</strong>, and <strong>API design</strong>. I love solving real-world problems with elegant, maintainable code and ensuring every system I touch is secure and scalable.
      </p>

      <div class="text-teal-500 font-medium mt-10 space-y-6">
        <p class="max-w-sm">My passion lies in building fast, secure, and efficient web apps that power seamless user experiences.</p>
        <p class="max-w-sm">While I enjoy the full stack, I thrive in the backend—structuring data models, optimizing performance, and creating rock-solid infrastructures.</p>
      </div>

      <!-- Social Links -->
      <nav class="mt-10 flex flex-wrap gap-6 items-center" aria-label="Social Links">

        <a href="https://github.com/apreezofficial" target="_blank" rel="noopener" aria-label="GitHub"
           class="transition-transform transform hover:scale-105">
          <div class="w-10 h-10 border-2 border-teal-500 rounded-full flex items-center justify-center text-teal-500 hover:bg-white dark:hover:bg-gray-800">
            <i class="fab fa-github"></i>
          </div>
        </a>

        <a href="https://x.com/apcodesphere" target="_blank" rel="noopener" aria-label="Twitter (X)"
           class="transition-transform transform hover:scale-105">
          <div class="w-10 h-10 border-2 border-teal-500 rounded-full flex items-center justify-center text-teal-500 hover:bg-white dark:hover:bg-gray-800">
            <i class="bi bi-twitter"></i>
          </div>
        </a>

        <a href="https://tiktok.com/@apcodesphere" target="_blank" rel="noopener" aria-label="TikTok"
           class="transition-transform transform hover:scale-105">
          <div class="w-10 h-10 border-2 border-teal-500 rounded-full flex items-center justify-center text-teal-500 hover:bg-white dark:hover:bg-gray-800">
            <i class="bi bi-tiktok"></i>
          </div>
        </a>

        <a href="https://instagram.com/apcodesphere" target="_blank" rel="noopener" aria-label="Instagram"
           class="transition-transform transform hover:scale-105">
          <div class="w-10 h-10 border-2 border-teal-500 rounded-full flex items-center justify-center text-teal-500 hover:bg-white dark:hover:bg-gray-800">
            <i class="fab fa-instagram"></i>
          </div>
        </a>

        <!-- Resume -->
        <a href="/resume.txt" download class="flex items-center gap-3 px-5 py-2 rounded-full shadow-lg bg-teal-600 text-white dark:bg-teal-500 dark:text-gray-900 hover:bg-teal-700 dark:hover:bg-teal-400 transition-all duration-300 group">
          <i class="fas fa-download group-hover:rotate-12 transform transition-transform duration-300"></i>
          <span class="font-semibold">Download Resume</span>
        </a>
      </nav>
    </div>

    <!-- Profile Image -->
    <figure class="mt-16 md:mt-0 animate-scale-in" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
      <meta itemprop="url" content="https://github.com/apreezofficial.png" />
      <div class="relative w-[300px] h-[300px] lg:w-[400px] lg:h-[400px] border-4 border-teal-500 rounded-full overflow-hidden shadow-xl mx-auto">
        <img src="/images/ap.jpg" alt="Portrait of Precious Adedokun" class="object-cover w-full h-full" draggable="false" />
      </div>
    </figure>

  </div>
</section>
<section id="stats" class="bg-gray-50 dark:bg-gray-900 py-16">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white mb-10 text-center" id="loadin">
      My Key Stats
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10 text-center">
        
      <!-- My languages -->
      
      <!-- Projects Completed -->
      <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 flex flex-col items-center">
        <i class="bi bi-folder2-open text-5xl text-teal-500 mb-4"></i>
        <h3 class="text-4xl font-bold text-gray-900 dark:text-white">
          <span class="counter" data-target="32">0</span>+
        </h3>
        <p class="mt-2 text-gray-600 dark:text-gray-300 font-medium">Projects Completed</p>
      </div>
      
      <!-- GitHub Repos -->
      <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 flex flex-col items-center">
        <i class="bi bi-github text-5xl text-teal-500 mb-4"></i>
        <h3 class="text-4xl font-bold text-gray-900 dark:text-white">
          <span class="counter" data-target="60">0</span>+
        </h3>
        <p class="mt-2 text-gray-600 dark:text-gray-300 font-medium">GitHub Repositories</p>
      </div>
      
      <!-- Years of Experience -->
      <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 flex flex-col items-center">
        <i class="bi bi-calendar-check text-5xl text-teal-500 mb-4"></i>
        <h3 class="text-4xl font-bold text-gray-900 dark:text-white">
          <span class="counter" data-target="5">0</span>+
        </h3>
        <p class="mt-2 text-gray-600 dark:text-gray-300 font-medium">Years of Experience</p>
      </div>
      
      <!-- Happy Clients -->
      <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 flex flex-col items-center">
        <i class="bi bi-people-fill text-5xl text-teal-500 mb-4"></i>
        <h3 class="text-4xl font-bold text-gray-900 dark:text-white">
          <span class="counter" data-target="15">0</span>+
        </h3>
        <p class="mt-2 text-gray-600 dark:text-gray-300 font-medium">Happy Clients</p>
      </div>
      
    </div>
  </div>
</section>
<section id="skills" class="relative bg-white dark:bg-black py-20 px-6 max-w-6xl mx-auto rounded-xl shadow-2xl overflow-hidden">
  <h2 class="text-4xl font-extrabold text-center text-gray-900 dark:text-white mb-14" id="loadin">My Skill Set</h2>

  <div class="relative w-full overflow-hidden">
    <!-- Left Gradient Overlay -->
    <div class="absolute left-0 top-0 h-full w-16 bg-gradient-to-r from-white dark:from-black to-transparent z-10 pointer-events-none"></div>

    <!-- Right Gradient Overlay -->
    <div class="absolute right-0 top-0 h-full w-16 bg-gradient-to-l from-white dark:from-black to-transparent z-10 pointer-events-none"></div>

    <!-- Skills Row -->
    <div class="flex gap-10 items-center animate-slide px-6">
      <img src="https://api.iconify.design/logos:html-5.svg" alt="HTML" class="h-14 w-14 opacity-60 transition-all duration-300" />
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScf0ve2UWJpAj6n8s-8Sc5-VwXg3eIlkPOCSl0fL_4Mg&s" alt="CSS" class="h-14 w-14 opacity-60 transition-all duration-300" />
      <img src="https://api.iconify.design/logos:javascript.svg" alt="JS" class="h-14 w-14 opacity-60 transition-all duration-300" />
      <img src="https://api.iconify.design/logos:typescript-icon.svg" alt="TypeScript" class="h-14 w-14 opacity-60 transition-all duration-300" />
      <img src="https://api.iconify.design/logos:react.svg" alt="React" class="h-14 w-14 opacity-60 transition-all duration-300" />
      <img src="https://api.iconify.design/logos:php.svg" alt="PHP" class="h-14 w-14 opacity-60 transition-all duration-300" />
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="h-14 w-14 opacity-60 transition-all duration-300" />
      <img src="https://api.iconify.design/logos:firebase.svg" alt="Firebase" class="h-14 w-14 opacity-60 transition-all duration-300" />
      <img src="https://api.iconify.design/logos:bootstrap.svg" alt="Bootstrap" class="h-14 w-14 opacity-60 transition-all duration-300" />
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0QwwF1IzPG_q-9lkX8hQUjBXVfu1B_4RqsnAfUscUKpexaup6T6BwkVU&s" alt="Tailwind" class="h-14 w-14 opacity-60 transition-all duration-300" />
      <img src="https://api.iconify.design/logos:git.svg" alt="Git" class="h-14 w-14 opacity-60 transition-all duration-300" />
    </div>
  </div>
</section>
<section id="projects" class="py-16 bg-gray-50 dark:bg-gray-900 transition-colors duration-500">
  <div class="container mx-auto px-6 lg:px-20">
    <h2 class="text-3xl sm:text-4xl font-extrabold mb-10 text-center text-teal-500" id="loadin">My Projects</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php
        function renderTagBadge($tag) {
          $tag = trim($tag);
          $icon = '';
          $label = $tag;

          switch(strtolower($tag)) {
            case 'javascript':
              $icon = '<i class="fab fa-js-square text-yellow-500"></i>';
              break;
            case 'typescript':
              $icon = '<i class="bi bi-filetype-tsx text-blue-600"></i>';
              break;
            case 'php':
              $icon = '<i class="fab fa-php text-indigo-600"></i>';
              break;
            case 'mysql':
              $icon = '<i class="fa fa-database text-blue-800"></i>';
              break;
            case 'react':
              $icon = '<i class="fab fa-react text-cyan-500"></i>';
              break;
              case 'react.js':
              $icon = '<i class="fab fa-react text-cyan-500"></i>';
              break;
            case 'firebase':
              $icon = '<i class="bi bi-fire text-yellow-600"></i>';
              break;
            case 'tailwind':
            case 'tailwindcss':
              $icon = '<i class="bi bi-stars text-teal-400"></i>';
              break;
            case 'html':
              $icon = '<i class="fab fa-html5 text-orange-600"></i>';
              break;
            case 'css':
              $icon = '<i class="fab fa-css3 text-blue-500"></i>';
              break;
            case 'bootstrap':
              $icon = '<i class="bi bi-bootstrap-fill text-purple-600"></i>';
              break;
              case 'api':
              $icon = '<i class="fa fa-plug text-green-600"></i>';
              break;
              case 'vue':
              $icon = '<i class="fab fa-vuejs text-pink-600"></i>';
              break;
              case 'vue.js':
              $icon = '<i class="fab fa-vuejs text-pink-600"></i>';
              break;
            default:
              $icon = '<i class="fa fa-code text-gray-500 dark:text-orange-600"></i>';
              break;
          }

          return '<span class="flex items-center gap-1 bg-teal-100 dark:bg-teal-800 text-teal-800 dark:text-teal-200 text-xs font-semibold px-2 py-1 rounded-full">'.$icon.' <span>'.$label.'</span></span>';
        }

        $query = "
  SELECT p.*, pi.image_url AS first_image 
  FROM projects p
  LEFT JOIN (
    SELECT project_id, MIN(id) AS min_image_id 
    FROM project_images 
    GROUP BY project_id
  ) first_images ON p.id = first_images.project_id
  LEFT JOIN project_images pi ON pi.id = first_images.min_image_id
  
ORDER BY CAST(p.property AS UNSIGNED) ASC
LIMIT 3;
";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
  $tags = explode(',', $row['technologies'] ?? '');
  $firstImage = $row['first_image'] ?? 'default.jpg'; // fallback image

  echo '
  <div class="bg-white dark:bg-gray-800 rounded-2xl overflow-hidden transition-transform hover:scale-105 group border border-gray-200 dark:border-gray-700">
    <img src="'.htmlspecialchars($firstImage).'" alt="'.htmlspecialchars($row['title']).'" class="w-full h-48 object-cover group-hover:opacity-90 transition-opacity duration-300" loading="lazy">
    <div class="p-6">
      <h3 class="text-xl font-semibold mb-2 text-gray-900 dark:text-white" id="loadin">'.htmlspecialchars($row['title']).'</h3>
<p class="text-gray-700 dark:text-gray-300 text-sm mb-4">'.(strlen(htmlspecialchars($row['description'])) > 150 ? substr(htmlspecialchars($row['description']), 0, 150).'...' : htmlspecialchars($row['description'])).'</p>
      <div class="flex flex-wrap gap-2 mb-4">';
        foreach ($tags as $tag) {
          echo renderTagBadge($tag);
        }
  echo '</div>
      <div class="flex items-center gap-6 text-sm"><a href="/projects/'.htmlspecialchars($row['id']).'"  class="text-teal-700 hover:underline flex items-center gap-1 dark:text-teal-500">
                  <i class="bi bi-box-arrow-up-right text-lg"></i> View Project
                </a>';
        if (!empty($row['github_repo'])) {
          echo '<a href="'.htmlspecialchars($row['github_repo']).'" target="_blank" class="text-teal-600 hover:underline flex items-center gap-1 dark:text-teal-400">
                  <i class="bi bi-github text-lg"></i> GitHub
                </a>';
        }
        if (!empty($row['live_url'])) {
          echo '<a href="'.htmlspecialchars($row['live_url']).'" target="_blank" class="text-teal-700 hover:underline flex items-center gap-1 dark:text-teal-500">
                  <i class="bi bi-box-arrow-up-right text-lg"></i> Live Demo
                </a>';
        }
  echo '</div>
    </div>
  </div>';
}
      ?>
    </div>
  </div>
         <div class="flex justify-center mt-6">
  <a href="/projects" class="inline-flex items-center px-6 py-3 bg-teal-500 hover:bg-teal-600 text-white rounded-lg font-semibold shadow-md transition">
    View All Projects
    <i class="bi bi-arrow-right ml-2 text-lg"></i>
  </a>
</div>
</section>
<section class="max-w-4xl mx-auto p-8 bg-white dark:bg-gray-900 rounded-3xl shadow-lg ring-2 ring-teal-500/30 dark:ring-teal-400/40 mt-12 transition-colors duration-500">
  <h2 class="text-4xl font-extrabold text-teal-600 dark:text-teal-400 mb-8 text-center select-none animate-fadeInDown" id="loadin">
    Work Experience
  </h2>

  <div class="space-y-8">
    <!-- Experience Item -->
<article class="bg-gray-100 dark:bg-[#1A1A1A] p-6 rounded-xl shadow-md ring-2 ring-teal-600/20 dark:ring-teal-600/40 transform transition duration-500 hover:scale-[1.03] animate-fadeInUp">
  <header class="flex items-center justify-between mb-4">
    <h3 class="text-2xl font-semibold text-teal-700 dark:text-teal-300" id="loadin">Full Stack Developer</h3>
    <span class="text-sm text-gray-600 dark:text-gray-400 italic">May 2025 - Present</span>
  </header>
  <p class="text-gray-700 dark:text-gray-300 mb-3">Proforms</p>
  <ul class="list-disc list-inside text-gray-600 dark:text-gray-400 space-y-1">
    <li><i class="bi bi-code-slash text-teal-500 dark:text-teal-400 mr-2 animate-pulse"></i>Architect and implement core backend logic powering Proforms’ seamless form management platform.</li>
    <li><i class="bi bi-gear-fill text-teal-500 dark:text-teal-400 mr-2 animate-pulse"></i>Optimized server-side APIs and database queries, boosting performance and reliability.</li>
    <li><i class="bi bi-laptop-fill text-teal-500 dark:text-teal-400 mr-2 animate-pulse"></i>Collaborate closely with frontend and product teams to deliver end-to-end solutions in an Agile environment.</li>
  </ul>
</article>

    <!-- Experience Item -->
    <article class="bg-gray-100 dark:bg-[#1A1A1A] p-6 rounded-xl shadow-md ring-2 ring-teal-600/20 dark:ring-teal-600/40 transform transition duration-500 hover:scale-[1.03] animate-fadeInUp delay-100">
      <header class="flex items-center justify-between mb-4">
        <h3 class="text-2xl font-semibold text-teal-700 dark:text-teal-300" id="loadin">Front-End Developer</h3>
        <span class="text-sm text-gray-600 dark:text-gray-400 italic">March 2025 - Present</span>
      </header>
      <p class="text-gray-700 dark:text-gray-300 mb-3">The Hive</p>
      <ul class="list-disc list-inside text-gray-600 dark:text-gray-400 space-y-1">
        <li><i class="bi bi-brush-fill text-teal-500 dark:text-teal-400 mr-2 animate-pulse"></i>Designed responsive UI components with Tailwind CSS.</li>
        <li><i class="bi bi-phone-fill text-teal-500 dark:text-teal-400 mr-2 animate-pulse"></i>Enhanced UX leading to a 25% increase in user retention.</li>
        <li><i class="bi bi-people-fill text-teal-500 dark:text-teal-400 mr-2 animate-pulse"></i>Worked closely with designers and backend developers.</li>
      </ul>
    </article>

    <!-- Experience Item -->
    <article class="bg-gray-100 dark:bg-[#1A1A1A] p-6 rounded-xl shadow-md ring-2 ring-teal-600/20 dark:ring-teal-600/40 transform transition duration-500 hover:scale-[1.03] animate-fadeInUp delay-200">
      <header class="flex items-center justify-between mb-4">
        <h3 class="text-2xl font-semibold text-teal-700 dark:text-teal-300" id="loadin">Intern Developer</h3>
        <span class="text-sm text-gray-600 dark:text-gray-400 italic">Jan 2022 - May 2022</span>
      </header>
      <p class="text-gray-700 dark:text-gray-300 mb-3">W3schools</p>
      <ul class="list-disc list-inside text-gray-600 dark:text-gray-400 space-y-1">
        <li><i class="bi bi-layers-fill text-teal-500 dark:text-teal-400 mr-2 animate-pulse"></i>Assisted in building modular components using Vuejs.</li>
        <li><i class="bi bi-bar-chart-fill text-teal-500 dark:text-teal-400 mr-2 animate-pulse"></i>Contributed to to the uprun if the student dashboard system.</li>
        <li><i class="bi bi-lightning-fill text-teal-500 dark:text-teal-400 mr-2 animate-pulse"></i>Participated in weekly code reviews and team meetings.</li>
      </ul>
    </article>
  </div>
</section>
<section id="testimonials" class="py-16 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
  <div class="container mx-auto px-6 lg:px-20">
    <h2 class="text-4xl font-extrabold text-teal-500 mb-10 text-center" id="loadin">What People Say</h2>
<div class="relative overflow-hidden max-w-6xl mx-auto">
  <div id="testimonial-slider" class="flex transition-transform duration-700 ease-in-out">

    <?php
      $colors = [
  '#D0F0FD', '#FDE2E4', '#E3F9E5', '#FFF4D9', '#E6E0F8',
  '#FFE0AC', '#D5AAFF', '#B5F2EA', '#FFC2E2', '#D9E4DD',
  '#F9F1C6', '#E0F7FA', '#FCE4EC', '#F3E5F5', '#F1F8E9',
  '#E8EAF6', '#FFECB3', '#C8E6C9', '#E1F5FE', '#FFF9C4',
  '#FFCDD2', '#D1C4E9', '#B2EBF2', '#FFCCBC', '#DCEDC8',
  '#F8BBD0', '#FFECB3', '#B3E5FC', '#F0F4C3', '#C5CAE9'
];
      $query = "SELECT * FROM testimonials ORDER BY id ASC";
      $result = mysqli_query($conn, $query);
      $i = 0;
      while ($row = mysqli_fetch_assoc($result)) {
        $color = $colors[$i % count($colors)];
        echo '
        <div class="min-w-full px-6">
          <div
            class="bg-white dark:bg-gray-800 rounded-xl p-8 flex flex-col items-center text-center max-w-4xl mx-auto
                   border border-gray-200 dark:border-gray-700
                   shadow-lg
                   hover:shadow-xl
                   hover:scale-[1.03]
                   transition-transform duration-500 ease-in-out
                   relative overflow-hidden"
            style="height: 350px;">
            
            <!-- Colored stripe accent -->
            <div class="absolute left-0 top-0 h-full w-2 rounded-l-xl" style="background-color: '.$color.';"></div>

            <i class="bi bi-quote fs-1 text-teal-400 text-6xl mb-4 z-10 relative"></i>
            <p class="text-gray-700 dark:text-gray-300 text-lg leading-relaxed max-w-3xl mx-auto z-10 relative" style="max-height: 260px; overflow-y: auto;">'.$row['testimonial'].'</p>
            
            <div class="flex items-center gap-4 mt-auto pt-6 z-10 relative">
              <img src="'.$row['photo'].'" alt="'.htmlspecialchars($row['name']).'" class="w-16 h-16 rounded-full object-cover border-2 border-teal-500" loading="lazy" />
              <div class="text-left">
                <h4 class="font-semibold text-teal-600 dark:text-teal-400 text-xl">'.$row['name'].'</h4>
                <p class="text-teal-400 dark:text-teal-300 text-sm">'.$row['role'].'</p>
              </div>
            </div>
          </div>
        </div>';
        $i++;
      }
    ?>

  </div>

  <!-- Navigation Arrows -->
<button id="prevBtn" aria-label="Previous testimonial" 
        class="absolute left-4 top-1/2 -translate-y-1/2 text-teal-600 hover:text-teal-400 transition text-4xl z-20 font-bold" style="text-shadow: 0 0 1px #0f766e;">
  <i class="bi bi-chevron-left"></i>
</button>

<button id="nextBtn" aria-label="Next testimonial" 
        class="absolute right-4 top-1/2 -translate-y-1/2 text-teal-600 hover:text-teal-400 transition text-4xl z-20 font-bold" style="text-shadow: 0 0 1px #0f766e;">
  <i class="bi bi-chevron-right"></i>
</button>
  <!-- Navigation Dots -->
<!-- Dots Navigation -->
<div id="dots" class="flex justify-center gap-3 mt-8">

</div>
</div>


</section>
<div class="max-w-lg w-full bg-white dark:bg-[#1A1A1A] rounded-3xl p-10 shadow-lg ring-2 ring-teal-500/30 dark:ring-teal-400/40 mx-auto" id="contact" data-theme="system">
  <h2 class="text-4xl font-extrabold text-teal-600 dark:text-teal-400 mb-10 text-center select-none" id="loadin">Contact Me</h2>

  <form id="contactForm" novalidate class="space-y-6" aria-live="polite" aria-relevant="additions removals">
    <div>
      <label for="name" class="block mb-1 font-semibold text-gray-700 dark:text-gray-400">Name</label>
      <input
        type="text"
        id="name"
        name="name"
        aria-describedby="nameError"
        class="w-full bg-white dark:bg-[#0D0D0D] border-2 border-gray-300 dark:border-gray-600 rounded-xl px-4 py-3 text-gray-900 dark:text-[#EAEAEA] placeholder:text-gray-500 focus:border-teal-400 focus:ring-2 focus:ring-teal-400 transition"
        placeholder="Your Name"
        autocomplete="name"
      />
      <p id="nameError" class="mt-1 text-sm text-red-500 flex items-center gap-2 font-semibold hidden" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01M12 5a7 7 0 110 14 7 7 0 010-14z" />
        </svg>
        <span></span>
      </p>
    </div>

    <div>
      <label for="email" class="block mb-1 font-semibold text-gray-700 dark:text-gray-400">Email</label>
      <input
        type="email"
        id="email"
        name="email"
        aria-describedby="emailError"
        class="w-full bg-white dark:bg-[#0D0D0D] border-2 border-gray-300 dark:border-gray-600 rounded-xl px-4 py-3 text-gray-900 dark:text-[#EAEAEA] placeholder:text-gray-500 focus:border-teal-400 focus:ring-2 focus:ring-teal-400 transition"
        placeholder="your.email@example.com"
        autocomplete="email"
      />
      <p id="emailError" class="mt-1 text-sm text-red-500 flex items-center gap-2 font-semibold hidden" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01M12 5a7 7 0 110 14 7 7 0 010-14z" />
        </svg>
        <span></span>
      </p>
    </div>

    <div>
      <label for="message" class="block mb-1 font-semibold text-gray-700 dark:text-gray-400">Message</label>
      <textarea
        id="message"
        name="message"
        aria-describedby="messageError"
        rows="5"
        class="w-full bg-white dark:bg-[#0D0D0D] border-2 border-gray-300 dark:border-gray-600 rounded-xl px-4 py-3 text-gray-900 dark:text-[#EAEAEA] placeholder:text-gray-500 focus:border-teal-400 focus:ring-2 focus:ring-teal-400 transition resize-y"
        placeholder="Write your message..."
      ></textarea>
      <p id="messageError" class="mt-1 text-sm text-red-500 flex items-center gap-2 font-semibold hidden" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01M12 5a7 7 0 110 14 7 7 0 010-14z" />
        </svg>
        <span></span>
      </p>
    </div>

    <button
      type="submit"
      id="submitBtn"
      class="w-full bg-teal-500 hover:bg-teal-600 transition rounded-xl py-4 font-extrabold text-white dark:text-[#0D0D0D] flex justify-center items-center gap-3 select-none"
      aria-live="polite"
      aria-busy="false"
    >
      <span>Send Message</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
        <path d="M2.94 2.94a.75.75 0 011.06 0l12 12a.75.75 0 01-1.06 1.06L7.06 7.06l-4.12 4.13a.75.75 0 11-1.06-1.06l5-5z" />
      </svg>
    </button>

    <p id="generalError" class="mt-4 text-center text-red-500 font-semibold flex items-center justify-center gap-2 hidden" role="alert" aria-live="assertive">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
      <span></span>
    </p>

    <p id="successMessage" class="mt-4 text-center text-green-600 dark:text-green-400 font-extrabold flex items-center justify-center gap-2 hidden" role="alert" aria-live="assertive">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
      </svg>
      <span>Thank you! Your message has been sent.</span>
    </p>
  </form>
</div>


<!-- Tailwind CSS Animations -->
<style>
  @keyframes fadeInDown {
    0% {
      opacity: 0;
      transform: translateY(-20px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  @keyframes fadeInUp {
    0% {
      opacity: 0;
      transform: translateY(20px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  .animate-fadeInDown {
    animation: fadeInDown 0.7s ease forwards;
  }
  .animate-fadeInUp {
    animation: fadeInUp 0.7s ease forwards;
  }
  .delay-100 {
    animation-delay: 0.1s;
  }
  .delay-200 {
    animation-delay: 0.2s;
  }
</style>
</body>
</html>
<?php include 'footer.php' ?>
<script>
  const items = document.querySelectorAll('.animate-slide img');

  function adjustVisibility() {
    const container = document.querySelector('.animate-slide');
    const containerRect = container.getBoundingClientRect();

    items.forEach((item) => {
      const rect = item.getBoundingClientRect();
      const center = containerRect.left + containerRect.width / 2;
      const distance = Math.abs(rect.left + rect.width / 2 - center);

      const maxDistance = containerRect.width / 2;
      const visibility = 1 - Math.min(distance / maxDistance, 1);
      item.style.opacity = 0.4 + 0.6 * visibility;
      item.style.transform = `scale(${0.95 + 0.05 * visibility})`;
    });
  }

  adjustVisibility();
  setInterval(adjustVisibility, 100);
</script>