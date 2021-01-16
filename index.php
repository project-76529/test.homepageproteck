<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>
<body>
<h2>問い合わせ内容</h2>
<form action="mailto.php" method="post">
<table border="1">
<tr>
<td>名前</td>
<td><?php echo $_POST["your-name"]; ?></td>
</tr>
<tr>
<td>メールアドレス</td>
<td><?php echo $_POST["your-mail"]; ?></td>
</tr>
<tr>
<td>問い合わせ内容</td>
<td><?php echo $_POST["your-message"]; ?></td>
</tr>
</table>
<input type="submit" value="送信" />
</form>
</body>
</html>

また、完了画面のソースは下記の通りです。

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>
<body>
<h2>メール送信完了</h2>
<p class="message">
お問い合わせありがとうございます。1営業日以内にご返信させていただきます。<br>
自動返信メールをお送りしておりますのでご確認ください。<br>
1時間たっても届かない場合はお手数ですがこちらからご連絡ください。
</p>
</body>
</html>