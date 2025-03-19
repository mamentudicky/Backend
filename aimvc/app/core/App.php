<?php

class App {
    
    // Variabel global untuk menyimpan controller, method, dan parameter dari URL
    public $controller = ""; 
    public $method = "";  
    public $parameter = [];  // Pastikan $parameter adalah array default
    
    // Konstruktor untuk menginisialisasi controller, method, dan parameter default
    public function __construct() {
        // Memanggil fungsi initDefaultController untuk menetapkan controller
        $this->initDefaultController("Home", "index", []);
        
        // Memanggil fungsi parseURL untuk mendapatkan URL yang diterima
        $url = $this->parseURL();
        //var_dump($url);
        
        // handle controller
        if (!empty($url) && file_exists('../app/controller/' . $url[0] . '.php')) {
            // Mengubah nama controller
            $this->controller = $url[0];
            // Menghapus elemen index 0
            unset($url[0]);
            //var_dump($url)
        }

        // Memuat controller yang dipilih
        require_once '../app/controller/'.$this->controller.'.php';
        $this->controller = new $this->controller();

        // handle method
        if (isset($url[1])) {
            $name_method = $url[1];
            if (method_exists($this->controller, $name_method)) {
                $this->method = $name_method;
                unset($url[1]);
                //var_dump($url);
            }
        }

        // Handle input parameters
        if (!empty($url)) {
            $this->parameter = array_values($url); // Menyimpan sisa URL sebagai parameter
            //var_dump($this->parameter);
        }

        // Memastikan parameter adalah array sebelum dipanggil
        call_user_func_array([$this->controller, $this->method], (is_array($this->parameter) ? $this->parameter : []));
    }

    // Fungsi untuk global variable controller, method, dan parameter default
    private function initDefaultController($controller, $method, $param) {
        // Menyimpan nilai default controller, method, dan parameter ke variabel kelas
        $this->controller = $controller;
        $this->method = $method;
        $this->parameter = $param;
    }

    // Fungsi untuk mem-parsing URL yang diterima dari query string
    public function parseURL() {
        // Mengecek apakah ada parameter 'url' pada query string
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); 
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // Memecah URL menjadi array berdasarkan karakter '/' (slash)
            $url = explode('/', $url);

            // Mengembalikan array URL yang sudah diproses
            return $url;
        }
        
        // Jika tidak ada parameter 'url', mengembalikan array kosong
        return [];
    }
}

?>