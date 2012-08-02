<?php
/**
.* Small description of this file:
.* Lists all the parks in the database
.*
.* @author Prabhjot Jaspal <jasp0003@algonquincollege.com>
.* @copyright 2012 Prabhjot Jaspal
.* @license BSD-3-Clause <http://github.com/.../license.txt>
.* @version 1.0.0
.* @package web-app
.*/

require_once 'includes/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
	header('Location: parks.php');
    exit; 
}

$sql = $db->prepare('
DELETE FROM parks
WHERE id = :id
');
$sql->bindValue(':id', $id, PDO::PARAM_INT);
$sql->execute();

header('Location: parks.php');
exit;