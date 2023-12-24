<?php


    $str = "<h1>The Boy is running</h1>";
    echo $str;
    echo filter_var($str, FILTER_SANITIZE_STRING);

    // foreach (filter_list() as $id =>$filter) {
    //     echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
    // }

    // Php dates
    /*
        d - Day of the month 01 to 31.
        m - month of the year 01 - 12
        y - year. 4 numbers. (Capital letter indicates full year)
        l - Day of the week. Mon to Fri.
    */
    // echo date("l") . " " . date("d") . "-" . date("m") . "-" . date("y");
    echo "<br />";
    echo date("l d-m-y");
    echo "<br />";

    // Times
    /* 
        H - 00 - 23 Hours
        h - 0 - 12 hours
        i - minutes
        s - seconds
        a - am or pm
    */

    // Creating date
    $date = mktime(13, 30, 59, 11, 06, 2023);
    echo $date;

    // Require vs Include
    /* 
    
        Require stops scripts from 
        running if not found. 

        Include continues running 
        even when file isn't found.
    
    */

    // File open or file create
    // fopen("filename", "action");
    // Actions: 
    /* 
        r : read;
    */

    // File close
    // fclose();
?>

<footer>
    Copyright &copy 2020-<?= date("Y") ?>. All rights reserved!
</footer>

<!-- 2353. Design a Food Rating System
Medium
1.2K
239
Companies
Design a food rating system that can do the following:

Modify the rating of a food item listed in the system.
Return the highest-rated food item for a type of cuisine in the system.
Implement the FoodRatings class:

FoodRatings(String[] foods, String[] cuisines, int[] ratings) Initializes the system. The food items are described by foods, cuisines and ratings, all of which have a length of n.
foods[i] is the name of the ith food,
cuisines[i] is the type of cuisine of the ith food, and
ratings[i] is the initial rating of the ith food.
void changeRating(String food, int newRating) Changes the rating of the food item with the name food.
String highestRated(String cuisine) Returns the name of the food item that has the highest rating for the given type of cuisine. If there is a tie, return the item with the lexicographically smaller name.
Note that a string x is lexicographically smaller than string y if x comes before y in dictionary order, that is, either x is a prefix of y, or if i is the first position such that x[i] != y[i], then x[i] comes before y[i] in alphabetic order.

 

Example 1:

Input
["FoodRatings", "highestRated", "highestRated", "changeRating", "highestRated", "changeRating", "highestRated"]
[[["kimchi", "miso", "sushi", "moussaka", "ramen", "bulgogi"], ["korean", "japanese", "japanese", "greek", "japanese", "korean"], [9, 12, 8, 15, 14, 7]], ["korean"], ["japanese"], ["sushi", 16], ["japanese"], ["ramen", 16], ["japanese"]]
Output
[null, "kimchi", "ramen", null, "sushi", null, "ramen"]

Explanation
FoodRatings foodRatings = new FoodRatings(["kimchi", "miso", "sushi", "moussaka", "ramen", "bulgogi"], ["korean", "japanese", "japanese", "greek", "japanese", "korean"], [9, 12, 8, 15, 14, 7]);
foodRatings.highestRated("korean"); // return "kimchi"
                                    // "kimchi" is the highest rated korean food with a rating of 9.
foodRatings.highestRated("japanese"); // return "ramen"
                                      // "ramen" is the highest rated japanese food with a rating of 14.
foodRatings.changeRating("sushi", 16); // "sushi" now has a rating of 16.
foodRatings.highestRated("japanese"); // return "sushi"
                                      // "sushi" is the highest rated japanese food with a rating of 16.
foodRatings.changeRating("ramen", 16); // "ramen" now has a rating of 16.
foodRatings.highestRated("japanese"); // return "ramen"
                                      // Both "sushi" and "ramen" have a rating of 16.
                                      // However, "ramen" is lexicographically smaller than "sushi".
 

Constraints:

1 <= n <= 2 * 104
n == foods.length == cuisines.length == ratings.length
1 <= foods[i].length, cuisines[i].length <= 10
foods[i], cuisines[i] consist of lowercase English letters.
1 <= ratings[i] <= 108
All the strings in foods are distinct.
food will be the name of a food item in the system across all calls to changeRating.
cuisine will be a type of cuisine of at least one food item in the system across all calls to highestRated.
At most 2 * 104 calls in total will be made to changeRating and highestRated.

// SOLULU
class FoodRatings {
    private $menu = [];
    private $rmenu = [];
    private $map = [];

    function __construct($foods, $cuisines, $ratings) {
         for($i=0;$i<count($foods);$i++){
            // Store the rating of each food under its cuisine in $menu
            $this->menu[$cuisines[$i]][$foods[$i]] = $ratings[$i];
            // In $rmenu, categorize foods by cuisine and rating    
            $this->rmenu[$cuisines[$i]][$ratings[$i]][$foods[$i]] = 1;
            // Map each food to its cuisine
            $this->map[$foods[$i]] = $cuisines[$i];
        }
    }

    function changeRating($food, $newRating) {
        // Find the cuisine of the food
        $c = $this->map[$food];
        // Retrieve the old rating of the food
        $oldRating = $this->menu[$c][$food];
        // Remove the food from the old rating category in $rmenu
        unset($this->rmenu[$c][$oldRating][$food]);

        // Update the rating of the food in $menu
        $this->menu[$c][$food] = $newRating;
        // Add the food under the new rating in $rmenu
        $this->rmenu[$c][$newRating][$food] = 1;
    }
  
    function highestRated($cuisine) {
        // Find the maximum rating available for the given cuisine
        $maxRating = max($this->menu[$cuisine]);
        
        // Get all foods with the highest rating for the cuisine
        $foods = array_keys($this->rmenu[$cuisine][$maxRating]);
        // Sort the foods alphabetically
        sort($foods);
        
        // Return the first food in the sorted list
        return $foods[0];
    }
}