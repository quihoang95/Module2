<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Stopwatch
    {
        private $startTime;
        private $endTime;
        function __construct()
        {
            $this->startTime = hrtime(true);
        }
        function getStartTime()
        {
            return $this->startTime;
        }
        function getEndTime()
        {
            return $this->endTime;
        }
        function setStartTime()
        {
            $this->startTime = hrtime(true);
        }
        function setEndTime()
        {
            $this->endTime = hrtime(true);
        }
        function getElapsedTime()
        {
            return $this->getEndTime() - $this->getStartTime();
        }
    }
    $watch = new Stopwatch();
    echo $watch->getStartTime();
    echo "<br>";
    $watch->setEndTime();
    echo $watch->getEndTime();
    echo "<br>";
    echo $watch->getElapsedTime();
    $watch->getStartTime();
    for ($i = 0; $i < 1000; $i++) {
        echo $i . " ";
    }
    $watch->setEndTime();
    echo $watch->getElapsedTime();
    ?>
</body>
</html>