CREATE TABLE compras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    monto_total DECIMAL(10, 2) NOT NULL,
    fecha_compra TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    forma_entrega VARCHAR(20) NOT NULL
);
