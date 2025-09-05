
# 🛡 User Authentication System

A secure and simple *User Authentication System* built using *PHP* and *MySQL*, allowing users to register, log in, and log out with proper session and password security.

## 🚀 Features

- ✅ User Registration with form validation  
- 🔐 Login with session handling  
- 🧠 Password hashing using password_hash()  
- 🚪 Secure Logout system  
- 🔒 Access control for authenticated users only  
- 📋 Clear error and success messages  
- 🖥 Responsive UI using Bootstrap

## 🛠 Technologies Used

- PHP (Core PHP)  
- MySQL (Database)  
- HTML5 & CSS3  
- JavaScript (for basic form validation)  
- Bootstrap (for design)

---

# 📂 User Authentication System – Folder Structure

```text
/user-auth-system/
├── config/
│   └── db.php              # Database connection file
│
├── auth/
│   ├── register.php        # User registration script
│   ├── login.php           # User login script
│   └── logout.php          # Logout script
│
├── includes/
│   └── header.php          # Common header for pages
│
├── dashboard.php           # Protected page after login
├── index.php               # Login form
├── register.php            # Registration form
└── README.md               # Project documentation
```

2. Import the database:
Open phpMyAdmin
Create a new database (e.g., auth_system)
Import the database.sql file

3. Update DB Credentials:
Open config/db.php and set your DB name, username, and password

4. Run the project:
Place the folder in your htdocs (for XAMPP)
Visit http://localhost/user-auth-system/ in your browser

🧑‍💻 Author
MD Firoj Hosen
Passionate PHP & Python Developer
🇧🇩 Bangladesh
🔗 LinkedIn | 🌐 Portfolio

📄 License
This project is licensed under the MIT License — feel free to use and modify it as you wish.

