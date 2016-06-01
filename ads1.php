			<aside class='ads1' id='ads1'>
			    <ul class='bjqs'>
				<?php if($_SESSION['wid']>$_SESSION['A']){?>
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
				<?php if($_SESSION['wid']>$_SESSION['A']){?>
				<li>
				    <aside class='A4'>
					<?php include('ads/A4.js');?>
				    </aside>
				    <aside class='A5'>
					<?php include('ads/A5.js');?>
				    </aside>
				</li>
				<?php }?>
			    </ul>
			</aside>
