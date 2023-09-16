<?php
	$lUserIDString = "";
	if($_SESSION['loggedin'] == "True"){
	    $lUserIDString = "&uid=" . $lUserID;
	} //end if
?>

<div id="smoothmenu1" class="ddsmoothmenu">
	<ul>
		<li>
			<a href="">OWASP 2017</a>
			<ul>
				<li>
					<a href="">A1 - Injection (Other)</a>
					<ul>
						<li>
							<a href="">Application Log Injection</a>
							<ul>
								<li><a href="index.php?page=dns-lookup.php">DNS Lookup</a></li>
							</ul>
						</li>
				
					</ul>
				</li>
				<li>
					<a href="https://www.owasp.org/index.php/Top_Ten" target="_blank">
						OWASP Top Ten
					</a>
				</li>
				<li>
					<a href="https://addons.mozilla.org/en-US/firefox/collections/jdruin/pro-web-developer-qa-pack/" target="_blank">
					Web Penetration Testing Add-Ons
					</a>
				</li>
			</ul>
		</li>
	</ul>
</div>
