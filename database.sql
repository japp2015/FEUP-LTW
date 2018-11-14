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

INSERT INTO post (username, title, fulltext) VALUES ('tixa', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet dolor suscipit ex pulvinar suscipit eget et libero. Aenean nec congue metus. Nunc mollis faucibus tortor, ut molestie neque iaculis in. Fusce viverra suscipit interdum. In dapibus pretium lacus nec viverra. Nam sed rhoncus tortor. Nam rhoncus lectus vitae risus vehicula viverra. Ut sollicitudin lacus eget ante volutpat blandit. Nullam quis bibendum lacus. Sed sed velit in ante efficitur sollicitudin vitae et diam. Fusce pellentesque hendrerit lectus nec ullamcorper. Aliquam ut volutpat eros, non sollicitudin velit. Curabitur sem urna, luctus nec fringilla non, faucibus id velit. Aliquam sit amet magna convallis, porta ipsum in, sagittis purus. Nullam vel sapien in libero auctor sodales et a felis. Vivamus accumsan, arcu in aliquet cursus, nulla metus euismod eros, id malesuada nisi lorem a enim.');
INSERT INTO post (username, title, fulltext) VALUES ('maria', 'jjidjg ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet dolor suscipit ex pulvinar suscipit eget et libero. Aenean nec congue metus. Nunc mollis faucibus tortor, ut molestie neque iaculis in. Fusce viverra suscipit interdum. In dapibus pretium lacus nec viverra. Nam sed rhoncus tortor. Nam rhoncus lectus vitae risus vehicula viverra. Ut sollicitudin lacus eget ante volutpat blandit. Nullam quis bibendum lacus. Sed sed velit in ante efficitur sollicitudin vitae et diam. Fusce pellentesque hendrerit lectus nec ullamcorper. Aliquam ut volutpat eros, non sollicitudin velit. Curabitur sem urna, luctus nec fringilla non, faucibus id velit. Aliquam sit amet magna convallis, porta ipsum in, sagittis purus. Nullam vel sapien in libero auctor sodales et a felis. Vivamus accumsan, arcu in aliquet cursus, nulla metus euismod eros, id malesuada nisi lorem a enim.');

INSERT INTO comment (username, text) VALUES ('vw', 'Donec eget elit non elit consequat consequat. Aliquam molestie, neque.');