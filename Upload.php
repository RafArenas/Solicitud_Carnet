<?php

/* Creating a route to the file. */
$routeFile = __DIR__ . DIRECTORY_SEPARATOR . 'File.php';
$routeRedirect = __DIR__ . DIRECTORY_SEPARATOR . 'Redirect.php';
$routeDirectory = __DIR__ . DIRECTORY_SEPARATOR . 'Folder.php';
$routeCreateDocument = __DIR__ . DIRECTORY_SEPARATOR . 'CreateDocument.php';

/* Including the files in the current file. */
require_once($routeFile);
require_once($routeRedirect);
require_once($routeDirectory);
require_once($routeCreateDocument);

/* Creating a folder in the upload folder with the name of the record number. */




/* Creating a new instance of the class File, and then it is validating the format and the size of the
file, and then it is uploading the file. */
$file = new File($_FILES['file'], 'png,jpg,jpeg');
if($file->validateFormat() && $file->validateSize())
    $file->uploadAs($routeFolder . DIRECTORY_SEPARATOR . $_POST['document'] . '_' . $_POST['firstName']);

/* Creating a route to the file that is going to be created. */
$routeFileCSV = $routeFolder . DIRECTORY_SEPARATOR . $_POST['recordNumber'] . '.csv';

/* Creating a new instance of the class CreateDocument, and then it is passing the route of the file
that is going to be created. */
$cDocument = new CreateDocument($routeFileCSV);

/* Concatenating the values of the inputs in the form. */
$text = $_POST['document'] . ',' .  $_POST['firstName'] . ',' .  $_POST['lastName'] . ',' . $_POST['typeDocument'] . ',' . $_POST['document'] . ',' . $_POST['typeBlood']  . $_POST['rh'];

/* Writing the text in the file. */
$cDocument->write($text);

/* Redirecting to the index.php file. */
Redirect::to('index.php');