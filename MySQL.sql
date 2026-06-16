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