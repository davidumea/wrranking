<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add a new user</h1>
    <form method="POST" action="/">
        {{ csrf_field() }}
        <div>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div>
            <input type="text" name="experience" placeholder="Experience">
        </div>
        <div>
            <input type="text" name="kdRatio" placeholder="kdRatio">
        </div>
        <div>
            <input type="text" name="winRatio" placeholder="winRatio">
        </div>
        <div>
            <button type="submit">Add user</button>
        </div>
        @if($errors->any())
            <div class="notification danger">
                <ul>
                    @foreach ($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</body>
</html>