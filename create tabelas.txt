
CREATE TABLE automoveis (
	codigo INT(11) NOT NULL AUTO_INCREMENT,
	nome VARCHAR(30) NOT NULL COLLATE utf8mb4_general_ci,
	placa VARCHAR(30) NOT NULL COLLATE utf8mb4_general_ci,
	chassi VARCHAR(30) NOT NULL COLLATE utf8mb4_general_ci,
	montadora INT(11) NOT NULL,
	PRIMARY KEY (codigo) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB

CREATE TABLE montadoras (
	codigoMontadora INT(11) NOT NULL AUTO_INCREMENT,
	nomeMontadora VARCHAR(30) NOT NULL COLLATE utf8mb4_general_ci,
	PRIMARY KEY (codigoMontadora) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB;

INSERT INTO montadoras VALUES
(NULL,'Volkswagen'),
(NULL,'Fiat'),
(NULL, 'Chevrolet'),
(NULL,'Ford');

