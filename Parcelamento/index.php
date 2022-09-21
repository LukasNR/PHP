 <?php
  $preco = $_POST['valor'];
  
  $total =  $preco+($preco * 16) /100;
  $parcela = $total/10;


  
echo "O Valor informado é " . $preco;

echo '<br>';

echo "O Valor da parcela é de 10x de " . $parcela;

echo '<br>';

echo "O Valor da toral com acrescimo é " . $total;






 ?>