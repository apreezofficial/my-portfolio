<?php
include 'navbar.php';

$conn->set_charset("utf8mb4");

// Check if project ID is set to show details, else show list
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $project_id = intval($_GET['id']);

    // Fetch project details
    $stmt = $conn->prepare("SELECT * FROM projects WHERE id = ?");
    $stmt->bind_param("i", $project_id);
    $stmt->execute();
    $project = $stmt->get_result()->fetch_assoc();

    if (!$project) {
        die("<div class='text-red-500 p-10'>Project not found.</div>");
    }

    // Fetch project images
    $stmt = $conn->prepare("SELECT image_url FROM project_images WHERE project_id = ?");
    $stmt->bind_param("i", $project_id);
    $stmt->execute();
    $images_result = $stmt->get_result();

    $images = [];
    while ($row = $images_result->fetch_assoc()) {
        $images[] = $row['image_url'];
    }
    ?>
<?php
// Fetch only the first image for a given project
$stmt = $conn->prepare("SELECT image_url FROM project_images WHERE project_id = ? ORDER BY id ASC LIMIT 1");
$stmt->bind_param("i", $project_id);
$stmt->execute();
$stmt->bind_result($f_image);
$stmt->fetch();
$stmt->close();
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
  <title><?= htmlspecialchars($project['title']) ?> - Project Details | Precious Adedokun</title>
  <meta name="title" content="<?= htmlspecialchars($project['title']) ?> - Precious Adedokun" />
  <meta name="description" content="<?= htmlspecialchars($project['description']) ?> Built by Precious Adedokun, a backend-focused full stack developer." />

  <!-- SEO Improvements -->
  <meta name="keywords" content="<?= htmlspecialchars($project['title']) ?>, Precious Adedokun, full stack developer, web app, backend developer, project details, professional portfolio" />
  <meta name="author" content="Precious Adedokun" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://preciousadedokun.com.ng/projects/<?= urlencode($project['id']) ?>" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://preciousadedokun.com.ng/projects/<?= urlencode($project['id']) ?>" />
  <meta property="og:title" content="<?= htmlspecialchars($project['title']) ?> - Precious Adedokun" />
  <meta property="og:description" content="<?= htmlspecialchars($project['description']) ?> A project by full stack developer Precious Adedokun." />
  <meta property="og:image" content="<?= htmlspecialchars($f_image) ?>" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://preciousadedokun.com.ng/projects/<?= urlencode($project['id']) ?>" />
  <meta property="twitter:title" content="<?= htmlspecialchars($project['title']) ?> - Precious Adedokun" />
  <meta property="twitter:description" content="<?= htmlspecialchars($project['description']) ?> Built by Precious Adedokun, a backend-heavy full stack developer." />
  <meta property="twitter:image" content="<?= htmlspecialchars($f_image) ?>" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="https://preciousadedokun.com.ng/images/ap.jpg" />
