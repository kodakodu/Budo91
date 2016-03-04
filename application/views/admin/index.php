<div style="width:20% ; margin-bottom: 50px; margin-top: 50px; text-align: center; background-color: #F5F6CE">
	Admin</br>
	
	Novitates autem si spem adferunt, ut tamquam in herbis non fallacibus fructus appareat, non sunt illae quidem repudiandae, vetustas tamen suo loco conservanda; maxima est enim vis vetustatis et consuetudinis. Quin in ipso equo, cuius modo feci mentionem, si nulla res impediat, nemo est, quin eo, quo consuevit, libentius utatur quam intractato et novo. Nec vero in hoc quod est animal, sed in iis etiam quae sunt inanima, consuetudo valet, cum locis ipsis delectemur, montuosis etiam et silvestribus, in quibus diutius commorati sumus.
	<?php
	//var_dump($data["disciplines_info"]);
		//foreach($data as $d){
		//	echo ($d);
		//}
	?>
	<form action=" <?php echo site_url('Admin/add_club'); ?>" method="post">
        	<center><table border="2">
            	<tr>
                	<td>nom:</td>
					<td>
						<input type="text" name="nom" />
                    </td>
                </tr>
                <tr>
                	<td>Description:</td>
					<td>
						<input type="text" name="desc" />
                    </td>
                </tr>                
                <tr>
                	<td colspan="2">
                    	<center><input type="submit" value="submit" name="submit" /></center>
                    </td>
                </tr>
            </table></center>
	
	
	<!--<?php foreach($disciplines_liste as $d): ?>
<div id="num_<?php echo $d->id; ?>" class="message">
<p>
<a href="#num_<?php echo $d->id; ?>">#</a>
Par <span class="pseudo_commentaire"><?php echo
htmlentities($d->nom); ?></span>

</p>
<!--<div class="contenu_commentaire"><?php echo
nl2br(htmlentities($d->d)); ?></div>
</div>

<?php endforeach; ?>-->
</div>