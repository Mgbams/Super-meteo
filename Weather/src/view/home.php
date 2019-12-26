<?php include_once('header.php'); ?>

<div class="page_container">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="src/public/images/wp3.jpeg" class="d-block w-100" alt="image jpeg des orages">
                <div class="carousel-caption d-none d-md-block">
                    <h5>CONDITIONS MÉTÉO</h5>
                    <p class="paragraph_green">Restez à jour sur les situations météorologiques de votre pays.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="src/public/images/wp5.jpeg" class="d-block w-100" alt="image jpeg de neige">
                <div class="carousel-caption d-none d-md-block">
                    <h5>VIGILANCE MÉTÉOROLOGIQUE</h5>
                    <p class="paragraph_green">Tout ce dont vous avez besoin pour suivre la saison des ouragans.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="src/public/images/wp4.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>COMMENT L'HIVER CHANGE</h5>
                    <p class="paragraph_green">Comment la disparition de la glace de mer influencent-ils l'hiver en Europe?</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <form class="form_fixed" method="GET">
        <h1 class="page_title">Prévisions météorologiques</h1>
        <div class="form_container">
            <div class="form-group ville">
                <label class="villetext" for="city">Ville:</label>
                <input type="city" class="form-control" id="city" name="city" placeholder="Entrez la ville pour rechercher">
            </div>

            <div class="search"><input type="submit" class="btn btn-primary" value="Searcher"></div>
        </div>
    </form>

    <?php if (isset($_GET["city"])) { ?>
        <div class="triangle">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="color: yellow">MÉTÉO EN VILLE</h5>
                    <p class="card-text"  style="font-size: 1.5rem;">Ville: <?php echo $data["name"]; ?></p>
                    <p  style="font-size: 1.5rem;"><?php echo date("D j M  G:i A"); ?></p>
                </div>
                <div><?php echo $image; ?></div>
                <div class="card-body">
                    <div>
                        <p class="actuel">Actuellement</p>
                    </div>
                    <div class="weather_container d-flex justify-content-sm-between">
                        <div class="wrapper1"  style="font-size: 1.5rem;">
                            <div class="d-flex justify-content-between">
                                <div class="mr-5">
                                    <p>Pays:</p>
                                </div>
                                <div>
                                    <p><?php echo $data['sys']['country']; ?></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p>Description:</p>
                                </div>
                                <div>
                                    <p class="ml-5"><?php echo $data["weather"][0]["description"]; ?></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p>Pressure:</p>
                                </div>
                                <div>
                                    <p><?php echo $data["main"]["pressure"] . "hpa"; ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="wrapper2"  style="font-size: 1.5rem;">
                            <div class="d-flex justify-content-between">
                                <div class="mr-5">
                                    <p>Max temp:</p>
                                </div>
                                <div>
                                    <p><?php echo $data["main"]["temp_max"] . "°C"; ?></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p>Min temp:</p>
                                </div>
                                <div>
                                    <p><?php echo $data["main"]["temp_min"] . "°C"; ?></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <p>Humidity:</p>
                                </div>
                                <div>
                                    <p><?php echo $data["main"]["humidity"]; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>


</div>

<!------------------------------ Page html par défaut de ma ville actuelle ----------------- -->

<?php if (!isset($_GET["city"])) { ?>

    <div class="card_default" style="width: 100%">
        <img src="src/public/images/default_img.jpg" class="card-img-top default_output_img" alt="sunny weather image">
        <div class="flex_location">
            <div class="rond_location_img"><img src="src/public/images/location.jpg" alt=""></div>
            <div class="blanc"><?php echo $defaultData["name"] . "," . $defaultData['sys']['country']; ?></div>
            <div class="blanc"><?php echo date("G:i A"); ?></div>
        </div>
        <div class="min_max_temp">
            <div>
                <p class="max_temp"><?php echo $defaultData["main"]["temp_max"]; ?></p>
                <p class="min_temp"><?php echo $defaultData["main"]["temp_min"]; ?></p>
            </div>
            <div>
                <img class="temperature_img" src="src/public/images/temperature2.jpg" alt="">
            </div>
        </div>
        <div class="card_body_default">
            <div class="card_body_default1">
                <div class="default1_values">
                    <div><span class="temps"><?php echo $defaultData["main"]["temp"]; ?></span><span class="degree">°</span></div>
                    <div class="time"><?php echo date("D j M"); ?></div>
                </div>
                <div>
                    <div><?php echo $image_default; ?></div>
                    <div class="description"><?php echo $defaultData["weather"][0]["description"]; ?></div>
                </div>
            </div>

            <div class="card_body_default2">
                <div class="humidity">
                    <p>Humidité</p>
                    <p><img class="weather_png_aside" src="src/public/images/humidity.jpg" alt="humidity jpg image"></p>
                    <p><?php echo $defaultData["main"]["humidity"]; ?></p>
                </div>

                <div class="pressure">
                    <p>Pression</p>
                    <p><img class="weather_png_aside" src="src/public/images/pressure.jpg" alt="pressure jpg image"></p>
                    <p><?php echo  $defaultData["main"]["pressure"] . "hpa"; ?></p>
                </div>
            </div>
        </div>
    </div>
<?php } ?>


<?php include_once("footer.php"); ?>