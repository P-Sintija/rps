<?php


require_once '../vendor/autoload.php';


use Rps\RpsGame;


$rps = new RpsGame();


$pcChoice = $rps->getPossiblePatterns()->getPatterns();
$opponent = $pcChoice[rand(0,count($pcChoice)-1)];

function gameStatus(RpsGame $game): string
{
    if($game->tie()) {
        return 'It`s a TIE!!!';
    } else {
        return $game->determineWinner() . ' won!!!';
    }
}



if($_SERVER['REQUEST_METHOD'] === 'GET') {
    require_once 'view.php';


}
if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $chosenPattern = substr(key($_POST), 0, strpos(key($_POST), '_'));

        foreach($rps->getPossiblePatterns()->getPatterns() as $pattern) {
            if($pattern->getName() === $chosenPattern){
                $rps->setCombination($pattern, $opponent);
            }
        }

    $gameStatus = gameStatus($rps);


    require_once 'otherview.php';

}









