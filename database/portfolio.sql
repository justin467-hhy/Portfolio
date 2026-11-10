
-- ==========================================
-- JUSTIN'S PERSONAL PORTFOLIO DATABASE
-- Compatible with XAMPP (MySQL / MariaDB)
-- ==========================================

CREATE DATABASE IF NOT EXISTS portfolio_db
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE portfolio_db;

-- ==========================================
-- PROJECTS TABLE
-- ==========================================

CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    technology VARCHAR(200),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ==========================================
-- CONTACT MESSAGES TABLE
-- ==========================================

CREATE TABLE IF NOT EXISTS contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ==========================================
-- SAMPLE PROJECT DATA
-- ==========================================

INSERT INTO projects (title, description, technology)
SELECT
    'Personal Portfolio Website',
    'A personal website showcasing my skills and projects.',
    'HTML, CSS, Bootstrap, JavaScript'
WHERE NOT EXISTS (
    SELECT 1 FROM projects
    WHERE title = 'Personal Portfolio Website'
);

INSERT INTO projects (title, description, technology)
SELECT
    'Student Database Project',
    'A database project demonstrating basic SQL concepts.',
    'SQL'
WHERE NOT EXISTS (
    SELECT 1 FROM projects
    WHERE title = 'Student Database Project'
);

-- ==========================================
-- VIEW DATABASE RECORDS
-- ==========================================

SELECT * FROM projects;

SELECT * FROM contact_messages;

SELECT COUNT(*) AS total_projects
FROM projects;
