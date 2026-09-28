CREATE DATABASE IF NOT EXISTS akademik;
USE akademik;

CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

-- Contoh data (opsional)
INSERT INTO mahasiswa (nama, nim, alamat) VALUES
('Andi Saputra', '2201010001', 'Medan'),
('Budi Santoso', '2201010002', 'Deli Serdang');
