 <?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function

    $query = "SELECT * FROM `pengembalian` WHERE CONCAT(`JUDUL`, `NAMA`, `TGLB`) LIKE '%".$valueToSearch."%'";
    $viewquery = filterTable($query);
}

elseif (isset($_POST['search_tgl'])) {

    $TGL = $_POST['TGL'];
    $TGLB = $_POST['TGLB'];

    $query = "SELECT * FROM `pengembalian` WHERE `TGLB` BETWEEN '$TGL' AND '$TGLB' ";
    $viewquery = filterTable($query);

}
 else {
    $query = "SELECT * FROM `pengembalian`";
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
