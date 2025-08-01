<footer class="bg-white dark:bg-[#0D0D0D] text-gray-800 dark:text-[#EAEAEA] px-8 py-12 select-none transition-colors duration-300">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center md:items-start gap-10 md:gap-0">

    <!-- Brand & Description -->
    <div class="flex flex-col items-center md:items-start space-y-3 md:max-w-xs fade-section opacity-0 translate-x-[-20px]">
      <h1 class="text-4xl font-extrabold tracking-wide text-[#008080] hover:text-[#FF6F61] transition-colors cursor-default select-text" id="loadin">
        APCodeSphere
      </h1>
      <p class="text-gray-600 dark:text-gray-400 text-center md:text-left leading-relaxed">
        Precious Adedokun, the ultimate coding sphere — building futuristic web & app experiences with passion and precision.
      </p>
      <div class="flex space-x-5 mt-3">
        <a href="https://github.com/apreezofficial" target="_blank" aria-label="GitHub" class="text-[#008080] hover:text-[#FF6F61] transition-transform transform hover:scale-110">
          <i class="bi bi-github text-2xl"></i>
        </a>
        <a href="https://x.com/apcodesphere" target="_blank" aria-label="Twitter" class="text-[#008080] hover:text-[#FF6F61] transition-transform transform hover:scale-110">
          <i class="bi bi-twitter text-2xl"></i>
        </a>
                <a href="https://tiktok.com/@apcodesphere" target="_blank" aria-label="tiktok" class="text-[#008080] hover:text-[#FF6F61] transition-transform transform hover:scale-110">
          <i class="bi bi-tiktok text-2xl"></i>
        </a>
        <a href="https://instagram.com/apcodesphere" target="_blank" aria-label="Instagram" class="text-[#008080] hover:text-[#FF6F61] transition-transform transform hover:scale-110">
          <i class="bi bi-instagram text-2xl"></i>
        </a>

        <a href="https://youtube.com/@apcodesphere" target="_blank" aria-label="YouTube" class="text-[#008080] hover:text-[#FF6F61] transition-transform transform hover:scale-110">
          <i class="bi bi-youtube text-2xl"></i>
        </a>
      </div>
    </div>

    <!-- Quick Links -->
    <div class="flex flex-col space-y-4 text-center md:text-left fade-section opacity-0 translate-y-[20px]">
      <h2 class="text-xl font-semibold mb-3 text-[#008080]" id="loadin">Quick Links</h2>
      <nav class="flex flex-col space-y-2 text-gray-600 dark:text-gray-400">
        <a href="/" class="hover:text-[#FF6F61] transition-colors">Home</a>
        <a href="/projects" class="hover:text-[#FF6F61] transition-colors">Projects</a>
        <a href="/#contact" class="hover:text-[#FF6F61] transition-colors">Contact</a>
        <a href="/blog.php" class="hover:text-[#FF6F61] transition-colors">Blog</a>
      </nav>
    </div>

    <!-- Contact Info -->
    <div class="flex flex-col space-y-4 text-center md:text-left fade-section opacity-0 translate-x-[20px] max-w-xs">
      <h2 class="text-xl font-semibold mb-3 text-[#008080]" id="loadin">Contact</h2>
      <p class="text-gray-600 dark:text-gray-400 flex items-center justify-center md:justify-start gap-3">
        <i class="bi bi-envelope-fill text-[#FF6F61] text-lg animate-pulse"></i>
        <span>admin@preciousadedokun.com.ng</span>
      </p>
            <p class="text-gray-600 dark:text-gray-400 flex items-center justify-center md:justify-start gap-3">
        <i class="bi bi-envelope-fill text-[#FF6F61] text-lg animate-pulse"></i>
        <span>apreezofficial@gmail.com</span>
      </p>
      <p class="text-gray-600 dark:text-gray-400 flex items-center justify-center md:justify-start gap-3">
        <i class="bi bi-telephone-fill text-[#FF6F61] text-lg animate-pulse"></i>
        <span>+234 906 477 9856</span>
      </p>
      <p class="text-gray-600 dark:text-gray-400 flex items-center justify-center md:justify-start gap-3">
        <i class="bi bi-geo-alt-fill text-[#FF6F61] text-lg animate-pulse"></i>
        <span>Ekiti, Nigeria</span>
      </p>
    </div>
  </div>

  <div class="mt-12 border-t border-[#008080]/30 pt-6 text-center text-gray-500 dark:text-gray-400 text-sm select-text fade-section opacity-0 translate-y-[20px]">
    &copy; <?php echo date('Y'); ?> APCodeSphere. All rights reserved.
  </div>
