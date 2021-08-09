<?php

class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct($startTime, $endTime)
    {
        $this->startTime = date('Y-m-d H:i:s');
    }

    public function start()
    {
        $this->startTime = date('Y-m-d H:i:s');
    }

    public function stop()
    {
        $this->endTime = date('y-m-d H:i:s');
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function getElapsedTime()
    {
        return $this->getEndTime() * $this->getStartTime();
    }

    public function setStartTime($time)
    {
        $this->startTime = $time;
    }

    public function setEndTime($time)
    {
        $this->endTime = $time;
    }
}

$stop1 = new StopWatch();
$stop1->start();

for ($i = 0; $i < 100000; $i++) {
}
$stop1->stop();
echo $stop1->getElapsedTime();


//$start = microtime(true);
//sleep(2);
//$end = (microtime(true) - $start);
//echo "Elapsed time: " . $end;
