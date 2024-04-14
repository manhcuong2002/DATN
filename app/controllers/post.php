<?php 
    class post extends DController{
        public function __construct() {
          parent::__construct();
        }
        public function chitietbaiviet($id){
            echo 'chi tiet bai viet';
            echo $id;
        }
    }





?>