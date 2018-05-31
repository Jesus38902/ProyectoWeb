--DROP TABLE Usuario;
--DROP TABLE Pago_Alumno;
--DROP TABLE Alumno;
--DROP TABLE Licenciatura;
--DROP TABLE Concepto;
--DROP TABLE Estado_Pago;
--DROP TABLE Periodo;
--DROP TABLE Baucher_Pago;
--DROP TABLE Registro_Baucher; 

create table Licenciatura(
   Id_lic char(4)primary key not null ,
   Descripcion char(50)
);


create table Concepto (
   Id_concepto char(2)primary key not null ,
   Descripcion char(100),
   Cantidad float
);

create table Estado_Pago (
   Id_EstPago char(2)primary key not null,
   Descripcion char(100)
);

create table Periodo (
   Id_periodo char(2)primary key not null,
   Descripcion char(100)
);

create table Baucher_Pago (
   Id_Baucher char(5)primary key not null ,
   Sucursal char(100),
   Importe float,
   Fecha date
);

create table Alumno(
   Matricula char(8)primary key not null,
   Nombre char(50),
   ApePat char(50),
   ApeMat char(50),
   Telefono char(15),
   Direccion char(150),
   CP char(5),
   Genero char(6),
   Id_lic char(4)references Licenciatura(Id_lic)
);

create table catedratico(
   Matricula char(8)primary key not null,
   Nombre char(50),
   ApePat char(50),
   ApeMat char(50),
   Telefono char(15),
   Direccion char(150),
   CP char(5),
   Genero char(6),
   Id_lic char(4)references Licenciatura(Id_lic)
);

create table Pago_Alumno (
    Id_PagoA char(6)primary key not null ,
    Matricula char(8)references Alumno(Matricula),
    Id_periodo char(2)references Periodo(Id_periodo),
    Id_EstPago char(2) references Estado_Pago(Id_EstPago),
    Fecha date,
    Mes char(10)
);

create table Registro_Baucher (
   Id_RegBau char(6)primary key not null,
   Id_Baucher char(5)references Baucher_Pago(Id_Baucher)
);

create table Materias (
    Clave char(8)primary key not null,
    Nombre char(30),
    Horario char(20),
    Maestro char(20),
    Salon char(8)
);

create table Horario_Alumno(
	Id_Clave char(8) primary key not null references Materias(Clave),
	Id_Alumno char(8) references Alumno(Matricula)
	);
create table Horario_Catedratico(
	Id_Clave char(8) primary key not null references Materias(Clave),
	Id_Catedratico char(8) references Catedratico(Matricula)
	);

