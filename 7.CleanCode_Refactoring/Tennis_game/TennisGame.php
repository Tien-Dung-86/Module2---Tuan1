<?php

class TennisGame
{
    public string $score = '';

    public function getScore($firstPlayerName, $secondPlayerName, $firstPlayerScore, $secondPlayerScore)
    {
        $tempScore = 0;

        if ($firstPlayerScore == $secondPlayerScore) {
            switch ($firstPlayerScore) {
                case 0:
                    $this->score = "Love-All";
                    break;
                case 1:
                    $this->score = "Fifteen-All";
                    break;
                case 2:
                    $this->score = "Thirty-All";
                    break;
                case 3:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;

            }
        } else if ($firstPlayerScore >= 4 || $secondPlayerScore >= 4) {
            $minusResult = $firstPlayerScore - $secondPlayerScore;
            if ($minusResult == 1) $this->score = "Advantage player1";
            else if ($minusResult == -1) $this->score = "Advantage player2";
            else if ($minusResult >= 2) $this->score = "Win for player1";
            else $this->score = "Win for player2";
        } else {
            for ($i = 1; $i < 3; $i++) {
                if ($i == 1) $tempScore = $firstPlayerScore;
                else {
                    $this->score = $this->score . "-";
                    $tempScore = $secondPlayerScore;
                }
                switch ($tempScore) {
                    case 0:
                        $this->score = $this->score . "Love";
                        break;
                    case 1:
                        $this->score = $this->score . "Fifteen";
                        break;
                    case 2:
                        $this->score = $this->score . "Thirty";
                        break;
                    case 3:
                        $this->score = $this->score . "Forty";
                        break;
                }
            }
        }
    }

    public function __toString(): string
    {
        return $this->score;
    }
}