
<!DOCTYPE html>
<html lang="ja">
  <head>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>アルバイト応募フォーム</title>
  </head>
  <body>
<h1>アルバイト応募フォーム</h1>
<form action="#" method="post">
  <table border="1">
    <tr>
      <th>ふりがな*</th>
      <td><input type="text" name="kana" required></td>
    </tr>
    <tr>
      <th>生年月日*</th>
      <td><input type="dete" name="date"required></td>
    </tr>
    <tr>
      <th>性別</th>
      <td>
        <input type="radio" name="gender" value="mele" checked>男性
        <input type="radio" name="gender" value="femele" >女性
      </td>
    </tr>
    <tr>
      <th>電話番号</th>
      <td><input type="tel" name="tel" required></td>
    </tr>
    <tr>
      <th>メールアドレス</th>
      <td><input type="email" name="email" required></td>
    </tr>
    <tr>
      <th>現在の職業 *</th>
      <td>
        <select name="prefevcture">
          <option value="" selected>働てください</option>
          <option value="tohoku">無職</option>
          <option value="chubu">在宅アニメ管理者</option>
          <option value="shikoku">家事手伝い</option>
     
        </select>
      </td>
    </tr>
    <tr>
      <th>お問い合わせ内容</th>
      <td>
        <textarea name="contents"></textarea>
      </td>
    </tr>

  </table>
  <input type="submit"value="転職活動">
  </form>

<p>*の項目は入力必須になります。</p>

</body>
</html>
