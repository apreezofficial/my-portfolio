# APCodeSphere: Precious Adedokun's Portfolio 🌐

## Overview
APCodeSphere is a dynamic and responsive personal portfolio website showcasing the work and expertise of Precious Adedokun, a Full Stack Developer with a strong focus on backend architecture. This platform is built to impress, featuring elegant design, robust content management, and seamless user experience.

## Features ✨

### Public-Facing Website
- **Dynamic Project Showcase**: Browse detailed portfolio projects with images, descriptions, technologies, and live links.
- **Client Testimonials**: View feedback from satisfied clients through an interactive slider.
- **GitHub Stats Integration**: See real-time GitHub contributions, repositories, and follower count.
- **Contact Form**: Easily send messages directly to Precious Adedokun, with secure backend processing.
- **Responsive Design**: Flawlessly adapts to various screen sizes and devices using Tailwind CSS.
- **Dark/Light Mode Toggle**: System-preference aware theme switching for a comfortable viewing experience.
- **SEO Optimized**: Meta tags, canonical links, and sitemap to enhance search engine visibility.

### Admin Panel (Backend API & Content Management)
- **Secure Authentication**: Robust admin login system to protect backend functionalities.
- **Project CRUD**: Create, Read, Update, and Delete portfolio projects, including managing multiple project images.
- **Testimonial CRUD**: Add, edit, and remove client testimonials shown on the homepage.
- **Contact Message Viewer**: Review and manage messages submitted via the contact form.
- **Admin User Management**: Add or remove administrative accounts for secure access control.

## Usage 🚀

### For Visitors
Navigate through the intuitive interface to:
- **Explore Projects**: Click on the "Projects" link in the navigation bar to see a curated list of past works. Select any project to view its detailed page.
- **Read Testimonials**: Scroll down the homepage to the "What People Say" section to read glowing reviews.
- **View GitHub Activity**: Check out the "GitHub" section to see real-time statistics and contributions.
- **Get in Touch**: Use the "Contact Me" form at the bottom of the homepage to send a direct message.

### For Administrators
Access the powerful admin panel to manage content:
1. **Login**: Visit `/admin/login.php` to access the admin login page. Enter your credentials.
2. **Dashboard**: Upon successful login, you'll be redirected to the main dashboard (`/admin/index.php`) where you can see an overview of projects and images.
3. **Manage Projects**:
   - Go to `/admin/projects.php?id=[PROJECT_ID]` to edit an existing project.
   - To create a new project, navigate to `/admin/projects.php?create=true` and fill in the details. The main image URL can be auto-generated from the live URL if left empty.
   - You can also manage project images (add new URLs, delete existing ones) from the project edit page.
4. **Manage Testimonials**: Visit `/admin/testimonials.php` to add new testimonials, or edit/delete existing ones from the list.
5. **Manage Contacts**: View and delete contact messages submitted through the website's form at `/admin/contacts.php`.
6. **Manage Admins**: Go to `/admin/admin.php` to add new admin users or delete existing ones.

## APCodeSphere Backend API

## Overview
This section details the backend infrastructure for Precious Adedokun's portfolio website. Developed primarily with **PHP** and backed by a **MySQL** database, it provides robust content management capabilities for projects, testimonials, and contact inquiries, alongside a secure administrative interface.

## Features
- **PHP**: Core language for server-side logic and application control.
- **MySQL**: Relational database for persistent storage of projects, testimonials, contact messages, and admin credentials.
- **Authentication System**: Secure admin login and user management with password hashing.
- **Project Management**: CRUD operations for portfolio projects, including dynamic image handling.
- **Testimonial Management**: CRUD operations for client testimonials.
- **Contact Message Handling**: Storage and deletion of contact form submissions.

