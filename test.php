<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XSS確認</title>
</head>
<body>
    <form action="" method="post" accept-charset="utf-8">
    <label class="label" for="name">コメント：</label>
        <input type="text" size="70" name="xss_text" value="">
        <p><input type="submit" value="送信"></p>
    </form>
    コメント一覧: <?php echo $_POST['xss_text']; ?>
</body>
</html>