<?php

class Filme {
    private string $nome = 'Nome padrão';
    private int    $anoDeLancamento = 2024;
    private string  $genero = 'Genérico';
    private float  $media; //$nota;
    #quando public, se pode acessar a propriedade diretamente sem a necessidade de um método get
    #torna a variavel interna a classe - modificador de acesso
    private array $notas = []; //array criado vazio

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
    #método de acesso ou acessor - getter
    public function anoLancamento(): int
    {
        return $this->anoLancamento;
    }
    #método definidor - setter
    public function defineAnoLancamento(int $anoDeLancamento)
    {
        $this->anoLancamento = $anoDeLancamento;
    }

    public function nome(): int
    {
        return $this->nome;
    }

    public function defineNome(int $nome): void
    {
        $this->nome = $nome;
    }

    public function genero(): int
    {
        return $this->genero;
    }

    public function defineGenero(int $genero): void
    {
        $this->genero = $genero;
    }

}