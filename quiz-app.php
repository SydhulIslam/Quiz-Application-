<?php

// Function for Quiz

echo "Function for Quiz \n";



$questions = [
    ['question' => 'what is 2 + 2?', 'correct' => '4'],
    ['question' => 'what is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who write "Hamlet" ?', 'correct' => 'Shakespeare'],
];


$answers = [];
foreach ($questions as $index => $question){
    echo ($index+1). ". ". $question['question']. "\n";
    $answers[] = trim(readline("Your Answer "));
}


/// Evaluate  Function 

function evaluateQuiz(array $questions, array $answers): int{
    $score = 0;
    foreach ($questions as $index => $question){
        if($answers[$index] === $question ['correct']){
            $score++;
        }
    }
    return $score;
}

$score = evaluateQuiz($questions, $answers);

echo "Your Scored $score Out Of " . count($questions). "\n";
if($score === count ($questions)){
    echo "Excellent Score! \n";
}elseif ($score > 1){
    echo "Good Score! \n";
}else {
    echo "Better Luck Next Time";
}