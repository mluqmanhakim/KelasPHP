<!DOCTYPE html>
<html>
<body>

<?php
class Mobil {
    function Car() {
        $this->model = "VW";
    }
}
// create an object
$herbie = new Car;

// show object properties
echo $herbie->model;
?>

</body>
</html>