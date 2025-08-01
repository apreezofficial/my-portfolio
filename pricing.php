<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth" style="background-color:#0D0D0D;">
  <script>
            tailwind.config = {
                darkMode: 'class',
            };
        </script>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="google-site-verification" content="mpfvExLjgj2MPsncOhhRIMSpfFm-zw9WJNEGflQNONU" />

  <!-- Primary Meta Tags -->
  <title>Pricing - Precious Adedokun | Affordable Web & App Solutions</title>
  <meta name="title" content="Pricing - Precious Adedokun | Affordable Web & App Solutions" />
  <meta name="description" content="Explore affordable, flexible, and fast web and app development pricing packages offered by Precious Adedokun." />

  <!-- SEO Improvements -->
  <meta name="keywords" content="Pricing, Web Development, Affordable Plans, Precious Adedokun, App Development, Full Stack Developer" />
  <meta name="author" content="Precious Adedokun" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://preciousadedokun.com.ng/pricing" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://preciousadedokun.com.ng/pricing" />
  <meta property="og:title" content="Pricing - Precious Adedokun | Affordable Web & App Solutions" />
  <meta property="og:description" content="Explore affordable, flexible, and fast web and app development pricing packages offered by Precious Adedokun." />
  <meta property="og:image" content="https://preciousadedokun.com.ng/images/ap.jpg" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://preciousadedokun.com.ng/pricing" />
  <meta property="twitter:title" content="Pricing - Precious Adedokun | Affordable Web & App Solutions" />
  <meta property="twitter:description" content="Explore affordable, flexible, and fast web and app development pricing packages offered by Precious Adedokun." />
  <meta property="twitter:image" content="https://preciousadedokun.com.ng/images/ap.jpg" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="https://preciousadedokun.com.ng/images/ap.jpg" />
</head>
<body class="bg-white text-[#0D0D0D] min-h-screen flex flex-col font-sans transition-colors duration-300 dark:bg-[#0D0D0D] dark:text-[#EAEAEA]">
 <section id="pricing" class="bg-gray-100 dark:bg-gray-900 py-20 px-6 max-w-7xl mx-auto rounded-xl shadow-2xl">
  <!-- Header -->
  <div class="text-center mb-14">
    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white mb-4">🚀 Affordable, Flexible, Fast Solutions</h2>
    <p class="text-lg md:text-xl text-gray-700 dark:text-gray-300 max-w-2xl mx-auto">Let’s build your perfect website, app, or system without draining your pocket 💸</p>
    <div class="mt-6 flex justify-center">
      <span class="text-gray-800 dark:text-white font-medium mr-2">View Pricing In:</span>
      <button id="currency-toggle" class="bg-teal-500 hover:bg-teal-600 text-white py-2 px-4 rounded-xl transition-all">USD 💵</button>
    </div>
  </div>

  <!-- Pricing Cards -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-10" id="pricing-cards">
    <!-- Card 1 -->
    <div class="group border border-gray-300 dark:border-gray-700 rounded-2xl p-8 bg-white dark:bg-black hover:shadow-2xl hover:scale-105 transition-all duration-500 cursor-pointer">
      <h3 class="text-2xl font-bold mb-4 text-center text-gray-800 dark:text-white group-hover:text-teal-500">Starter Package</h3>
      <p class="price text-center text-4xl font-extrabold text-gray-900 dark:text-white mb-6" data-usd="180" data-ngn="">$180</p>
      <ul class="space-y-4 text-gray-700 dark:text-gray-300 text-center mb-6">
        <li>✔️ Simple Web Page</li>
        <li>✔️ Fully Responsive</li>
        <li>✔️ Delivered in 4 Days</li>
        <li>✔️ SEO Ready</li>
      </ul>
      <button onclick="location.href='mailto:admin@preciousadedokun.com.ng'" class="w-full py-3 rounded-xl bg-teal-500 text-white font-semibold hover:bg-teal-600 transition-all">Select Plan</button>
    </div>

    <!-- Card 2 -->
    <div class="group border-2 border-teal-500 rounded-2xl p-8 bg-white dark:bg-black hover:shadow-2xl hover:scale-105 transition-all duration-500 cursor-pointer">
      <h3 class="text-2xl font-bold mb-4 text-center text-gray-800 dark:text-white group-hover:text-teal-500">Pro Package</h3>
      <p class="price text-center text-4xl font-extrabold text-gray-900 dark:text-white mb-6" data-usd="350" data-ngn="">$350</p>
      <ul class="space-y-4 text-gray-700 dark:text-gray-300 text-center mb-6">
        <li>✔️ Multi-Page Site</li>
        <li>✔️ Backend Integration</li>
        <li>✔️ Custom Features</li>
        <li>✔️ 2 Weeks Support</li>
      </ul>
      <button onclick="location.href='mailto:admin@preciousadedokun.com.ng'" class="w-full py-3 rounded-xl bg-teal-500 text-white font-semibold hover:bg-teal-600 transition-all">Select Plan</button>
    </div>

    <!-- Card 3 -->
    <div class="group border border-gray-300 dark:border-gray-700 rounded-2xl p-8 bg-white dark:bg-black hover:shadow-2xl hover:scale-105 transition-all duration-500 cursor-pointer">
      <h3 class="text-2xl font-bold mb-4 text-center text-gray-800 dark:text-white group-hover:text-teal-500">Premium Package</h3>
      <p class="price text-center text-4xl font-extrabold text-gray-900 dark:text-white mb-6" data-usd="750" data-ngn="">$750</p>
      <ul class="space-y-4 text-gray-700 dark:text-gray-300 text-center mb-6">
        <li>✔️ Full Web App</li>
        <li>✔️ API Integration</li>
        <li>✔️ Authentication System</li>
        <li>✔️ 1 Month Support</li>
      </ul>
      <button onclick="location.href='mailto:admin@preciousadedokun.com.ng'" class="w-full py-3 rounded-xl bg-teal-500 text-white font-semibold hover:bg-teal-600 transition-all">Select Plan</button>
    </div>
