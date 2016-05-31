						    <section class='block4'>
							<?php if ($_COOKIE['wscr']>=$_SESSION['ads10']){include('ads10.php');}?>
							<?php if ($_COOKIE['wscr']>=$_SESSION['tablet']-200){include('columnistas.php');}?>
							<?php if ($_COOKIE['wscr']>=$_SESSION['ads11']){include('ads11.php');}?>
							<?php if ($_COOKIE['wscr']>=$_SESSION['ads12']){include('ads12.php');}?>
							<?php if ($_COOKIE['wscr']>=$_SESSION['tablet']-200){include('widget.php');}?>
						    </section>
