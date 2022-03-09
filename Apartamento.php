<?php
    require_once 'Imovel.php';

    class Apartamento extends Imovel
    {
        private $bloco;
        private $andar;

        // Método de acesso.
        public function getBloco()
        {
            return $this->bloco;
        }

        public function getAndar()
        {
            return $this->andar;
        }

        // Método de modificação.
        public function setBloco($bloco)
        {
            $this->bloco = $bloco;
        }

        public function setAndar($andar)
        {
            $this->andar = $andar;
        }
    }
?>