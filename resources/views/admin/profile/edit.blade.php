<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">



<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>

<form action="submit.php" method="post">
    <p>性別：
        <input type="radio" name="gender" value="男性"> 男性
        ／
        <input type="radio" name="gender" value="女性"> 女性
    </p>

    <input type="text" name="my_name" value="初期値">

    <input type="checkbox" name="agree" value="on"> 同意する

    <select name="pref">
            <option value="hokkaido">北海道</option>
            <option value="aomori">青森県</option>
        </select>

    <input type="submit" value="送信する">
</form>

</main>
</body>    
</html>