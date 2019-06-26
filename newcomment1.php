
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="card-body">
        <form action="sendcomment.php?thread=<?= $_GET['thread'] ?>" method="post">
            <input name="text" type="text" placeholder="Reactie...">
            <input name="submit" type="submit">
        </form>
    </div>
</div>
</body>
