<?php
    $results = [
        [
            'home-team' => 'Olipia Milano',
            'away-team' => 'Cantù',
            'score-home' => 55,
            'score-away' => 60,
        ],
        [
            'home-team' => 'Torino',
            'away-team' => 'Sassari',
            'score-home' => 69,
            'score-away' => 63,
        ],
        [
            'home-team' => 'Reggio Emilia',
            'away-team' => 'Roma',
            'score-home' => 58,
            'score-away' => 50,
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <?php for($i = 0; $i < count($results); $i++) { ?>
            <?php $this_result = $results[$i]; ?>
            <?php //var_dump($this_result); ?>

            <li>
                <?php echo $this_result['home-team'] ?> - 
                <?php echo $this_result['away-team'] ?> | 
                <?php echo $this_result['score-home'] ?> - 
                <?php echo $this_result['score-away'] ?>
            </li>
        <?php } ?>     
    </ul>
    
</body>
</html>