// JavaScript object to store div content and CSS properties
let tester = {
  content: "",
  style: {},
};

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
  tester.content = contentDiv.textContent;
  tester.style.backgroundColor = contentDiv.style.backgroundColor;
  tester.style.color = contentDiv.style.color;
  tester.style.fontFamily = contentDiv.style.fontFamily;

  //   console.log(tester.style);
}

function save() {
  var test = "test";
  var style = [];
  style = tester.style;
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
