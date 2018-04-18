/*
Script para criação da estrutura no MariaDB
*/


CREATE DATABASE academia;
USE academia;

-- -----------------------------------------------------
-- Table academia.funcionario
-- -----------------------------------------------------
CREATE TABLE funcionario (
  idFuncionario INT NOT NULL,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  usuario VARCHAR(45) NOT NULL,
  senha VARCHAR(45) NOT NULL,
  cpf VARCHAR(45) NOT NULL,
  dataAdmissao DATETIME,
  dataDemissao DATETIME,
  PRIMARY KEY (idFuncionario),
  UNIQUE INDEX idFuncionario_UNIQUE (idFuncionario ASC),
  UNIQUE INDEX usuario_UNIQUE (usuario ASC),
  UNIQUE INDEX cpf_UNIQUE (cpf ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table academia.aluno
-- -----------------------------------------------------
CREATE TABLE aluno (
  idAluno INT NOT NULL,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  cpf VARCHAR(14) NOT NULL,
  dataMatricula DATETIME NOT NULL,
  dataInativacao DATETIME NULL,
  funcionarioCadastro INT NOT NULL,
  funcionarioInativacao INT NULL,
  PRIMARY KEY (idAluno),
  UNIQUE INDEX idAluno_UNIQUE (idAluno ASC),
  INDEX funcionarioCadastro_idx (funcionarioCadastro ASC),
  INDEX funcionarioInativacao_idx (funcionarioInativacao ASC),
  CONSTRAINT funcionarioCadastro
    FOREIGN KEY (funcionarioCadastro)
    REFERENCES academia.funcionario (idFuncionario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT funcionarioInativacao
    FOREIGN KEY (funcionarioInativacao)
    REFERENCES academia.funcionario (idFuncionario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table academia.pagamento
-- -----------------------------------------------------
CREATE TABLE pagamento (
  idPagamento INT NOT NULL,
  idAluno INT NOT NULL,
  idFuncionario INT NOT NULL,
  valorPago DOUBLE NOT NULL,
  dataPagamento DATETIME NOT NULL,
  PRIMARY KEY (idPagamento),
  UNIQUE INDEX idPagamento_UNIQUE (idPagamento ASC),
  CONSTRAINT idAluno
    FOREIGN KEY (idAluno)
    REFERENCES academia.aluno (idAluno)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT idFuncionario
    FOREIGN KEY (idFuncionario)
    REFERENCES academia.funcionario (idFuncionario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table academia.equipamento
-- -----------------------------------------------------
CREATE TABLE equipamento(
  idEquipamento INT NOT NULL,
  nome VARCHAR(45) NOT NULL,
  descricao VARCHAR(200) NOT NULL,
  dataCadastro DATETIME NOT NULL,
  idFuncionario INT NOT NULL,
  numSerie VARCHAR(45) NOT NULL,
  UNIQUE INDEX idEquipamento_UNIQUE (idEquipamento ASC),
  PRIMARY KEY (idEquipamento),
  CONSTRAINT FK_idFuncionario
    FOREIGN KEY (idFuncionario)
    REFERENCES academia.funcionario (idFuncionario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table academia.atividade
-- -----------------------------------------------------
CREATE TABLE atividade(
  idAtividade INT NOT NULL,
  nome VARCHAR(100) NOT NULL,
  series INT NOT NULL,
  repeticoes INT NOT NULL,
  idEquipamento INT NOT NULL,
  PRIMARY KEY (idAtividade),
  UNIQUE INDEX idAtividade_UNIQUE (idAtividade ASC),
  CONSTRAINT FK_idEquipamento
    FOREIGN KEY (idEquipamento)
    REFERENCES academia.equipamento (idEquipamento)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table academia.atividade-aluno
-- -----------------------------------------------------
CREATE TABLE atividadeAluno (
  idAtividade INT NOT NULL,
  idAluno INT NOT NULL,
  dataMatricula DATETIME NOT NULL,
  PRIMARY KEY (idAtividade, idAluno),
  UNIQUE INDEX idAtividade_UNIQUE (idAtividade ASC),
  UNIQUE INDEX idAluno_UNIQUE (idAluno ASC),
  CONSTRAINT FK_Aluno
    FOREIGN KEY (idAluno)
    REFERENCES academia.aluno (idAluno)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT FK_idAtividade
    FOREIGN KEY (idAtividade)
    REFERENCES academia.atividade (idAtividade)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table academia.avaliacaoFisica
-- -----------------------------------------------------

CREATE TABLE avaliacaoFisica (
  idAvaliacaoFisica INT NOT NULL,
  idAluno INT NOT NULL,
  idFuncionario INT NOT NULL,
  dataAvaliacao DATETIME NOT NULL,
  peso DOUBLE NOT NULL,
  altura DOUBLE NOT NULL,
  imc DOUBLE NOT NULL,
  indiceGordura DOUBLE NOT NULL,
  PRIMARY KEY (idAvaliacaoFisica),
  UNIQUE INDEX idAvaliacaoFisica_UNIQUE (idAvaliacaoFisica ASC),
  CONSTRAINT FK_AlunoAvFisica
    FOREIGN KEY (idAluno)
    REFERENCES academia.aluno (idAluno),
  CONSTRAINT FK_FuncionarioAvFisica
    FOREIGN KEY (idFuncionario)
    REFERENCES academia.funcionario (idFuncionario))
ENGINE = InnoDB;


INSERT INTO funcionario(idFuncionario,nome,email,usuario,senha,cpf) VALUES(1,'Luiz Claudio Afonso dos Santos','luiz.santos89@yahoo.com.br','luizsantos89','lcaslcas','09695742661');