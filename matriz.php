<php
  $linhas = 10;
  $colunas = 14;
  for ($l=0; $l <= $linhas; $l++) {
    for ($c=0; $c <= $colunas; $c++) {
      $matriz[$l][$c] = rand(1, 1000);
    }
  }


  

  
  echo '<table>';
  
  for ($l=0; $l <= $linhas; $l++) {
    echo '<tr>'
    for ($c=0; $c <= $colunas; $c++) {
      echo '<td>{$matriz[$l][$c]}</td>'
    }
    echo '</tr>'
  }
  
  echo '</table>';
?>
