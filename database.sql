CREATE TABLE user (
    username VARCHAR PRIMARY KEY,
    password VARCHAR NOT NULL,
    email VARCHAR NOT NULL,
    fullname VARCHAR NOT NULL,
    profile_pic varBinary(MAX),
    score INTEGER NOT NULL,
);

CREATE TABLE post (
    id INTEGER PRIMARY KEY,
    title VARCHAR NOT NULL,
    fulltext VARCHAR NOT NULL,
    post_votes INTEGER NOT NULL,
    username VARCHAR NOT NULL REFERENCES user,
);

CREATE TABLE comments (
    id INTEGER PRIMARY KEY,
    post_id INTEGER NOT NULL REFERENCES post,
    username VARCHAR NOT NULL REFERENCES user,
    text VARCHAR NOT NULL,
    comments_votes INTEGER NOT NULL,
);
