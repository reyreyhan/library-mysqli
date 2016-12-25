 <?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `data_buku` WHERE CONCAT(`JUDUL`, `TAHUN`, `KATEGORI`, `CODE`) LIKE '%".$valueToSearch."%'";
    $viewquery = filterTable($query);
    
}

 else {
    $query = "SELECT * FROM `data_buku`";
    $viewquery = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    include "login.php";
//    $connect = mysqli_connect("perpusweb.com", "root", "", "perpus");
    $filter_Result = mysqli_query($login, $query);
    return $filter_Result;
}

?>
