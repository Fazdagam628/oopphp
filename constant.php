<?php

// define('NAMA', 'Fauzan');
// echo NAMA;
// const UMUR = 17;
// echo "<br>";
// echo UMUR;

// class Coba
// {
//     const NAMA = 'Fauzan';
// }
// echo Coba::NAMA;

// echo __LINE__;
// echo "<br>";
// echo __FILE__;

// function coba()
// {
//     return __FUNCTION__;
// }
// 
// echo coba();

class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
