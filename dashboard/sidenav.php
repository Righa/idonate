
<div class="sidenav">
	<h1>DASHBOARD</h1>
	<a href="?option=0"><button id="account" class="selected">MY ACCOUNT</button></a>
	<a href="?option=1"><button id="donation" class="">DONATION</button></a>
	<a href="?option=2"><button id="crowdsource" class="">CROWDSOURCING</button></a>
	<?php if (isset($_SESSION['utype']) && $_SESSION['utype']=='admin'): ?>
		<a href="?option=3"><button id="users" class="">USERS</button></a>		
	<?php endif ?>
	
</div>