<?php 
    include 'inc/header.php'
?>	



	<section>
		<div class="content">
			<h1>Gallery of Art</h1>

			<ul class="gallery">
				<li>
					<figure><img src="images/paint1.jpg" alt=""></figure>
                     <h1>"Woman with a parasol"(1875)</h1>

				</li>
				<li>
					<figure><img src="images/paint2.jpg" alt=""></figure>
                    <h1>Claude Monet(1840-1926)</h1>
				</li>
				<li>
					<figure><img src="images/paint3.jpg" alt=""></figure>
                    <h1>"Ninfee Rosa"(1898)</h1>
				</li>
				<li>
					<figure><img src="images/paint4.jpg" alt=""></figure>
                    <h1>"Vase with 5 Sunflowers"(1888)</h1>
				</li>
				<li>
					<figure><img src="images/paint5.jpg" alt=""></figure>
                    <h1>Vincent Van Gogh(1853-1890)</h1>
				</li>
				<li>
					<figure><img src="images/paint6.jpg" alt=""></figure>
                    <h1>"Cafe Terrace at night"(1988)</h1>
				</li>
				<li>
					<figure><img src="images/paint7.jpg" alt=""></figure>
                    <h1>The Three Graces(1504)<h1>
				</li>
				<li>
					<figure><img src="images/paint8.jpg" alt=""></figure>
                    <h1>Sandro Botticelli(1445-1510)</h1>
				</li>
                <li>
					<figure><img src="images/paint9.jpg" alt=""></figure>
                    <h1>"Birth of Venus"(1485)</h1>
				</li>
			</ul>
                                <?php
echo(min(1875, 1898, 1888, 1504, 1485) . "<br>");
echo ("This is the oldest painting" . "<br>");

echo(max(1875, 1898, 1888, 1504, 1485) . "<br>");
echo "This is the newest painting";
?> 

		</div>
	</section>


<?php 
    include 'inc/footer.php'
?>	
	