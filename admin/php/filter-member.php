 <?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `anggota` WHERE CONCAT(`NIS`, `NAMA`, `JURUSAN`) LIKE '%".$valueToSearch."%'";
    $viewquery = filterTable($query);
    
}

 else {
    $query = "SELECT * FROM `anggota`";
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
