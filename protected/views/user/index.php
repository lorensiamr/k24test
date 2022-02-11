<?php
/* @var $this UserController */

$this->breadcrumbs=array(
	'User',
);
?>
<h1>List User</h1>
<?php
foreach ($users as $user){
	echo "$user->email";
}
?>
