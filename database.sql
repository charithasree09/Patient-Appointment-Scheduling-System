CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100)
);

DROP TABLE IF EXISTS appointments;

CREATE TABLE appointments(
    appointment_id INT AUTO_INCREMENT PRIMARY KEY,
    patient_name VARCHAR(100),
    phone VARCHAR(20),
    department VARCHAR(100),
    appointment_date DATE,
    symptoms TEXT,
    queue_number INT,
    status VARCHAR(20) DEFAULT 'Pending'
);