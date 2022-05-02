<?php 
    include 'inc/header.php'
?>	


	<section>

        

		<div class="content about">
			<h1>About us</h1>

        <img id="bulb" src="images/sculpture1.jpg" alt="" />
        <img id="bulb1" src="images/sculpture3.jpg" alt="" />
        <img id="bulb2" src="images/sculpture5.jpg" alt="" />
        <img id="bulb3" src="images/sculpture7.jpg" alt="" />

	
	<script src="js/jquery.min.js"></script>
	<script>
         let bulb = $('#bulb');
		 
		 $('#bulb').on('mouseover', function() {
		     bulb.attr('src', 'images/sculpture2.jpg');
		});
 
         $('#bulb').on('mouseout', function() {
             bulb.attr('src', 'images/sculpture1.jpg');
        });			 
	</script>

    <script>
         let bulb1 = $('#bulb1');
		 
		 $('#bulb1').on('mouseover', function() {
		     bulb1.attr('src', 'images/sculpture4.jpg');
		});
 
         $('#bulb1').on('mouseout', function() {
             bulb1.attr('src', 'images/sculpture3.jpg');
        });			 
	</script>

        <script>
         let bulb2 = $('#bulb2');
		 
		 $('#bulb2').on('mouseover', function() {
		     bulb2.attr('src', 'images/sculpture6.jpg');
		});
 
         $('#bulb2').on('mouseout', function() {
             bulb2.attr('src', 'images/sculpture5.jpg');
        });			 
	</script>
 
        <script>
         let bulb3 = $('#bulb3');
		 
		 $('#bulb3').on('mouseover', function() {
		     bulb3.attr('src', 'images/sculpture8.jpg');
		});
 
         $('#bulb3').on('mouseout', function() {
             bulb3.attr('src', 'images/sculpture7.jpg');
        });			 
	</script>

			<h3>Here are some of the most famous statues of the art History</h3>

			<figure>
				<?php
	$arr = [
			['Sculpture', 'Artist'],
			['The Three Graces', 'Antonio Canova'],
			['Pieta', 'Michelangelo'],
			['Apollo and Daphne', 'Gian Lorenzo Bernini'],
            ['The Kiss', 'Auguste Rodin'],
		];
		
	function displayTable($arr) {
		$table = "<table>";
		for ($i = 0; $i < count($arr); $i++) {
			$table .= "<tr>";
			
			for ($j = 0; $j < count($arr[$i]); $j++) {
				$table .= "<td>" . $arr[$i][$j] . "</td>";
	        }
			
			$table .= "</tr>";
		}
        $table .= "</table>";

        return $table;
    }		
			
	
?>

			</figure>
<?php
       echo displayTable($arr);
	?>
			<p>Some facts about each masterpiece:</p>

			<ul>
				<li><em>Antonio Canova:</em> was an Italian Neoclassical sculptor, famous for his marble sculptures. Often regarded as the greatest of the Neoclassical artists, his sculpture was inspired by the Baroque and the classical revival, and has been characterised as having avoided the melodramatics of the former, and the cold artificiality of the latter.</li>
                <br>
				<li><em>Michelangelo:</em>was an Italian sculptor, painter, architect and poet of the High Renaissance born in the Republic of Florence, who exerted an unparalleled influence on the development of Western art. His artistic versatility was of such a high order that he is often considered a contender for the title of the archetypal Renaissance man, along with his rival, the fellow Florentine, Leonardo da Vinci.</li>
                <br>
				<li><em>Gian Lorenzo Bernini:</em>was an Italian sculptor and architect. While a major figure in the world of architecture, he was, also and even more prominently, the leading sculptor of his age, credited with creating the Baroque style of sculpture.</li>
                <br>
				<li><em>Auguste Rodin:</em>Although he is generally considered the progenitor of modern sculpture, he did not set out to rebel against the past. He was schooled traditionally, took a craftsman-like approach to his work, and desired academic recognition, although he was never accepted into Paris's foremost school of art.</li>
			</ul>
		</div>
	</section>

<?php 
    include 'inc/footer.php'
?>	
