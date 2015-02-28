<?
	$xml = simplexml_load_file("staff.xml");
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Staff Information</title>
	<style>
		body {font-family: Roboto;}
		ul li>span {margin:0 5px;} 
		.name_staff {color:red;font:bold;}
		.tag_staff{background-color: yellow;}
	</style>
</head>
<body>
	<h1>xml_staff</h1>
	<ul>
		<!--遍历所有staff下ux-->
		<?	foreach($xml->ux as $ux){ ?>
		<li>
			<a href="<? echo $ux->link ?> " target="_blank" class="name_staff"><? echo $ux->name; ?></a>
			<span class="id_staff"><? echo $ux['id'] ?></span>


			<!-- 遍历ux下tags内的tag -->
			<? foreach($ux->tags->tag as $tag){ ?>
				<span class="tag_staff"><? echo $tag ?></span>
			<? } ?>


			<!-- 遍历ux下substaff -->
			<? if($ux->substaffs){foreach($ux->substaffs->substaff as $substaff){ ?>
				<span class="substaff_staff"><? echo $substaff ?></span>	
			<? }} ?>

		</li>
		<? } ?> 
	</ul>
</body>
</html>