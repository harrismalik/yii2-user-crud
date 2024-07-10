<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii2 User CRUD</h1>
    <br>
</p>

This project is a user management basic CRUD.
It allows administrators to manage users, including creating, updating, and deleting user accounts.
Regular users can view and update their own profiles.

FEATURES
-------------------

- User roles and permissions (Administrator and User)
- Authentication and authorization
- User profile management
- User listing with pagination
- User creation, editing, and deletion by admin
- Input validation and sanitization
- Password hashing for secure authentication
- CSRF protection


TECHNOLOGIES USED
-------------------

- PHP with Yii2 framework
- MySQL for database

REQUIREMENTS
------------

- PHP 7.4 or higher
- Composer
- MySQL
- Git

INSTALLATION
------------

1. **Clone the Repository**:

   ```bash
   git clone https://github.com/harrismalik/yii2-user-crud.git
   cd yii2-user-crud

2. **Install Dependencies**:

   ```bash
   composer install

3. **Configure Database**:

   ```bash
   Edit config/db.php (your db credentials)

4. **Run Migrations**:

   ```bash
   php yii migrate
   ```
   This will create the necessary tables and insert demo data into the database.

5. **Run the Application**:

   Open your web browser and navigate to access the application. e.g.
   ```bash
   http://localhost/yii2-user-crud/web

**NOTES:** 
- I used xampp for the server configurations, make sure the app is configured according to your prefered tools.
- You can use (admin/admin123) and (user/user123) to test the application (these are seeded when you ran migration along with 10 more users to test listing feature)


CHALLENGES FACED
---------------

- Yii2 was a bit different from the other PHP Frameworks like Laravel and Codeigniter that I am more used to.

```mharrismalik.com```
