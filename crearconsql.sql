/*
crear una tabla en sql
*/

CREATE TABLE usuarios(
id          int(255) auto_increment not null,
nombre      varchar(100) not null,
apellidos   varchar(100) not null,
email       varchar(255) not null,
password    varchar(255) not null,
fecha       date not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE usuarios(
id 		   int(100)AUTO_INCREMENT NOT NULL,
nombre	   varchar(255)NOT NULL,
apellidos  varchar(255)NOT NULL,
password   varchar(255)NOT NULL,
fecha		date NOT NULL,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email   UNIQUE(email),

)ENGINE=INNODB;

CREATE TABLE aderusuarios(
id 			varchar(100)AUTO_INCREMENT NOT NULL,
nombre 		varchar(255)NOT NULL,
apellidos	varchar(255)NOT NULL,
email 		varchar(255)NOT NULL,
password    varchar(255)NOT NULL,
fecha		date NOT NULL,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT up_email UNIQUE(email),
)ENGINE=INNODB;

CREATE TABLE algochido(
id 			varchar(100)AUTO_INCREMENT NOT NULL,
nombre		varchar(255),
email 		varchar(255),
CONSTRAINT pk_algochido PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email),

)ENGINE=INNODB;



