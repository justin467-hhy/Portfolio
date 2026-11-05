
-- =====================================
-- JUSTIN'S PERSONAL PORTFOLIO DATABASE
-- =====================================

-- Create database
CREATE DATABASE IF NOT EXISTS portfolio_db;

-- Select database
USE portfolio_db;


-- =====================================
-- 1. PROJECTS TABLE
-- =====================================

CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT,
    technology VARCHAR(200),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- =====================================
-- 2. CONTACT MESSAGES TABLE
-- =====================================

CREATE TABLE IF NOT EXISTS contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- =====================================
-- 3. INSERT SAMPLE PROJECTS
-- =====================================

INSERT INTO projects (title, description, technology)
VALUES
(
    'Personal Portfolio Website',
    'A personal website showcasing my skills and projects.',
    'HTML, CSS, Bootstrap, JavaScript'
),
(
    'Student Database Project',
    'A database project demonstrating basic SQL concepts.',
    'SQL'
);


-- =====================================
-- 4. VIEW ALL PROJECTS
-- =====================================

SELECT * FROM projects;


-- =====================================
-- 5. VIEW ALL CONTACT MESSAGES
-- =====================================

SELECT * FROM contact_messages;


-- =====================================
-- 6. COUNT TOTAL PROJECTS
-- =====================================

SELECT COUNT(*) AS total_projects
FROM projects;
