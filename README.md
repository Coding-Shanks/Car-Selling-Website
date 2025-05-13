
# 🚗 AutoVibe - Car Selling Website

AutoVibe is a dynamic, responsive car selling website built with HTML, CSS, JavaScript, PHP, and MySQL. It features a vibrant design with animations, multiple pages, dynamic car listings, a contact form, and an admin panel for managing inventory. The site is mobile-friendly and optimized for user engagement.

---

## 🌟 Features

### Multi-Page Structure:
- 🏠 Homepage  
- 🚘 Car Listings  
- 📄 Car Details  
- 👥 About Us  
- 📞 Contact  
- 🛠️ Admin Panel  

### Interactive Sections:
- 🎯 Hero Section with Call-to-Action  
- 🚗 Featured Cars Showcase  
- 🧑‍🤝‍🧑 Customer Testimonials  
- 📬 Newsletter Signup  
- 👨‍💼 Team Introduction  
- 🔍 Car Search and Filters  
- ✍️ Admin Management Forms  

### Visual Enhancements:
- ✨ CSS Animations (Fade-in, Slide-in, Hover Effects)  
- 🎨 Colorful and Modern UI Design  

### Backend Functionality:
- 🧠 PHP and MySQL for Dynamic Content  
- 🗂️ Database for Car Listings and Inquiries  
- 🔒 Secure PDO Queries  

### Frontend Interactivity:
- 🧾 Smooth Scrolling  
- 🔄 Real-Time Car Filtering  
- 📧 Form Submission Handling  

### Responsive Design:
- 📱 Mobile-Friendly with Media Queries  

---

## 📁 Project Structure

```

autovibe/
├── assets/
│   ├── css/
│   │   └── style.css
│   └── js/
│       └── script.js
├── index.php
├── cars.php
├── car-details.php
├── about.php
├── contact.php
├── admin.php
├── header.php
├── footer.php
├── config.php
├── db.sql
└── README.md

````

---

## ⚙️ Prerequisites

- PHP-enabled web server (e.g., XAMPP, WAMP)  
- MySQL database  
- Web browser (Chrome, Firefox, etc.)  
- Git (optional for cloning)

---

## 🚀 Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/autovibe.git
cd autovibe
````

### 2. Set Up the Database

Import the `db.sql` file into MySQL to create the `autovibe` database and tables:

```bash
mysql -u root -p < db.sql
```

Update `config.php` with your MySQL credentials if needed:

```php
$host = 'localhost';
$dbname = 'autovibe';
$username = 'root';
$password = '';
```

### 3. Configure the Server

* Place all project files in your server’s root directory (e.g., `htdocs` for XAMPP).
* Ensure `assets/css/style.css` and `assets/js/script.js` are in their respective folders.

### 4. Start the Server

* Launch Apache and MySQL (e.g., via XAMPP control panel).
* Access the website at:
  `http://localhost/index.php`

### 5. Admin Panel

* Manage car listings at:
  `http://localhost/admin.php`

  > **Note:** The admin panel lacks authentication for demo purposes.

---

## 🛠️ Usage Overview

| Page        | Description                                                   |
| ----------- | ------------------------------------------------------------- |
| Homepage    | Showcases featured cars, testimonials, and newsletter signup. |
| Cars        | Lists all cars with search and year-based filters.            |
| Car Details | Displays detailed car info with an inquiry option.            |
| About       | Introduces AutoVibe and the team.                             |
| Contact     | Allows users to send inquiries, optionally car-specific.      |
| Admin       | Enables adding or deleting car listings.                      |

---

## 🖼️ Screenshots

> Upload your screenshots in a folder named `screenshots/` and reference them like below.

Example:

![Homepage](screenshots/homepage.png)
![Car Listings](screenshots/cars.png)

---

## 💻 Technologies Used

* **Frontend:** HTML, CSS, JavaScript
* **Backend:** PHP, MySQL
* **Styling:** Custom CSS with Animations
* **Database:** MySQL with PDO for Secure Queries

---

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch:

```bash
git checkout -b feature-name
```

3. Commit your changes:

```bash
git commit -m 'Add feature'
```

4. Push to the branch:

```bash
git push origin feature-name
```

5. Open a Pull Request.

---

## 📜 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

## 📬 Contact

For questions or feedback:

📧 Email: [your-email@example.com](mailto:your-email@example.com)
📝 Issues: [GitHub Issues](https://github.com/your-username/autovibe/issues)

---

**AutoVibe – Where dream cars meet their owners! 🚗✨**


