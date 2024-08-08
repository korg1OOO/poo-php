<?php
    class Livro {
        private $titulo;
        private $autor;
        private $genero;
        private $paginas;

        public function getTitulo()
        {
                return $this->titulo;
        }

        public function setTitulo($titulo): self
        {
                $this->titulo = $titulo;

                return $this;
        }

        public function getAutor()
        {
                return $this->autor;
        }

        public function setAutor($autor): self
        {
                $this->autor = $autor;

                return $this;
        }

        public function getGenero()
        {
                return $this->genero;
        }

        public function setGenero($genero): self
        {
                $this->genero = $genero;

                return $this;
        }

        public function getPaginas()
        {
                return $this->paginas;
        }

        public function setPaginas($paginas): self
        {
                $this->paginas = $paginas;

                return $this;
        }
    }

    function maisPaginas($livros) {
        $livroComMaisPaginas = null;
        $maxPaginas = 0;
    
        foreach ($livros as $livro) {
            if ($livro->getPaginas() > $maxPaginas) {
                $maxPaginas = $livro->getPaginas();
                $livroComMaisPaginas = $livro;
            }
        }
    
        return $livroComMaisPaginas;
    }
    
    $livro1 = new Livro;
    $livro1->setTitulo("Harry Potter")
           ->setAutor("JK Roller")
           ->setGenero("Fantasia")
           ->setPaginas(264);
    
    $livro2 = new Livro;
    $livro2->setTitulo("Eragon")
           ->setAutor("Cristopher Paolini")
           ->setGenero("Fantasia")
           ->setPaginas(468);
    
    $livro3 = new Livro;
    $livro3->setTitulo("O Pequeno Príncipe")
           ->setAutor("Antoine de Saint-Exupéry")
           ->setGenero("Fábula")
           ->setPaginas(71);
    
    $livros = [$livro1, $livro2, $livro3];
    
    $livroComMaisPaginas = maisPaginas($livros);
    
    if ($livroComMaisPaginas) {
        echo "O livro com mais páginas é: " . $livroComMaisPaginas->getTitulo() . "\n";
        echo "Número de páginas: " . $livroComMaisPaginas->getPaginas() . "\n";
    }
