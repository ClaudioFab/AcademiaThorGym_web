create database sistemathorgym;

use sistemathorgym;

create table usuario(
    idusuario int primary key auto_increment,
    nome varchar(150) not null,
    email varchar(150) not null unique,
    senha_hash varchar(250) not null,
    criado_em timestamp default current_timestamp
);

/*123456123456*/