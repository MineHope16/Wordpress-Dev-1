# Navjeevan Charitable Trust - WordPress Theme (v2)

A warm, emotional nonprofit theme with Red/Yellow/Blue color scheme for Navjeevan Charitable Trust.

---

## 📋 COMPLETE SETUP GUIDE FOR XAMPP + WORDPRESS

### PREREQUISITES

1. **XAMPP** installed on your Windows PC  
   Download from: https://www.apachefriends.org/
2. Your XAMPP MySQL credentials (default: `username=root`, `password=blank` or `root`)
3. Note your MySQL port (default: 3306, but could be 3307 or other)

---

## 🚀 STEP-BY-STEP INSTALLATION

### **STEP 1: Start XAMPP Services**

1. Open **XAMPP Control Panel** (search in Start menu)
2. Click **"Start"** button next to **Apache**
3. Click **"Start"** button next to **MySQL**
4. Both should show green **"Running"** status

---

### **STEP 2: Create Database**

#### Option A - Via phpMyAdmin (Recommended):

1. Open browser and go to: http://localhost/phpmyadmin/
2. Click **"New"** on the left sidebar
3. Database name: `navjeevan_db`
4. Collation: `utf8mb4_unicode_ci`
5. Click **"Create"**

#### Option B - Via PowerShell Command:

```powershell
& 'C:\xampp\mysql\bin\mysql.exe' -u root -p -e "CREATE DATABASE navjeevan_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
```

_(Enter your MySQL password when prompted. Press Enter if no password.)_

---

### **STEP 3: Download and Setup WordPress**

Open **PowerShell** and run these commands:

```powershell
# Download WordPress
Invoke-WebRequest -Uri "https://wordpress.org/latest.zip" -OutFile "$env:TEMP\wordpress.zip"

# Extract WordPress
Expand-Archive -Path "$env:TEMP\wordpress.zip" -DestinationPath "$env:TEMP\wp-extract" -Force

# Create site folder in XAMPP
New-Item -Path "C:\xampp\htdocs\navjeevan" -ItemType Directory -Force

# Copy WordPress files
Copy-Item -Path "$env:TEMP\wp-extract\wordpress\*" -Destination "C:\xampp\htdocs\navjeevan" -Recurse -Force

# Clean up temp files
Remove-Item -Path "$env:TEMP\wordpress.zip" -Force
Remove-Item -Path "$env:TEMP\wp-extract" -Recurse -Force

Write-Host "WordPress installed successfully!" -ForegroundColor Green
```

---

### **STEP 4: Copy Theme to WordPress**

Run this PowerShell command **(adjust source path to where you extracted the theme)**:

```powershell
Copy-Item -Path "PATH\TO\YOUR\navjeevan-theme-v2" -Destination "C:\xampp\htdocs\navjeevan\wp-content\themes\navjeevan-theme-v2" -Recurse -Force
```

**Example:**

```powershell
Copy-Item -Path "C:\Users\YourName\Downloads\navjeevan-theme-v2" -Destination "C:\xampp\htdocs\navjeevan\wp-content\themes\navjeevan-theme-v2" -Recurse -Force
```

---

### **STEP 5: Configure WordPress Database Connection**

1. Open browser: http://localhost/navjeevan
2. Select language, click **"Continue"**
3. Click **"Let's go!"**
4. Enter database details:
   - **Database Name:** `navjeevan_db`
   - **Username:** `root`
   - **Password:** (blank or `root` - whatever your XAMPP MySQL password is)
   - **Database Host:** `localhost`
   - **Table Prefix:** `wp_`
5. Click **"Submit"**

---

### 🔧 TROUBLESHOOTING: If you see "Error establishing database connection"

Your MySQL might be on a different port or need different host settings.

#### Check your XAMPP MySQL port:

1. Open XAMPP Control Panel
2. Click **"Config"** next to MySQL
3. Look for `port=` in `my.ini` file

#### Then edit wp-config.php manually:

**If your MySQL password is 'root':**

```powershell
$config = Get-Content "C:\xampp\htdocs\navjeevan\wp-config.php" -Raw
$config = $config -replace "define\( 'DB_PASSWORD', '' \);", "define( 'DB_PASSWORD', 'root' );"
Set-Content -Path "C:\xampp\htdocs\navjeevan\wp-config.php" -Value $config
```

**If your MySQL port is 3307 (or other non-standard port):**

```powershell
$config = Get-Content "C:\xampp\htdocs\navjeevan\wp-config.php" -Raw
$config = $config -replace "define\( 'DB_HOST', 'localhost' \);", "define( 'DB_HOST', 'localhost:3307' );"
Set-Content -Path "C:\xampp\htdocs\navjeevan\wp-config.php" -Value $config
```

**Or change to just 'localhost' (no port):**

```powershell
$config = Get-Content "C:\xampp\htdocs\navjeevan\wp-config.php" -Raw
$config = $config -replace "define\( 'DB_HOST', '127.0.0.1:3307' \);", "define( 'DB_HOST', 'localhost' );"
Set-Content -Path "C:\xampp\htdocs\navjeevan\wp-config.php" -Value $config
```

**Verify configuration:**

```powershell
Get-Content "C:\xampp\htdocs\navjeevan\wp-config.php" | Select-String -Pattern "DB_NAME|DB_USER|DB_PASSWORD|DB_HOST"
```

---

### **STEP 6: Install WordPress**

1. If Step 5 succeeded, click **"Run the installation"**
2. Fill in site information:
   - **Site Title:** Navjeevan Charitable Trust
   - **Username:** (choose admin username)
   - **Password:** (choose strong password - **SAVE IT!**)
   - **Your Email:** (your email)
   - Uncheck "Search engine visibility" (for local dev)
