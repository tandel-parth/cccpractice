<?php
echo "<h2> Switch Case </h2>";

// Switch Case
$fav_food = "Chicken Biryani";

switch ($fav_food) {
    case "Pulav":
        echo "Pulav is not my favorite food.";
        break;
    case "Paneer Handi":
        echo "Paneer Handi is not my favorite food.";
        break;
    case "Fish":
        echo "Fish is not my favorite food.";
        break;
    case "Chicken Biryani":
        echo "Chicken Biryani is my favorite food.";
        break;
    default:
        echo "My favorite food is not in the menu.";
}
