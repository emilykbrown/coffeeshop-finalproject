use coffee_shop_schema;

insert into person_tbl (first_name, last_name, address, city, county, state)
values
('Abbey', 'Addams', '1308 Minnesota 13 W', 'Minneapolis', 'Hennepin', 'MN'),
('Alex', 'Addison', '920 Moonlight Dr', 'Minneapolis', 'Hennepin', 'MN'),
('Beth', 'Brooke', '17867 Long Lake Ln', 'Richfield', 'Hennepin', 'MN'),
('Barbara', 'Bath', '6088 Olson Memorial Hwy', 'Richfield', 'Hennepin', 'MN'),
('Charles', 'Case', '27 Century Ave N', 'Minneapolis', 'Hennepin', 'MN'),
('Catherine', 'Catson', '5815 Norell Ave N', 'Minneapolis', 'Hennepin', 'MN'),
('Donald', 'Daveson', '5739 Lyndale Ave S', 'Forest Lake', 'Washington', 'MN'),
('Debra', 'Dom', '3455 River Rapids Dr', 'Forest Lake', 'Washington', 'MN'),
('Emily', 'Etherson', '2291 Connecticut Ave S', 'Albert Lea', 'Freeborn', 'MN'),
('Erik', 'Epsilon', '332 3rd St', 'Albert Lea', 'Freeborn', 'MN'),
('Frank', 'Farmer', '927 9th Ave S', 'Burnsville', 'Dakota', 'MN'),
('Fred', 'Frederickson', '3580 Main St NW', 'Burnsville', 'Dakota', 'MN'),
('George', 'Germaine', '275 Junction St', 'Osseo', 'Hennepin', 'MN'),
('Gomez', 'Gamer', '1001 Columbia Ave', 'Osseo', 'Hennepin', 'MN'),
('Hector', 'Hammer', '405 1st Ave', 'Roseville', 'Ramsey', 'MN'),
('Haley', 'Holly', '1400 E 78th St', 'Roseville', 'Ramsey', 'MN'),
('Imogen', 'Idate', '350 U.S. 10 #100', 'St Augusta', 'Stearns', 'MN'),
('Ivan', 'Ivanson', '1827 Grand Ave', 'St Augusta', 'Stearns', 'MN'),
('Julia', 'Jackson', '1595 2nd Ave Apt 110', 'Woodbury', 'Washington', 'MN'),
('Justin', 'Jameson', '1314 Commonwealth Ave', 'Woodbury', 'Washington', 'MN');

insert into payment_tbl (payment_type)
values
('Cash'),
('Visa'),
('Discover');

insert into milk_tbl (milk_type, in_stock, quantity)
values
('None', false, 0),
('2%', true, 9),
('Skim', true, 6),
('Almond', true, 11),
('Coconut', false, 0),
('Oatmilk', true, 3),
('Whole', true, 4);

insert into flavoring_tbl (flavoring_type, in_stock, quantity)
values
('None', false, 0),
('Vanilla', true, 10),
('Cinnamon', true, 2),
('Almond', true, 5),
('Caramel', true, 7),
('Hazelnut', true, 3),
('Peppermint', false, 0),
('Dark Chocolate', true, 6),
('Milk Chocolate', true, 8),
('White Chocolate', true, 3);

insert into size_tbl (size_type, in_stock, quantity)
values
('Small', true, 34),
('Medium', true, 48),
('Large', true, 32),
('Extra Large', true, 27);

insert into drink_tbl (milkID, flavoringID, sizeID)
values
(2, 1, 2),
(3, 3, 1),
(5, 9, 2),
(2, 10, 3),
(7, 4, 4),
(3, 5, 3),
(4, 6, 1),
(1, 9, 2),
(6, 8, 2),
(3, 2, 3),
(2, 1, 1),
(2, 4, 2),
(4, 3, 2),
(1, 6, 3),
(7, 1, 4),
(6, 4, 3),
(7, 10, 2),
(4, 9, 3),
(3, 9, 1),
(2, 1, 2),
(2, 1, 2),
(3, 3, 1),
(5, 9, 2),
(2, 10, 3),
(7, 4, 4),
(3, 5, 3),
(4, 6, 1),
(1, 9, 2),
(6, 8, 2),
(3, 2, 3),
(2, 1, 1),
(2, 4, 2),
(4, 3, 2),
(1, 6, 3),
(7, 1, 4),
(6, 4, 3),
(7, 10, 2),
(4, 9, 3),
(3, 9, 1),
(2, 1, 2);

insert into order_tbl (personID, paymentID)
values
(1, 1),
(2, 1),
(3, 3),
(4, 2),
(5, 2),
(6, 2),
(7, 3),
(8, 1),
(9, 1),
(10, 2),
(1, 2),
(11, 3),
(12, 2),
(5, 1),
(13, 1),
(1, 2),
(14, 2),
(7, 2),
(15, 3),
(3, 2),
(11, 1),
(16, 3),
(17, 1),
(2, 1),
(18, 2),
(8, 2),
(13, 2),
(19, 2),
(1, 2),
(20, 3);

insert into order_items_tbl (drinkID, orderID)
values
(1, 1),
(2, 1),
(3, 2),
(4, 3),
(5, 3),
(6, 3),
(7, 4),
(8, 4),
(9, 5),
(10, 6),
(11, 7),
(12, 8),
(13, 9),
(14, 10),
(15, 10),
(16, 11),
(17, 12),
(18, 13),
(19, 14),
(20, 15),
(21, 16),
(22, 17),
(23, 18),
(24, 19),
(25, 20),
(26, 21),
(27, 22),
(28, 22),
(29, 22),
(30, 23),
(31, 23),
(32, 24),
(33, 25),
(34, 26),
(35, 27),
(36, 28),
(37, 29),
(38, 30),
(39, 30),
(40, 30);