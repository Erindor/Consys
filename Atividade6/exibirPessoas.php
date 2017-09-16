<!-- Este arquivo é a view da atividade -->
<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="UTF-8"/>
        <title> Atividade 6 </title>
    </head>
    
    <body>
        <h1> Pessoas  </h1>
       <table border="1">
           <tr>
               <th> Nome                </th>
               <th> DDD                 </th>
               <th> Telefone            </th>
               <th> CPF                 </th>
               <th> Sabe Programar      </th>
           </tr>
           
           <?php
                // Atributos para conexao com banco de dados
                $host = "127.0.0.1";
                $user = "rocksbn";                          
                $pass = "";                                 
                $db = "Consys";                             
                $port = 3306;                               
                
                $conn = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error()); //realiza a conexao
                $sql = "SELECT * From Pessoas"; //sql para buscar elementos
                
                $rs = $conn->query($sql); //executa a intrução sql
                
                while($p = $rs->fetch_assoc()) { //enquanto possuir pessoas para serem lidas
                    /* Cria as linhas da tabela */
                    echo "<tr>";
                    echo "<td>" . $p["Nome"] . "</td>";
                    echo "<td>" . $p["DDD"]  . "</td>";
                    echo "<td>" . $p["Telefone"] . "</td>";
                    echo "<td>" . $p["CPF"] . "</td>";
                    echo "<td>" . $p["Sabe_Programar"] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>