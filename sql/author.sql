create table author(
authorId binary(16) not null,
authorAvatarUrl varchar(255),
tivationToken authorAcchar(32),
authorEmail varchar(128) not null,
authorHash char(97) not null,
authorUserName varchar(32) not null,
unique(authorEmail),
unique(authorUsername),
INDEX(authorEmail),
primary key(authorId)
);