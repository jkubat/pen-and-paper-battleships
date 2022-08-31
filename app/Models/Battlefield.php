<?php
namespace App\Models;


class Battlefield {

    public function __construct (
        private int $x = 8,
        private int $y = 8,
    ){}

    public function __serialize() {
        return ['x' => $this->x, 'y' => $this->y];
    }

}