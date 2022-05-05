<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/setting" method="post">
        @csrf
        <label for="appname">appname</label>
        <input type="text" name="appname" id="appname">
        
        <label for="type">type</label>
        <select name="type">
            <option value="exe">exe</option>
            <option value="msi">msi</option>
        </select>

        <label for="url">url</label>
        <input type="text" name="url">

        <label for="url64">url64</label>
        <input type="text" name="url64">

        <label for="version">version</label>
        <input type="text" name="version" id="version">

        <button type="submit">submit</button>
    </form>
</body>
</html>