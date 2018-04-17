CREATE TABLE User (

		usr_id int PRIMARY KEY AUTO_INCREMENT,
		usr_name varchar(50),
		usr_companyName varchar(50),
		usr_category varchar(50),
		usr_tagline varchar(50),
		usr_mobile varchar(30),
		usr_email varchar(50),
		usr_website varchar(50),
		usr_address varchar(50),
		usr_logo varchar(20),
		usr_profilePic varchar(20),
		usr_password varchar(100),
		usr_status int,
		usr_crtd_by int,
		usr_crtd_on datetime,
		usr_updt_by int,
		usr_updt_on timestamp
);

CREATE TABLE tyfcb(

		tyfcb_id int NOT NUll AUTO_INCREMENT,
		tyfcb_date date,
		tyfcb_amt varchar(20),
		tyfcb_remark varchar(50),
		usr_id int,
		tyfstatus int,
		tyfcrtd_by int,
		tyfcrtd_on datetime,
		tyfupdt_by int,
		tyfupdt_on timestamp,	
		PRIMARY KEY (tyfcb_id),
        FOREIGN KEY (usr_id) REFERENCES users(usr_id)

);


CREATE  TABLE bsn_parameter(

		bsn_id int NOT NULL PRIMARY KEY ,
		bsn_name varchar(30),
		bsn_value  varchar(30),
		bsn_status int,
		bsn_crtdby int,
		bsn_crtdate timestamp
);


CREATE TABLE user_Transactions(

		usr_trans_id int NOT NULL PRIMARY Key AUTO_INCREMENT,
		usr_trans_type int,
		usr_trans_cmpname varchar(20),
		usr_trans_dept varchar(20),
		usr_trans_psrname varchar(20),
		usr_trans_remark varchar(20),
		usr_trans_title  varchar(20),
		usr_trans_date    date,
		usr_trans_status int,
		usr_transcrtd_by int,
		usr_transcrtd_on datetime,
		usr_transupdt_by int,
		usr_transupdt_on timestamp 

);

CREATE TABLE user_email(

		usr_eml_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
		usr_id int,
		usr_eml varchar(20),
		usr_emlstatus int,
		usr_emlcrtd_by int,
		usr_emlcrtd_on datetime,
		usr_emlupdt_by int,
		usr_emlupdt_on timestamp,
		FOREIGN KEY (usr_id) REFERENCES users(usr_id)
);

CREATE TABLE user_mobile(

		usr_mbl_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
		usr_id int,
		usr_mbl varchar(20),
		usr_mblstatus int,
		usr_mblcrtd_by int,
		usr_mblcrtd_on datetime,
		usr_mblupdt_by int,
		usr_mblupdt_on timestamp,
		FOREIGN KEY (usr_id) REFERENCES users(usr_id)
);

CREATE TABLE references(

		ref_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
		ref_usr_id int,
		ref_name   varchar(20),
		ref_email  varchar(20),
		ref_mobile varchar(25),
		ref_remark varchar(20),
		ref_date   date,
		ref_status int,
		ref_crtd_by int,
		ref_crtd_on datetime,
		ref_updt_by int,
		ref_updt_on timestamp,
		FOREIGN KEY (ref_usr_id) REFERENCES users(usr_id)
);