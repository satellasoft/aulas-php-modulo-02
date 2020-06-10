<?php

class Trabalho
{
    private $nome;

    protected function setNome($nome)
    {
        $this->nome = $nome;
    }

    protected function getNome()
    {
        return $this->nome;
    }

    protected function padronizaNome()
    {
        return $this->formataDados($this->getNome());
    }

    private function formataDados($nome)
    {
        return strtoupper(str_replace(' ', '-', $nome));
    }
}
