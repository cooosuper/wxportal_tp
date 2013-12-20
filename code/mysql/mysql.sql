create table user
(
       id                int(8) unsigned not null auto_increment,
       logname           varchar(30) not null,
       logpassword       varchar(32) not null,
       name              varchar(10),
       creditcard        varchar(30),
       phonenumber       varchar(30),
       address           varchar(300),
       email             varchar(30) not null,
       isactive          varchar(1) default 0 not null,
       isdelete          varchar(1) default 0 not null,
       primary key(id)
)engine=myisam default charset=utf8;

create table wxaccount
(
       id                int(8) unsigned not null auto_increment,
       orgid             varchar(30) not null,
       account           varchar(50) not null,
       name              varchar(30) not null,
       area              varchar(300) not null,
       token             varchar(30) not null,
       wxpic             varchar(50) not null,
       isactive          varchar(1) default 0 not null,
       isdelete          varchar(1) default 0 not null,
       primary key(id)
)engine=myisam default charset=utf8;

create table  user_wxaccount
(
       id                int(8) unsigned not null auto_increment,
       userid            int(8) not null,
       wxaccountid       int(8) not null,
       primary key(id)
)engine=myisam default charset=utf8;

create table  textresp
(
       id                int(8) unsigned not null auto_increment,
       keyword           varchar(50),
       content           varchar(300) not null,
       primary key(id)
)engine=myisam default charset=utf8;

create table  mediaresp
(
       id                int(8) unsigned not null auto_increment,
       mediaid           varchar(50) not null,
       keyword           varchar(50),
       mediaurl          varchar(100) not null,
       title             varchar(50) not null,
       description       varchar(200) not null,
       mediatype         varchar(1) not null,
       hqmediaurl        varchar(100),
       thumbmediaid      varchar(50),
       primary key(id)
)engine=myisam default charset=utf8;

create table  item
(
       id                int(8) unsigned not null auto_increment,
       title             varchar(50) not null,
       description       varchar(200) not null,
       picurl            varchar(100) not null,
       url               varchar(100) not null,
       primary key(id)
)engine=myisam default charset=utf8;

create table  news_item
(
       id                int(8) unsigned not null auto_increment,
       newsid            int(8) not null,
       itemid            int(8) not null,
       primary key(id)
)engine=myisam default charset=utf8;

create table  wxaccount_textresp
(
       id                    int(8) unsigned not null auto_increment,
       wxaccountid_to_text   int(8) not null,
       textrespid            int(8) not null,
       primary key(id)
)engine=myisam default charset=utf8;

create table  wxaccount_mediaresp
(
       id                     int(8) unsigned not null auto_increment,
       wxaccountid_to_media   int(8) not null,
       mediarespid            int(8) not null,
       primary key(id)
)engine=myisam default charset=utf8;

create table  wxaccount_newsresp
(
       id                    int(8) unsigned not null auto_increment,
       wxaccountid_to_news   int(8) not null,
       newsrespid            int(8) not null,
       primary key(id)
)engine=myisam default charset=utf8;

create table  newsresp
(
       id                int(8) unsigned not null auto_increment,
       keyword           varchar(50),
       primary key(id)
)engine=myisam default charset=utf8;


alter  table user_wxaccount
       add constraint FK_user_wxaccount_userid foreign key (userid)
       references user(id);
alter  table user_wxaccount
       add constraint FK_user_wxacunt_wxaccountid foreign key (wxaccountid)
       references wxaccount(id);

alter  table news_item
       add constraint FK_news_item_newsid foreign key (newsid)
       references newsresp(id);
alter  table news_item
       add constraint FK_news_item_itemid foreign key (itemid)
       references item(id);

alter  table wxaccount_textresp
       add constraint FK_wxaccountesp_wxaccountext foreign key (wxaccountid_to_text)
       references wxaccount(id);
alter  table wxaccount_textresp
       add constraint FK_wxaccountesp_textrespid foreign key (textrespid)
       references textresp(id);

alter  table wxaccount_mediaresp
       add constraint FK_wxaccountesp_wxaccountdia foreign key (wxaccountid_to_media)
       references wxaccount(id);
alter  table wxaccount_mediaresp
       add constraint FK_wxaccountesp_mediarespid foreign key (mediarespid)
       references mediaresp(id);

alter  table wxaccount_newsresp
       add constraint FK_wxaccountesp_wxaccountews foreign key (wxaccountid_to_news)
       references wxaccount(id);
alter  table wxaccount_newsresp
       add constraint FK_wxaccountesp_newsrespid foreign key (newsrespid)
       references newsresp(id);
