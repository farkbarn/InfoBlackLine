						<section class='bmasleido'>
						    <?php if ($_SESSION['wid']>=$_SESSION['ads8']){include('ads8.php');}?>
						    <?php if ($_SESSION['wid']>=$_SESSION['ads9']){include('ads9.php');}?>
						    <section class='tagsec'>
							<section class='recnar'></section>
							<section class='recneg'></section>
							<p class="txteti">Lo M&aacute;s Le&iacute;do</p>
						    </section>
						    <?php if (!dynamic_sidebar('Mas_Leidos'));?>
						</section>
