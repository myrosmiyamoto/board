drop database if exists board;
create database board default character set utf8 collate utf8_general_ci;
drop user if exists 'board_admin'@'%';
create user 'board_admin'@'%' identified by 'password';
grant all on board.* to 'board_admin'@'%';
use board;

create table message (
    id int auto_increment primary key,
    view_name varchar(200),
    message text not null,
    post_date datetime default current_timestamp
);
