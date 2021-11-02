<?php
include('data.php');
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="tagline.css">
</head>

<body>
<div class="container">
    <header class="row">
        <div class="col-sm-3 logo"><img src="account.png" alt="this is logo"></div>
        <div class="col-sm-9 tagline">Слоган сата - прати и не тупи!</div>
    </header>

    <div class="row">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle-navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="">Home</a></li>
                        <li class="active"><a href="teams.html">Teams</a></li>
                        <li><a href="contacts.html">Contacts</a></li>11111
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-10">
            <div id="locations" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#locations" data-slide-to="0" class="active"></li>
                    <li data-target="#locations" data-slide-to="1"></li>
                    <li data-target="#locations" data-slide-to="2"></li>
                    <li data-target="#locations" data-slide-to="3"></li>
                    <li data-target="#locations" data-slide-to="4"></li>
                    <li data-target="#locations" data-slide-to="5"></li>
                    <li data-target="#locations" data-slide-to="6"></li>
                </ol>
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="zenit.png" alt="">
                        <div class="carousel-caption">
                            <h3>zenit indfioo</h3>
                        </div>
                    </div>

                    <div class="item">
                        <img src="seds.png" alt="">
                        <div class="carousel-caption">
                            <h3>zenit indfioo</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="med.png" alt="">
                        <div class="carousel-caption">
                            <h3>zenit indfioo</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="led.png" alt="">
                        <div class="carousel-caption">
                            <h3>zenit indfioo</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="black.png" alt="">
                    </div>
                    <div class="item">
                        <img src="hard.png" alt="">
                        <div class="carousel-caption">
                            <h3>zenit indfioo</h3>
                        </div>
                    </div>
                    <div class="item ">
                        <img src="anubis.png" alt="">
                        <div class="carousel-caption">
                            <h3>zenit indfioo</h3>
                        </div>
                    </div>

                </div>
                <a class="left carousel-control" data-slide="prev" href="#locations">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" data-slide="next" href="#locations">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <h2>заголоывок1</h2>
            <blockquote>
                <p>123124124144</p>
            </blockquote>
            <blockquote>
                <p>123124124144</p>
            </blockquote>
        </div>
        <div class="col-md-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>1231231</h3>
                </div>
                <div class="panel-body">
                    <p>Some info about site</p>
                    <p><a href="" class="butn btn-primary">Read more</a></p>
                </div>
            </div>
        </div>
    </div>
    <footer class="row siteinfo">
        <a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at commodi consequuntur doloremque, fuga ipsum molestiae natus placeat quia, quos temporibus tenetur unde velit! Aperiam asperiores consequatur enim esse laborum?
        </a>
    </footer>
</div>

<!--    <div id="" class="modal fade" tabindex="-1">-->
<!--        <div class="modal-dialog">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal">X</button>-->
<!--                <h3>Зенит</h3>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <p><img class="img-responsive pull-left" src="zenit.png" alt="">Lorem ipsum dolor sit amet</p>-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <button class="btn btn-primary" data-dismiss="modal">Close</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
    $('.carousel').carousel({
       interval:2000
    });
</script>
</body>
</html>