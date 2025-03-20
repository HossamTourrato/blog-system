# 🚀 Blog System - A Clean Architecture Blogging Platform

Welcome to **Blog System**, a futuristic, clean architecture-based blogging platform. This project follows industry best practices, utilizing **PHP, MySQL, and design patterns** like Repository and Unit of Work to ensure scalability, maintainability, and efficiency. 💡

---

## 🌟 Features

✅ Clean and Modular Code Structure (Repository, Service, and Controller layers) ✅ Create, Read, Update, and Delete (CRUD) blog posts ✅ Secure database handling with **PDO** ✅ Admin Panel with Authentication (Future feature) ✅ Responsive UI for seamless user experience ✅ REST API (Future feature)

---

## 🛠️ Technologies Used

- **Backend:** PHP 8.2 with Clean Architecture Principles
- **Database:** MySQL (Handled via PDO)
- **Frontend:** HTML, CSS, JavaScript (Future: React/Vue integration)
- **Design Patterns:** Repository, Service, Controller
- **Environment Handling:** `vlucas/phpdotenv`
- **Version Control:** Git & GitHub

---

## 🚀 Installation & Setup

### **1️⃣ Clone the Repository**

```sh
 git clone https://github.com/YOUR-USERNAME/blog-system.git
 cd blog-system
```

### **2️⃣ Configure the Environment**

1. Create a `.env` file in the root directory and add:
   ```env
   DB_HOST=localhost
   DB_NAME=blog_system
   DB_USER=root
   DB_PASS=
   ```
2. Run database migrations (if applicable):
   ```sh
   php database/migrate.php
   ```

### **3️⃣ Run the Project**

- Start the Apache Server via XAMPP or any preferred method
- Visit `http://localhost/blog-system/public/index.php`

---

## 📖 Folder Structure

```
blog-system/
├── public/            # Entry point (index.php)
├── src/
│   ├── controllers/   # Handles HTTP requests
│   ├── services/      # Business logic layer
│   ├── repositories/  # Database interaction
│   ├── models/        # Data structures
│   ├── config/        # Database configuration
├── tests/             # Unit tests (Future feature)
├── .env               # Environment variables
├── README.md          # Project Documentation
```

---

## 📌 Usage Guide

- **View All Posts:** `index.php`
- **Create Post:** `create.php`
- **Edit Post:** `edit.php?id={post_id}`
- **Delete Post:** `delete.php?id={post_id}`
- **View Single Post:** `show.php?id={post_id}`

---

## 🌱 Future Enhancements

✅ User Authentication & Authorization (Admin/Editor roles) ✅ Rich Text Editor for posts ✅ RESTful API with JSON responses ✅ Comments & Likes System ✅ Dark Mode UI ✅ Docker Support for easier deployment

---

## 🤝 Contribution Guide

We welcome contributions! Follow these steps:

1. Fork the repository
2. Create a new branch (`feature-xyz`)
3. Commit changes (`git commit -m 'Added XYZ feature'`)
4. Push the branch (`git push origin feature-xyz`)
5. Submit a pull request 🚀

---

## 📄 License

This project is **open-source** and available under the **MIT License**.

---

## 💬 Questions?

For issues, open a GitHub issue or reach out via **email/Discord**.

🚀 Happy Coding! **Stay Future-Proof!**

