CREATE DATABASE futsal;
CREATE TABLE futsal.appointments(
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`user_id` int(10) NOT NULL,
	`order_id` int(10) NOT NULL,
	`date` date,
	`start` TIME,
	`stop` TIME,
	`table` VARCHAR(10),
	`court_id` varchar(20) NOT NULL,
	`max_user` int(10),
	`cost` int(10),
    PRIMARY KEY (`id`)
)DEFAULT CHARSET=utf8;

CREATE TABLE futsal.courts(
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(120),
    `max_user` int(10) NOT NULL,
    `cost` int(10) NOT NULL,
    `created` datetime DEFAULT NULL,
    PRIMARY KEY (`id`)
)DEFAULT CHARSET=utf8;

insert into futsal.appointments(id, user_id, order_id, date, start, stop, court_id) values(1, '1', '1', '2015-07-26', '09:00:00', '11:00:00', 'court1');
