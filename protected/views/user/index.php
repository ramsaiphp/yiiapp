<?php
/* @var $this UserController */

$this->breadcrumbs=array(
	'User',
);

?>


<h1>User File</h1>
<?php 
foreach($users as $user){

echo "$user->username";

}
 ?>
<!--<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>-->