</section>
  <!-- Custom Plan -->
    <div class="group border border-gray-300 dark:border-gray-700 rounded-2xl p-8 bg-white dark:bg-black hover:shadow-2xl hover:scale-105 transition-all duration-500 cursor-pointer md:col-span-3">
      <h3 class="text-2xl font-bold mb-4 text-center text-gray-800 dark:text-white group-hover:text-teal-500">Custom Plan 🎯</h3>
      <p class="text-center text-lg text-gray-700 dark:text-gray-300 mb-6">Don’t see what you need? Let’s create something fully tailored to your dream project 🚀</p>
      <button onclick="window.location.href='/#contact'" class="w-full py-3 rounded-xl bg-teal-500 text-white font-semibold hover:bg-teal-600 transition-all">Contact Me</button>
    </div>
  </div>
<script>
  // Currency Toggle Logic
  let currency = 'USD';
  const toggleButton = document.getElementById('currency-toggle');
  const priceElements = document.querySelectorAll('#pricing-cards p');

  async function fetchExchangeRate() {
    try {
      const response = await fetch('https://api.exchangerate-api.com/v4/latest/USD');
      const data = await response.json();
      const rate = data.rates.NGN;

      priceElements.forEach(price => {
        const usdPrice = parseFloat(price.getAttribute('data-usd'));
        const ngnPrice = Math.round(usdPrice * rate).toLocaleString();
        price.setAttribute('data-ngn', ngnPrice);
      });
    } catch (error) {
      alert('Error fetching exchange rate:');
    }
  }

  toggleButton.addEventListener('click', () => {
    if (currency === 'USD') {
      priceElements.forEach(price => {
        price.textContent = '₦' + price.getAttribute('data-ngn');
      });
      toggleButton.textContent = 'NGN 🇳🇬';
      currency = 'NGN';
    } else {
      priceElements.forEach(price => {
        price.textContent = '$' + price.getAttribute('data-usd');
      });
      toggleButton.textContent = 'USD 💵';
      currency = 'USD';
    }
  });

  // Fetch exchange rates when page loads
  fetchExchangeRate();
</script>
  </body>
  </html>
  <?php include 'footer.php'; ?>