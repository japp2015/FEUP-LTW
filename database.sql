CREATE TABLE user (
    username VARCHAR PRIMARY KEY,
    password VARCHAR NOT NULL,
    email VARCHAR,
    fullname VARCHAR,
    profile_pic varBinary(MAX)
);

CREATE TABLE post (
    id INTEGER PRIMARY KEY,
    username VARCHAR REFERENCES user,
    title VARCHAR,
    fulltext VARCHAR
    post_votes INTEGER,
);

CREATE TABLE comments (
    id INTEGER PRIMARY KEY,
    post_id INTEGER REFERENCES post,
    username VARCHAR REFERENCES user,
    text VARCHAR,
    comments_votes INTEGER,
);