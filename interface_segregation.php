<?php

interface Beverage { /* maybe some code */}

interface BeverageMachine
{
    public function prepareBeverage(): Beverage;

}
class CoffeeMachine implements BeverageMachine


{
    public function prepareBeverage(): Beverage
    {
        //some code to prepare coffeee
    }
}

class TeMachine implements BeverageMachine
{

    public function prepareBeverage(): Beverage
    {
        //some code to prepare te
    } 
}