</head>
<body class="bg-white text-[#0D0D0D] min-h-screen flex flex-col font-sans transition-colors duration-300 dark:bg-[#0D0D0D] dark:text-[#EAEAEA]">
  <div class="container mx-auto max-w-5xl px-4 py-10 flex-grow">
    <h1 class="text-4xl font-bold text-center text-[#008080] dark:text-[#20B2AA] mb-10" id="loadin"><?= htmlspecialchars($project['title']) ?></h1>

    <?php if (count($images) > 0): ?>
    <div class="relative rounded-xl overflow-hidden shadow-xl max-w-3xl mx-auto mb-10">
      <div id="carousel-inner" class="flex transition-transform duration-500 ease-in-out" style="transform: translateX(0);">
        <?php foreach ($images as $img): ?>
          <img src="<?= htmlspecialchars($img) ?>" alt="Project Image" class="w-full object-cover flex-shrink-0 max-h-[420px] rounded-xl" />
        <?php endforeach; ?>
      </div>
      <button id="prevBtn" class="absolute top-1/2 left-3 -translate-y-1/2 bg-[#008080] hover:bg-[#006666] dark:bg-[#20B2AA] dark:hover:bg-[#187070] text-white rounded-full p-3 shadow-lg transition-colors">
        <i class="bi bi-chevron-left text-2xl"></i>
      </button>
      <button id="nextBtn" class="absolute top-1/2 right-3 -translate-y-1/2 bg-[#008080] hover:bg-[#006666] dark:bg-[#20B2AA] dark:hover:bg-[#187070] text-white rounded-full p-3 shadow-lg transition-colors">
        <i class="bi bi-chevron-right text-2xl"></i>
      </button>
    </div>
    <?php endif; ?>

    <div class="rounded-2xl shadow-lg p-6 space-y-5 border border-gray-200 dark:border-gray-700 bg-white dark:bg-[#1A1A1A] transition-colors duration-300">
      <p>
        <span class="font-semibold text-[#FF6B00]">Description:</span><br>
        <span class="text-gray-800 dark:text-gray-300"><?= nl2br(htmlspecialchars($project['description'])) ?></span>
      </p>

      <p>
        <span class="font-semibold text-[#FF6B00]">Company:</span>
        <span class="text-gray-800 dark:text-gray-300"><?= htmlspecialchars($project['company_name'] ?: 'N/A') ?></span>
      </p>

      <?php if (!empty($project['github_repo'])): ?>
      <p>
        <span class="font-semibold text-[#FF6B00]">GitHub Repo:</span>
        <a href="<?= htmlspecialchars($project['github_repo']) ?>" target="_blank"
           class="inline-flex items-center gap-1 text-[#008080] dark:text-[#20B2AA] hover:text-[#FF6B00] dark:hover:text-[#FF6B00] transition-colors">
          <i class="bi bi-github"></i> View Repository
        </a>
      </p>
      <?php endif; ?>

      <?php if (!empty($project['live_url'])): ?>
      <p>
        <span class="font-semibold text-[#FF6B00]">Live URL:</span>
        <a href="<?= htmlspecialchars($project['live_url']) ?>" target="_blank"
           class="inline-flex items-center gap-1 text-[#008080] dark:text-[#20B2AA] hover:text-[#FF6B00] dark:hover:text-[#FF6B00] transition-colors">
          <i class="bi bi-box-arrow-up-right"></i> Visit Site
        </a>
      </p>
      <?php endif; ?>

      <p>
        <span class="font-semibold text-[#FF6B00]">Technologies Used:</span>
        <span class="text-gray-800 dark:text-gray-300"><?= htmlspecialchars($project['technologies']) ?></span>
      </p>

      <p>
        <span class="font-semibold text-[#FF6B00]">Date Completed:</span>
        <span class="text-gray-800 dark:text-gray-300"><?= date('F j, Y', strtotime($project['date_done'])) ?></span>
      </p>

      <?php if (!empty($project['extra_info'])): ?>
      <p>
        <span class="font-semibold text-[#FF6B00]">Additional Info:</span><br>
        <span class="text-gray-800 dark:text-gray-300"><?= nl2br(htmlspecialchars($project['extra_info'])) ?></span>
      </p>
      <?php endif; ?>
    </div>

    <div class="text-center mt-8">
      <a href="/projects" class="inline-flex items-center gap-2 px-6 py-3 bg-[#008080] hover:bg-[#FF6B00] dark:bg-[#20B2AA] dark:hover:bg-[#FF6B00] text-white rounded-full font-medium transition-colors">
        <i class="bi bi-arrow-left-circle-fill"></i> Back to Projects
      </a>
    </div>
  </div>

  <script>
    const carouselInner = document.getElementById('carousel-inner');
    const imagesCount = <?= count($images) ?>;
    let currentIndex = 0;

    document.getElementById('prevBtn').addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + imagesCount) % imagesCount;
      carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
    });

    document.getElementById('nextBtn').addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % imagesCount;
      carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
    });
  </script>
