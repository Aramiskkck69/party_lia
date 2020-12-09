    CREATE TABLE usuarios (
        id          int (255) auto_increment not null,
        nombre      varchar (100) not null,
        apellido    varchar (100) not null,
        telefono    int(255) not null,
        email       varchar (255) not null,
        NoInv       int(100) not null,
        fecha       date not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_telefono UNIQUE(telefono)
    )ENGINE=InnoDB;

    CREATE TABLE invitados (
        id          int (255) auto_increment not null,
        telefono_us  bigint(255) not null,
        nombre      varchar (100) not null,
        apellido    varchar (100) not null,
        telefono_inv bigint(255) not null,
        email       varchar (255) not null,
        fecha       date not null,
    CONSTRAINT pk_invitados PRIMARY KEY(id),
    CONSTRAINT fk_registro_usuario FOREIGN KEY(telefono_us) REFERENCES usuarios(telefono)
    )ENGINE=InnoDB;

 INSERT INTO invitados (telefono_us,nombre,apellido,telefono_inv,email) VALUES (3111172104,'Jose Luis Aramis','Ramirez Diaz',31154654,'elkkckdbb@hotmail.com');