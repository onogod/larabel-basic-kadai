<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ログイン</h1>

    <form action="{{ route('sign-in.store')}}" method="POST">
        @csrf
        <table>
            <tr>
                <th>メールアドレス</th>
                <td>
                    <input type="text" name="email">
                </td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td>
                    <input type="text" name="password">
                </td>
            </tr>
        </table>
        <input type="submit" value="ログイン">
    </form>
</body>
</html>