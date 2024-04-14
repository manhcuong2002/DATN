<h1> This is homepage</h1>

<p>
    <?php
    foreach($data as $key){
       echo $key['catOne'].'</br>';
       echo $key['catTwo'].'</br>';
       echo $key['catThree'].'</br>';
    }
    ?>
    

</p>