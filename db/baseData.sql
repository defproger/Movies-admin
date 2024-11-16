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