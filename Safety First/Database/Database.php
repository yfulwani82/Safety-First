<?php

    
    $dsn      = "DATABASE=BLUDB;HOSTNAME=dashdb-txn-sbox-yp-dal09-03.services.dal.bluemix.net;PORT=50000;PROTOCOL=TCPIP;UID=phx16863;PWD=8v3@r707ts1fchml;";
    $driver = "DRIVER={IBM DB2 ODBC DRIVER};";
    $conn_string = $driver . $dsn;     # Non-SSL
    $connect = db2_connect( $conn_string, "", "" );
    
?>


