# Portfolio
## 📌 About the project
This repository contains the complete source code of my [portfolio website](https://www.milanvanwinkel.be), in which I present my studies, experience, projects, and skills.

This project is actively maintained and continuously updated as my skills and experience grow.

## 🎯 Goal of the project
This portfolio was developed as a final project for my jury presentation in June 2025. The goal was to build a professional and dynamic website where I can showcase my technical skills, projects, and experiences.

## 🧠 Motivation
I had previously built a portfolio website in the early stages of my studies, but it was built entirely statically using HTML, CSS, and Bootstrap.

After completing my internship in May 2025, I decided to build a more advanced and professional solution for my jury presentation. I started from scratch, but after a few days, I chose to work with an existing template as a base.

In hindsight, this was a good choice, as the final result was positively received by the jury members.

## 🕒 When did I start this project?
This project started in late May 2025 and is still being further updated and improved to this day.

## 🛠️ Technologies
- Laravel (PHP framework)
- PHP
- Blade templating engine
- MySQL (Eloquent ORM)
- CSS
- JavaScript
- Composer
- HTML
- Tailwind CSS
- Bootstrap
- Node.js & npm

## 📁 Project architecture
The website is built according to the Laravel MVC pattern:

- **Models**: retrieve data from the linked MySQL database via Eloquent ORM
- **Views**: built using Blade templates
- **Controllers**: handle the logic and various actions regarding data processing

All content (projects, education, work experience, and skills) is dynamically loaded from the database.

## ⚙️ Installation & setup

Follow these steps to run the project locally:

```bash
# Clone project locally
git clone https://github.com/MilanVW-Personal/portfolio-2025_v2.git
cd portfolio-2025_v2

# Install dependencies
composer install
npm install

# Environment setup
cp .env.example .env
php artisan key:generate

# Database
php artisan migrate --seed

# Run project
npm run dev
php artisan serve
```
### Requirements
- PHP 8+
- Composer
- Node.js & npm
- MySQL

## 🔮 Future changes & improvements
- Add multilingualism to the website
- Detail pages per project

## 📸 Screenshots
Below is a screenshot of the portfolio landing page (in Dutch).
![screenshot_landing-page](public/assets/imgs/screenshot-landing-page.png)

## 🌐 Languages
- English (current)
- Dutch: [`README_NL.md`](README_NL.md)