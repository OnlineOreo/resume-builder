// JavaScript object to store div content and CSS properties

var testerStyle = [];

// Function to change the style of the div
function changeStyle() {
  const contentDiv = document.getElementById("content");

  // Change background color randomly
  const randomColor = "#" + Math.floor(Math.random() * 16777215).toString(16);
  contentDiv.style.backgroundColor = randomColor;

  // Change font color randomly
  const randomFontColor =
    "#" + Math.floor(Math.random() * 16777215).toString(16);
  contentDiv.style.color = randomFontColor;

  // Change font style randomly
  const fontStyles = ["Arial", "Verdana", "Helvetica", "Tahoma", "Courier New"];
  const randomFontStyle =
    fontStyles[Math.floor(Math.random() * fontStyles.length)];
  contentDiv.style.fontFamily = randomFontStyle;

  // Store the updated content and CSS properties in the tester object
  // tester.content = contentDiv.textContent;
  testerStyle.push((backgroundColor = contentDiv.style.backgroundColor));
  testerStyle.push((color = contentDiv.style.color));
  testerStyle.push((fontFamily = contentDiv.style.fontFamily));

  //   console.log(tester.style);
}

function save() {
  var test = "test";
  var style = [];
  style = testerStyle;
  $.ajax({
    url: "agains.php",
    type: "post",
    data: {
      test: test,
      style: style,
    },
    success: function (data) {
      console.log(data);
    },
  });
}

// Initialize an empty object
var myObject = {};

// Use a loop to insert values 1 to 10 into the object with keys
for (var i = 1; i <= 10; i++) {
  myObject["key" + i] = i;
}

// Output the object to the console
console.log(myObject);
