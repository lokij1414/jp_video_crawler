<?php
$html = <<<HTML
<ul class="baseinfo">
		<li class="link"><a charset="411-2-11" href="http://v.youku.com/v_show/id_XMTA1OTY2Mzc2.html" target="_blank" title="��ɽ"></a></li>
<li class="thumb"><img src="http://res.mfs.ykimg.com/050E000050077C29979273016201E510" alt="��ɽ"></li>
			<li class="status"><span class="bg"></span></li>
		<li class="ishd"><span class="ico__HD"></span></li>
		
		<li class="row1 rate">
	<span class="ratingstar"><label>����:</label><span class="rating" title="��4,506�˶���
��971�˲ȹ�"><em class="ico__ratefull"></em><em class="ico__ratefull"></em><em class="ico__ratefull"></em><em class="ico__ratenull"></em><em class="ico__ratenull"></em><em class="num">6.2</em></span></span>

<span class="rating_dp"><label>����:</label>����</span>
</li>	
			
		<li class="row2">
		<span class="pub"><label>����:</label>2007-01-01</span>
		</li>
	
			
		<li class="row2">
			<span class="area">
<label>����:</label>
	<a charset="411-2-1" href="http://www.youku.com/v_olist/c_97_a_��½.html" target="_blank">��½</a></span>	
			<span class="type">
	<label>����:</label>
						<a target="_blank" charset="411-2-8" href="http://www.youku.com/v_olist/c_97_g_����.html">����</a> / 					<a target="_blank" charset="411-2-8" href="http://www.youku.com/v_olist/c_97_g_��ʷ.html">��ʷ</a>			</span>	
		</li>
		<li class="row1">
			<span class="actor">
	<label>����:</label>
						<a href="http://www.youku.com/star_page/uid_UNjc4MDQ=.html" charset="411-2-10" target="_blank">�����</a> / 					<a href="http://www.youku.com/star_page/uid_UNjY0MDg=.html" charset="411-2-10" target="_blank">����</a> / 					<a href="http://www.youku.com/star_page/uid_UNjYwNzY=.html" charset="411-2-10" target="_blank">����</a> / 					<a href="http://www.youku.com/star_page/uid_UMzEzODM3Mg==.html" charset="411-2-10" target="_blank">���</a> / 					<a href="http://www.youku.com/star_page/uid_UMzIxOTk1Mg==.html" charset="411-2-10" target="_blank">����Ϫ</a>			</span>	
		</li>
	</ul>
HTML;
$ary = array();
preg_match('/<ul class="baseinfo">\s*<li class="link">.*<\/a><\/li>\s*<li class="thumb">\s*<img.*src=[\'"]{1}(.*)[\'"]{1}[^>]*><\/li>.*<li class="row1 rate">.*<\/li>(.*)<\/ul>/siU', $html, $ary);
echo "<xmp>";var_dump($ary);echo "</xmp>";
?>