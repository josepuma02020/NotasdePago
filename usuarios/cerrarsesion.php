<?php
session_start();
session_destroy();

header('Location: ' . "../index.php?m=5");
