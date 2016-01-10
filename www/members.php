<?php
	include "head.php";
	include "header.php"; ?>
	
<div class="members">
	<div class="row">
    	<div class="large-12 columns">
			<br>
			<h1>Members</h1>
			<br>
			<div class="row">
				<?php
					ini_set('display_errors', 'On');

					// Reads all member txt files
					$filenames = array_reverse(glob("members/*.txt"));
					
					foreach($filenames as $filename) {
						
						// Gets names from 1 file
						$file = fopen($filename, "r");
						while (!feof($file)) {
							$members[] = fgets($file);
						}
						fclose($file);

						// Alphabetizes member names
						sort($members);

						// HTML output
						echo '<div class="large-4 small-6 columns"><div class="members-list">';
						if(preg_match('#(\d+)#', $filename, $matches))
							echo "<h3>Class of " . $matches[1] . "</h3><ul>";
						for ($i=0; $i<(count($members)); $i++) {
							echo "<li>" . $members[$i] . "</li>";
						}
						echo '</ul>';
						
						// Blank lines to make even lists for formatting
						$blanks = 50-count($members);
						for ($j=0; $j<$blanks; $j++) {
							echo '<br>';
						}
						echo '</div></div>';
						unset($members);
					}
				?>
			</div>
		</div>
	</div>
</div>

<?php
	include "footer.php";
?>