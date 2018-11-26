CREATE TABLE user (
    username VARCHAR PRIMARY KEY,
    password BINARY(32) NOT NULL,
    email VARCHAR(320) NOT NULL, -- 64 characters for local part + @ + 255 for domain name
    fullname VARCHAR(128),
    profile_pic VARCHAR,
    score INTEGER NOT NULL DEFAULT 0 
);

CREATE TABLE post (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username VARCHAR REFERENCES user NOT NULL,
    title VARCHAR NOT NULL,
    fulltext VARCHAR NOT NULL,
    post_score INTEGER DEFAULT 0 
);

CREATE TABLE comment (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    post_id INTEGER REFERENCES post NOT NULL,
    username VARCHAR REFERENCES user NOT NULL,
    text VARCHAR NOT NULL,
    comment_score INTEGER DEFAULT 0 
);

CREATE TABLE post_votes (
    username_id VARCHAR PRIMARY KEY,
    post_id INTEGER REFERENCES post NOT NULL,
    value INTEGER NOT NULL
); 

CREATE TABLE comment_votes (
    username_id VARCHAR PRIMARY KEY,
    comment_id INTEGER REFERENCES comment NOT NULL,
    value INTEGER NOT NULL
);

INSERT INTO user (username, password, email, fullname) VALUES ('maria', '201506196', 'mariaribeiro@gmail.com', 'Maria Ribeiro');
INSERT INTO user (username, password, email, fullname) VALUES ('vw', '201504834', 'joaopereira@gmail.com', 'João Pereira');
INSERT INTO user (username, password, email, fullname) VALUES ('tixa', '201504616', 'patriciarocha@gmail.com', 'Patrícia Rocha');

INSERT INTO post (id, username, title, fulltext) VALUES (NULL, 'tixa', 'Lorem ipsum dolor sit amet', 'Maecenas quis arcu at leo semper viverra non sit amet diam. Ut purus felis, euismod vel mauris id, hendrerit imperdiet ligula. Nam placerat egestas leo, id accumsan nisi gravida vel. Nullam lorem dolor, molestie at finibus nec, lacinia id est. Vivamus elementum imperdiet quam, ac interdum odio consequat ut. Praesent imperdiet ipsum quis magna porttitor vestibulum. Fusce non quam lorem. Maecenas a nisl sit amet arcu dignissim tincidunt.');
INSERT INTO post (id, username, title, fulltext) VALUES (NULL, 'maria', 'Vestibulum in tempus ipsum. Orci.', 'Suspendisse id ligula eleifend, convallis lorem a, ullamcorper mauris. Nunc tincidunt mattis tortor, quis mattis nibh sodales sed. Morbi eget risus vehicula, interdum urna sed, suscipit nunc. Curabitur malesuada gravida viverra. Aliquam gravida eros lacus, vel gravida libero tempor quis. Vestibulum accumsan magna massa, ut lobortis turpis convallis eu. Sed tempor suscipit dui, non tempus risus. Integer tristique est non orci vulputate, at euismod risus feugiat.');

INSERT INTO comment (id, post_id, username, text) VALUES (NULL, 1 ,'vw', 'Donec eget elit non elit consequat consequat. Aliquam molestie, neque.');