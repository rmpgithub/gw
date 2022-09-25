<?php require_once('header.php') ?>



<div class="container gallery gallery-index">

			<?php
			$nr = 1;
			for ($i = 1; $i <= 131/3; $i++) 
			{
    			
		    echo '<div class="row">';
		    	for($ii = 1; $ii <= 3; $ii++)
		    	{
		    		echo '<div class="col-xs-12-col-sm-6 col-md-4">';
		    		echo '<a href="./src/assets/img/galeria/' .$nr. '.jpg">';
		    		echo '<img class="Thumbnail" src="./src/assets/img/galeria/' . $nr. '.jpg" alt=""></a>';
		    		echo '</div>';
		    		
		    		$nr++;
		    	}
			
			echo '</div>';

			}
		?>


			

	
			
</div>


<?php require_once('footer.php') ?>

