<section class='redpie'><h6></h6>
    <ul>
	<li class='tw' id=''><a rel='Twitter' href="javascript:void(0);" onclick='<?php echo 'window.open("https://twitter.com/intent/tweet?url='; echo bitly().'&text='.get_the_title().'&related=&via=elinformadorve&original_referer='.get_permalink(); ?>","ventanacompartir", "toolbar=0, status=0, width=650, height=450");'><span class='icon-twitter'></span></a></li>
	<li class='fb' id=''><a rel='Facebook' href="javascript:void(0);" onclick='<?php echo 'window.open("https://www.facebook.com/sharer/sharer.php?sdk=joey&u='.get_permalink().'&t='.get_the_title().'&display=popup&ref=web&src=button'; ?>","ventanacompartir", "toolbar=0, status=0, width=650, height=450");'><span class='icon-facebook2'></span></a></li>
	<li class='gp' id=''><a rel='Google+' href="javascript:void(0);" onclick='<?php echo 'window.open("https://plus.google.com/share?url='.get_permalink().'&t='.get_the_title().'&gpsrc=gplp0&pli=1'; ?>","ventanacompartir", "toolbar=0, status=0, width=650, height=450");'><span class='icon-google-plus3'></span></a></li>
	<li class='tg' id=''><a rel='Telegram' href="javascript:void(0);" onclick='<?php echo 'window.open("https://telegram.me/share/url?url='.get_permalink().'&text='.get_the_title(); ?>","ventanacompartir", "toolbar=0, status=0, width=650, height=450");'><span class='icon-telegram'></span></a></li>
    </ul>
</section>
