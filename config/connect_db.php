<?php
    const HOST = "localhost";
    const USER = "Gerard";
    const PASSWORD = "Vanguard7Alpha#";
    const DB =  "final";

    const CONN = mysqli_connect(HOST, USER, PASSWORD, DB);

    if(CONN) {
        echo "connection -> success";
    }