</body>
</html>

<?php
} else {
    // Show project list

    $query = "SELECT id, title, company_name, date_done, property FROM projects ORDER BY CAST(property AS UNSIGNED) ASC;";
    $result = $conn->query($query);
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
  <title>Projects | Precious Adedokun</title>
  <meta name="title" content="Projects - Precious Adedokun" />
  <meta name="description" content="Explore a collection of powerful full stack projects by Precious Adedokun, showcasing backend-heavy architecture, scalable solutions, and seamless user experiences." />

  <!-- SEO Improvements -->
  <meta name="keywords" content="Precious Adedokun projects, full stack apps, backend developer work, web development, app development portfolio, APCodeSphere projects" />
  <meta name="author" content="Precious Adedokun" />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://preciousadedokun.com.ng/projects" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://preciousadedokun.com.ng/projects" />
  <meta property="og:title" content="Projects | Precious Adedokun - Full Stack Developer" />
  <meta property="og:description" content="Dive into a curated portfolio of full stack applications developed by Precious Adedokun, with a strong backend focus and clean UI/UX." />
  <meta property="og:image" content="/images/ap.jpg" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://preciousadedokun.com.ng/projects" />
  <meta property="twitter:title" content="Projects | Precious Adedokun - Full Stack Developer" />
  <meta property="twitter:description" content="Discover creative and scalable web apps built by Precious Adedokun, a backend-focused full stack developer." />
  <meta property="twitter:image" content="/images/ap.jpg" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="/images/ap.jpg" />
</head>
<body class="bg-white text-[#0D0D0D] dark:bg-[#0D0D0D] dark:text-[#EAEAEA] min-h-screen transition-colors duration-300">
  <div class="container mx-auto px-5 py-10">
    <h1 class="text-4xl font-semibold mb-8 text-teal-500 dark:text-teal-400" id="loadin">Projects</h1>

    <?php if ($result && $result->num_rows > 0): ?>
      <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        <?php while ($project = $result->fetch_assoc()): ?>
          <?php
            $projectId = $project['id'];
            $imgQuery = $conn->query("SELECT image_url FROM project_images WHERE project_id = $projectId LIMIT 1");
            $imageRow = $imgQuery->fetch_assoc();
            $firstImage = $imageRow['image_url'] ?? null;
          ?>

          <div class="bg-white dark:bg-[#1A1A1A] rounded-lg shadow-lg p-4 flex flex-col h-full border border-gray-200 dark:border-gray-700 hover:shadow-teal-500/50 transition-shadow">
            <?php if ($firstImage): ?>
              <img src="<?= htmlspecialchars($firstImage) ?>" alt="Project Image"
                class="w-full h-48 object-cover rounded-md mb-4 border border-gray-300 dark:border-gray-600 shadow-sm transition" />
            <?php endif; ?>

            <h5 class="text-2xl font-semibold mb-2 text-teal-600 dark:text-teal-400"><?= htmlspecialchars($project['title']) ?></h5>
            <p class="text-gray-700 dark:text-gray-400 mb-1">Company: <?= htmlspecialchars($project['company_name'] ?: 'N/A') ?></p>
            <p class="text-gray-600 dark:text-gray-500 mb-4">Completed: <?= date('F Y', strtotime($project['date_done'])) ?></p>

            <a href="/projects/<?= $project['id'] ?>"
              class="mt-auto inline-flex items-center justify-center gap-2 rounded bg-teal-600 hover:bg-orange-500 px-4 py-2 font-semibold text-white transition-colors">
              View Project
              <i class="bi bi-arrow-right-circle-fill"></i>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <p class="text-gray-500 dark:text-gray-400">No projects found.</p>
    <?php endif; ?>
  </div>
</body>
</html>

<?php
}
include 'footer.php';
?>
