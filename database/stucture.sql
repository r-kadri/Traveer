CREATE TABLE City(
    id SERIAL PRIMARY KEY,
    country_id INTEGER NOT NULL,
    name VARCHAR(60) NOT NULL,
    description TEXT,
    area DECIMAL(4, 2)
);

CREATE TABLE Country(
    id SERIAL PRIMARY KEY,
    name VARCHAR(60) NOT NULL,
    description TEXT,
    area INTEGER
);

CREATE TABLE Language(
    id SERIAL PRIMARY KEY,
    name VARCHAR(60) NOT NULL,
    description TEXT NOT NULL
);

CREATE TABLE CountryLanguage(
    country_id INTEGER,
    language_id INTEGER
);

CREATE TABLE Place(
    id SERIAL PRIMARY KEY,
    name VARCHAR(60),
    description TEXT
);

CREATE TABLE PhotoPlace(
    id SERIAL PRIMARY KEY,
    place_id INTEGER NOT NULL,
    name VARCHAR(60),
    path VARCHAR(255) NOT NULL
);

CREATE TABLE Rate(
    id SERIAL PRIMARY KEY,
    user_id INTEGER NOT NULL,
    place_id INTEGER NOT NULL,
    rate SMALLINT NOT NULL,
    comment VARCHAR(255),
    likes INTEGER NOT NULL,
    dislikes INTEGER NOT NULL
)