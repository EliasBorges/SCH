
CREATE TABLE Cargo (
                IdCargo INT AUTO_INCREMENT NOT NULL,
                NomeCargo VARCHAR(80) NOT NULL,
                PRIMARY KEY (IdCargo)
);


CREATE TABLE Especialidade (
                IdEspecialidade SMALLINT AUTO_INCREMENT NOT NULL,
                NomeEspecialidade VARCHAR(80) NOT NULL,
                PRIMARY KEY (IdEspecialidade)
);


CREATE TABLE Pessoa (
                IdPessoa INT AUTO_INCREMENT NOT NULL,
                Nome VARCHAR(80) NOT NULL,
                Foto VARCHAR(100) NOT NULL,
                PRIMARY KEY (IdPessoa)
);


CREATE TABLE Funcionario (
                IdPessoa INT NOT NULL,
                IdCargo INT NOT NULL,
                CodigoMatricula INT NOT NULL,
                PRIMARY KEY (IdPessoa)
);


CREATE TABLE Medico (
                IdPessoa INT NOT NULL,
                CRM INT NOT NULL,
                IdEspecialidade SMALLINT NOT NULL,
                PRIMARY KEY (IdPessoa)
);


CREATE TABLE Paciente (
                IdPessoa INT NOT NULL,
                NumeroTelefone VARCHAR(20) NOT NULL,
                NumeroANS INT NOT NULL,
                DataNascimento DATE NOT NULL,
                PRIMARY KEY (IdPessoa)
);


ALTER TABLE Funcionario ADD CONSTRAINT cargo_funcionario_fk
FOREIGN KEY (IdCargo)
REFERENCES Cargo (IdCargo)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Medico ADD CONSTRAINT especialidade_medico_fk
FOREIGN KEY (IdEspecialidade)
REFERENCES Especialidade (IdEspecialidade)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Paciente ADD CONSTRAINT pessoa_paciente_fk
FOREIGN KEY (IdPessoa)
REFERENCES Pessoa (IdPessoa)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Medico ADD CONSTRAINT pessoa_medico_fk
FOREIGN KEY (IdPessoa)
REFERENCES Pessoa (IdPessoa)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE Funcionario ADD CONSTRAINT pessoa_funcionario_fk
FOREIGN KEY (IdPessoa)
REFERENCES Pessoa (IdPessoa)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
