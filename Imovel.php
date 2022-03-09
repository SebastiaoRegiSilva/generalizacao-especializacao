<?php
    class Imovel
    {
        private $endereco;
        private $nQuartos;
        private $metragem;
        private $nGaragem;

        // Método de acesso aos objetos da classe.
        public function getEndereco()
        {
            return $this->endereco;
        }
        
        public function getnQuartos()
        {
            return $this->nQuartos;
        }
        
        public function getMetragem()
        {
            return $this->metragem;
        }
        
        public function getNGaragem()
        {
            return $this->nGaragem;
        }
        
        // Método de modificação dos objetos da classe.
        public function setEndereco($endereco)
        {
            $this->endereco = $endereco;
        }
        
        public function setNQuartos($nQuartos)
        {
            $this->$nQuartos = $nQuartos;
        }
        
        public function setMetragem($metragem)
        {
            $this->$metragem = $metragem;
        }
        
        public function setNGaragem($nGaragem)
        {
            $this->$nGaragem = $nGaragem;
        }
    }
?>