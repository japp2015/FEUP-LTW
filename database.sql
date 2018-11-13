CREATE TABLE user (
    username VARCHAR PRIMARY KEY,
    password NVARCHAR320 NOT NULL,
    email VARCHAR NOT NULL,
    fullname VARCHAR NOT NULL,
    profile_pic varbinary(MAX),
    score INTEGER NOT NULL,
);

CREATE TABLE post (
    id INTEGER PRIMARY KEY,
    username VARCHAR NOT NULL REFERENCES user,
    title VARCHAR NOT NULL,
    fulltext VARCHAR NOT NULL,
    post_score INTEGER NOT NULL,
);

CREATE TABLE comments (
    id INTEGER PRIMARY KEY,
    post_id INTEGER NOT NULL REFERENCES post,
    username VARCHAR NOT NULL REFERENCES user,
    text VARCHAR NOT NULL,
    comments_score INTEGER NOT NULL,
);

INSERT INTO user VALUES ('maria','201506196','mariajmribeiro@hotmail.com', 'Maria Ribeiro', null, 0);
INSERT INTO user VALUES ('vw','201504834','bemlindo@hotmail.com', 'João Pereira', null, 0);
INSERT INTO user VALUES ('tixa','201504616','rochapatricia@gmail.com', 'Patrícia Rocha', null, 0);