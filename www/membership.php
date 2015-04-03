<?php include 'head.php' ?>
<body>
	<?php include 'header.php' ?>
	<div id="content">
		<div class="post">
			<h2 class="title">Eligibility <b>Requirements</b></h2>
			<div class="entry">
				<p>Undergraduate students whose scholarship places them in the top eighth of their class in their next-to-last year or in the top fifth of their class in their last college year are eligible for membership consideration. These scholastically eligible students are further considered on the basis of personal integrity, breadth of interest both inside and outside engineering, adaptability, and unselfish activity.</p>
				<p>Engineering graduate students whose scholarship places them in the top fifth of their graduate class or whose high-quality work is attested to by a faculty member may be elected to membership.</p>
				<p>Invited students must demonstrate their exemplary character by meeting and talking one-on-one with the chapter's officers before initation. They must also polish bents, the official badge of Tau Beta Pi, by hand before they can become members.</p>
				<p>Invitations are sent and initiation ceremonies are held twice a year.
				<p>A link to instructions for bent polishing is below:</p>
				<a href="Bent Polishing Instructions.pdf">Bent Polishing Instructions</a>
			</div>
		</div>
		<div class="post">
			<h2 class="title">Current or Recent <b>Members</b></h2>
			<div class="entry">
               <?php 
               		include 'members/2015members.php';
               		include 'members/2014members.php';
               		include 'members/2013members.php';
               		include 'members/2012members.php';
               		include 'members/2011members.php';
               		include 'members/2010members.php';
               		include 'members/2009members.php';
               ?>
			</div>
		</div>
	</div>
	<!-- end #content -->
	<?php include 'sidebar.php' ?>
	<!-- end #page -->
	<?php include 'footer.php' ?>
</body>
</html>
