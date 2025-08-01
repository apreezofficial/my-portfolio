<?php include 'navbar.php';
?>
<!-- ApexCharts CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.35.3/dist/apexcharts.css" />
<!-- ApexCharts JS -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
 <script>
            tailwind.config = {
                darkMode: 'class',
            };
        </script>
        <head>
  <!-- Primary Meta Tags -->
  <title>Precious Adedokun GitHub Stats</title>
  <meta name="title" content="APCodeSphere GitHub Stats">
  <meta name="description" content="View the latest GitHub stats, profile views, and contributions by APCodeSphere (apreezofficial).">

  <!-- Favicon -->
  <link rel="icon" href="https://avatars.githubusercontent.com/u/163308064?v=4" type="image/png">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://mydomain.com/github">
  <meta property="og:title" content="APCodeSphere GitHub Stats">
  <meta property="og:description" content="Track GitHub profile views, contributions, and activity by APCodeSphere.">
  <meta property="og:image" content="https://avatars.githubusercontent.com/u/163308064?v=4">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://mydomain.com/github">
  <meta property="twitter:title" content="APCodeSphere GitHub Stats">
  <meta property="twitter:description" content="Track GitHub profile views, contributions, and activity by APCodeSphere.">
  <meta property="twitter:image" content="https://avatars.githubusercontent.com/u/163308064?v=4">

  <!-- Canonical Link -->
  <link rel="canonical" href="https://preciousadedokun.com.ng/github">

  <!-- Viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Theme Color (for mobile browser color) -->
<meta name="theme-color" content="#14b8a6">

  <!-- Tailwind CSS or other styles if used -->
  
</head>
<!-- GitHub Stats Card -->
<div class="max-w-xl mx-auto p-6 bg-white dark:bg-gray-900 rounded-lg shadow-lg">
 <!-- Add this inside a container -->
<div class="flex items-center justify-between mb-6">
  <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">GitHub Stats</h2>
  <a href="https://github.com/apreezofficial" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition">
    <i class="fab fa-github text-lg"></i>
    View on GitHub
  </a>
</div>
  <div class="grid grid-cols-2 gap-6 text-center">
    
    <div>
      <p class="text-xl font-semibold text-teal-500" id="total-contributions">0</p>
      <p class="text-gray-600 dark:text-gray-400">Contributions</p>
    </div>
    <div>
      <p class="text-xl font-semibold text-teal-500" id="total-repos">0</p>
      <p class="text-gray-600 dark:text-gray-400">Repositories</p>
    </div>
    <div>
      <p class="text-xl font-semibold text-teal-500" id="total-followers">0</p>
      <p class="text-gray-600 dark:text-gray-400">Followers</p>
    </div>
    <div>
      <p class="text-xl font-semibold text-teal-500" id="total-stars">0</p>
      <p class="text-gray-600 dark:text-gray-400">Stars</p>
    </div>
  </div>

  <!-- Chart Container -->
  <div class="mt-10">
    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Monthly Contributions</h3>
    <div id="activity-chart" class="w-full"></div>
  </div>
</div>
<!-- GitHub Stats Script -->
<script>
  async function fetchGitHubStats() {
    const GITHUB_USERNAME = 'apreezofficial';
    const GITHUB_TOKEN //stored already im settings.php

    const headers = {
      'Authorization': `token ${GITHUB_TOKEN}`,
      'Accept': 'application/vnd.github.v3+json'
    };

    // Fetch ALL repositories (including private & public)
    let repos = [];
    let page = 1;
    while (true) {
      const res = await fetch(`https://api.github.com/user/repos?per_page=100&page=${page}`, { headers });
      const data = await res.json();
      if (!Array.isArray(data) || data.length === 0) break;
      repos = repos.concat(data.filter(repo => !repo.fork)); // No fork filter only
      page++;
    }

    const stars = repos.reduce((acc, repo) => acc + repo.stargazers_count, 0);
    const reposCount = repos.length;

    // Fetch followers
    const userRes = await fetch(`https://api.github.com/users/${GITHUB_USERNAME}`, { headers });
    const userData = await userRes.json();
    const followersCount = userData.followers || 0;

    // Fetch contributions (GraphQL)
    const graphqlRes = await fetch('https://api.github.com/graphql', {
      method: 'POST',
      headers: {
        'Authorization': `bearer ${GITHUB_TOKEN}`,
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        query: `
          {
            viewer {
              contributionsCollection {
                contributionCalendar {
                  totalContributions
                  weeks {
                    contributionDays {
                      date
                      contributionCount
                    }
                  }
                }
              }
            }
          }
        `
      })
    });

    const graphqlData = await graphqlRes.json();
    const contributions = graphqlData.data.viewer.contributionsCollection.contributionCalendar.totalContributions || 0;
    const weeks = graphqlData.data.viewer.contributionsCollection.contributionCalendar.weeks || [];

    // Group contributions by month
    const monthlyData = {};
    weeks.forEach(week => {
      week.contributionDays.forEach(day => {
        const month = new Date(day.date).toLocaleString('default', { month: 'short' });
        monthlyData[month] = (monthlyData[month] || 0) + day.contributionCount;
      });
    });

    const months = Object.keys(monthlyData);
    const monthlyCounts = Object.values(monthlyData);

    animateCounter('total-contributions', contributions);
    animateCounter('total-repos', reposCount);
    animateCounter('total-followers', followersCount);
    animateCounter('total-stars', stars);

    renderChart(months, monthlyCounts);
  }

  function animateCounter(id, endValue) {
    let start = 0;
    const duration = 1500;
    const stepTime = 20;
    const increment = Math.max(1, endValue / (duration / stepTime));
    const element = document.getElementById(id);

    const counter = setInterval(() => {
      start += increment;
      if (start >= endValue) {
        element.textContent = endValue;
        clearInterval(counter);
      } else {
        element.textContent = Math.floor(start);
      }
    }, stepTime);
  }

  function renderChart(categories, data) {
    const isDark = document.documentElement.classList.contains('dark');

    const options = {
      chart: {
        type: 'bar',
        height: 350,
        toolbar: { show: false },
        animations: { enabled: true, speed: 800 }
      },
      series: [{
        name: 'Contributions',
        data: data
      }],
      xaxis: {
        categories: categories,
        labels: {
          style: {
            colors: isDark ? '#cbd5e1' : '#374151'
          }
        }
      },
      yaxis: {
        labels: {
          style: {
            colors: isDark ? '#cbd5e1' : '#374151'
          }
        }
      },
      theme: { mode: isDark ? 'dark' : 'light' },
      colors: ['#14b8a6'],
      plotOptions: {
        bar: {
          borderRadius: 5,
          columnWidth: '60%'
        }
      }
    };

    if (window.githubChart) {
      window.githubChart.destroy();
    }

    window.githubChart = new ApexCharts(document.querySelector("#activity-chart"), options);
    window.githubChart.render();
  }

  fetchGitHubStats();
</script>
<?php include 'footer.php'; ?>