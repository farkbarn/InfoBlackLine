			<aside class='ads1' id='ads1'>
			    <ul class='bjqs'>
				<?php if($_SESSION['wid']>$_SESSION['A1']){?>
				<li>
				    <aside class='A1'>
					<?php include('ads/A1.js');?>
				    </aside>
				</li>
				<?php }?>
				<li>
				    <aside class='A2'>
					<?php include('ads/A2.js');?>
				    </aside>
				    <aside class='A3'>
					<?php include('ads/A3.js');?>
				    </aside>
				</li>
				<?php if($_SESSION['wid']>$_SESSION['B']){?>
				<li>
				    <aside class='B1'>
					<?php include('ads/B1.js');?>
				    </aside>
				    <aside class='B2'>
					<?php include('ads/B2.js');?>
				    </aside>
				</li>
				<?php }?>
			    </ul>
			</aside>
