// Function to change the style of the div
function changeStyle() {
  document.getElementById("btn").addEventListener("click", () => {
    const contentDiv = document.getElementById("content");
    const randomColor = "#" + Math.floor(Math.random() * 16777215).toString(16);
    contentDiv.style.backgroundColor = randomColor;
    const randomFontColor =
      "#" + Math.floor(Math.random() * 16777215).toString(16);
    contentDiv.style.color = randomFontColor;
    const fontStyles = [
      "Arial",
      "Verdana",
      "Helvetica",
      "Tahoma",
      "Courier New",
    ];
    const randomFontStyle =
      fontStyles[Math.floor(Math.random() * fontStyles.length)];
    contentDiv.style.fontFamily = randomFontStyle;
    dataSend();
  });
}
changeStyle();

function dataSend() {
  var a4pagedata = document.getElementById("mainDiv").innerHTML;
  console.log(a4pagedata);
  $.ajax({
    type: "POST",
    url: "insert_cl.php",
    data: {
      update: "update",
      a4pagedata: a4pagedata,
    },
    success: function (data) {
      if (data === "data-updated") {
        updateDiv();
      }
    },
    error: function (xhr, status, error) {
      console.error("An error occurred:", error);
    },
  });
}
updateDiv();
function updateDiv() {
  // var dataA4 = "updated cover letter show";
  $.ajax({
    type: "POST",
    url: "insert_cl.php",
    data: {
      show: "show",
    },
    success: function (data) {
      document.getElementById("mainDiv").innerHTML = data;
      changeStyle();
    },
    error: function (xhr, status, error) {
      console.error("An error occurred:", error);
    },
  });
}
