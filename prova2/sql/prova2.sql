-- Drop banco de dados
-- drop database prova2;

-- Criação do banco de dados
create database fluxo_caixa;

-- Selecionar banco de dados
use fluxo_caixa;

-- Criação da tabela usuario
create table fluxo_caixa (
   id_fluxo_caixa   integer      not null auto_increment,
   data     date          not null,
   tipo     varchar(10)   not null,
   valor    decimal(10,2)   not null,
   historico   varchar(150)    not null,
   cheque   varchar(3)    not null,
   primary key (id_fluxo_caixa)

);




