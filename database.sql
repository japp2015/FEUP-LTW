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
    post_votes INTEGER NOT NULL,
);

CREATE TABLE comments (
    id INTEGER PRIMARY KEY,
    post_id INTEGER NOT NULL REFERENCES post,
    username VARCHAR NOT NULL REFERENCES user,
    text VARCHAR NOT NULL,
    comments_votes INTEGER NOT NULL,
);

INSERT INTO user VALUES ('Maria','12345678','mariajmribeiro@hotmail.com', 'maria ribeiro', null, 0);

INSERT INTO user VALUES ('vw','12','bemlindo@hotmail.com', 'juanosuhuhuh', null, 0);

INSERT INTO user VALUES ('patrica','1234','patricia@hotmail.com', 'patricia jdjdj', null, 0);

