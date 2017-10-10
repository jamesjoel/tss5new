<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css');?>">
</head>
<body>
<div id="top-header">
	<div id="inside-top-header">
		<div id="left-top-header">
			<p>contact us <a href="#">009-365-986</a></p>
		</div>
		<div id="right-top-header">
			<ul>
				<li><a href="#">Login</a></li>
				<li><a href="#">Signup</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="header">
	<div id="inside-header">
		<h1><span>H</span>ome Shoppe</h1>
	</div>
</div>
<div id="menu">
	<div id="inside-menu">
		<div id="left-menu">
			<ul>
				<li><a href="<?php echo site_url('home'); ?>">Home</a></li>
				<li><a href="<?php echo site_url('home/file_upload'); ?>">File Upload</a></li>
				<li><a href="<?php echo site_url('home/view_all'); ?>">View</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</div>
		<div id="right-menu">
			<input type="text" placeholder="Search Items" name=""/>
		</div>
	</div>
</div>
<div id="content">
	<div id="inside-content">
		<table align="center" width="500" border="1">
			<tr>
				<th>Name</th>
				<th>Fee</th>
				<th>Edit</th>
			</tr>
		<?php
		foreach($student->result_array() as $data)
		{
			$url=site_url('home/edit/'.$data['id']);
			?>
				<tr>
					<td><?php echo $data['full_name'];?></td>
					<td><?php echo $data['fee'];?></td>
					<td><a href="<?php echo $url;?>">Edit</a></td>
				</tr>
		<?php
		}
		?>
	</table>
	</div>
</div>

</div>
<div id="footer">
	<div id="inside-footer"></div>
</div>
</body>
</html>