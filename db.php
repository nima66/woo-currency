<?php
$connection=new pdo ("mysql:host=localhost;dbname=currency;chartset=utf8","root","");
$connection->setattribute(pdo::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);