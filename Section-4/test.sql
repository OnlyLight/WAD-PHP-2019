INSERT INTO Users (ho_ten, sdt, email, day_of_birth) VALUES
('a', '012345678', 'a@gmail.com', '2019-10-09'),
('b', '012345670', 'b@gmail.com', '2019-10-09'),
('c', '012345671', 'c@gmail.com', '2019-10-09'),
('d', '012345672', 'd@gmail.com', '2019-10-09'),
('e', '012345673', 'e@gmail.com', '2019-10-09');

UPDATE Users set email = 'test@gmail.com' WHERE Users.ho_ten = '%n%' OR Users.sdt = '%5%'

DELETE FROM Users WHERE Users.email LIKE '%gmail%' AND YEAR(Users.day_of_birth) = '1997' AND Users.sdt LIKE '%8%'
