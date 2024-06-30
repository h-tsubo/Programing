<!DOCTYPE html>
<html>
<head>
    <title>フォームの例</title>
</head>
<body>

<form action="/form" method="POST">
    @csrf
    <div>
        <label for="name">名前:</label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="email">メールアドレス:</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <button type="submit">送信</button>
    </div>
</form>

</body>
</html>
