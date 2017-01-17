						    <section class='block4'><h3></h3>
							<?php if ($_SESSION['wid']>=$_SESSION['ads10']){include('ads10.php');}?>
							<?php if ((is_home()) && ($_SESSION['wid']>=$_SESSION['tablet']-200)){include('columnistas.php');}?>
							<?php if ($_SESSION['wid']>=$_SESSION['ads11']){include('ads11.php');}?>
							<?php if ($_SESSION['wid']>=$_SESSION['ads12']){include('ads12.php');}?>
							<?php if ($_SESSION['wid']>=$_SESSION['tablet']-200){include('widget.php');}?>
						    </section>
