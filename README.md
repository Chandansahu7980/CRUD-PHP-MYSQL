# 🚀 PHP CRUD App with Docker, MySQL, and phpMyAdmin

This project is a simple **PHP CRUD application** running inside Docker containers using **Docker Compose**. It includes:

- A PHP + Apache container
- A MySQL database container
- phpMyAdmin for easy database management

---

## 📦 Features

- 🔧 Containerized setup with Docker Compose
- 🐘 MySQL database with volume persistence
- 🌐 phpMyAdmin for visual DB access
- 🧰 Easy to run and deploy anywhere
- 📝 Sample database initialization script

---

## 📁 Project Structure

```text
php-crud-app/
├── docker-compose.yml
├── php/
│   ├── Dockerfile
│   └── index.php         # Your PHP CRUD logic goes here
├── db/
│   └── init.sql          # Optional initial DB script
└── README.md


```

## 🛠️ Getting Started

### ✅ Prerequisites

Make sure you have the following installed:

- [Docker](https://www.docker.com/products/docker-desktop)
- [Docker Compose](https://docs.docker.com/compose/)


### 🚀 Run the App

In your project directory, run:

```bash
docker-compose up --build
```


### 🌐 Access the App

| Component    | URL                                            |
|--------------|------------------------------------------------|
| PHP App      | [http://localhost:2654](http://localhost:2654) |
| phpMyAdmin   | [http://localhost:7008](http://localhost:7008) |


**phpMyAdmin Login Credentials:**

- **Username:** `root`
- **Password:** `root`

### 🧪 Customize the App

Add PHP files to the php/ directory
Modify SQL in db/init.sql to pre-load data
Update docker-compose.yml as needed

### 📝 License
This project is open-source and free to use for learning and development.

### 🙋‍♂️ Author
Chandan
🚀 IT Engineer | Docker & PHP Enthusiast
📧 chandansahu7980@gmail.com
