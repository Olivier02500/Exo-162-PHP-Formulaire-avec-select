<?php
if (isset($_GET)){
    foreach ($_GET as $key => $value){
        echo "$key $value <br>" ;
    }
}
else{
    echo "Non existant";
}

if (isset($_POST)){
    foreach ($_POST as $key => $value){
        echo "$key $value <br>" ;
    }
}
else{
    echo "Non existant";
}
