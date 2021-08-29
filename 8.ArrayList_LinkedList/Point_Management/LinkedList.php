<?php
include_once "File.php";

class LinkedPointList
{
    private $firstInfo;
    private $lastInfo;
    private $count;

    public function __construct()
    {
        $this->firstInfo = null;
        $this->lastInfo = null;
        $this->count = 0;
    }

    public function insertFirst($name, $score)
    {
        $file = new File($name, $score);
        $file->next = $this->firstInfo;
        $this->firstInfo = $file;
        if (is_null($this->lastInfo)) {
            $this->lastInfo = $file;
        }
        $this->count++;
    }

    public function insertLast($name, $score)
    {
        if (!is_null($this->firstInfo)) {
            $file = new File($name, $score);
            $this->lastInfo->next = $file;
            $file->next = null;
            $this->lastInfo = $file;
            $this->count++;

        } else {
            $this->insertFirst($name, $score);
        }
    }

    public function showList()
    {
        $listInfo = [];
        $current = $this->firstInfo;
        while(!is_null($current)){
            array_push($listInfo, $current->readInfo());
            $current = $current->next;
        }
        return $listInfo;
    }

    public function totalStudentsFail($score)
    {
        if ($score <= 5) {
            $this->count++;
        }
    }

    public function listStudentMaxScore($name, $score)
    {
        if ($score == 10) {
            echo "Student name: " . $name . "-" . $score . "<br>";
        }
    }

    public function findByName($name = null)
    {
        $currentFile = $this->firstInfo;
        while ($currentFile !== null) {
            if ($currentFile->name === $name) {
                return $currentFile;
            }
            $currentFile = $currentFile->next;
        }
        return false;
    }
}