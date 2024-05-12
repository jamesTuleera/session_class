<?php

$name =  $_FILES['image']['name'];
$tmp =  $_FILES['image']['tmp_name'];

move_uploaded_file($tmp, '../image_uploads/'.$name);