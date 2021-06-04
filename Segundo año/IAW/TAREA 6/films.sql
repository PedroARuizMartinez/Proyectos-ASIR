DROP DATABASE IF EXISTS films;

CREATE DATABASE films;

USE films;

CREATE TABLE library (
	IDfilm integer(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	Name VARCHAR(50) NOT NULL,
	Minutes INT(3) NOT NULL,
	ForAdults TINYINT(1) NOT NULL DEFAULT 0,
	Comments TEXT NOT NULL)
ENGINE=InnoDB;

USE films;

INSERT INTO library VALUES 
	(1, 'Finding Nemo', 100, 0, 'Animation film'),

	(2, 'Die hard', 132, 1, 'action film'),

	(3, 'Big Hero', 108, 0, 'Animation film'),

	(4, 'Whatmen', 215, 1, 'Sciencie fiction'),

	(5, 'Trolls', 92, 0, 'Animation film'),

	(6, 'The Terminator', 108, 1, 'Sciencie fiction-Accion'),

	(7, 'Jobs', 127, 0, 'Bibliographic cinema');

