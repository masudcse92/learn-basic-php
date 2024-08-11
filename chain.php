
<?php

$current_Day = date("D");

// echo $current_Day;

if($current_Day == "Sun"){
    echo "This is Sunday. 10% Discount";
}

elseif ($current_Day == "Mon"){
    echo "This is Monday and get 15% Discount";
}

elseif($current_Day == "Tue"){
    echo "This is Tuesday and get 16% Discunt";

}
elseif($current_Day == "Sat"){
    echo " This Saturday and get 50% Discount";
}

else {
    echo "Normaly 2% Discount";
}



?>