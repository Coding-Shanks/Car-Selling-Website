CREATE DATABASE autovibe;
USE autovibe;

CREATE TABLE cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    make VARCHAR(50) NOT NULL,
    model VARCHAR(50) NOT NULL,
    year INT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(255) NOT NULL,
    description TEXT,
    mileage INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE inquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    car_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (car_id) REFERENCES cars(id)
);

INSERT INTO cars (make, model, year, price, image, description, mileage) VALUES
('Toyota', 'Camry', 2023, 35000.00, 'https://images.unsplash.com/photo-1503376780353-7e6692767b70', 'Reliable sedan with great fuel efficiency.', 15000),
('BMW', 'M4', 2024, 75000.00, 'https://images.unsplash.com/photo-1511919884226-fd3cad34687c', 'High-performance sports coupe.', 5000),
('Tesla', 'Model 3', 2023, 45000.00, 'https://images.unsplash.com/photo-1494976388531-d1058494cdd8', 'Electric vehicle with advanced features.', 10000);