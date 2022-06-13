CREATE DATABASE myhg;

use myhg;


CREATE TABLE USERS(
    us_id int not null UNIQUE,
    us_username varchar(100) not null UNIQUE,
    us_email varchar(50) not null UNIQUE,
    us_password varchar(300) not null,
    us_active boolean not null,
    CONSTRAINT pk_user primary key (us_id)
);



CREATE TABLE COLLECTIONS(
    coll_id int not null AUTO_INCREMENT UNIQUE,
    coll_name varchar(50) not null,
    coll_set varchar(10) not null,
    coll_year int not null,
    CONSTRAINT pk_collection primary key (coll_id)
);

CREATE TABLE FIGURES(
    fig_id int not null AUTO_INCREMENT UNIQUE,
    fig_character varchar(100) not null,
    fig_form varchar(100) not null,
    fig_photo_name varchar(100) not null,
    fig_collection_id int not null,
    CONSTRAINT pk_figure primary key (fig_id),
    CONSTRAINT fk_collection_figure foreign key (fig_collection_id) references COLLECTIONS (coll_id)
);

CREATE TABLE USERS_X_FIGURES(
    us_id int not null,
    fig_id int not null,
    CONSTRAINT pk_us_x_fig primary key (us_id,fig_id),
    CONSTRAINT fk_us_id foreign key (us_id) references USERS (us_id),
    CONSTRAINT fk_fig_id foreign key (fig_id) references FIGURES (fig_id)
);





insert into COLLECTIONS (coll_name,coll_set,coll_year) VALUES ("HG","1",2002);
insert into COLLECTIONS (coll_name,coll_set,coll_year) VALUES ("HG","2",2003);
insert into COLLECTIONS (coll_name,coll_set,coll_year) VALUES ("HG","3",2003);
insert into COLLECTIONS (coll_name,coll_set,coll_year) VALUES ("HG","4",2004);
insert into COLLECTIONS (coll_name,coll_set,coll_year) VALUES ("HG","5",2004);
insert into COLLECTIONS (coll_name,coll_set,coll_year) VALUES ("HG","6",2005);
insert into COLLECTIONS (coll_name,coll_set,coll_year) VALUES ("HG","7",2005);
insert into COLLECTIONS (coll_name,coll_set,coll_year) VALUES ("HG","8",2005);
insert into COLLECTIONS (coll_name,coll_set,coll_year) VALUES ("HG","9",2005);
insert into COLLECTIONS (coll_name,coll_set,coll_year) VALUES ("HG","10",2005);
insert into COLLECTIONS (coll_name,coll_set,coll_year) VALUES ("HG","11",2006);
insert into COLLECTIONS (coll_name,coll_set,coll_year) VALUES ("HG","12",2006);

/*HG 1*/
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goku","Base",1,"hg1-gokubase.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goku","SSJ1",1,"hg1-gokussj1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Vegeta","SSJ1",1,"hg1-vegetassj1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Piccolo","Base",1,"hg1-piccolo.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goku","Kid",1,"hg1-gokukid.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Bulma"," ",1,"hg1-bulma.png");

/*HG 2*/
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goku","Base",2,"hg2-gokubase.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goku","SSJ1",2,"hg2-gokussj1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Vegeta","Base",2,"hg2-vegetabase.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Bulma","",2,"hg2-bulma.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Yamcha","",2,"hg2-yamcha.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Krillin","",2,"hg2-krillin.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Freezer","Final Form",2,"hg2-freezerff.png");

/*HG 3*/
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goku","Base",3,"hg3-gokubase.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Raditz","",3,"hg3-raditz.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Piccolo","Base",3,"hg3-piccolo.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Gohan","Kid",3,"hg3-gohankid.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Mirai Trunks","SSJ1",3,"hg3-miraitrunkssj1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Launch","",3,"hg3-launch.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Ginyu","",3,"hg3-ginyu.png");


