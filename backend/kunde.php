<?php
    header('Content-type: application/json');

    mysql_connect('192.168.10.81:3306', 'dkb', 'dkbdkb');
    mysql_select_db('DWWLightProd_Gruberwinzerhof');

    //Query für alle Kundendaten
    $query = "SELECT Firmenbezeichnung1; Firmenbezeichnung2 from firma ORDER BY id ASC";
    $mysqlQeury = mysql_query($query);

    
    $result = array();
    $rowResult = array();
    
    //Fetch
    while($row = mysql_fetch_assoc($mysqlQeury)) {
        
    //Daten einfügen
    $rowResult['Firmenbezeichnung1'] = $row['Firmenbezeichnung1'];
    $rowResult['Firmenbezeichnung2'] = $row['Firmenbezeichnung2'];
    }

     

    $result[] = $rowResult;

    //Erzeugen der JSON Struktur
    print_r(jason_encode($result));

    mysql_close($connection);
?>