3. Click **"Install WordPress"**
4. Click **"Log In"** and use your credentials

---

### **STEP 7: Activate Theme**

1. Go to: http://localhost/navjeevan/wp-admin
2. Log in with your credentials
3. Navigate to: **Appearance → Themes**
4. Find **"Navjeevan Charitable Trust (v2)"**
5. Click **"Activate"**

---

### **STEP 8: Set Up Permalinks**

1. Go to: **Settings → Permalinks**
2. Select **"Post name"**
3. Click **"Save Changes"**

---

### **STEP 9: Create Custom Pages**

Your theme includes 5 custom page templates. Create them:

**For each page (About, Contact, Donate, Gallery, Initiatives):**

1. Go to: **Pages → Add New**
2. Enter page title (e.g., "About")
3. In right sidebar, find **"Page Attributes"**
4. In **"Template"** dropdown, select matching template (e.g., "About")
5. Click **"Publish"**

**Create these pages:**

- **About** (template: About)
- **Contact** (template: Contact)
- **Donate** (template: Donate)
- **Gallery** (template: Gallery)
- **Initiatives** (template: Initiatives)

---

### **STEP 10: Create Navigation Menu**

1. Go to: **Appearance → Menus**
2. Click **"create a new menu"**
3. Menu Name: `Main Menu`
4. Click **"Create Menu"**
5. On left side, find **"Pages"** box
6. Click **"View All"** tab
7. Check all 5 pages you created
8. Click **"Add to Menu"**
9. Scroll down to **"Menu Settings"**
10. Check **"Primary Menu"** under Display location
11. Click **"Save Menu"**

---

## ✅ DONE! Your site is ready at: http://localhost/navjeevan

---

## 🌐 YOUR SITE URLS

- **Front-end:** http://localhost/navjeevan
- **Admin:** http://localhost/navjeevan/wp-admin
- **phpMyAdmin:** http://localhost/phpmyadmin

---

## 📂 FILE LOCATIONS

- **WordPress installation:** `C:\xampp\htdocs\navjeevan\`
- **Theme files:** `C:\xampp\htdocs\navjeevan\wp-content\themes\navjeevan-theme-v2\`

---

## 🔄 TO START SITE NEXT TIME

1. Open **XAMPP Control Panel**
2. Start **Apache** and **MySQL**
3. Visit: http://localhost/navjeevan

---

## ✏️ EDITING THE THEME

You can edit theme files directly in:  
`C:\xampp\htdocs\navjeevan\wp-content\themes\navjeevan-theme-v2\`

**Main files:**

- `style.css` - All CSS styles
- `functions.php` - Theme functions and enqueued assets
- `header.php` - Site header
- `footer.php` - Site footer
- `index.php` - Homepage template
- `page-about.php` - About page template
- `page-contact.php` - Contact page template
- `page-donate.php` - Donate page template
- `page-gallery.php` - Gallery page template
- `page-initiatives.php` - Initiatives page template
- `assets/js/main.js` - JavaScript
- `assets/images/` - Image assets

After editing, refresh your browser (**Ctrl+F5** for hard refresh).

---

## 🔍 QUICK VERIFICATION COMMANDS (PowerShell)

```powershell
# Check if WordPress is installed
Test-Path "C:\xampp\htdocs\navjeevan\wp-config.php"

# Check if theme is copied
Test-Path "C:\xampp\htdocs\navjeevan\wp-content\themes\navjeevan-theme-v2\style.css"

# View database configuration
Get-Content "C:\xampp\htdocs\navjeevan\wp-config.php" | Select-String -Pattern "DB_NAME|DB_USER|DB_PASSWORD|DB_HOST"
```

Both should return **"True"** for successful installation.

---

## 🎨 THEME CUSTOMIZATION NOTES

- **Color scheme:** Red (#b52020), Yellow (#f6b02d), Blue (#0f5aa6)
- The Donate page has a placeholder button. Replace with Razorpay/PayPal link or plugin
- No contact form plugin included - add Contact Form 7 or similar if needed
- Replace placeholder images in `assets/images/` with real photos
- All styles are in `style.css` for easy customization

---

## ⚠️ COMMON ISSUES & SOLUTIONS

### Issue: Apache won't start (Port 80 in use)

**Solution:** Another program is using port 80 (IIS, Skype). Stop that program or change Apache port in XAMPP config.

### Issue: MySQL won't start (Port 3306 in use)

**Solution:** Another MySQL instance running. Stop it or change port in XAMPP config.

### Issue: "Error establishing database connection"

**Solution:** Check MySQL is running, verify database name is `navjeevan_db`, check credentials in wp-config.php

### Issue: Theme doesn't appear in Themes list

**Solution:** Verify theme folder is in correct location and `style.css` has theme headers

### Issue: CSS/JS not loading

**Solution:** Go to **Settings → Permalinks → Save Changes** (flush rewrite rules)

### Issue: White screen after activation

**Solution:** Enable WP_DEBUG in `wp-config.php` to see errors:

Add before `/* That's all, stop editing! */`:

```php
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
```

Check `C:\xampp\htdocs\navjeevan\wp-content\debug.log` for errors

---

## 📞 SUPPORT

For issues, check:

1. **XAMPP Control Panel** - Apache and MySQL are running (green)
2. **Browser console** (F12) for JavaScript errors
3. **WordPress debug.log** for PHP errors
4. Verify all file paths match your installation

---

**Created for educational purposes - Navjeevan Charitable Trust Theme v2**
