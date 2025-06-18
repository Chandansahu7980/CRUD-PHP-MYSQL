CREATE DATABASE IF NOT EXISTS project3;
USE project3;   
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- //INSERT SAMPLE DATA
INSERT INTO users (name, password, email) VALUES
('Alice', 'password123', 'alice@example.com'),
('Bob', 'password456', 'bob@example.com'),
('Charlie', 'password789', 'charlie@example.com');