</footer>
<style>
  /* Initial hidden states */
  .fade-section {
    transition: opacity 0.8s ease, transform 0.8s ease;
  }
  .fade-in-left {
    opacity: 1 !important;
    transform: translateX(0) !important;
  }
  .fade-in-up {
    opacity: 1 !important;
    transform: translateY(0) !important;
  }
  .fade-in-right {
    opacity: 1 !important;
    transform: translateX(0) !important;
  }
</style>
<script>const form = document.getElementById('contactForm');
const submitBtn = document.getElementById('submitBtn');

const errors = {
  name: document.getElementById('nameError'),
  email: document.getElementById('emailError'),
  message: document.getElementById('messageError'),
  general: document.getElementById('generalError'),
  success: document.getElementById('successMessage')
};

// Show error message helper
function showError(field, message) {
  errors[field].querySelector('span').textContent = message;
  errors[field].classList.remove('hidden');
}

// Hide error message helper
function hideError(field) {
  errors[field].classList.add('hidden');
  errors[field].querySelector('span').textContent = '';
}

// Hide all errors
function clearErrors() {
  Object.keys(errors).forEach(key => hideError(key));
}

// Reset submit button
function resetSubmitBtn() {
  submitBtn.disabled = false;
  submitBtn.setAttribute('aria-busy', 'false');
  submitBtn.innerHTML = `
    <span>Send Message</span>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
      <path d="M2.94 2.94a.75.75 0 011.06 0l12 12a.75.75 0 01-1.06 1.06L7.06 7.06l-4.12 4.13a.75.75 0 11-1.06-1.06l5-5z" />
    </svg>
  `;
}

form.addEventListener('input', e => {
  if (errors[e.target.name]) hideError(e.target.name);
  hideError('general');
  hideError('success');
});

form.addEventListener('submit', async e => {
  e.preventDefault();
  clearErrors();

  const name = form.name.value.trim();
  const email = form.email.value.trim();
  const message = form.message.value.trim();

  let hasError = false;

  if (!name) {
    showError('name', 'Name is required.');
    hasError = true;
  }

  if (!email) {
    showError('email', 'Email is required.');
    hasError = true;
  } else if (!/\S+@\S+\.\S+/.test(email)) {
    showError('email', 'Email is invalid.');
    hasError = true;
  }

  if (!message) {
    showError('message', 'Message cannot be empty.');
    hasError = true;
  }

  if (hasError) return;

  submitBtn.disabled = true;
  submitBtn.setAttribute('aria-busy', 'true');
  submitBtn.innerHTML = `
    <svg class="animate-spin -ml-1 mr-3 h-6 w-6 text-[#0D0D0D]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true">
      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="#14B8A6" stroke-width="4"></circle>
      <path class="opacity-75" fill="#14B8A6" d="M4 12a8 8 0 018-8v8H4z"></path>
    </svg>Sending...
  `;

  try {
    const formData = new FormData(form);

    const response = await fetch('ajax/contact.php', {
      method: 'POST',
      body: formData,
    });

    if (!response.ok) throw new Error('Network response was not ok');

    const data = await response.json();

    if (data.success) {
      errors.success.classList.remove('hidden');
      form.reset();
    } else if (data.errors) {
      // Show field-specific errors from backend
      Object.entries(data.errors).forEach(([field, message]) => {
        if (errors[field]) {
          showError(field, message);
        } else {
          showError('general', message);
        }
      });
    } else if (data.message) {
      // General error message
      showError('general', data.message);
    } else {
      showError('general', 'An unexpected error occurred. Please try again later.');
    }
  } catch (error) {
    showError('general', 'Failed to send message. Please check your connection and try again.');
    console.error('Form submission error:', error);
  } finally {
    resetSubmitBtn();
  }
});</script>
<script>
  const slider = document.getElementById('testimonial-slider');
  const slides = slider.children;
  const totalSlides = slides.length;
  let currentIndex = 0;

  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  const dotsContainer = document.getElementById('dots');

  // Create dots dynamically
  for(let i = 0; i < totalSlides; i++) {
    const dot = document.createElement('button');
    dot.classList.add('w-4', 'h-4', 'rounded-full', 'bg-teal-300/60', 'hover:bg-teal-400', 'transition');
    dot.setAttribute('aria-label', `Go to testimonial ${i+1}`);
    dot.addEventListener('click', () => {
      currentIndex = i;
      updateSlider();
      resetAutoSlide();
    });
    dotsContainer.appendChild(dot);
  }

  function updateSlider() {
  slider.style.transform = `translateX(-${currentIndex * 100}%)`;
  updateDots();
}

