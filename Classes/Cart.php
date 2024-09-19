<?php

namespace Classes;

class Cart
{
    public $title;
    public $price;

    function __constructor(): void
    {
        session_start();
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
    }

    public function addToCart($title, $price): void
    {
        $this->title = $title;
        $this->price = $price;
        $_SESSION['cart'][] = [
            'title' => $this->title,
            'price' => $this->price
        ];
    }

    public function getCart(): array
    {
        return $_SESSION['cart']??[];
    }

    public function deleteFromCart($id): void
    {
        unset($_SESSION['cart'][$id]);
    }

    public function getTotalPrice(): float
    {
        $totalPrice = 0;
        try{
            if (!isset($_SESSION['cart'])) {
                throw new \Exception('Cart is empty ');
            }
            foreach ($_SESSION['cart'] as $book) {
                $totalPrice += $book['price'];
            }

        }catch (\Exception $e){
            echo $e->getMessage();
        }
        return $totalPrice??"";
    }

    public function clearCart():void
    {
        $_SESSION['cart'] = [];
    }
}