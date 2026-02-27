CREATE TABLE user (
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    date_of_birth DATE
);

CREATE TABLE note (
    id INT PRIMARY KEY AUTO_INCREMENT,
    subject VARCHAR(100) NOT NULL,
    result DECIMAL(4,2) NOT NULL,
    id_user INT NOT NULL,
    FOREIGN KEY (id_user) REFERENCES user(id)
        ON DELETE CASCADE
);

CREATE TABLE appreciation (
    id INT PRIMARY KEY AUTO_INCREMENT,
    comment TEXT NOT NULL,
    mention VARCHAR(100), 
    id_user INT NOT NULL,
    FOREIGN KEY (id_user) REFERENCES user(id)
        ON DELETE CASCADE
);



-- 10 élèves 
INSERT INTO user (firstname, lastname, date_of_birth) VALUES
('Lucas', 'Martin', '2009-03-15'),
('Emma', 'Bernard', '2008-07-22'),
('Hugo', 'Dubois', '2007-11-02'),
('Chloé', 'Thomas', '2009-01-30'),
('Nathan', 'Robert', '2008-05-18'),
('Léa', 'Richard', '2007-09-09'),
('Enzo', 'Petit', '2009-06-12'),
('Manon', 'Durand', '2008-02-27'),
('Gabriel', 'Leroy', '2007-12-14'),
('Inès', 'Moreau', '2009-04-05');

-- Notes pour chaque élève
INSERT INTO note (id_user, subject, result) VALUES
-- Élève 1
(1, 'Français', 14.5),
(1, 'Maths', 13.0),
(1, 'Hist-Géo', 15.0),
(1, 'Anglais', 16.0),
(1, 'EPS', 17.5),

-- Élève 2
(2, 'Français', 12.0),
(2, 'Maths', 14.0),
(2, 'Hist-Géo', 13.5),
(2, 'Anglais', 15.5),
(2, 'EPS', 16.0),

-- Élève 3
(3, 'Français', 10.5),
(3, 'Maths', 11.0),
(3, 'Hist-Géo', 12.0),
(3, 'Anglais', 13.0),
(3, 'EPS', 14.0),

-- Élève 4
(4, 'Français', 16.0),
(4, 'Maths', 15.5),
(4, 'Hist-Géo', 14.5),
(4, 'Anglais', 17.0),
(4, 'EPS', 18.0),

-- Élève 5
(5, 'Français', 9.5),
(5, 'Maths', 10.0),
(5, 'Hist-Géo', 11.5),
(5, 'Anglais', 12.0),
(5, 'EPS', 13.0),

-- Élève 6
(6, 'Français', 15.0),
(6, 'Maths', 16.5),
(6, 'Hist-Géo', 14.0),
(6, 'Anglais', 17.5),
(6, 'EPS', 18.5),

-- Élève 7
(7, 'Français', 11.0),
(7, 'Maths', 12.5),
(7, 'Hist-Géo', 13.0),
(7, 'Anglais', 14.0),
(7, 'EPS', 15.0),

-- Élève 8
(8, 'Français', 13.5),
(8, 'Maths', 14.5),
(8, 'Hist-Géo', 12.5),
(8, 'Anglais', 15.0),
(8, 'EPS', 16.5),

-- Élève 9
(9, 'Français', 8.0),
(9, 'Maths', 9.5),
(9, 'Hist-Géo', 10.0),
(9, 'Anglais', 11.5),
(9, 'EPS', 12.0),

-- Élève 10
(10, 'Français', 17.0),
(10, 'Maths', 18.0),
(10, 'Hist-Géo', 16.5),
(10, 'Anglais', 19.0),
(10, 'EPS', 18.0);