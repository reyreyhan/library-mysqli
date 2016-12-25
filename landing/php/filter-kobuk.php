 <?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $view = "SELECT * FROM `data_buku` WHERE CONCAT(`JUDUL`, `TAHUN`, `KATEGORI`) LIKE '%".$valueToSearch."%'";
    $viewquery = filterTable($view);
    
}

else {
    $view = "SELECT * FROM `data_buku` ORDER BY judul ASC";
    $viewquery = filterTable($view);
}

// function to connect and execute the query
function filterTable($view)
{
    include "login.php";
//    $connect = mysqli_connect("perpusweb.com", "root", "", "perpus");
    $filter_Result = mysqli_query($login, $view);
    return $filter_Result;
}

?>
