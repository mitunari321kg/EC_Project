CREATE TABLE contact (
 contact_id INT NOT NULL,
 name VARCHAR(255),
 mail VARCHAR(255),
 subject VARCHAR(255),
 contents VARCHAR(1020)
);

ALTER TABLE contact ADD CONSTRAINT PK_contact PRIMARY KEY (contact_id);


CREATE TABLE mail_certification (
 certification_id INT NOT NULL,
 mail VARCHAR(255),
 urltoken VARCHAR(255),
 request_time DATE,
 certification_flag TINYINT(1)
);

ALTER TABLE mail_certification ADD CONSTRAINT PK_mail_certification PRIMARY KEY (certification_id);


CREATE TABLE user (
 user_id VARCHAR(255) NOT NULL,
 password VARCHAR(255),
 last_name VARCHAR(255),
 first_name VARCHAR(255),
 last_furigana VARCHAR(255),
 first_furigana VARCHAR(255),
 birthday DATE,
 gender TINYINT(2),
 postal_code CHAR(7),
 prefactures VARCHAR(4),
 address01 VARCHAR(255),
 address02 VARCHAR(255),
 address03 VARCHAR(255),
 tel CHAR(11),
 mail VARCHAR(255),
 paid_menber_flag TINYINT(1),
 brack_flag TINYINT(1),
 delete_flag TINYINT(1)
);

ALTER TABLE user ADD CONSTRAINT PK_user PRIMARY KEY (user_id);


CREATE TABLE employee (
 emp_id INT NOT NULL,
 password VARCHAR(255),
 last_name VARCHAR(255),
 first_name VARCHAR(255),
 last_furigana VARCHAR(255),
 first_furigana VARCHAR(255),
 emp_authority TINYINT(1),
 delete_flag TINYINT(1)
);

ALTER TABLE employee ADD CONSTRAINT PK_employee PRIMARY KEY (emp_id);


CREATE TABLE delivery (
 delivery_id INT NOT NULL,
 user_id VARCHAR(255),
 name VARCHAR(255),
 name_furigana VARCHAR(255),
 postal_code CHAR(7) NOT NULL,
 prefactures VARCHAR(4),
 address01 VARCHAR(255),
 address02 VARCHAR(255),
 address03 VARCHAR(255)
);

ALTER TABLE delivery ADD CONSTRAINT PK_delivery PRIMARY KEY (delivery_id);


CREATE TABLE brack_list (
 user_id VARCHAR(255) NOT NULL,
 sin_name VARCHAR(255)
);

ALTER TABLE brack_list ADD CONSTRAINT PK_brack_list PRIMARY KEY (user_id);


CREATE TABLE category (
 category_id INT NOT NULL,
 emp_id INT NOT NULL,
 category_name VARCHAR(255),
 registration_date DATE,
 delete_flag TINYINT(1)
);

ALTER TABLE category ADD CONSTRAINT PK_category PRIMARY KEY (category_id);


CREATE TABLE product (
 product_id INT NOT NULL,
 emp_id INT NOT NULL,
 product_name VARCHAR(255),
 product_detail VARCHAR(510),
 price INT,
 sale_flag TINYINT(1),
 quality_period DATE,
 business_code INT DEFAULT 456128416,
 checkdegit INT,
 registration_date DATE,
 evaluation CHAR(1) DEFAULT '1',
 delete_flag TINYINT(1)
);

ALTER TABLE product ADD CONSTRAINT PK_product PRIMARY KEY (product_id);


CREATE TABLE product_category (
 product_id INT NOT NULL,
 category_id INT NOT NULL
);

ALTER TABLE product_category ADD CONSTRAINT PK_product_category PRIMARY KEY (product_id,category_id);


CREATE TABLE product_image (
 product_id INT NOT NULL,
 line_code SMALLINT DEFAULT 1 NOT NULL,
 img VARCHAR(510)
);

ALTER TABLE product_image ADD CONSTRAINT PK_product_image PRIMARY KEY (product_id,line_code);


CREATE TABLE stock (
 product_id INT NOT NULL,
 made_date DATE NOT NULL,
 stock_quantity INT
);

ALTER TABLE stock ADD CONSTRAINT PK_stock PRIMARY KEY (product_id,made_date);


CREATE TABLE an_order (
 order_id INT NOT NULL,
 user_id VARCHAR(255),
 delivery_id INT NOT NULL,
 date DATE,
 order_total_fee INT
);

ALTER TABLE an_order ADD CONSTRAINT PK_an_order PRIMARY KEY (order_id);


CREATE TABLE order_detail (
 order_id INT NOT NULL,
 line_code SMALLINT DEFAULT 1 NOT NULL,
 product_id INT NOT NULL,
 quantity INT,
 price INT,
 total_fee INT,
 order_date DATE
);

ALTER TABLE order_detail ADD CONSTRAINT PK_order_detail PRIMARY KEY (order_id,line_code);


ALTER TABLE delivery ADD CONSTRAINT FK_delivery_0 FOREIGN KEY (user_id) REFERENCES user (user_id);


ALTER TABLE brack_list ADD CONSTRAINT FK_brack_list_0 FOREIGN KEY (user_id) REFERENCES user (user_id);


ALTER TABLE category ADD CONSTRAINT FK_category_0 FOREIGN KEY (emp_id) REFERENCES employee (emp_id);


ALTER TABLE product ADD CONSTRAINT FK_product_0 FOREIGN KEY (emp_id) REFERENCES employee (emp_id);


ALTER TABLE product_category ADD CONSTRAINT FK_product_category_0 FOREIGN KEY (product_id) REFERENCES product (product_id);
ALTER TABLE product_category ADD CONSTRAINT FK_product_category_1 FOREIGN KEY (category_id) REFERENCES category (category_id);


ALTER TABLE product_image ADD CONSTRAINT FK_product_image_0 FOREIGN KEY (product_id) REFERENCES product (product_id);


ALTER TABLE stock ADD CONSTRAINT FK_stock_0 FOREIGN KEY (product_id) REFERENCES product (product_id);


ALTER TABLE an_order ADD CONSTRAINT FK_an_order_0 FOREIGN KEY (user_id) REFERENCES user (user_id);
ALTER TABLE an_order ADD CONSTRAINT FK_an_order_1 FOREIGN KEY (delivery_id) REFERENCES delivery (delivery_id);


ALTER TABLE order_detail ADD CONSTRAINT FK_order_detail_0 FOREIGN KEY (order_id) REFERENCES an_order (order_id);
ALTER TABLE order_detail ADD CONSTRAINT FK_order_detail_1 FOREIGN KEY (product_id) REFERENCES product (product_id);


