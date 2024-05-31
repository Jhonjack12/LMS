<?php

//open session

session_start();

//hapus all session
session_destroy();

header('location: index.php?msg=logout');