<?php 

// Principio SOLID 

// S ->  Single-responsibility principle

//por cada clase se da un comportamiento diferente esta rompiendo el pricipio  

//--------------------ASI ESTA MAL 

Class empleado
{
    private $correo;
    public funtion InsertaBD (){
        
    }
    
}

//------------------------------ ASI ESTARIA BIEN 

Class empleado
{
    private $correo;

    
}
class empleadoDB
{
    public funtion InsertaBD (){
        
    }
}




?>