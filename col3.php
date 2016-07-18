						    <section class='block4'>
							<?php if ($_SESSION['wid']>=$_SESSION['adI']){include('adI.php');}?>
							<?php if ((is_home()) && ($_SESSION['wid']>=$_SESSION['tablet']-200)){include('columnistas.php');}?>
							<?php if ($_SESSION['wid']>=$_SESSION['adJ']){include('adJ.php');}?>
							<?php if ($_SESSION['wid']>=$_SESSION['adK']){include('adK.php');}?>
							<?php if ($_SESSION['wid']>=$_SESSION['tablet']-200){include('widget.php');}?>
						    </section>
