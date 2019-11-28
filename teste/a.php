<?php

if (isset($_POST['formWheelchair']) && $_POST['formWheelchair'] == 'Yes') 
{
    echo "Need wheelchair access.";
}
else
{
    echo "Do not Need wheelchair access.";
}    

?>