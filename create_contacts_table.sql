CREATE DATABASE IF NOT EXISTS phonebook;

USE phonebook;

DROP TABLE IF EXISTS contacts_table;

CREATE TABLE contacts_table (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255) NOT NULL,
    PhoneNumber VARCHAR(15) NOT NULL
);

INSERT INTO contacts_table (Name, PhoneNumber) VALUES ('John Doe', '123-456-7890');
INSERT INTO contacts_table (Name, PhoneNumber) VALUES ('Jane Smith', '987-654-3210');
INSERT INTO contacts_table (Name, PhoneNumber) VALUES ('Alice Johnson', '555-666-7778');