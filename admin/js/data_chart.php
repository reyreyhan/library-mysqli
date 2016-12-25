 <?php
    
    header('Content-Type: application/json');

    include "../php/login.php";
	

/*    $filter_kat = "SELECT KATEGORI FROM data_buku" */
	$filter_kat = "SELECT COUNT(IF(`KATEGORI` LIKE 'Horror%', `CODE`, Null)) AS `Horror`,
						  COUNT(IF(`KATEGORI` LIKE 'Teknologi%', `CODE`, Null)) AS `Teknologi`,
						  COUNT(IF(`KATEGORI` LIKE 'Ensiklopedi%', `CODE`, Null)) AS `Ensiklopedi`,
						  COUNT(IF(`KATEGORI` LIKE 'Agama%', `CODE`, Null)) AS `Agama`,
						  COUNT(IF(`KATEGORI` LIKE 'Fiksi%', `CODE`, Null)) AS `Fiksi`,
						  COUNT(IF(`KATEGORI` LIKE 'Non-Fiksi%', `CODE`, Null)) AS `NonFiksi`,
						  COUNT(IF(`KATEGORI` LIKE 'Pendidikan%', `CODE`, Null)) AS `Pendidikan`   						     
						  FROM data_buku;";

    $viewquery = mysqli_query($login, $filter_kat);

    $data = array();
    foreach ($viewquery as $row) {
    	$data[] = $row;
    }

 print json_encode($data);

 ?>