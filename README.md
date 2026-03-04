# Digital Signage Platform\n\n## Project Structure\n\n- `backend/`  \
  - Contains PHP backend files\n  \n- `frontend/`  \
  - Contains HTML/CSS/JavaScript files\n  \n- `database/`  \
  - Contains SQL files for database schema\n  \n- `config/`  \
  - Configuration files for server settings\n  \n- `README.md`  \
  - Project overview and setup instructions\n  \n- `android/`  \
  - Android TV WebView application files\n\n## Backend PHP Files\n\n- `backend/index.php`  \
- `backend/config.php`  \
- `backend/user.php`  \
- `backend/content.php`  \
- `backend/schedule.php`  \
- `backend/auth.php`  \
- `backend/db.php`  \
\n## Frontend HTML/CSS/JavaScript Files\n\n- `frontend/index.html`  \
- `frontend/style.css`  \
- `frontend/script.js`  \
- `frontend/dashboard.html`  \
- `frontend/login.html`  \
- `frontend/content.html`  \
\n## Database Schema\n\n- `database/schema.sql`  \
\n## Configuration Files\n\n- `config/app_config.php`  \
- `config/db_config.php`  \n\n## Android TV WebView Application Files\n\n- `android/MainActivity.java`  \
- `android/res/layout/activity_main.xml`  \
- `android/AndroidManifest.xml`  \
\n## Instructions\n\n1. **Clone the repository:**\n   \n   `git clone https://github.com/aladdine388/project.git`\n\n2. **Install dependencies:**\n   \n   `composer install` (for backend)\n\n3. **Set up the database:**\n   \n   Execute the SQL in `database/schema.sql`\n\n4. **Configure settings:**\n   \n   Modify `config/app_config.php` and `config/db_config.php` to suit your environment.\n\n5. **Run the server:**\n   \n   You can run the PHP server using `php -S localhost:8000 -t backend`\n\n6. **Open the frontend:**\n   \n   Access it via `http://localhost:8000`\n\n7. **Deploy Android TV App:**\n   \n   Build and run the Android application files on a compatible device.