<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
</head>
<body>
<div class="section"><div class="container">
        <form action="process.php" method="post">

            <div class="field">
                <label class="label">Dollar</label>
                <div class="control">
                    <input name="dollar" class="input" type="text" placeholder="">
                </div>
            </div>

            <div class="field">
                <label class="label">Euro</label>
                <div class="control has-icons-left has-icons-right">
                    <input name="euro" class="input is-success" type="text" placeholder="" value="">
                    <span class="icon is-small is-left">
      <i class="fas fa-user"></i>
    </span>
                    <span class="icon is-small is-right">
      <i class="fas fa-check"></i>
    </span>
                </div>
                <p class="help is-success"></p>
            </div>


            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">save</button>
                </div>

            </div>
        </form>
      
    </div></div>
</body>
</html>