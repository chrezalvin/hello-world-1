
<?php
// always outputs json of database
/**
 * call for database employee in database week-08
 */
function database(){
    return new mysqli('localhost', 'root', '', 'week-08');
}

$query = 
"SELECT *
FROM `employee`";

$res = database()->query($query);

$arr = [];
$arrNames = ['id', 'nama', 'jabatan', 'gaji', 'telp', 'alamat'];
// put all data into single array
while($data = $res->fetch_assoc()){
    array_push($arr, 
        array(
            $arrNames[0] => $data[$arrNames[0]], 
            $arrNames[1] => $data[$arrNames[1]], 
            $arrNames[2] => $data[$arrNames[2]], 
            $arrNames[3] => $data[$arrNames[3]], 
            $arrNames[4] => $data[$arrNames[4]], 
            $arrNames[5] => $data[$arrNames[5]], 
        ));
}
?>

<?= json_encode($arr, JSON_PRETTY_PRINT) ?>