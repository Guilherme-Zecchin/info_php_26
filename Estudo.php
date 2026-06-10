<?php

//Escrita PHP
//Espaço para escrita de códigos/palavras/Variáveis para estudo e entender o que é

//Linguagem tipada:
//Truncate:
//Array:
//Cast:
//Variável INT:
//Variável ROUND:


//dbeaver - PK - primary key - identificador único da linha na tabela (Como por exemplo na Tabela Endereços, coluna 1 sendo 'id'""PK"", cada registro/linha é um identificador único)
//dbeaver - FK - Foreing Key - Chave estrangeira: Puxa os dados da tabela 1 para outras tabelas, exemplo (tabela 1 Endereço "id" - tabela 2 Pessoa "idEndereço - Dados da tabela 1 será linkado na tabela 2)
//dbeaver - Caso seja excluído algum id nas tabelas, os próximos nunca tomarão o número dele (exemplo: id 3 excluído, o próximo a ser cadastrado será o id 4, basicamente como funciona o CPF, ninguém nunca terá o CPF igual ao outro, mesmo que o CPF seja "cancelado")
//dbeaver - Criação de uma FK -> -ropriedades -> Chave estrangeira -> Clicar com botão direito e alt+inser -> tabela de referencia (escolher a tabela que sera puxada as informações) ->
//dbeaver - SELECT * FROM endereco - '*' atua como "todo/todos" 
//dbeaver - SELECT * FROM endereco ende - endereço ende atua como um apelido para a tabela endereço, facilitando a consulta a campos específicos
//dbeaver - WHERE estado IN ("RS","SC","PR"); -> comando atua mostrando os dados da tabela onde endereços tenham na coluna "estado" os estados em parenteses
//dbeaver - WHERE estado NOT IN ("RS","SC","PR"); -> comando atua ao contrario do IN, mostrando os endereços cadastrados EXCETO os dos estados em parenteses
//dbeaver - ALTER TABLE é usado para a estrutura da tabela -> Exemplo: ALTER TABLE endereco DROP COLUMN estado; servindo para excluir a coluna especifica de estado ou outra desejada
//dbeaver - 
//dbeaver -
//dbeaver -
//dbeaver -
//dbeaver -
//dbeaver -
//dbeaver -
