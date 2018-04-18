
CREATE SCHEMA IF NOT EXISTS 'academia' DEFAULT CHARACTER SET utf8 ;
USE 'academia';

-- -----------------------------------------------------
-- Table 'academia'.'funcionario'
-- -----------------------------------------------------
CREATE TABLE funcionario (
  'idFuncionario' INT NOT NULL,
  'nome' VARCHAR(100) NOT NULL,
  'email' VARCHAR(100) NOT NULL,
  'usuario' VARCHAR(45) NOT NULL,
  'senha' VARCHAR(45) NOT NULL,
  'cpf' VARCHAR(45) NOT NULL,
  'dataAdmissao' DATETIME NOT NULL,
  'dataDemissao' DATETIME NOT NULL,
  PRIMARY KEY ('idFuncionario'),
  UNIQUE INDEX 'idFuncionario_UNIQUE' ('idFuncionario' ASC),
  UNIQUE INDEX 'usuario_UNIQUE' ('usuario' ASC),
  UNIQUE INDEX 'cpf_UNIQUE' ('cpf' ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table 'academia'.'aluno'
-- -----------------------------------------------------
CREATE TABLE aluno (
  'idaluno' INT NOT NULL,
  'nome' VARCHAR(100) NOT NULL,
  'email' VARCHAR(100) NOT NULL,
  'cpf' VARCHAR(14) NOT NULL,
  'dataMatricula' DATETIME NOT NULL,
  'dataInativacao' DATETIME NULL,
  'funcionarioCadastro' INT NOT NULL,
  'funcionarioInativacao' INT NULL,
  PRIMARY KEY ('idaluno'),
  UNIQUE INDEX 'idaluno_UNIQUE' ('idaluno' ASC),
  INDEX 'funcionarioCadastro_idx' ('funcionarioCadastro' ASC),
  INDEX 'funcionarioInativacao_idx' ('funcionarioInativacao' ASC),
  CONSTRAINT 'funcionarioCadastro'
    FOREIGN KEY ('funcionarioCadastro')
    REFERENCES 'academia'.'funcionario' ('idFuncionario')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT 'funcionarioInativacao'
    FOREIGN KEY ('funcionarioInativacao')
    REFERENCES 'academia'.'funcionario' ('idFuncionario')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table 'academia'.'pagamento'
-- -----------------------------------------------------
CREATE TABLE pagamento (
  'idPagamento' INT NOT NULL,
  'idAluno' INT NOT NULL,
  'idFuncionario' INT NOT NULL,
  'valorPago' DOUBLE NOT NULL,
  'dataPagamento' DATETIME NOT NULL,
  PRIMARY KEY ('idPagamento'),
  UNIQUE INDEX 'idPagamento_UNIQUE' ('idPagamento' ASC),
  INDEX 'idAluno_idx' ('idAluno' ASC),
  INDEX 'idFuncionario_idx' ('idFuncionario' ASC),
  CONSTRAINT 'idAluno'
    FOREIGN KEY ('idAluno')
    REFERENCES 'academia'.'aluno' ('idaluno')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT 'idFuncionario'
    FOREIGN KEY ('idFuncionario')
    REFERENCES 'academia'.'funcionario' ('idFuncionario')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table 'academia'.'avaliacaoFisica'
-- -----------------------------------------------------
CREATE TABLE avaliacaoFisica (
  'idAvaliacaoFisica' INT NOT NULL,
  'idAluno' INT NOT NULL,
  'idFuncionario' INT NOT NULL,
  'dataAvaliacao' DATETIME NOT NULL,
  'peso' DOUBLE NOT NULL,
  'altura' DOUBLE NOT NULL,
  'imc' DOUBLE NOT NULL,
  'indiceGordura' DOUBLE NOT NULL,
  PRIMARY KEY ('idAvaliacaoFisica'),
  UNIQUE INDEX 'idAvaliacaoFisica_UNIQUE' ('idAvaliacaoFisica' ASC),
  INDEX 'idAluno_idx' ('idAluno' ASC),
  INDEX 'idFuncionario_idx' ('idFuncionario' ASC),
  CONSTRAINT 'idAluno'
    FOREIGN KEY ('idAluno')
    REFERENCES 'academia'.'aluno' ('idaluno')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT 'idFuncionario'
    FOREIGN KEY ('idFuncionario')
    REFERENCES 'academia'.'funcionario' ('idFuncionario')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table 'academia'.'equipamento'
-- -----------------------------------------------------
CREATE TABLE equipamento(
  'idEquipamento' INT NOT NULL,
  'nome' VARCHAR(45) NOT NULL,
  'descricao' VARCHAR(200) NOT NULL,
  'dataCadastro' DATETIME NOT NULL,
  'idFuncionario' INT NOT NULL,
  'numSerie' VARCHAR(45) NOT NULL,
  UNIQUE INDEX 'idEquipamento_UNIQUE' ('idEquipamento' ASC),
  PRIMARY KEY ('idEquipamento'),
  INDEX 'idFuncionario_idx' ('idFuncionario' ASC),
  CONSTRAINT 'idFuncionario'
    FOREIGN KEY ('idFuncionario')
    REFERENCES 'academia'.'funcionario' ('idFuncionario')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table 'academia'.'atividade'
-- -----------------------------------------------------
CREATE TABLE atividade(
  'idAtividade' INT NOT NULL,
  'nome' VARCHAR(100) NOT NULL,
  'series' INT NOT NULL,
  'repeticoes' INT NOT NULL,
  'idEquipamento' INT NOT NULL,
  PRIMARY KEY ('idAtividade'),
  UNIQUE INDEX 'idAtividade_UNIQUE' ('idAtividade' ASC),
  INDEX 'idEquipamento_idx' ('idEquipamento' ASC),
  CONSTRAINT 'idEquipamento'
    FOREIGN KEY ('idEquipamento')
    REFERENCES 'academia'.'equipamento' ('idEquipamento')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table 'academia'.'atividade-aluno'
-- -----------------------------------------------------
CREATE TABLE atividadeAluno (
  'idAtividade' INT NOT NULL,
  'idAluno' INT NOT NULL,
  'dataMatricula' DATETIME NOT NULL,
  PRIMARY KEY ('idAtividade', 'idAluno'),
  UNIQUE INDEX 'idAtividade_UNIQUE' ('idAtividade' ASC),
  UNIQUE INDEX 'idAluno_UNIQUE' ('idAluno' ASC),
  CONSTRAINT 'idAluno'
    FOREIGN KEY ('idAluno')
    REFERENCES 'academia'.'aluno' ('idaluno')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT 'idAtividade'
    FOREIGN KEY ('idAtividade')
    REFERENCES 'academia'.'atividade' ('idAtividade')
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
