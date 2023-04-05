
CREATE TABLE automoveis (
	codigo INT(11) NOT NULL AUTO_INCREMENT,
	nome VARCHAR(30) NOT NULL,
	placa VARCHAR(30) NOT NULL,
	chassi VARCHAR(30) NOT NULL,
	montadora INT(11) NOT NULL,
	PRIMARY KEY (codigo) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB

CREATE TABLE montadoras (
	codigoMontadora INT(11) NOT NULL AUTO_INCREMENT,
	nomeMontadora VARCHAR(30) NOT NULL,
	PRIMARY KEY (codigoMontadora) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB;

INSERT INTO montadoras VALUES
(NULL,'Volkswagen'),
(NULL,'Fiat'),
(NULL, 'Chevrolet'),
(NULL,'Ford');

