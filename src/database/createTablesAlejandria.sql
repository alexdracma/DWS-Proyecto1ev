CREATE TABLE IF NOT EXISTS alejandria.libro (
    id          INT             AUTO_INCREMENT,
    isbn13      BIGINT          NOT NULL,
    nombre      VARCHAR(255)    NOT NULL,
    autor       VARCHAR(255),
    genero      VARCHAR(255),
    CONSTRAINT  PK_Libro        PRIMARY KEY (id)
)

CREATE TABLE IF NOT EXISTS alejandria.usuario (
    email           VARCHAR(255),
    nombreCompleto  VARCHAR(255)    NOT NULL,
    fechaNacimiento DATE            NOT NULL,
    telefono        INT,
    imagen          VARCHAR(255)    DEFAULT 'defaultAlejandriaUser.png',
    CONSTRAINT      PK_Usuario      PRIMARY KEY (email)
)

CREATE TABLE IF NOT EXISTS alejandria.prestamo (
    libro               INT,
    usuario             VARCHAR(255),
    fechaPrestamo       DATE                DEFAULT     CURRENT_DATE()  NOT NULL,
    fechaMaxDevolucion  DATE                DEFAULT     ADDDATE(fechaPrestamo, INTERVAL 30 DAY)    NOT NULL,
    fechaDevolucion     DATE,
    CONSTRAINT          PK_Prestamo         PRIMARY KEY (libro,usuario,fechaPrestamo),
    CONSTRAINT          FK_Prestamo_Libro   FOREIGN KEY (libro)     REFERENCES  alejandria.libro(id)        ,
    CONSTRAINT          FK_Prestamo_Usuario FOREIGN KEY (usuario)   REFERENCES  alejandria.usuario(email)  ,
    CONSTRAINT          CHK_Prestamo        CHECK       (fechaDevolucion <= fechaMaxDevolucion)
)

CREATE TABLE IF NOT EXISTS alejandria.mensaje (
    nombreCompleto  VARCHAR(255),
    email           VARCHAR(255)    NOT NULL,
    telefono        INT,
    asunto          TEXT            NOT NULL,
    mensaje         TEXT            NOT NULL
)

CREATE TABLE IF NOT EXISTS alejandria.colaborador (
    nombre      VARCHAR(255)    NOT NULL,
    descripcion TEXT            NOT NULL,
    imagen      VARCHAR(255)    NOT NULL
)

-- Example inserts

insert into alejandria.usuario (email,nombreCompleto,fechaNacimiento) values ("alexdracma@gmail.com","Alex Lopez", '2003-03-17');
insert into alejandria.libro (id,isbn13,nombre) values (1,123456789, "la biblia");
insert into alejandria.prestamo (libro,usuario) values (1,"alexdracma@gmail.com");
insert into alejandria.prestamo (libro,usuario,fechaPrestamo) values (1,"alexdracma@gmail.com",'2003-03-18');