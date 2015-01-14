<?php
/**
 * Created by PhpStorm.
 * User: Benet
 * Date: 17/10/14
 * Time: 12:22
 */

$preuiva;
$tipusiva=1.21;


if($_GET['calcula']){

    $preu=$_GET[preu];
    $preuiva=$preu*$tipusiva;
}

echo "

<form action='Ex5.php' method='get'>
    Preu sense IVA <input type='text' name='preu' value='$preu' /><br>
    Amb IVA<input type='text' name='preuIVA' value='$preuiva'/><br>
    Calcula<input type='submit' name='calcula'/>
</form>

";