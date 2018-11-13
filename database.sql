CREATE TABLE user (
    username VARCHAR PRIMARY KEY,
    password BINARY(32) NOT NULL,
    email VARCHAR(320) NOT NULL, -- 64 characters for local part + @ + 255 for domain name
    fullname VARCHAR(128) NOT NULL,
    profile_pic VARBINARY,
    score INTEGER NOT NULL DEFAULT 0 CHECK (score >= 0)
);

CREATE TABLE post (
    id SERIAL PRIMARY KEY,
    username VARCHAR REFERENCES user NOT NULL,
    title VARCHAR NOT NULL,
    fulltext VARCHAR NOT NULL,
    post_score INTEGER NOT NULL DEFAULT 0 CHECK (post_score >= 0)
);

CREATE TABLE comment (
    id SERIAL PRIMARY KEY,
    post_id SERIAL REFERENCES post NOT NULL,
    username VARCHAR REFERENCES user NOT NULL,
    text VARCHAR NOT NULL,
    comment_score INTEGER NOT NULL DEFAULT 0 CHECK (comment_score >= 0)
);

INSERT INTO user (username, password, email, fullname) VALUES ('maria','201506196','mariaribeiro@gmail.com', 'Maria Ribeiro');
INSERT INTO user (username, password, email, fullname) VALUES ('vw','201504834','joaopereira@gmail.com', 'João Pereira');
INSERT INTO user (username, password, email, fullname) VALUES ('tixa','201504616','patriciarocha@gmail.com', 'Patrícia Rocha');