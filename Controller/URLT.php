<?php
   
    class URLT {
        private $value;
        function __construct($value) {
            $url = str_replace("https://", "",$value);
            $url = str_replace("http://", "",$url);
            $url = str_replace("www.", "",$url);
            $urlArr = explode("/",$url);
            $url=$urlArr[0];
            $this->value = $url."/".hash('sha512',$value);
        }
        public function __toString():string {
            return $this->value;   
        }
    }

?>    