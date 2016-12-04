<?php
  class HTMLElementCreator{
    public function link($txt, $link){
      echo "<a href=$link>$txt</a>";
    }
    
    public function makeTable($myarray, $head=False){
      echo '<table border=1>';
      if ($head == True){
        $len = count($myarray[0]);
        $akeys = array_keys($myarray);
        echo '<tr><thead>';
        foreach($akeys as $head){
          echo '<th>'.$head.'</th>';
        }
        echo '</thead></tr>';
        $cur = "0";
        foreach($myarray as $element){
          $tmparray = array();
          foreach($myarray as $innerarray){
            array_push($tmparray, $innerarray[$cur]);
          }
          echo '<tr>';
          foreach($tmparray as $key){
            echo '<td>'.$key.'</td>';
          }
          echo '</tr>';
          $cur+="1";
        }
      }
      else{
        foreach($myarray as $element){
          echo '<tr>';
          foreach($element as $key){
            echo '<td>'.$key.'</td>';
          }
          echo '</tr>';
        }
      }
      echo '</table>';
    }
    
    public function makeList($array){
      echo '<ul>';
      foreach($array as $item){
        echo "<li>$item</li>";
      }
      echo '</ul>';
    }
  }
?>