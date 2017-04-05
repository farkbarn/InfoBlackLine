			<aside class='ads1_' id='ads1'>
			    <ul class='bjqs'>
				<?php if($_SESSION['wid']>=$_SESSION['phone']){?>
				<li>
				    <aside class='A1'>
					<?php include('ads/A1.js');?>
				    </aside>
				</li>
				<?php }?>
				<li>
				<?php if($_SESSION['wid']>=$_SESSION['tablet']){?>
				    <aside class='A2'>
					<?php include('ads/A2.js');?>
				    </aside>
				<?php $_SESSION['full']=''; } else { $_SESSION['full']='full'; } ?>
				    <aside class='A3 <?php echo $_SESSION['full']; ?>'>
					<?php include('ads/A3.js');?>
				    </aside>
				</li>
				<li>
				    <aside class='A4 <?php echo $_SESSION['full']; ?>'>
					<?php include('ads/A4.js');?>
				    </aside>
				<?php if($_SESSION['wid']<$_SESSION['tablet']){?>
				</li>
				<li>
				<?php }?>
				    <aside class='A5 <?php echo $_SESSION['full']; ?>'>
					<?php include('ads/A5.js');?>
				    </aside>
				</li>
			    </ul>
			</aside>
