# HPC Website - Deployable package

This package contains a simple PHP website designed for HPC cluster documentation.

## Contents
- `index.php`, `about.php`, `cluster.php`, `getting_started.php`, `jobs.php`, `software.php`, `linux_basics.php`, `faq.php`
- `includes/header.php` and `includes/footer.php`
- `assets/styles.css`
- `old_content/` (if your original Old.tar had files, they are copied here)

## How to deploy on Ubuntu/Debian
1. Install Apache2 and PHP:
   ```bash
   sudo apt update
   sudo apt install apache2 php libapache2-mod-php -y
   ```
2. Copy files into Apache document root:
   ```bash
   sudo rm -rf /var/www/html/*
   sudo cp -r ./hpc_site/* /var/www/html/
   sudo chown -R www-data:www-data /var/www/html
   sudo chmod -R 755 /var/www/html
   sudo systemctl restart apache2
   ```
3. Visit `http://<server-ip>/` in your browser.

## Notes
- Edit contact details in `includes/footer.php`.
- Add real cluster specs under `cluster.php`.
