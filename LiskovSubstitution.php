<?php

interface vehicle
{
    public function getSpeed(): int;
    public function move(int $seconds): int;
    
}
CONST SPEED  = 15;
class Car implements Vehicle
{
    

  // comentario de prueba para git jeje
    
    public function move(int $seconds): int
    {
        return self::SPEED * seconds;
    }
    protected function getSpeed(): int
    {
        return self::SPEED * seconds;

    }
}
const  SPEED = 15;
class Bike implements vehicle
{
   

    public function move(int $seconds): int
    {
        return self::SPEED * seconds;

    }
    protected function getSpeed(): int
    {
        return self::SPEED;
    }
}

function getVehicle(User $user) {
    if ($user->needsToMoveFast()) {
        return new Car();

    } else {
        return new Bike();

    }
}

function moveUser(User $user, int $seconds): int {
    $vehicle = getVehicle($user);
    // doesn't matter the vehicle choosen
    return $vehicle->move($seconds);
}