<?php

$isLoggedIn = True;
$name = Null;




// Comparison Operators
// == equal to 
// === identical to
// != not equal to
// <> not equal to
// !== not identical to
// < less than
// > greater than
// <= less than or equal to
// >= greater than or equal to

// Logical Operators
// &&  both conditions are  true
// and both conditions are  true
// or if one is true 
// || if one is true
// x or only one is true 
// ! not operator










/*

$age = 20;

//if else conditionals

if ($age > 21) {
    echo "You can Vote and Drink";
} else if ($age >= 18) {
    echo "You can Vote";
} else {
    echo "You are not allowed to Vote";
}




if ($age > 21) {
    echo "You can Vote and Drink";
} else {
    if ($age >= 18) {
        echo "You cannot drink";
    } else {
        echo "You cannot Vote";
    }
}

*/

//isset() function is used to check if a variable is set or not

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP</h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->


            <?php if ($isLoggedIn): ?>
                <?php if (isset($name)) : ?>
                    Welcome, <?= $name ?>
                <?php else : ?>
                    Welcome Guest
                <?php endif; ?>
            <?php else : ?>
                <h1 class="text-3xl">Please Login</h1>

            <?php endif; ?>





            <?php if ($isLoggedIn && $name): ?>

                Welcome, <?= $name ?>
            <?php elseif ($isLoggedIn) : ?>
                Welcome Guest
            <?php else : ?>
                <h1 class="text-3xl">Please Login</h1>

            <?php endif; ?>
        </div>
    </div>
</body>

</html>