<?php 
    class product extends DController{
        public function __construct() {
            parent::__construct();
        }
        public function chitietbaiviet($id,$slug){
            echo 'chi tiet san pham';
            echo $id;
            echo $slug;
        }
    }





?>