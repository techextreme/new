<?php include "includes/header.php";?>



<div id="galleryContent" class="well">


<?php
$gd=$_GET["id"];
if($gd==1)
	{?>
	<table>
		<tr>
			<td><a href="gallery.php?id=2"><img src="includes/images/videoButton.png" width="300" height="300" /><a></td>
			<td><a href="gallery.php?id=3"><img src="includes/images/pictureButton.png" width="340" height="340"/><a></td>
		</tr>
	</table>
	<?php
	}
else if($gd==2)
	{
	?>
	<table>
        <tr>
        <?php
        foreach (new DirectoryIterator("includes/gallery/") as $file) {
    	?>
          	<td><a href="gallery.php?id=<?php echo $file->getFilename() ?>"><folder><img src="includes/images/folderIcon.png"/><figcaption> <?php print $file->getFilename() ?></figcaption></folder> </a>
    	<?php
        }?>
        </tr>
    </table>
	<?php
	}
else if($gd==3)
	{?>
	<table>
		<?php
        $dir    = 'includes/gallery/images/';
        $files1 = scandir($dir); 
		$filecount = 0;
		$files = glob($dir . "*");
		$filecount = count($files);
		$rowCount = $filecount/4;
		$link=2;
		for($lr=0;$lr<$rowCount;$lr++)
		{
			?>
			<tr>
			<?php
			for($ld=$link;($ld<$filecount+2)&&($ld<$link+4);$ld++)
			{ 
				?>
				<td><a href="gallery.php?id=<?php echo $files1[$ld] ?>"><folder><img src="includes/images/folderIcon.png"/><figcaption> <?php print_r($files1[$ld]) ?></figcaption></folder> </a>
				</td>
				<?php
			}
			?>
			</tr>
			<?php
			$link=$link+4;
		}
        ?>
    </table>
	<?php
	}
else if(stripos($gd,'jpg') !== false)
	{
		?>
        <img src="<?php echo $gd; ?>" />
        <?php
	}
else
	{
	?>
		<table>
		<?php
		$dir="includes/gallery/images/".$gd."/";
        $files1 = scandir($dir); 
		$filecount = 0;
		$files = glob($dir . "*");
		$filecount = count($files);
		$rowCount = $filecount/4;
		$link=2;
		for($lr=0;$lr<$rowCount;$lr++)
		{
			?>
			<tr>
			<?php
			for($ld=$link;($ld<$filecount+2)&&($ld<$link+4);$ld++)
			{ 
				?>
                
				<td><a href="gallery.php?id=<?php echo $dir.$files1[$ld] ?>"><img style="margin:4px;" width="267" height="267" src="<?php echo $dir.$files1[$ld];?>"/></a>
				</td>
				<?php
			}
			?>
			</tr>
			<?php
			$link=$link+4;
		}
        ?>
    	</table>
	<?php
	}
?>
    
</div>



<?php include "includes/footer.php"; ?>