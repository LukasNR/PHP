<?php
$no = $_POST['nome'];
$num = $_POST['numero'];

for($i = 1; $i <= $num ; $i++){
echo $i . ' ' . $no . '<br>';
}

?>