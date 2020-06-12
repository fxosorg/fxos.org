<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml" lang="ja">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Firefox OS コミュニティ！ &rsaquo; ログイン</title>
	<link rel='stylesheet' id='wp-admin-css'  href='/wp-admin/css/wp-admin.min.css?ver=3.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='buttons-css'  href='/wp-includes/css/buttons.min.css?ver=3.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='colors-fresh-css'  href='/wp-admin/css/colors-fresh.min.css?ver=3.6.1' type='text/css' media='all' />
<meta name='robots' content='noindex,nofollow' />
	</head>
	<body class="login login-action-login wp-core-ui">
	<div id="login">
		<h1><a href="http://ja.wordpress.org/" title="Powered by WordPress">Firefox OS コミュニティ！</a></h1>
	
<form name="loginform" id="loginform" action="/wp-login.php" method="post">
	<p>
		<label for="user_login">ユーザー名<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">パスワード<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
	<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> ログイン状態を保存する</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="ログイン" />
		<input type="hidden" name="redirect_to" value="/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
		<a href="/wp-login.php?action=lostpassword" title="パスワード紛失取り扱い">パスワードをお忘れですか ?</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="/" title="迷子になってしまいましたか ?">&larr; Firefox OS コミュニティ！ へ戻る</a></p>
	
	</div>

	
		<div class="clear"></div>
	</body>
	</html>
	