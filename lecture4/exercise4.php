<html>
<body>
    <?php
        class Fruit {
            var $name;
            var $color;
            var $jumlah;

            // Constructor
            function __construct($name, $color, $jumlah) {
                $this->name = $name;
                $this->color = $color;
                $this->jumlah = $jumlah;
            }

            // Method untuk mendapatkan nama buah
            function get_fruit_name() {
                return $this->name;
            }

            // Method untuk mendapatkan warna buah
            function get_fruit_color() {
                return $this->color;
            }
            function get_fruit_jumlah() {
                return $this->jumlah;

            }

            // Destructor
            function __destruct() {
                echo ",The fruit is {$this->name} and the color is {$this->color}.";
            }
        }

        // Instansiasi objek
        $apple = new Fruit("Apple", "red","10");
        // Memanggil method
        echo"The fruit is ".$apple->get_fruit_name() ;
        echo" and the color is ".$apple->get_fruit_color() ;
        echo" and i have ".$apple->get_fruit_jumlah() ;
    ?>
</body>
</html>