## Getting Started
### Installation
1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-username/apcodesphere.git
   cd apcodesphere
   ```
2. **Web Server Setup**:
   Ensure you have a PHP-compatible web server (e.g., Apache, Nginx) configured to serve the project root directory. The `.htaccess` file handles URL rewriting (e.g., `/projects` to `projects.php`).
3. **Database Setup**:
   Create a MySQL database (e.g., `portfolio`). An SQL dump is required to set up the necessary tables. Below is the inferred schema:
   ```sql
   -- Table for admin users
   CREATE TABLE `admins` (
     `id` INT AUTO_INCREMENT PRIMARY KEY,
     `username` VARCHAR(255) NOT NULL UNIQUE,
     `password` VARCHAR(255) NOT NULL,
     `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

   -- Table for portfolio projects
   CREATE TABLE `projects` (
     `id` INT AUTO_INCREMENT PRIMARY KEY,
     `title` VARCHAR(255) NOT NULL,
     `description` TEXT,
     `company_name` VARCHAR(255),
     `github_repo` VARCHAR(255),
     `live_url` VARCHAR(255),
     `technologies` VARCHAR(255),
     `date_done` DATE,
     `extra_info` TEXT,
     `property` INT DEFAULT 0, -- Used for sorting order
     `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

   -- Table for project images (one-to-many relationship with projects)
   CREATE TABLE `project_images` (
     `id` INT AUTO_INCREMENT PRIMARY KEY,
     `project_id` INT,
     `image_url` VARCHAR(255) NOT NULL,
     FOREIGN KEY (`project_id`) REFERENCES `projects`(`id`) ON DELETE CASCADE
   );

   -- Table for client testimonials
   CREATE TABLE `testimonials` (
     `id` INT AUTO_INCREMENT PRIMARY KEY,
     `name` VARCHAR(255) NOT NULL,
     `role` VARCHAR(255),
     `photo` VARCHAR(255),
     `testimonial` TEXT NOT NULL,
     `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

   -- Table for contact messages
   CREATE TABLE `contact_messages` (
     `id` INT AUTO_INCREMENT PRIMARY KEY,
     `name` VARCHAR(255) NOT NULL,
     `email` VARCHAR(255) NOT NULL,
     `message` TEXT NOT NULL,
     `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```
4. **Configure Database Connection**:
   Update `conn.php` with your database credentials.
5. **Install Composer Dependencies**:
   If applicable, install PHP dependencies. (None found in `vendor/css` or `vendor/bootstrap-icons` so probably not applicable here. Assuming they are included directly).

### Environment Variables
For security and ease of management, it is recommended to manage these via a `.env` file and load them, rather than hardcoding.
- `conn.php`:
  - `DB_HOST`: `0.0.0.0` (Example: `localhost`)
  - `DB_NAME`: `portfolio` (Example: `my_portfolio_db`)
  - `DB_USERNAME`: `root` (Example: `db_user`)
  - `DB_PASSWORD`: `root` (Example: `your_db_password`)
- `settings.php`:
  - `GITHUB_TOKEN`: `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` (A personal access token for GitHub API access, client-side exposed but used for public stats)

## API Documentation
### Base URL
`/` (for admin panel form submissions)
`/ajax/contact.php` (for contact form submissions)

### Endpoints
#### `POST /admin/login.php`
**Purpose**: Authenticates admin users to access the backend dashboard.
**Request**:
```
full-form-data
username: [string] - Admin username (required)
password: [string] - Admin password (required)
login: [string] - Value "true" to trigger action
```
**Response**:
Redirects to `/admin/index.php` on successful login.
**Errors**:
- `302 Found` (Redirect): Invalid credentials (sets `$_SESSION['error']` message).

#### `POST /admin/admin.php`
**Purpose**: Manages admin user accounts.
**Request**:
`Add Admin`:
```
full-form-data
username: [string] - New admin username (required)
password: [string] - New admin password (required)
add_admin: [string] - Value "true" to trigger action
```
`Delete Admin`:
```
full-form-data
admin_id: [integer] - ID of the admin to delete (required)
delete_admin: [string] - Value "true" to trigger action
```
**Response**:
Redirects to `/admin/admin.php` after successful operation.
**Errors**:
- `302 Found` (Redirect): Database errors or invalid input (handled by redirect, no specific error response body).

#### `POST /admin/contacts.php`
**Purpose**: Deletes contact messages.
**Request**:
```
full-form-data
delete_id: [integer] - ID of the contact message to delete (required)
```
**Response**:
Redirects to `/admin/contacts.php` after successful deletion.
**Errors**:
- `302 Found` (Redirect): Database errors.

#### `POST /admin/projects.php`
**Purpose**: Manages portfolio projects and their images.
**Request**:
`Create Project`:
```
full-form-data
title: [string] - Project title (required)
description: [string] - Project description
company_name: [string] - Company associated with the project
github_repo: [string] - GitHub repository URL
live_url: [string] - Live demo URL
technologies: [string] - Comma-separated technologies used (e.g., "PHP, MySQL, Tailwind CSS")
date_done: [date] - Completion date (YYYY-MM-DD)
extra_info: [string] - Additional information
property: [integer] - Numeric value for sorting (required)
image_url: [string] - Main image URL (optional, auto-generates from live_url if empty)
create_project: [string] - Value "true" to trigger action
```
`Update Project` (when `id` is present in URL):
```
full-form-data
title: [string] - Project title (required)
description: [string] - Project description
company_name: [string] - Company associated with the project
github_repo: [string] - GitHub repository URL
live_url: [string] - Live demo URL
technologies: [string] - Comma-separated technologies used
date_done: [date] - Completion date (YYYY-MM-DD)
extra_info: [string] - Additional information
property: [integer] - Numeric value for sorting (required)
existing_image_url[]: [array of strings] - Existing image URLs (read-only in form)
new_image_url: [string] - URL of a new image to add
delete_image_id[]: [array of integers] - IDs of images to delete (checkboxes)
```
**Response**:
Redirects to `/admin/projects.php?created=success` (for create) or `/admin/projects.php?id=[project_id]` (for update) on success.
**Errors**:
- `302 Found` (Redirect): Database errors.

#### `POST /admin/testimonials.php`
**Purpose**: Manages client testimonials.
**Request**:
`Add Testimonial`:
```
full-form-data
name: [string] - Author's name (required)
role: [string] - Author's role (e.g., "CEO, Company A")
photo: [string] - Photo URL of the author (required)
testimonial: [string] - Testimonial text (required)
submit: [string] - Value "true" to trigger action
```
`Delete Testimonial`:
```
full-form-data
delete_id: [integer] - ID of the testimonial to delete (required)
```
`Edit Testimonial`:
```
full-form-data
edit_id: [integer] - ID of the testimonial to update (required)
edit_name: [string] - Author's updated name (required)
edit_role: [string] - Author's updated role
edit_photo: [string] - Author's updated photo URL (required)
edit_testimonial: [string] - Updated testimonial text (required)
```
**Response**:
Displays success message on the same page (no redirect).
**Errors**:
- No specific error response provided, typical behavior for non-API form submissions is to show a generic message or error on the page itself.

#### `POST /ajax/contact.php`
**Purpose**: Submits contact messages from the public form.
**Request**:
```
application/x-www-form-urlencoded
name: [string] - Sender's full name (required)
email: [string] - Sender's email address (required)
message: [string] - Content of the message (required)
```
**Response**:
```json
{
  "success": true,
  "message": "Thank you! Your message has been sent."
}
```
**Errors**:
- `200 OK` (with JSON body):
  ```json
  {
    "success": false,
    "errors": {
      "name": "Name is required.",
      "email": "Email is invalid.",
      "message": "Message cannot be empty."
    },
    "message": "Validation failed."
  }
  ```
- Other HTTP Status (e.g., `500 Internal Server Error`): For server-side issues.

## Technologies Used 🛠️
| Category       | Technology        | Description                                  | Link                                           |
| :------------- | :---------------- | :------------------------------------------- | :--------------------------------------------- |
| **Backend**    | PHP               | Server-side scripting language               | [php.net](https://www.php.net/)                |
| **Database**   | MySQL             | Relational database management system        | [mysql.com](https://www.mysql.com/)            |
| **Frontend**   | HTML5             | Structure of web pages                       | [html.spec.whatwg.org](https://html.spec.whatwg.org/) |
|                | CSS3              | Styling of web pages                         | [w3.org/Style/CSS](https://www.w3.org/Style/CSS) |
|                | JavaScript        | Interactive web elements                     | [javascript.info](https://javascript.info/)    |
| **Frameworks** | Tailwind CSS      | Utility-first CSS framework                  | [tailwindcss.com](https://tailwindcss.com/)  |
|                | Alpine.js         | Lightweight JavaScript framework for interactivity | [alpinejs.dev](https://alpinejs.dev/)        |
| **Libraries**  | ApexCharts        | Modern charting library (for GitHub stats)   | [apexcharts.com](https://apexcharts.com/)    |
|                | Font Awesome      | Icon toolkit                                 | [fontawesome.com](https://fontawesome.com/)  |
|                | Bootstrap Icons   | Open source SVG icon library                 | [icons.getbootstrap.com](https://icons.getbootstrap.com/) |
| **Web Server** | Apache / Nginx    | (Implicit) Handles HTTP requests and serves content | [apache.org](https://httpd.apache.org/) / [nginx.com](https://www.nginx.com/) |
| **SEO**        | .htaccess         | Apache configuration for URL rewriting, 404 handling | [apache.org](https://httpd.apache.org/docs/current/howto/htaccess.html) |

## License 📜
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Author Info 🧑‍💻
**Precious Adedokun**

Connect with me on social media:
- **Twitter (X)**: [@apcodesphere](https://x.com/apcodesphere)
- **TikTok**: [@apcodesphere](https://tiktok.com/@apcodesphere)
- **Instagram**: [@apcodesphere](https://instagram.com/apcodesphere)
- **YouTube**: [@apcodesphere](https://youtube.com/@apcodesphere)

## Project Status 📊
[![Project Status: Active Development](https://img.shields.io/badge/Status-Active%20Development-blue)](https://github.com/apreezofficial/apcodesphere)
[![Built with PHP](https://img.shields.io/badge/Built%20with-PHP-777BB4?style=flat&logo=php)](https://www.php.net/)
[![Database: MySQL](https://img.shields.io/badge/Database-MySQL-4479A1?style=flat&logo=mysql)](https://www.mysql.com/)
[![Styled with Tailwind CSS](https://img.shields.io/badge/Styled%20with-TailwindCSS-06B6D4?style=flat&logo=tailwindcss)](https://tailwindcss.com/)
[![Frontend: JavaScript](https://img.shields.io/badge/Frontend-JavaScript-F7DF1E?style=flat&logo=javascript)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)

[![Readme was generated by Dokugen](https://img.shields.io/badge/Readme%20was%20generated%20by-Dokugen-brightgreen)](https://www.npmjs.com/package/dokugen)