<?php

<?php

class FuncionarioModel {
    private $banco;
    private $tabela = "funcionario";

    public function __construct(BancoDeDados $banco)
    {
        $this->banco = $banco;
    }

    public function listar()
    {
         $sql = "SELECT * FROM {$this->tabela}";
         return $this->bacno->execQuery($sql, "Não foi possível obter os funcionarios.");
    }
}
