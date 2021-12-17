CREATE TABLE certification_mail (
 id INT NOT NULL,
 mail VARCHAR(255),
 urltoken VARCHAR(255),
 date DATE,
 flag TINYINT(1)
);

ALTER TABLE certification_mail ADD CONSTRAINT PK_certification_mail PRIMARY KEY (id);


CREATE TABLE contact_table (
 contact_id SMALLINT NOT NULL,
 contact_name VARCHAR(255),
 contact_mail VARCHAR(255),
 contact_subject VARCHAR(255),
 contact_contents VARCHAR(65535)
);

ALTER TABLE contact_table ADD CONSTRAINT PK_contact_table PRIMARY KEY (contact_id);


CREATE TABLE employee_table (
 emp_id VARCHAR(255) NOT NULL,
 emp_password VARCHAR(510),
 emp_last_name VARCHAR(255),
 emp_last_furigana VARCHAR(255),
 emp_first_name VARCHAR(255),
 emp_first_furigana VARCHAR(255),
 emp_authority TINYINT(1),
 emp_delete_flag TINYINT(1) DEFAULT 0 NOT NULL
);

ALTER TABLE employee_table ADD CONSTRAINT PK_employee_table PRIMARY KEY (emp_id);


CREATE TABLE product_table (
 product_id INT NOT NULL,
 product_name VARCHAR(255),
 product_detail VARCHAR(65535),
 product_registration_date DATE DEFAULT current_timestamp()  ,
 product_unit_price VARCHAR(510),
 emp_id VARCHAR(255),
 product_sale_flag TINYINT(1) DEFAULT 0 NOT NULL,
 expiry_date DATE,
 remaining_amount INT,
 prodcut_delete_flag TINYINT(1) DEFAULT 0 NOT NULL
);

ALTER TABLE product_table ADD CONSTRAINT PK_product_table PRIMARY KEY (product_id);


CREATE TABLE user_table (
 user_id VARCHAR(255) NOT NULL,
 login_password VARCHAR(510),
 user_last_name VARCHAR(255),
 user_first_name VARCHAR(255),
 user_last_furigana VARCHAR(255),
 user_first_furigana VARCHAR(255),
 user_birthday DATE,
 user_gender TINYINT(2),
 user_postal_code CHAR(7),
 user_prefectures VARCHAR(255),
 user_address1 VARCHAR(255),
 user_address2 VARCHAR(255),
 user_address3 CHAR(10),
 user_tel CHAR(11),
 user_email VARCHAR(255),
 user_delete_flag TINYINT(1) DEFAULT 0 NOT NULL,
 paid_member TINYINT(1)
);

ALTER TABLE user_table ADD CONSTRAINT PK_user_table PRIMARY KEY (user_id);


CREATE TABLE category_table (
 category_id INT NOT NULL,
 category_name VARCHAR(255),
 category_registered_date DATE DEFAULT current_timestamp()   NOT NULL,
 emp_id VARCHAR(255),
 category_delete_flag TINYINT(1) DEFAULT 0 NOT NULL
);

ALTER TABLE category_table ADD CONSTRAINT PK_category_table PRIMARY KEY (category_id);


CREATE TABLE delivery_address (
 delivery_id INT NOT NULL,
 user_id VARCHAR(255),
 delivery_name VARCHAR(255),
 delivery_furigana VARCHAR(255),
 delivery_address VARCHAR(255),
 delivery_tel CHAR(11)
);

ALTER TABLE delivery_address ADD CONSTRAINT PK_delivery_address PRIMARY KEY (delivery_id);


CREATE TABLE order_table (
 user_order_id INT NOT NULL,
 user_id VARCHAR(255),
 order_date DATE DEFAULT current_timestamp()  ,
 desired_delivery_date DATE,
 order_total_fee VARCHAR(510),
 delivery_id INT NOT NULL
);

ALTER TABLE order_table ADD CONSTRAINT PK_order_table PRIMARY KEY (user_order_id);


CREATE TABLE product_category_table (
 product_id INT NOT NULL,
 category_id INT NOT NULL
);

ALTER TABLE product_category_table ADD CONSTRAINT PK_product_category_table PRIMARY KEY (product_id,category_id);


CREATE TABLE product_img_table (
 product_id INT NOT NULL,
 product_img VARBINARY(510)
);

ALTER TABLE product_img_table ADD CONSTRAINT PK_product_img_table PRIMARY KEY (product_id);


CREATE TABLE order_detail_table (
 order_line_id SMALLINT NOT NULL,
 user_order_id INT NOT NULL,
 product_id INT NOT NULL,
 product_name VARCHAR(255),
 order_quantity VARCHAR(255),
 product_unit_price VARCHAR(255),
 subtotal_fee VARBINARY(255),
 delivery_date DATE NOT NULL
);

ALTER TABLE order_detail_table ADD CONSTRAINT PK_order_detail_table PRIMARY KEY (order_line_id,user_order_id);


ALTER TABLE product_table ADD CONSTRAINT FK_product_table_0 FOREIGN KEY (emp_id) REFERENCES employee_table (emp_id);


ALTER TABLE category_table ADD CONSTRAINT FK_category_table_0 FOREIGN KEY (emp_id) REFERENCES employee_table (emp_id);


ALTER TABLE delivery_address ADD CONSTRAINT FK_delivery_address_0 FOREIGN KEY (user_id) REFERENCES user_table (user_id);


ALTER TABLE order_table ADD CONSTRAINT FK_order_table_0 FOREIGN KEY (user_id) REFERENCES user_table (user_id);
ALTER TABLE order_table ADD CONSTRAINT FK_order_table_1 FOREIGN KEY (delivery_id) REFERENCES delivery_address (delivery_id);


ALTER TABLE product_category_table ADD CONSTRAINT FK_product_category_table_0 FOREIGN KEY (product_id) REFERENCES product_table (product_id);
ALTER TABLE product_category_table ADD CONSTRAINT FK_product_category_table_1 FOREIGN KEY (category_id) REFERENCES category_table (category_id);


ALTER TABLE product_img_table ADD CONSTRAINT FK_product_img_table_0 FOREIGN KEY (product_id) REFERENCES product_table (product_id);


ALTER TABLE order_detail_table ADD CONSTRAINT FK_order_detail_table_0 FOREIGN KEY (user_order_id) REFERENCES order_table (user_order_id);
ALTER TABLE order_detail_table ADD CONSTRAINT FK_order_detail_table_1 FOREIGN KEY (product_id) REFERENCES product_table (product_id);


