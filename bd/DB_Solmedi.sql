create table usuario
(id_usuario int auto_increment primary key,
tipo_usuario varchar(100)not null,
correo_usuario varchar ()
nombre_usuario varchar(255) not null,
contraseña varchar(255) not null );

create table tipo_doc
(id_doc varchar (50) not null primary key,
doc varchar (50) not null
);

create table genero
(id_gen varchar (50) not null primary key,
gen varchar (50) not null
);

create table eps
(id_eps varchar (50) not null primary key,
eps varchar (50) not null
);

INSERT INTO `tipo_doc`(`id_doc`, `doc`) VALUES ('1','Cedula'),('2','Tarjeta de identidad'),('3','Cedula de extrangeria');
INSERT INTO `genero`(`id_gen`, `gen`) VALUES ('1','Masculino'),('2','Femenino');
INSERT INTO `eps`(`id_eps`, `eps`) VALUES ('1','Famisanar'),('2','Compensar'),('3','Nueva EPS');

create table paciente
(doc_paciente numeric (20) not null primary key,
tipo_documento varchar (20) not null,
nombre varchar (100) not null,
apellido varchar (100) not null,
genero varchar (50) not null,
fecha_nacimiento date not null,
telefono numeric (20) not null,
direccion varchar (100) not null,
EPS varchar (100) not null);

create table servicio
(id_servicio numeric(20)not null primary key,
tipo_servicio varchar(100)not null,
fecha_atencion date not null,
hora_atencion time not null);

create table historia_clinica
(id_hc numeric (20) not null primary key,
descripcion_servicio varchar (255) not null,
diagnostico varchar (255) not null,
examen_fisico_inicial varchar (255) not null,
id_servicio numeric (20) not null,
doc_paciente numeric (20) not null,
id_usuario int (20) not null,
foreign key (id_servicio) references servicio (id_servicio),
foreign key (doc_paciente) references paciente (doc_paciente),
foreign key (id_usuario) references usuario (id_usuario));

create table detalle_usuario
(id_usuario int(20)not null,
id_hc numeric(20)not null,
foreign key (id_usuario) references usuario (id_usuario),
foreign key (id_hc) references historia_clinica (id_hc));

create table detalle_servicio
(id_servicio numeric(20)not null,
id_hc numeric(20)not null,
foreign key (id_servicio) references servicio (id_servicio),
foreign key (id_hc) references historia_clinica (id_hc));