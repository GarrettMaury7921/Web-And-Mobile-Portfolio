// Garrett Maury
// ISTE 240 - Web and Mobile II
// Jim Habermas
// 10/13/2022
// MIDTERM PROJECT 1

// JS for Mobile Menu
var checker = 0;
function showMenu() {
    if (checker == 0) {
        document.getElementById('links').classList.add('inherit');
        document.getElementById('button').classList.add('inherit');
        checker++;
    }
    else {
        document.getElementById('links').classList.remove('inherit');
        document.getElementById('button').classList.remove('inherit');
        checker--;
    }
    console.log(checker);
}

// Javascript for the picture slideshow

// An array to store images
var images = ["assets/imgs/header_pic.png", 
             "assets/imgs/header_pic2.png", 
             "assets/imgs/header_pic3.png", 
             "assets/imgs/header_pic4.png"];

// Wait time in milliseconds (setting interval)
setInterval(slideshow, 3000);

// Get the total size of the array
var arrayLength = images.length;

// Make a counter for the function
var counter = 1;

// Make a variable to control slideshow
var looper = 0;

// A function to change the slideshow
function slideshow() {

    if (looper === 0) {
        // Make the slideshow go to the next picture
        document.getElementById('slideshow').src = images[counter];
        counter++;

        // Go back to the first picture after getting to the last picture in the slideshow
        if (counter === arrayLength) {
            counter = 0;
        }
    } // Looper
} // Function slideShow()

function stopPic() {
    looper = 1;
}

function startPic() {
    looper = 0;
}