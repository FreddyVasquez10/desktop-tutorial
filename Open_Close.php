
<?php
interface forma {
    public function area();
} 

class Triangulo implements forma{    

    private $largo;
    private $alto;

    public function __constructor($largo, $alto){
        $this->largo = $larga;
        $this->alto = $alto;

    }
    public function area(){
        return $this->ancho * $this->alto / 2;
    }
}
class cuadrado implements forma
{
    private $largo;
    public function __construct($largo)
    {
        $this->largo = $largo;
    }
}

class AreaCalculator
{
    protected $forma;

    public function __construct($formas =[])
    {
        $this-> formas = $formas;
    }
    public function sum()
    {
        return array_reduce(
            $this->formas,
            function ($total, forma $forma){
                return $total + $forma ->area();
            },
            0
        );
    }
}
?>