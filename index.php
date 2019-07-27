<?php
	echo '<b>IntlChar class :</b>'.'</br>';
?>

<table>
	<th>Ord</th>
	<th>Char</th>
	<?php
		for ($i=33; $i<49; $i++) { ?>
			<tr>
		 	 <td width="20" height="20" style="border:1px solid black"><?php echo $i; ?></td>
		 	 <td width="20" height="20" style="border:1px solid black"><?php echo IntlChar::chr($i); ?></td>
		 	</tr>
		 	
    <?php } ?>
</table> 
