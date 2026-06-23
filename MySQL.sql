USE info_php_26;
SELECT id, estado, cidade, cep, bairro, rua, numero
FROM info_php_26.endereco;

//Relações

-- Retornar se o filtro for atendido
select u.* from usuario as u
inner join pessoa_fisica as pf 
ON u.id = pf.usuario_alteracao;

-- Retornar tudo(usuario + Pessoa_fisica) se encontrar
-- senao retorna os dados de usuario
select u.* from usuario as u
left join pessoa_fisica as pf 
ON u.id = pf.usuario_alteracao;


-- Retornar tudo(Pessoa_fisica + usuario) se encontrar
-- senao retorna os dados da Pessoa_fisica
select u.* from usuario as u
right join pessoa_fisica as pf 
ON u.id = pf.usuario_alteracao;



-- TODOS ENDERECOS USADOS EM PESSOAS
SELECT p.id as "idPessoa", p.nome as "nomePessoa", p.cpf, ende.estado, ende.cidade, ende.cep, ende.bairro, ende.rua, ende.numero
FROM endereco ende
JOIN pessoa p ON ende.id = p.idEndereco;

SELECT p.id as "idPessoa", p.nome as "nomePessoa", p.cpf, ende.estado, ende.cidade, ende.cep, ende.bairro, ende.rua, ende.numero
FROM endereco ende
INNER JOIN pessoa p ON ende.id = p.idEndereco
WHERE UPPER(ende.cidade) like "%BG%";

SELECT p.id as "idPessoa", p.nome as "nomePessoa", p.cpf, ende.estado, ende.cidade, ende.cep, ende.bairro, ende.rua, ende.numero
FROM endereco ende
left JOIN pessoa p ON ende.id = p.idEndereco;


SELECT p.id as "idPessoa", p.nome as "nomePessoa", p.cpf, ende.estado, ende.cidade, ende.cep, ende.bairro, ende.rua, ende.numero
FROM endereco ende
right JOIN pessoa p ON ende.id = p.idEndereco;

-- RELACAO PESSOA FUNCIONARIO
SELECT p.id as "idPessoa", p.nome as "nomePessoa", p.cpf, func.cargo, func.cracha, func.salario
FROM funcionario func	
INNER JOIN pessoa p ON func.idPessoa = p.id

-- Deixa a data e hora automatica no insert e update
ALTER TABLE info_php_26.estados MODIFY COLUMN criadoEm TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
ALTER TABLE info_php_26.estados MODIFY COLUMN atualizadoEm TIMESTAMP DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP;

-- Adicionar campos e deixar a data e hora automatica no insert e update
ALTER TABLE info_php_26.funcionario ADD criadoEm TIMESTAMP NULL;
ALTER TABLE info_php_26.funcionario ADD atualizadoEm TIMESTAMP NULL;

ALTER TABLE info_php_26.funcionario MODIFY COLUMN criadoEm TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
ALTER TABLE info_php_26.funcionario MODIFY COLUMN atualizadoEm TIMESTAMP DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP;

-- OU tudo em um unico SQL
ALTER TABLE info_php_26.cidades ADD criadoEm TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
ALTER TABLE info_php_26.cidades ADD atualizadoEm TIMESTAMP DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP;

-- Tarefa:
  --- Campos comuns de todas as tabelas: id(pk)(tinyint), criadoEm(TIMESTAMP/DATETIME), atualizadoEm(TIMESTAMP/DATETIME) 
-- Criar tabela de estados
-- Criar tabela de cidades
  --- Dica: Site do IBGE para pegar todos Estados e Cidades
-- Criar FKs dessas tabelas em endereco(tabela) com alter table 
  --- Alterar os campos para idEstado e idCidade
-- Criar tabela de usuarios
-- Criar FK de pessoa na tabela usuario
