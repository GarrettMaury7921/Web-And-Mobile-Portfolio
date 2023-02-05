// Group 4 - FoxFax
// ISTE 240 - Web and Mobile II
// Jim Habermas
// Final Project 2 - Script.js

// Quiz JS
function selectAnswer(correct, explanation) {
  let response = document.getElementById("answer-response");
  response.innerHTML = `${
    correct
      ? '<span class="success">Correct</span>'
      : '<span class="fail">Incorrect</span>'
  } ${explanation}`;
}


// Slideshow JS 1
var imageArray = ["assets/images/slide1.jpeg", "assets/images/slide2.jpeg","assets/images/slide3.jpeg","assets/images/slide4.jpg"];
var arraySize = imageArray.length;
var x = 1
setInterval(runit, 2000);
function runit(){
    document.getElementById('slideshow').src = imageArray[x];

    x++;

    if (x === arraySize){
        x = 0;
    }
}


// Slideshow JS 2
var images = ["http://solace.ist.rit.edu/~iste240t39/foxfax_mod/assets/images/unix1.png", 
             "http://solace.ist.rit.edu/~iste240t39/foxfax_mod/assets/images/unix2.png", 
             "http://solace.ist.rit.edu/~iste240t39/foxfax_mod/assets/images/unix3.png", 
             "http://solace.ist.rit.edu/~iste240t39/foxfax_mod/assets/images/unix4.png"];
setInterval(slideshow2, 4000);

// Get the total size of the array, Make a counter for the function, Make a variable to control slideshow
var arrayLength = images.length;
var counter = 1;
var looper = 0;

// A function to change the slideshow, make sure slideshow exists in the doc as well
function slideshow2() {
    if (looper === 0 && document.getElementById('slideshow2')) {
        // Make the slideshow go to the next picture
        document.getElementById('slideshow2').src = images[counter];
        counter++;

        // Go back to the first picture after getting to the last picture in the slideshow
        if (counter === arrayLength) {
            counter = 0;
        }
    } // Looper
} // Function slideShow()

// Functions for when someone puts their mouse over the slideshow to stop the pictures from moving
function stopPic() {
    looper = 1;
}

function startPic() {
    looper = 0;
}
