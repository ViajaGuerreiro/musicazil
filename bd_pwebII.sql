create database bd_musicazil;
use bd_musicazil;

create table tbusuario
( 
 idusu int(4) auto_increment primary key,
 emailusu varchar(45),
 senhausu varchar(70)
 );

 create table tbcliente
(
idcli int(4) auto_increment primary key,
idusu int(4),
constraint usu_cliente_conexao
foreign key(idusu)
references tbusuario(idusu),
nomeclie varchar(45),
foneclie char(11)
);
create table tbartista
(
idart int(4) auto_increment primary key,
idclifk int (4),
constraint cli_art_conexao
foreign key(idclifk )
references tbcliente(idcli)
);
create table tbmusica
(
idmusica int(4) auto_increment primary key,
nomemus varchar(60),
genmus varchar(60),
idartfk int(4),
constraint art_mus_conexao
foreign key(idartfk)
references tbartista(idart),
albummus varchar(40),
duracaomus time,
linkmus text(250),
capamus varchar(250),
datalanmus date,
letramus text
);

create table tbplaylist
(
idplaylist int(4) auto_increment primary key,
idclifk int(4),
constraint cli_pyalist_conexao
foreign key(idclifk)
references tbcliente(idcli),
idmusfk int(4),
constraint mus_pyalist_conexao
foreign key(idmusfk)
references tbmusica(idmusica)
);

create table tbavaliacao
(
idaval int(4) auto_increment primary key,
idmusfk int(4),
constraint mus_avalicao_conexao
foreign key(idmusfk)
references tbmusica(idmusica),
notaaval int(1)
);






