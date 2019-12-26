<?php


class HomeController
{
    private $titrepage;
    private $pays;
    private $conn;

    public function __construct()
    {
        //$this->conn = new Model;
    }

    public function manage()
    {
        //Conditions météorologiques de la ville recherchez de la barre de recherce

        if (isset($_GET['city'])) {
            $city = $_GET['city'];
            $search = str_replace(' ', "%20", $city);
            $data = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=$search&units=metric&lang=fr&appid=d16d7dcb95c567985adc924667a7e2cf");
            $data = json_decode($data, true);

            if ($data["weather"][0]["main"] == "Clouds" or $data["weather"][0]["main"] == "clouds") {
                $image = '<img class="card-img-top weather_png" src="src/public/images/cloudy.jpg" alt="image des temps nuageux">';
            } else if ($data["weather"][0]["main"] == "Rain") {
                $image = '<img class="card-img-top weather_png" src="src/public/images/rainy.jpg" alt="image des temps pluvieux">';
            } else if ($data["weather"][0]["main"] == "Haze") {
                $image = '<img class="card-img-top weather_png" src="src/public/images/haze2.jpg" alt="image des temps brumeux">';
            } else {
                $image = '<img class="card-img-top weather_png" src="src/public/images/clear.jpg" alt="image par default">';
            }

           // $this->pays = $this->conn->selectcountry($data['sys']['country']);
        }

        //Conditions météorologiques de la ville actuelle

        $query = file_get_contents('http://ip-api.com/json/?fields=city&lang=fr'); //connection au serveur de ip-api.com et recuperation des données
        $queryCity = json_decode($query, true);
        $queryCity = implode(' ', $queryCity);
        $defaultSearch = str_replace(' ', "%20", $queryCity); //Remplacement des espaces par %20 s'il existe des espaces
        $defaultData = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=$defaultSearch&units=metric&lang=fr&appid=d16d7dcb95c567985adc924667a7e2cf");
        $defaultData = json_decode($defaultData, true);
       
        if ($defaultData["weather"][0]["main"] == "Clouds" or $defaultData["weather"][0]["main"] == "clouds") {
            $image_default = '<img class="card-img-top weather_png" src="src/public/images/cloudy.jpg" alt="image des temps nuageux">';
        } else if ($defaultData["weather"][0]["main"] == "Rain") {
            $image_default = '<img class="card-img-top weather_png" src="src/public/images/rainy.jpg" alt="image des temps pluvieux">';
        } else if ($defaultData["weather"][0]["main"] == "Haze") {
            $image_default = '<img class="card-img-top weather_png" src="src/public/images/haze2.jpg" alt="image des temps brumeux">';
        } else {
            $image_default = '<img class="card-img-top weather_png" src="src/public/images/clear.jpg" alt="image par default">';
        }


        /*$this->pays = $this->conn->selectcountry//($defaultData['sys']['country']);

         $this->pays['name_fr']; */


        include(__DIR__ . "./../view/home.php");
    }
}
