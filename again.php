<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #content {
        padding: 20px;
        margin: 20px;
        border: 1px solid #ccc;
        display: inline-block;
    }
    </style>
</head>

<body>
    <div id="content">
        This is some content in a div.
    </div>
    <button onclick="changeStyle()">Change Style</button>
    <button onclick="save()">Save</button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="again.js?<?= time() ?>"></script>
</body>

</html>