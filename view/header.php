<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "ApiDog"?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Orbitron&family=Pacifico&family=Rubik+Bubbles&family=Sevillana&display=swap" rel="stylesheet">
    <link href="../src/css/index.css" rel="stylesheet"/>
</head>
<body>
    <header class="container">
        <nav class="p-3 navbar navbar-light">
            <a href="/" class="navbar-brand">ApiDog</a>
            <form action="/search" method="GET" class="d-flex gap-3 justify-content-around">
                <select name="breed" required class="breed form-select">
                    
                    <option value="">Select a breed</option>    
                    <?php
                        foreach($content as $race =>$key):
                    ?>
                        <option value="<?=$race?>" <?= isset($_GET['breed']) && $_GET['breed'] === $race ? 'selected':'' ; ?>><?=ucfirst($race)?></option>    
                    <?php
                        endforeach;
                    ?>
                </select>
                <input class="form-control campo" type="text" name="sub-breed" list="datalistSubbreeds" placeholder="<?= isset($_GET['sub-breed'])?$_GET['sub-breed']:'Select a Sub-breed'?>"/>
                <datalist id="datalistSubbreeds" class="sugestoes"></datalist>
                <button class="btn btn-primary">Search</button>
            </form>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Config">
                Config
            </button>

            <div class="modal fade" id="Config" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Configurations</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form-options">
                        <div class="mb-3">
                            <select name="color" id="color" class="form-select">
                                <option value="#0000ff">Color 1</option>
                                <option value="#660033">Color 2</option>
                                <option value="#666699">Color 3</option>
                                <option value="#000">Color 4</option>
                                <option value="#005500">Color 5</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select name="font" id="font" class="form-select">
                                <option value="Josefin Sans">Josefin Sans</option>
                                <option value="Orbitron">Orbitron</option>
                                <option value="Pacifico">Pacifico</option>
                                <option value="Rubik Bubbles">Rubik Bubbles</option>
                                <option value="Sevillana">Sevillana</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" form="form-options" value="Save"/>
                </div>
                </div>
            </div>
            </div>
        </nav>
    </header>
    <main class="container">