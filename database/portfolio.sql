
CREATE DATABASE IF NOT EXISTS portfolio_db;

USE portfolio_db;

-- Stores projects displayed in the portfolio
CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    technology VARCHAR(150),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Stores messages sent through the contact form
CREATE TABLE contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Add example projects
INSERT INTO projects (title, description, technology)
VALUES
('My Portfolio', 'My personal portfolio website.', 'HTML, CSS, Bootstrap'),
('Student Project', 'A project demonstrating my programming skills.', 'Java, SQL');
