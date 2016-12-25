<?php 
include "php/filter.php"
?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="test-filter.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tahun</th>
                    <th>Kategori</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['NO'];?></td>
                    <td><?php echo $row['JUDUL'];?></td>
                    <td><?php echo $row['TAHUN'];?></td>
                    <td><?php echo $row['KATEGORI'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>
