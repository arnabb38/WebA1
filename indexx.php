<style>
    table,td,th {
        
        border: 1px solid black;
    }

    table {
        border-collapse: collapse;
        width: 50%;
    }

    th {
        height: 40px;
    }
</style>
  
<?php

        if(isset($_POST['tarea'])){
            $tarea = $_POST['tarea'];
            echo "<b>"."Input String : "."</b>". $tarea;
            echo "<hr>";
            echo "<hr>";
            echo "<br>";
            
            //character count section START
            echo "<h2>"."Character Frequency Count"."</h2>";
            
            echo "<hr>";
            $store = count_chars($tarea,1);
            
            echo "<div align='middle'>";
            echo "<table align='middle' >
            <tr>
            <th>Character</th>
            <th>Count</th>
            </tr>";
            
            foreach($store as $k=>$v){
                echo "<tr>";
                echo "<td>".chr($k)."</td>";
                echo "<td>".$v."</td>";
                echo "</tr>";
            }
            
            echo "</table>";
            echo "</div>";   
            //character count section END
            
            
            echo "<br>";
            echo "<hr>";
             echo "<hr>";
            echo "<br>";
            
            
            //word count section START
            echo "<h2>"."Word Count"."</h2>";
             echo "<hr>";
            $count = str_word_count($tarea,2)/*."<br>"*/;
            $arr = array_count_values($count);
            //echo print_r($arr);
            
            echo "<div align='middle'>";
            echo "<table align='middle' >
            <tr>
            <th>Word</th>
            <th>Count</th>
            </tr>";
            
            foreach($arr as $k=>$v){
                echo "<tr>";
                echo "<td>".$k."</td>";
                echo "<td>".$v."</td>";
                echo "</tr>";
            }
            
            echo "</table>";
            echo "</div>";
            //Word count section END
            
            
            echo "<br>";
            echo "<hr>";
           
        }

?>


<form action="index.php" method="post" align="middle">
    <input type="submit" value="Input Another String">
</form>