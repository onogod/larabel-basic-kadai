<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>投稿作成</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
    <table>
        <tr>
            <th>タイトル</th>
            <td>
                <input type="text" name="title" max="20">
            </td>
        </tr>
        <tr>
            <th>本文</th>
            <td>
                <textarea type="text" name="content" max="200"></textarea>
            </td>
        </tr>
        </form>
    </table>
    <input type="submit" value="登録">
</body>
</html>