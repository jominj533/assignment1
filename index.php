<?php
$title='Hydrabadi Chicken Biriyani';
$image_link = 'https://www.cubesnjuliennes.com/wp-content/uploads/2020/01/Chicken-Biryani.jpg';
$About = ['Hydrabadi Chicken Biriyani is a food that is trending in Southern India.
Its a food that is Northern Side of india that consist of Rice and Curry.
It is such a delicious dish that is mostly known through out India.
Please try making it!!!!'];

$ingredient  = ["Basmathi Rice(Using the Highest quality)",
"Chicken with bone(Mostly Thigh Chicken)",
"Yogurt(I prefer Coconut yogurt)",
"Spices(Lot of spices are not needed,Instead take a Biriyani Masala)",
"Herbs(Herbs like Frozen cilantro and dried mint are prefered.)","Ginger and Garlic(The Fresh the better)","Saffron(Should be of high quality)","Onions(Slicing them thinner makes it more tastier)","Ghee(A drop of it makes the Biriyani Tastier)"];
$steps = [
    "Slice onions very finely and fry until crisp and light golden brown.",
    "Combine chicken with all marinade ingredients, ⅓ fried onions and ground biryani spice blend.",
    "Rinse basmati rice until clear.
    Soak ⅓ cup rice in water. Cook remaining rice in rice cooker.
    For alternative traditional cooking method check our lamb biryani recipe.",
    "Transfer chicken with marinade to a cooking pot. 
    Top with chopped cilantro, mint, half lemon juice, some olive oil and most of the remaining fried onions",
    "Drain and spread it over the chicken.",
    "Layer all cooked rice.
    Top with remaining fried onions, lemon juice,
    saffron water and ghee over the rice.",
    "Cover with parchment paper,followed by aluminum foil and fit the lid tight over it.
    Bake in oven for one hour,until steam builds up well.",
    "Alternatively,heat biryani at medium high for 10 to 15 minutes and then simmer at low for one hour until steam builds up well.",
    "Cool Biryani for five minutes.
    Gently mix rice and chicken and serve."
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title><?php echo $title ?></title>
</head>
<body>
    <header>
    <div class="RECIPE">
    <h1><?php echo $title ?></h1></div>
    </header>
        <?php foreach($About as $Abouts): ?>
            <?php echo $Abouts ?>
            <?php endforeach ?>
    <h2>Ingredients to make Biriyani</h2>
    <ul>
        <?php foreach($ingredient as $ingredients): ?> 
            <li><?php echo $ingredients ?></li>
            <?php endforeach ?>
    </ul>
    <h2>Steps</h2>
    <ol>
        <?php foreach($steps as $step): ?>
        <li><?php echo $step ?></li>
        <?php endforeach ?>
    </ol>
    <img src="https://www.cubesnjuliennes.com/wp-content/uploads/2020/01/Chicken-Biryani.jpg" alt="Biriyani" width="300" height="400"
    style="position:absolute; Top:300px; right:50px;">
</body>
</html>