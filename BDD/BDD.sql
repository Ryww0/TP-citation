#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `TP_citation` CHARACTER SET 'utf8';
USE `TP_citation`;

#------------------------------------------------------------
# Table: citations
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `citations`(
        `id`        INT (11) AUTO_INCREMENT  NOT NULL ,
        `auteur`  VARCHAR (25) NOT NULL ,
        `contenu` VARCHAR (255) NOT NULL ,
        PRIMARY KEY (`id`)
)ENGINE=InnoDB;



-- // ALTER TABLE appointments 
-- // ADD CONSTRAINT FK_appointments_id_patients
-- //   FOREIGN KEY (idPatients)
-- //   REFERENCES patients (id)
-- //   ON DELETE CASCADE
-- //   ON UPDATE NO ACTION;