/*HG 4*/
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goku","SSJ1",4,"hg4-gokussj1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Mirai Trunks","Base",4,"hg4-miraitrunksbase.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("A-17","",4,"hg4-a17.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("A-18","",4,"hg4-a18.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Cell","First Form",4,"hg4-cell1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Freezer","Mecha",4,"hg4-mechafreezer.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Jeice & Guldo","",4,"hg4-jeiceandguldo.png");

/*HG 5*/
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goku","Death",5,"hg5-gokudeath.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Teen Gohan","SSJ1",5,"hg5-teengohanssj.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Vegeta","SSJ1",5,"hg5-vegetassj.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Piccolo","",5,"hg5-piccolo.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("A-16","",5,"hg5-a16.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Cell","Second Form",5,"hg5-cell2.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Burter","",5,"hg5-burter.png");

/*HG 6*/
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goku","SSJ2",6,"hg6-gokussj2.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Majin Vegeta & Babidi","",6,"hg6-majinvegeta.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Great Saiyaman","",6,"hg6-saiyaman.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Videl","",6,"hg6-videl.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Dabura","",6,"hg6-dabura.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Cell","Perfect",6,"hg6-cell3.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Recoome","",6,"hg6-recoome.png");

/*HG 7*/
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goku","SSJ3",7,"hg7-gokussj3.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Gohan","Base",7,"hg7-gohanbase.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goten & Trunks","Base",7,"hg7-gotenandtrunks.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Mr.Satan","",7,"hg7-mrsatan.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Buu","Fat",7,"hg7-fatbuu.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Freezer","First Form",7,"hg7-freezer1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Broly","SSJ Legendary",7,"hg7-brolylegendary.png");

/*HG 8*/
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goku","Base",8,"hg8-gokubase.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Uub & Announcer","",8,"hg8-uubandannouncer.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Gotens","SSJ1",8,"hg8-gotenksssj1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Vegito","SSJ1",8,"hg8-vegitossj1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Super Buu","",8,"hg8-superbuu.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Dodoria","",8,"hg8-dodoria.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Zarbon","Base",8,"hg8-zarbonbase.png");

/*HG 9*/
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goku","KaioKen",9,"hg9-gokukaoioken.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Vegeta","Scouter",9,"hg9-vegetascouter.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Nappa","",9,"hg9-nappa.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Yajirobe & Karim","",9,"hg9-yajirobeandkarim.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Gotenks","SSJ3",9,"hg9-gotenksssj3.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Gogeta","SSJ1",9,"hg9-gogetassj1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Mirai Gohan","SSJ1",9,"hg9-miraigohanssj1.png");

/*HG 10*/
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goku","Base",10,"hg10-gokubase.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goku","SSJ1",10,"hg10-gokussj1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goku","SSJ3",10,"hg10-gokussj3.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Vegeta","SSJ1",10,"hg10-vegetassj1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Mirai Trunks","Base",10,"hg10-miraitrunksbase.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Mirai Trunks","SSJ1",10,"hg10-miraitrunksssj1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Mirai Gohan","Base",10,"hg10-miraigohanbase.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Bardock","Base",10,"hg10-bardockbase.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Vegito","Base",10,"hg10-vegitobase.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Gotenks","Base",10,"hg10-gotenksbase.png");

/*HG 11*/
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goku","SSJ1",11,"hg11-gokussj1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Mirai Trunks","SSJ1",11,"hg11-miraitrunkssj1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Piccolo","Base",11,"hg11-piccolo.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Ten & Chaoz","",11,"hg11-tenandchaoz.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("A-19","",11,"hg11-a19.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("A-20","",11,"hg11-a20.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Cooler","Base",11,"hg11-coolerbase.png");

/*HG 12*/
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Goku","SSJ1",12,"hg12-gokussj1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Teen Gohan","SSJ1",12,"hg12-teengohanssj1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Vegeta","SSJ1",12,"hg12-vegetassj1.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Bulma & Trunks","",12,"hg12-bulmaandtrunks.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Cui","",12,"hg12-cui.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Freezer","Second Form",12,"hg12-freezer2.png");
insert into FIGURES(fig_character,fig_form,fig_collection_id,fig_photo_name) VALUES ("Cooler","Final Form",12,"hg12-coolerff.png");