/* Suppression de la base de donnée si elle existait avant */
DROP DATABASE IF EXISTS `3GIMMO`;

/* Création de la base de donnée*/
CREATE DATABASE `3GIMMO`;
use `3GIMMO`;

/* Suppression des tables agents et annonces si elles existaient avant */
DROP TABLE IF EXISTS `agents`;
DROP TABLE IF EXISTS `annonces`;

/* Création des 2 tables */
CREATE TABLE `agents` (
    `ID` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nom_agent` varchar(45) NOT NULL,
    `prenom_agent` varchar(45) NOT NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=`utf8mb4`
DEFAULT COLLATE=`utf8mb4_general_ci`
AUTO_INCREMENT=1;

CREATE TABLE `annonces` (
    `ref_annonce` varchar(20) NOT NULL PRIMARY KEY,
    `prix_annonce` float(10) NOT NULL,
    `surface_habitable` float(10) NOT NULL,
    `nombre_de_piece` int(10) NOT NULL,
    `agent_ID` int(10) NOT NULL,
    FOREIGN KEY (`agent_ID`) REFERENCES `agents`(`ID`)
)
ENGINE=InnoDB
DEFAULT CHARSET=`utf8mb4`
DEFAULT COLLATE=`utf8mb4_general_ci`
AUTO_INCREMENT=1;

/* On rajoute la clé étrangère qui nous permettra de relier les annonces à l'agent attitré. */

/* ALTER TABLE `agents`	ADD CONSTRAINT `foreign_key` FOREIGN KEY (`ID`) REFERENCES `annonces`(`agent_ID`); */
/* A vérifier : Ne fonctionne pas mais accepte la clé directement dans la création de la table */

/* Insertion de données dans les 2 tables */
INSERT INTO `agents` (`nom_agent`, `prenom_agent`) VALUES
('Dupont', 'Jean'),
('Foo', 'Bar'),
('Lagaffe', 'Gaston'),
('Martin', 'Monsieur'),
('World', 'Hello');

INSERT INTO `annonces` (`ref_annonce`, `prix_annonce`, `surface_habitable`, `nombre_de_piece`, `agent_ID`) VALUES
('123456AB', 123.45, 67.89, 3, 1),
('123654FG', 125.05, 12.25, 5, 1),
('175680DS', 100, 21, 1, 2),
('468523QP', 300.99, 57.5, 6, 2),
('732194EF', 600.9, 65.5, 3, 3),
('732654AM', 450.7, 43.5, 2, 3),
('756284FR', 253.45, 19.5, 1, 4),
('846395RK', 1500, 150.5, 7, 4),
('856394HY', 543.21, 102.6, 3, 5),
('956324EL', 650.99, 70.4, 3, 5);
