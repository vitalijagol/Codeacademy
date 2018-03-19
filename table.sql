CREATE TABLE users (
    id int(11) NOT NULL AUTO_INCREMENT,
    email varchar(255) COLLATE utf8_bin NOT NULL,
    password varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
    slug varchar(20) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
    role varchar(20) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
    status varchar(20) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
    created datetime DEFAULT CURRENT_TIMESTAMP,
    modified datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY (slug),
    PRIMARY KEY (id, slug)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE forma (
    id int(11) NOT NULL AUTO_INCREMENT,
    name varchar(255) COLLATE utf8_bin,
    email varchar(255) COLLATE utf8_bin,
    phone varchar(255) COLLATE ascii_bin,
    created datetime DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE naujaforma2 (
    id int(11) NOT NULL AUTO_INCREMENT,
    name varchar(225) COLLATE utf8_bin,
    surname varchar(225) COLLATE utf8_bin,
    username varchar(225) COLLATE utf8_bin,
    email varchar(255) COLLATE utf8_bin,
    streetname varchar(255) COLLATE utf8_bin,
    city varchar(255) COLLATE utf8_bin,
    phone varchar(255) COLLATE ascii_bin,
    created datetime DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;