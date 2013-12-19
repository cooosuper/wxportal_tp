create table  user
(
       id                NUMERIC(8) not null,
       accountname       VARCHAR(30) not null,
       accountpassword   VARCHAR(32) not null,
       name              VARCHAR(10) not null,
       creditcard        VARCHAR(30) not null,
       email             VARCHAR(30) not null,
       isactive          VARCHAR(1) default 0 not null,
       isdelete          VARCHAR(1) default 0 not null
);
alter  table user
       add constraint PK_user_id primary key (id);


create table  wxaccount
(
       id                NUMERIC(8) not null,
       wxorgid           VARCHAR(30) not null,
       wxaccount         VARCHAR(30) not null,
       token             VARCHAR(30) not null,
       wxpic             VARCHAR(50) not null,
       isactive          VARCHAR(1) default 0 not null,
       isdelete          VARCHAR(1) default 0 not null
);
alter  table wxaccount
       add constraint PK_wxaccount_id primary key (id);


create table  user_wxaccount
(
       id                NUMERIC(8) not null,
       userid            NUMERIC(8),
       wxaccountid       NUMERIC(8)
);
alter  table user_wxaccount
       add constraint PK_user_wxaccount_id primary key (id);


create table  textresp
(
       id                NUMERIC(8) not null,
       keyword           VARCHAR(30) not null,
       content           VARCHAR(300) not null
);
alter  table textresp
       add constraint PK_textresp_id primary key (id);


create table  mediaresp
(
       id                NUMERIC(8) not null,
       mediaid           VARCHAR(50) not null,
       keyword           VARCHAR(50),
       mediaurl          VARCHAR(100) not null,
       title             VARCHAR(50) not null,
       description       VARCHAR(200) not null,
       mediatype         VARCHAR(1) not null,
       hqmediaurl        VARCHAR(100),
       thumbmediaid      VARCHAR(50)
);
alter  table mediaresp
       add constraint PK_mediaresp_id primary key (id);


create table  item
(
       id                NUMERIC(8) not null,
       title             VARCHAR(50) not null,
       description       VARCHAR(200) not null,
       picurl            VARCHAR(100) not null,
       url               VARCHAR(100) not null
);
alter  table item
       add constraint PK_item_id primary key (id);


create table  news_item
(
       id                NUMERIC(8) not null,
       newsid            NUMERIC(8),
       itemid            NUMERIC(8)
);
alter  table news_item
       add constraint PK_news_item_id primary key (id);


create table  wxaccount_textresp
(
       id                NUMERIC(8) not null,
       wxaccountid_to_text NUMERIC(8),
       textrespid        NUMERIC(8)
);
alter  table wxaccount_textresp
       add constraint PK_wxaccount_textresp_id primary key (id);


create table  wxaccount_mediaresp
(
       id                NUMERIC(8) not null,
       wxaccountid_to_media NUMERIC(8),
       mediarespid       NUMERIC(8)
);
alter  table wxaccount_mediaresp
       add constraint PK_wxaccount_mediaresp_id primary key (id);


create table  wxaccount_newsresp
(
       id                NUMERIC(8) not null,
       wxaccountid_to_news NUMERIC(8),
       newsrespid        NUMERIC(8)
);
alter  table wxaccount_newsresp
       add constraint PK_wxaccount_newsresp_id primary key (id);


create table  newsresp
(
       id                NUMERIC(8) not null,
       keyword           VARCHAR(4000)
);
alter  table newsresp
       add constraint PK_newsresp_id primary key (id);






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



