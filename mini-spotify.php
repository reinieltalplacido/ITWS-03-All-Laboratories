<?php
abstract class Account
{
    protected $username;
    protected $plan;

    public function __construct($username, $plan)
    {
        $this->username = $username;
        $this->plan = $plan;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPlan()
    {
        return $this->plan;
    }

    abstract public function Plan();
}
    
class Premium extends Account
{
    public function Plan()
    {
        return "Premium Plan: Enjoy music without ads, with offline listening and full features.";
    }
}

class Free extends Account
{
    public function Plan()
    {
       return "Free Plan: Listen to music with ads and limited features.";
    }
}

interface Playable
{
    public function play();
    public function pause();
}

class Song implements Playable
{
    public function play()
    {
        return "Now Playing.";
    }

    public function pause()
    {
        return "Paused.";
    }
}

$user1 = new Premium("Reiniel Anjelo", "Premium");
$song1 = new Song();

echo "Username: " . $user1->getUsername() . "<br>Plan: " . $user1->getPlan() . "<br>" . $song1->play() . "<br>";

$user2 = new Free("Reiniel", "Free");
$song2 = new Song();

echo   " <br> Username: " . $user2->getUsername() . "<br>Plan: " . $user2->getPlan() . "<br>" . $song2->pause();