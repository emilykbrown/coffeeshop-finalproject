drop schema if exists coffee_shop_schema;
create schema coffee_shop_schema;
use coffee_shop_schema;

create table person_tbl (
personID int auto_increment primary key,
first_name varchar(255) not null,
last_name varchar(255) not null,
address varchar(255) not null,
city varchar(255) not null,
county varchar(255) not null,
state varchar(255) not null
);

create table payment_tbl (
paymentID int auto_increment primary key,
payment_type varchar(100) not null
);

create table milk_tbl (
milkID int auto_increment primary key,
milk_type varchar(100) not null,
in_stock bool not null,
quantity int not null
);

create table flavoring_tbl (
flavoringID int auto_increment primary key,
flavoring_type varchar(100) not null,
in_stock bool not null,
quantity int not null
);

create table size_tbl (
sizeID int auto_increment primary key,
size_type varchar(100) not null,
in_stock bool not null,
quantity int not null
);

create table drink_tbl (
drinkID int auto_increment primary key,
milkID int not null,
flavoringID int not null,
sizeID int not null,
foreign key (milkID) references milk_tbl(milkID),
foreign key (flavoringID) references flavoring_tbl(flavoringID),
foreign key (sizeID) references size_tbl(sizeID)
);

create table order_tbl (
orderID int auto_increment primary key,
personID int not null,
paymentID int not null,
foreign key (personID) references person_tbl(personID),
foreign key (paymentID) references payment_tbl(paymentID)
);

create table order_items_tbl (
order_itemsID int auto_increment primary key,
drinkID int not null,
orderID int not null,
foreign key (drinkID) references drink_tbl(drinkID),
foreign key (orderID) references order_tbl(orderID)
);