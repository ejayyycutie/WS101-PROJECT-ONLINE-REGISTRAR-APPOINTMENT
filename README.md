<div align="center">

# 🎓 NSC Online Registrar Appointment System

![Project Status](https://img.shields.io/badge/Status-Completed-success?style=for-the-badge)
![Java Version](https://img.shields.io/badge/Java-21%2B-orange?style=for-the-badge)
![Framework](https://img.shields.io/badge/Spring%20Boot-3.x-green?style=for-the-badge)
![Database](https://img.shields.io/badge/MySQL-8.0-blue?style=for-the-badge)

<br />

### 📝 Submitted to: Sir Tomas Paolo Alburan Echaluce

*A final output for our Web Systems course.*

<p>
This project applies everything we've learned in class—from <b>RESTful APIs</b> and the <b>Spring Boot Framework</b> to creating a <b>Mobile-Responsive Design</b>. We built this system to demonstrate our skills and readiness as future IT professionals.
</p>

</div>

---

## 📖 Project Overview

The **NSC Online Registrar Appointment System** is a full-stack web application designed to modernize document requests at Northern Samar Colleges.

We aim to eliminate long queues by allowing students to **request documents online**, **track status in real-time**, and **schedule pickups**. It also features a secure **Admin Dashboard** for the Registrar to manage records efficiently.

---

## 🚀 Key Features

### 👨‍🎓 For Students
* 🔐 **Secure Login:** Access via Student ID and Birthdate.
* 📄 **Online Request:** Easy requesting for TOR, Diploma, Good Moral, etc.
* ⏳ **Real-time Tracker:** Visual timeline (Pending → Approved → Completed).
* 📱 **Mobile Responsive:** Fully accessible on smartphones and tablets.

### 🏫 For Registrar (Admin)
* 📊 **Dashboard Analytics:** Live stats on pending requests and appointments.
* ✅ **Verification Queue:** Approve or Reject incoming document requests.
* 📅 **Appointment Manager:** Set pickup schedules and manage transactions.
* 📂 **Student Database:** Full control over student records and uploads.

---

## 🛠️ Technology Stack

| Component | Technology Used |
| :--- | :--- |
| **Backend** | ![Java](https://img.shields.io/badge/Java-Spring_Boot-green) (REST API, Spring Data JPA) |
| **Database** | ![MySQL](https://img.shields.io/badge/MySQL-MariaDB-blue) (via XAMPP) |
| **Frontend** | ![HTML5](https://img.shields.io/badge/HTML5-CSS3-orange) ![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple) |
| **Scripting** | JavaScript (ES6), jQuery (AJAX) |
| **Design** | Glassmorphism UI, FontAwesome Icons |
| **Tools** | IntelliJ IDEA, Maven, Git |

---

## 📂 Project Structure

The project is organized into specific directories for the backend logic, frontend interface, database scripts, and design resources.

```text
WS-PROJECT_SYSTEM/
├── 📂 Backend/
│   ├── 📂 Controllers/      # Java Controllers for handling API requests
│   ├── 📂 Entity/           # Database models and objects
│   └── 📂 Repository/       # JPA Repositories for database operations
│
├── 📂 Database/             # SQL scripts and database backups
│
├── 📂 Documentation/        # System documentation and user manuals
│
├── 📂 Frontend/
│   ├── 📂 Assets/
│   │   ├── 📂 CSS Style/    # Stylesheets per module
│   │   │   ├── 📂 Homepage Style/
│   │   │   ├── 📂 Registrar Login Style/
│   │   │   ├── 📂 Registrar Style/
│   │   │   ├── 📂 Student Login Style/
│   │   │   └── 📂 Student Style/
│   │   └── 📂 Image/        # Project logos and icons
│   │
│   ├── 📂 Homepage/         # Public landing page files
│   ├── 📂 Login Registrar/  # Admin login interface
│   ├── 📂 Login Student/    # Student login interface
│   ├── 📂 Registrar Dashboard/ # Admin panel pages
│   └── 📂 Student Dashboard/   # Student portal pages
│
└── 📂 User Interface Using Figma Design/ # Original UI/UX prototyping files

⚙️ Installation & Setup
Clone the Repository

Bash

git clone [https://github.com/ejayyycutie/WS101-PROJECT-ONLINE-REGISTRAR-APPOINTMENT.git](https://github.com/ejayyycutie/WS101-PROJECT-ONLINE-REGISTRAR-APPOINTMENT.git)
Database Configuration

Open XAMPP and start MySQL.

Create a database named nsc_registrar.

Import the SQL file located in the 📂 Database folder.

Run the Application

Open the 📂 Backend folder in IntelliJ IDEA.

Run RegistrarPortalApplication.java.

Access the Portals

🏠 Landing Page: http://localhost:8080/home.htm

🎓 Student Login: http://localhost:8080/login_student.htm

🏫 Registrar Login: http://localhost:8080/login_registrar.htm


💻 The Development Team

Emmanuel Justine R. Gremio
Jonreen Mark Ubana
Trixie Keith Agonias
Althea Mae Gonzales
John Cantong



