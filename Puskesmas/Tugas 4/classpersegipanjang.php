<?php
class PersegiPanjang
{
    public $panjang, $lebar;
    public function __construct($lebar, $panjang)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function rumusKeliling()
    {
        // Rumus keliling: 2 * (panjang + lebar)
        return 2 * ($this->panjang + $this->lebar);
    }

    public function rumusLuas()
    {
        // Rumus luas: panjang * lebar
        return $this->panjang * $this->lebar;
    }
}
?>