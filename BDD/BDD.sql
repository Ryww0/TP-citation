DROP DATABASE IF NOT EXISTS `TP_citation`;

CREATE DATABASE IF NOT EXISTS `TP_citation` CHARACTER SET 'utf8';

USE `TP_citation`;


CREATE TABLE IF NOT EXISTS `citations`(
        `id`        INT (11) AUTO_INCREMENT  NOT NULL ,
        `auteur`  VARCHAR (25) NOT NULL ,
        `contenu` VARCHAR (255) NOT NULL ,
        PRIMARY KEY (`id`)
)ENGINE=InnoDB;

INSERT INTO
    Citations (
        id,
        auteur,
        contenu
    );

VALUES (
        '1',
        'Jules Ceasar',
        'J\'ai la Gaulle'
    ), (
        '2',
        'Dark Jador',
        'J\'essuie ton père'
    ), (
        '3',
        'Napoleon',
        'Satanés Anglais !'
    ), (
        '4',
        'Fred',
        'Le PHP c\'est génial'
    ), (
        '5',
        'Karadoc',
        'Le gras, c\'est la vie !'
    );

