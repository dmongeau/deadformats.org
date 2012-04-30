<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>%{TITLE}</title>
    <meta name="description" content="%{DESCRIPTION}" />
    %{THUMBNAIL}
    %{HEAD}
    %{STYLESHEETS}
    %{SCRIPTS}
    <script type="text/javascript">
    	var FB_APPID = '%{FBAPPID}';
    <?php if(Gregory::get()->auth->isLogged()) { ?>
		var User = <?=json_encode(Gregory::get()->auth->getIdentity())?>
    <?php } else { ?>
		var User = null;
    <?php } ?>
	</script>
</head>
<body>
    <div id="page">
		<div id="header">
			<div id="logo"><a href="/">Dead Formats</a></div>
			<div id="menu">
				%{MENU}
			</div>
			<div id="login">
				%{LOGIN}
			</div>
		</div>
		<div id="header-bg"></div>
		<div id="left">
			<div class="bg"></div>
			<div class="nav hasScrollbar">
				%{NAV}
			</div>
		</div>
		<div id="content">
			<div id="inner">
				%{CONTENT}
                <div id="bottom" class="%{BOTTOMCLASS}">
                    <div class="inner">%{BOTTOM}</div>		
                </div>
			</div>
		</div>
    </div>
</body>
</html>