function updateDots() {
  [...dotsContainer.children].forEach((dot, idx) => {
    dot.classList.remove(
      'bg-teal-500',
      'scale-110',
      'shadow-[0_0_8px_2px_rgba(72,187,120,0.7)]',
      'bg-teal-300/60',
      'dark:bg-teal-400/50'
    );

    if (idx === currentIndex) {
      dot.classList.add(
        'bg-teal-500',
        'scale-110',
        'shadow-[0_0_8px_2px_rgba(72,187,120,0.7)]'
      );
    } else {
      dot.classList.add('bg-teal-300/60', 'dark:bg-teal-400/50');
    }
  });
}

  prevBtn.addEventListener('click', () => {
    currentIndex = (currentIndex === 0) ? totalSlides - 1 : currentIndex - 1;
    updateSlider();
    resetAutoSlide();
  });

  nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex === totalSlides - 1) ? 0 : currentIndex + 1;
    updateSlider();
    resetAutoSlide();
  });

  let slideInterval = setInterval(() => {
    currentIndex = (currentIndex === totalSlides - 1) ? 0 : currentIndex + 1;
    updateSlider();
  }, 4000);

  function resetAutoSlide() {
    clearInterval(slideInterval);
    slideInterval = setInterval(() => {
      currentIndex = (currentIndex === totalSlides - 1) ? 0 : currentIndex + 1;
      updateSlider();
    }, 6000);
  }

  // Initialize
  updateSlider();
</script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('#projects .group');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('opacity-100', 'translate-y-0');
        }
      });
    }, { threshold: 0.1 });

    cards.forEach(card => {
      card.classList.add('opacity-0', 'translate-y-6', 'transition-all', 'duration-700');
      observer.observe(card);
    });
  });
</script>
<script>
  const progressBars = document.querySelectorAll('.progress');
  let skillsAnimated = false;

  function isInView(el) {
    const rect = el.getBoundingClientRect();
    return rect.top <= window.innerHeight * 0.8;
  }

  function animateBars() {
    if (!skillsAnimated && isInView(document.getElementById('skills'))) {
      progressBars.forEach(bar => {
        const width = bar.getAttribute('data-width');
        bar.style.width = width;
      });
      skillsAnimated = true;
    }
  }

  window.addEventListener('scroll', animateBars);
  window.addEventListener('load', animateBars);
</script>
<script>
  const counters = document.querySelectorAll('.counter');
  let started = false;

  function runCounters() {
    const duration = 1000; // total animation time in ms
    const startTime = performance.now();

    function update() {
      const now = performance.now();
      const elapsed = now - startTime;
      const progress = Math.min(elapsed / duration, 1); // from 0 to 1

      counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        // Calculate current count based on progress
        counter.innerText = Math.floor(progress * target);
      });

      if (progress < 1) {
        requestAnimationFrame(update);
      } else {
        // Ensure all counters show their exact target value at the end
        counters.forEach(counter => {
          counter.innerText = counter.getAttribute('data-target');
        });
      }
    }

    requestAnimationFrame(update);
  }

  function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return rect.top <= (window.innerHeight || document.documentElement.clientHeight);
  }

  window.addEventListener('scroll', () => {
    const statsSection = document.getElementById('stats');
    if (!started && isInViewport(statsSection)) {
      started = true;
      runCounters();
    }
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1, // trigger when 10% visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          // Determine animation direction by original translate
          if (el.classList.contains('translate-x-[-20px]')) {
            el.classList.add('fade-in-left');
          } else if (el.classList.contains('translate-x-[20px]')) {
            el.classList.add('fade-in-right');
          } else if (el.classList.contains('translate-y-[20px]')) {
            el.classList.add('fade-in-up');
          } else {
            // default fade-in-up
            el.classList.add('fade-in-up');
          }
          observer.unobserve(el); // animate only once
        }
      });
    }, observerOptions);

    document.querySelectorAll('.fade-section').forEach(section => {
      observer.observe(section);
    });
  });
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll('#loadin');

  elements.forEach(el => {
    const originalText = el.textContent.trim();
    el.textContent = "";

    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          el.classList.add("visible");
          let i = 0;

          function typeLetter() {
            if (i < originalText.length) {
              el.textContent += originalText[i];
              i++;
              setTimeout(typeLetter, 35); // speed per letter
            }
          }

          typeLetter();
          obs.unobserve(el); // Only run once per element
        }
      });
    });

    observer.observe(el);
  });
});
</script>