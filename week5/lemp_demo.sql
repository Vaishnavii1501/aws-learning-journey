CREATE DATABASE lemp_demo;

-- 2. Use the database
USE lemp_demo;

-- 3. Create a table for users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    city VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 4. Insert live example data
INSERT INTO users (name, email, city) VALUES 
('Vaishnavi Sambari', 'vaishnavi@example.com', 'Pune'),
('Harshada Patil', 'harshada@example.com', 'Mumbai'),
('Ishwari Deshmukh', 'ishwari@example.com', 'Nashik'),
('Ajinkya Joshi', 'ajinkya@example.com', 'Nagpur'),
('Sanket Shinde', 'sanket@example.com', 'Aurangabad');
