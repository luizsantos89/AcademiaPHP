
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
  UNIQUE INDEX cpf_UNIQUE (cpf ASC)
);


-- -----------------------------------------------------
-- Table academia.aluno
-- -----------------------------------------------------
CREATE TABLE aluno (
  idAluno INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  cpf VARCHAR(14) NOT NULL,
  dataMatricula DATETIME NOT NULL,
  dataInativacao DATETIME NULL,
  funcionarioCadastro INT NOT NULL,
  funcionarioInativacao INT NULL,
  PRIMARY KEY (idAluno)
);


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
  UNIQUE INDEX idPagamento_UNIQUE (idPagamento ASC)
);


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
  PRIMARY KEY (idEquipamento)
);


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
  UNIQUE INDEX idAtividade_UNIQUE (idAtividade ASC)
);


-- -----------------------------------------------------
-- Table academia.atividade-aluno
-- -----------------------------------------------------
CREATE TABLE atividadeAluno (
  idAtividade INT NOT NULL,
  idAluno INT NOT NULL,
  dataMatricula DATETIME NOT NULL,
  PRIMARY KEY (idAtividade, idAluno),
  UNIQUE INDEX idAtividade_UNIQUE (idAtividade ASC)
);


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
  UNIQUE INDEX idAvaliacaoFisica_UNIQUE (idAvaliacaoFisica ASC)
);


INSERT INTO funcionario(idFuncionario,nome,email,usuario,senha,cpf) VALUES(1,'Luiz Claudio Afonso dos Santos','luiz.santos89@yahoo.com.br','luizsantos89',md5('lcaslcas'),'09695742661');