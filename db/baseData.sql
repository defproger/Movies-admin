CREATE TABLE director
(
    directorId INT AUTO_INCREMENT PRIMARY KEY,
    name       VARCHAR(255) NOT NULL
);

CREATE TABLE movie
(
    movieId     INT AUTO_INCREMENT PRIMARY KEY,
    directorId  INT,
    name        VARCHAR(255) NOT NULL,
    description TEXT,
    releaseDate DATE,
    FOREIGN KEY (directorId) REFERENCES director (directorId) ON DELETE CASCADE
);

CREATE TABLE users
(
    id         INT AUTO_INCREMENT PRIMARY KEY,
    login      VARCHAR(50)  NOT NULL UNIQUE,
    hash       VARCHAR(255),
    password   VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (id, login, hash, password, created_at)
VALUES (1, 'admin', 'a344b0d15bbb2e84c9a81f50a002e2dd', '$2y$10$Ujy5cbVhtFWW3HKf3EU5lOQe9ZhdQhke.aoDnCB23n918MO8/Xir.',
        '2024-11-16 05:29:56');

INSERT INTO director (name)
VALUES ('Christopher Nolan'),
       ('Quentin Tarantino'),
       ('Steven Spielberg'),
       ('Martin Scorsese'),
       ('James Cameron');

INSERT INTO movie (directorId, name, description, releaseDate)
VALUES (1, 'Inception', 'A mind-bending thriller about dreams within dreams.', '2010-07-16'),
       (1, 'The Dark Knight', 'A gritty tale of Batman and the Joker.', '2008-07-18'),
       (2, 'Pulp Fiction', 'An intertwining tale of crime and redemption.', '1994-10-14'),
       (2, 'Kill Bill: Vol. 1', 'A tale of revenge and redemption.', '2003-10-10'),
       (3, 'Jurassic Park', 'Dinosaurs brought to life on an island.', '1993-06-11'),
       (3, 'Schindler''s List', 'A poignant tale of the Holocaust.', '1993-12-15'),
       (4, 'The Wolf of Wall Street', 'A story of greed and excess on Wall Street.', '2013-12-25'),
       (4, 'Goodfellas', 'A gritty mafia story.', '1990-09-19'),
       (5, 'Titanic', 'A love story set against the backdrop of a maritime tragedy.', '1997-12-19'),
       (5, 'Avatar', 'An epic tale on the alien world of Pandora.', '2009-12-18');
