<?php

class StopWatch
{
    private $startTime;
    private $endTime;

    public function setStartTime($time)
    {
        $this->startTime = $time;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setEndTime($time)
    {
        $this->endTime = $time;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function __constructor()
    {
        $this->startTime = date('Y-m-d H:i:s');

    }

    public function start()
    {
        echo $this->startTime = date('Y-m-d H:i:s') . "</br>";
        $this->startTime = microtime(true);
    }

    public function stop()
    {
        echo $this->endTime = date('Y-m-d H:i:s') . "</br>";
    }

    public function getElapsedTime()
    {
        return $this->endTime = (microtime(true) - $this->startTime);
    }
}

$stop1 = new StopWatch();
$stop1->start();
sleep(6);
$stop1->stop();
echo $stop1->getElapsedTime();