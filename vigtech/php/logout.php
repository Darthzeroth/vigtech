<?php
	session_start();
	session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);
    Header("HTTP/1.1 301 Moved Permanently");
    echo'<script type="text/javascript">document.location = "../index.php";</script>';

?> 