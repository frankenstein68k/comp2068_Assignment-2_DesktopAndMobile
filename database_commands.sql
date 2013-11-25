USE db200249489;

CREATE TABLE comp2068_admin_users (
	admin_lname VARCHAR(35), 
	admin_fname VARCHAR(35),
	admin_email VARCHAR(75),
	admin_username VARCHAR(25),
    admin_password VARCHAR(60),
    admin_access_level INT,
	admin_id int auto_increment,
    PRIMARY KEY (admin_id) 
);

INSERT INTO comp2068_admin_users (admin_lname, admin_fname, admin_email, admin_username, admin_password, admin_access_level)
VALUES
('Mogh', 'Warf','batleth_warrior@starfleet.ca', 'Cmd_Warf','81fe8bfe87576c3ecb22426f8e57847382917acf', 2),
('Riker', 'William','number1@starfleet.ca', 'The_Riker_Lean', '81fe8bfe87576c3ecb22426f8e57847382917acf', 2),
('Picard', 'Jean-Luc','elcapitan@starfleet.ca', 'Four_lights', '81fe8bfe87576c3ecb22426f8e57847382917acf', 2),
('O''Brien', 'Keiko', 'madflowers@starfleet.ca', 'FlowerPower', '81fe8bfe87576c3ecb22426f8e57847382917acf', 1),
('Crusher', 'Wesley', 'applePolisher@starfleet.ca', 'Tinkerer', '81fe8bfe87576c3ecb22426f8e57847382917acf', 1),
('Q', 'Q', 'q@continuum.ca', 'Q', 'c3156e00d3c2588c639e0d3cf6821258b05761c7', 3);

default password is abcd, Q's password is Q

CREATE TABLE comp2068_business_contacts (
	contact_lname VARCHAR(35), 
	contact_fname VARCHAR(35),
	contact_email VARCHAR(75),
	contact_pri_phone VARCHAR(25),
	contact_sec_phone VARCHAR(25),
	contact_company VARCHAR(75),
	contact_address VARCHAR(200),
	contact_id int auto_increment,
    PRIMARY KEY (contact_id) 
);


INSERT INTO comp2068_business_contacts (contact_lname, contact_fname, contact_email, contact_pri_phone, contact_sec_phone, contact_company, contact_address)
VALUES
('Branson', 'Richard', 'r.branson@virginmobile.ca', '011-55-5555555', '011-55-5555556', 'Virgin Galactic', 'Secret Island, middle of Secret Ocean'),
('Bronson', 'Charles', 'c.bronson@dontmesswithme.ca', '282-383-2343', '343-343-3433', 'Death Wish Cupcakes', '218 Athabasca Lane, Springfield, Ontario, Canada'),
('Musk', 'Elon', 'e.musk@tesla.ca', '234-234-3434', '343-234-3433', 'Tesla Motor Cars', '994 Yonge Street, Toronto, Ontario Canada');