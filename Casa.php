<?php
    require_once 'Imovel.php';

    class Casa extends Imovel
    {
        private $metragemQuintal;

        public function getMetragemQuintal()
        {
            return $this->metragemQuintal;
        }
        
        public function setMetragemQuintal($metragemQuintal)
        {
            $this->metragemQuintal = $metragemQuintal;
        }
    }
?>