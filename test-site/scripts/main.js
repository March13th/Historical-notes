/**
 * Created by march 13th on 2018/9/9.
 */
var myImage = document.querySelector("img");

myImage.onclick = function() {
    var mySrc = myImage.getAttribute("src");
    if(mySrc === 'images/test.jpg') {
      myImage.setAttribute('src', 'images/test1.jpg');
    } else {
      myImage.setAttribute('src', 'images/test.jpg');
    }
};
var myButton = document.querySelector('button');
var myHeading = document.querySelector('h1');

function setUserName() {
  var myName = prompt('Please enter your name.');
  localStorage.setItem('name', myName);
  myHeading.textContent = "Don't be silly," + myName;
}
if(!localStorage.getItem('name')) {
  setUserName();
} else {
  var storedName = localStorage.getItem('name');
  myHeading.textContent = "Don't be silly," + storedName;
}
myButton.onclick = function() {
  setUserName();
}