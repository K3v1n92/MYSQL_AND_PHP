create table servicios
(
	  CODIGOSERVICIO int NOT NULL AUTO_INCREMENT,
  	  NombreServicio Varchar(50) NOT NULL,
	  Descripcion Varchar(50),
	Precio DOUBLE(15, 2),
	  CONSTRAINT PK_sericios PRIMARY KEY (CODIGOSERVICIO)	

);

CREATE TABLE EMPRESA
(
	IDEMPRESA int NOT NULL AUTO_INCREMENT,
	NOMBRECOMERCIAL VARCHAR(50) NOT NULL,
	NIT VARCHAR(15) NOT NULL,
	PBX VARCHAR(20),
	DIRECCION VARCHAR(50),
	CONSTRAINT PK_EMPRESA PRIMARY KEY (IDEMPRESA)
);

CREATE TABLE CONTACTO
(
	IDCONTACTO int NOT NULL AUTO_INCREMENT,
	GENERO char (1) not null,
	Nombre Varchar(50) not null,
	Apellido Varchar(50) not null,
	correo Varchar(20) not null,
	Telefono INT NOT NULL,
	EMPRESA INT NOT NULL,
	PRIMARY KEY (IDCONTACTO),
        FOREIGN KEY (EMPRESA) REFERENCES EMPRESA(IDEMPRESA)
	
);

CREATE TABLE cotizacion
(
	NoCotizacion int NOT NULL AUTO_INCREMENT,
	Estado Char(3) NOT NULL,
	Empresa INT NOT NULL,
	Contacto INT not null,
	Sericio INT not null,
	Total Decimal(15,2),
	PRIMARY KEY (NoCotizacion),
    FOREIGN KEY (Empresa) REFERENCES EMPRESA(IDEMPRESA),
	FOREIGN KEY (Sericio) REFERENCES servicios(CODIGOSERVICIO),
	FOREIGN KEY (Contacto) REFERENCES CONTACTO(IDCONTACTO)
);