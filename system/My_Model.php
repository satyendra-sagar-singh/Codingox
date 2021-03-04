<?php
    /* Do Not Edit This File. This File Created For System Functionality. */
    class My_Model {
        public $base_path; //Base Directory Path
        
        public function __construct() {
			$root = ['system'];
			$path = str_replace('\\', '/', __DIR__);
			$path = explode('/', $path);

			$path = array_values(array_filter(array_diff($path, $root)));

			foreach ($path as $key) {
				$this->base_path.= $key.'/';
            }

            if(APP_URL != "") {
                $this->base_path = "";
            }
        }

        function __call($method, $file_name) {

            //Load Helper
            if ($method == 'helper') {
                $file = "Helper "; $require = array();
                for ($i = 0; $i < count($file_name); $i++) {
                    if (file_exists($this->base_path.'helpers/'.$file_name[$i].'.php')) {
                        $require[] = $this->base_path.'helpers/'.$file_name[$i].'.php';
                    }else {
                        $file.= $file_name[$i].' ';
                    }
                }

                if (count($file_name) == sizeof($require)) {
                    foreach ($require as $key) {
                        require_once($key);
                    }
                }else {
                    return require_once($this->base_path.'views/error/error.php');
                }
            }

            //Load Library
            if ($method == 'library') {
                $file = "Library "; $require = array();
                for ($i = 0; $i < count($file_name); $i++) {
                    if (file_exists($this->base_path.'libraries/'.$file_name[$i].'.php')) {
                        $require[] = $this->base_path.'libraries/'.$file_name[$i].'.php';
                    }else {
                        $file.= $file_name[$i].' ';
                    }
                }
                $i = 0;
                if (count($file_name) == sizeof($require)) {
                    foreach ($require as $key) {
                        require_once($key);
                        $this->{$file_name[$i]} = new $file_name[$i];
                        $i++;
                    }
                }else {
                    return require_once($this->base_path.'views/error/error.php');
                }
            }

            //Load Database
            if ($method == 'database') {
                require_once($this->base_path.'libraries/QueryBuilder.php');
                $this->db = new QueryBuilder;
            }
        }
    }
?>