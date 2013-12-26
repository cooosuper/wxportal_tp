drop database wxportal;
create database wxportal;
use wxportal;
create table  user
(
       id                int(8) unsigned not null auto_increment,
       accountname       VARCHAR(30) not null,
       accountpassword   VARCHAR(32) not null,
       name              VARCHAR(10) not null,
       creditcard        VARCHAR(30) not null,
       email             VARCHAR(30) not null,
       phonenumber       VARCHAR(30) not null,
       address           VARCHAR(300) not null,
       isactive          VARCHAR(1) default 0 not null,
       isdelete          VARCHAR(1) default 0 not null,
       primary key(id)
)engine=myisam default charset=utf8;


create table  wxaccount
(
       id                int(8) unsigned not null auto_increment,
       userid            int(8),
       name              VARCHAR(30) not null,
       orgid             VARCHAR(30) not null,
       account           VARCHAR(30) not null,
       token             VARCHAR(30) not null,
       pic               VARCHAR(50) not null,
       area              VARCHAR(30) not null,
       isactive          VARCHAR(1) default 0 not null,
       isdelete          VARCHAR(1) default 0 not null,
       primary key(id)
)engine=myisam default charset=utf8;


create table  textresp
(
       id                int(8) unsigned not null auto_increment,
       wxaccountid       int(8),
       keyword           VARCHAR(30) not null,
       content           VARCHAR(300) not null,
       primary key(id)
)engine=myisam default charset=utf8;


create table  mediaresp
(
       id                int(8) unsigned not null auto_increment,
       wxaccountid       int(8),
       mediaid           VARCHAR(50) not null,
       keyword           VARCHAR(50),
       mediaurl          VARCHAR(100) not null,
       title             VARCHAR(50) not null,
       description       VARCHAR(200) not null,
       mediatype         VARCHAR(1) not null,
       hqmediaurl        VARCHAR(100),
       thumbmediaid      VARCHAR(50),
       primary key(id)
)engine=myisam default charset=utf8;


create table  newsresp
(
       id                int(8) unsigned not null auto_increment,
       wxaccountid       int(8),
       keyword           VARCHAR(30) not null,
       title             VARCHAR(50) not null,
       description       VARCHAR(200) not null,
       picurl            VARCHAR(100) not null,
       thumbpicurl       VARCHAR(100) not null,
       url               VARCHAR(100) not null,
       sort              int(2) default 0 not null,
       primary key(id)
)engine=myisam default charset=utf8;

create table gindex 
(
       id                int(8) unsigned not null auto_increment,
       wxaccountid       int(8),
       name              VARCHAR(30) not null,
       picurl            VARCHAR(100) not null,
       thumbpicurl       VARCHAR(100) not null,
       primary key(id)
)engine=myisam default charset=utf8;

create table gdetail 
(
       id                int(8) unsigned not null auto_increment,
       wxaccountid       int(8),
       picurl            VARCHAR(100) not null,
       thumbpicurl       VARCHAR(100) not null,
       content           VARCHAR(1000) not null,
       sort              int(2) default 0 not null,
       primary key(id)
)engine=myisam default charset=utf8;

create table gcontact 
(
       id                int(8) unsigned not null auto_increment,
       wxaccountid       int(8),
       address           VARCHAR(200) not null,
       telephone         VARCHAR(100) not null,
       email             VARCHAR(100) not null,
       faxnumber         VARCHAR(100) not null,
       primary key(id)
)engine=myisam default charset=utf8;

alter table gcontact 
       add constraint FK_gcontact_wxaccountid foreign key(wxaccountid)
       references wxaccount(id);

alter table gdetail
       add constraint FK_gdetail_wxaccountid foreign key(wxaccountid)
       references wxaccount(id);

alter table gindex
       add constraint FK_gindex_wxaccountid foreign key(wxaccountid)
       references wxaccount(id);

alter  table wxaccount
       add constraint FK_wxaccount_userid foreign key (userid)
       references user(id);

alter  table textresp
       add constraint FK_textresp_wxaccountid foreign key (wxaccountid)
       references wxaccount(id);

alter  table mediaresp
       add constraint FK_mediaresp_wxaccountid foreign key (wxaccountid)
       references wxaccount(id);

alter  table newsresp
       add constraint FK_newsresp_wxaccountid foreign key (wxaccountid)
       references wxaccount(id);

