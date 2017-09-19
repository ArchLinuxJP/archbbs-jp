<?php global $arch_home, $arch_navbar, $arch_navbar_selected; ?>
<div id="archnavbar" class="anb-forum">
	<?php $today = getdate();if($today["mon"]==12&&$today["mday"]>14){ ?><div id="archnavbarlogo" class="xmas"><?php }else{ ?><div id="archnavbarlogo"><?php } ?><h1><a href="https://www.archlinux.jp/">Arch Linux</a></h1></div>
	<div id="archnavbaricon"><img src="https://www.archlinux.jp/images/menu.png"></div>
	<div id="archnavbarmenu">
		<ul id="archnavbarlist">
                <li id="anb-home"><a href="https://www.archlinux.jp/" title="Arch ニュース、パッケージ、プロジェクトなど">ホーム</a></li>
                <li id="anb-packages"><a href="https://www.archlinux.jp/packages/" title="Arch パッケージデータベース">パッケージ</a></li>
                <li id="anb-forums" class="anb-selected"><a href="https://bbs.archlinux.jp/" title="コミュニティフォーラム">フォーラム</a></li>
                <li id="anb-wiki"><a href="https://wiki.archlinux.jp/" title="コミュニティドキュメント">ArchWiki</a></li>
                <li id="anb-bugs"><a href="https://slack.archlinux.jp/" title="チャット">Slack</a></li>
                <li id="anb-aur"><a href="https://aur.archlinux.org/" title="Arch Linux User Repository">AUR</a></li>
                <li id="anb-download"><a href="https://www.archlinux.jp/download/" title="Arch Linux を入手">ダウンロード</a></li>
		</ul>
	</div>
</div>
