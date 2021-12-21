<?php


class Product {

    public $name;
    public $brand;
    public $category;
    public $price;



}


class User {

    public $name;
    public $lastname;
    public $age;
    public $email;
    public $phone;
    public $address;
    public $discount = 0;

    function __construct(string $name, string $lastname, int $age, string $email, int $phone, string $address)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
    }

    function setDiscount($age) {
        if($age > 60) {
            $this->discount = 20;
        }
    }

    function getDiscount() {
        return $this->discount;
    }

}


class PremiumUser extends User {

    function setDiscount($age)
    {
        if($age > 60) {
            $this->discount = 40;
        } else $this->discount = 25;
    }



}


class CreditCard {

    public $company;
    public $number;
    public $date;
    public $cvv;
    public $signature;

    function __construct(string $company, int $number, int $date, int $cvv, string $signature)
    {
        $this->company = $company;
        $this->number = $number;
        $this->date = $date;
        $this->cvv = $cvv;
        $this->signature = $signature;
    }


}

$c = new CreditCard('mastercard', 1234567890, 230625, 123, 'mario rossi');
$user_1 = new User('mario', 'rossi', 70, 'marior@gmail.com', 3334567890, 'via dei mille 32');
$user_1->setDiscount(70);
var_dump($c, $user_1);