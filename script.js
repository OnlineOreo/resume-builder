var Fulla4page = document.getElementById("right");
var a4page = document.getElementById("a4page");
var a4left = document.getElementById("a4left");
var header = document.getElementById("header");
var user_detail = document.getElementById("user_detail");
var fullName = document.getElementById("name");
var position = document.getElementById("position");
var details = document.getElementById("details");
var number = document.getElementById("number");
var email = document.getElementById("email");
var address = document.getElementById("address");
var profile = document.getElementById("profile");
var a4right = document.getElementById("a4right");

function sideNavebar() {
  const write = document.getElementById("write");
  const customize = document.getElementById("customize");
  customize.addEventListener("click", () => {
    document.getElementById("writing").style.cssText = "display:none";
    document.getElementById("customize_feild").style.cssText = "display:block";
  });
  write.addEventListener("click", () => {
    document.getElementById("writing").style.cssText = "display:block";
    document.getElementById("customize_feild").style.cssText = "display:none";
  });
}
sideNavebar();

function insertPersnolDetail() {
  document.getElementById("nameInput").addEventListener("input", (event) => {
    fullName.innerHTML = event.target.value;
  });
  document.getElementById("namePosition").addEventListener("input", (event) => {
    position.innerHTML = event.target.value;
  });
  document.getElementById("nameNumber").addEventListener("input", (event) => {
    number.innerHTML = event.target.value;
  });
  document.getElementById("nameEmail").addEventListener("input", (event) => {
    email.innerHTML = event.target.value;
  });
  document.getElementById("nameAddress").addEventListener("input", (event) => {
    address.innerHTML = event.target.value;
  });
  document.getElementById("nameDob").addEventListener("input", (event) => {
    document.getElementById("dob").innerHTML = event.target.value;
  });
  document.getElementById("nameMartial").addEventListener("input", (event) => {
    document.getElementById("martial").innerHTML = event.target.value;
  });
  document
    .getElementById("nameNationality")
    .addEventListener("input", (event) => {
      document.getElementById("nationality").innerHTML = event.target.value;
    });
}
insertPersnolDetail();

function dateType(type) {
  if (type === "today") {
    const today = new Date();
    const options = { year: "numeric", month: "long", day: "numeric" };
    const formattedDate = new Intl.DateTimeFormat("en-US", options).format(
      today
    );
    document.getElementById("date").innerHTML = formattedDate;
  }
  if (type === "custum") {
    document.getElementById("dateInput").type = "text";
  }
}

function dateInput(date) {
  document.getElementById("date").innerHTML = date.value;
}

function recipentDetail(e, feild) {
  if (feild === "department") {
    document.getElementById("name_of_department").innerHTML = e.value;
  }
  if (feild === "company_name") {
    document.getElementById("company_name").innerHTML = e.value;
  }
  if (feild === "company_address") {
    document.getElementById("company_address").innerHTML = e.value;
  }
}

function signDivDetail(e, type) {
  if (type === "signature") {
  }
  if (type === "signName") {
    // console.log(e.value);
    if (e.value === "") {
      document.getElementById("signLine").style.display = "none";
    } else {
      document.getElementById(
        "signLine"
      ).innerHTML = `<hr style="width:100%;">`;
      document.getElementById("signName").innerHTML = e.value;
    }
  }
  if (type === "signDate") {
    document.getElementById("signDate").innerHTML = e.value;
  }
}

function BodyTextRender() {
  const quill = new Quill("#Quill", {
    theme: "snow",
    placeholder: "Dear Mam,",
  });
  quill.on("text-change", function (delta, oldDelta, source) {
    if (source === "user") {
      document.getElementById("content").innerHTML = quill.root.innerHTML;
    }
  });
}
BodyTextRender();

// --------------------------  Custimization Start  --------------------------------

function layoutPosition() {
  var layoutBtns = document.getElementById("layout-btns");
  var layoutBtn = layoutBtns.querySelectorAll(".layout-btn");
  layoutBtn.forEach((element) => {
    element.addEventListener("click", (e) => {
      if (e.target.value === "top") {
        a4page.style.cssText =
          "display:flex; flex-direction:column; justify-content:start; flex-wrap:wrap;";
        a4left.style.cssText = "width:100%;height:auto";
        a4right.style.cssText = "width:100%;height:auto";
        header.style.cssText = "flex-direction:reverse;height:auto;";
        user_detail.style.cssText = "align-items:flex-start;";
        details.style.cssText = "justify-content:flex-start;";
        document.getElementById("detailInOneColumn").style.cssText =
          "display:inline-block;";
      }
      if (e.target.value === "left") {
        a4page.style.cssText = "display:flex; justify-content:space-between;";
        a4left.style.cssText = "width:40%;height:100%";
        a4right.style.cssText = "width:60%;height:100%";
        header.style.cssText =
          "flex-direction:column-reverse;align-items:center;justify-content:start;height:100%";
        user_detail.style.cssText = "align-items:flex-start;";
        details.style.cssText = "justify-content:flex-start;";
        fullName.style.cssText = "text-align:left;";
      }
      if (e.target.value === "right") {
        a4page.style.cssText =
          "display:flex;flex-direction:row-reverse; justify-content:space-between;";
        a4left.style.cssText = "width:40%;height:100%";
        a4right.style.cssText = "width:60%;height:100%";
        header.style.cssText =
          "flex-direction:column-reverse;align-items:center;justify-content:start;height:100%";
        user_detail.style.cssText = "align-items:flex-end;";
        details.style.cssText = "justify-content:flex-end;";
        fullName.style.cssText = "text-align:right;";
      }
    });
  });
}

function headerCustomize() {
  var headerDiv = document.getElementById("headerDiv");
  var headerBtn = headerDiv.querySelectorAll(".header-btn");
  headerBtn.forEach((element) => {
    element.addEventListener("click", (e) => {
      if (e.target.value === "headerLeftRight") {
        header.style.cssText = "flex-direction:reverse";
        user_detail.style.cssText = "align-items:none;";
        details.style.cssText = "justify-content:start;";
        document.getElementById("detailInOneColumn").style.cssText =
          "display:inline-block;";
        fullName.style.cssText = "text-align:left;";
      }
      if (e.target.value === "headerRightLeft") {
        header.style.cssText = "flex-direction:row-reverse";
        user_detail.style.cssText = "align-items:flex-end;";
        details.style.cssText = "justify-content:flex-end;";
        document.getElementById("detailInOneColumn").style.cssText =
          "display:inline-block;";
        fullName.style.cssText = "text-align:left;";
      }
      if (e.target.value === "headerUpDown") {
        header.style.cssText =
          "flex-direction:column-reverse;align-items:center;";
        user_detail.style.cssText = "align-items:center;";
        details.style.cssText = "justify-content:center;";
        document.getElementById("detailInOneColumn").style.cssText =
          "display:none;";
      }
      if (e.target.value === "detailInOneColumn") {
        details.style.cssText = "flex-direction: column; gap:0px;";
      }
      if (e.target.value === "detailInline") {
        details.style.cssText =
          "justify-content: start;gap: 10px;flex-direction: none;";
      }
      if (e.target.value === "detailInTwoColumn") {
        console.log("not set");
      }
      if (e.target.value === "showIcon") {
        var iTags = details.querySelectorAll("i");
        iTags.forEach(function (iTag) {
          iTag.style.display = "inline-block";
        });
      }
      if (e.target.value === "hideIcon") {
        var iTags = details.querySelectorAll("i");
        iTags.forEach(function (iTag) {
          iTag.style.display = "none";
        });
      }
    });
  });
}
headerCustomize();

function nameDivCustomize() {
  // alert("after update run")
  var nameDiv = document.getElementById("nameDiv");
  var nameBtn = nameDiv.querySelectorAll(".name-custom-btn");
  nameBtn.forEach((element) => {
    element.addEventListener("click", (e) => {
      if (e.target.value === "xs") {
        fullName.style.cssText += "font-size:22px";
      }
      if (e.target.value === "s") {
        fullName.style.cssText += "font-size:26px";
      }
      if (e.target.value === "m") {
        fullName.style.cssText += "font-size:30px";
      }
      if (e.target.value === "l") {
        fullName.style.cssText += "font-size:34px";
      }
      if (e.target.value === "xl") {
        fullName.style.cssText += "font-size:38px";
      }
      if (e.target.value === "bold") {
        fullName.style.cssText += "font-weight:bold";
      }
      if (e.target.value === "normal") {
        fullName.style.cssText += "font-weight:normal";
      }
      var creativeFonts = document.getElementById("creativeFonts");
      if (e.target.value == "body") {
        creativeFonts.style.display = "none";
        fullName.style.fontFamily = "calibri";
      }
      if (e.target.value == "creative") {
        creativeFonts.style.display = "block";
      }
      if (e.target.value == "Cambria") {
        fullName.style.fontFamily = e.target.value;
      }
      if (e.target.value == "Segoe UI") {
        fullName.style.fontFamily = e.target.value;
      }
      if (e.target.value == "Lobster") {
        fullName.style.fontFamily = e.target.value;
      }
      if (e.target.value == "Pacifico") {
        fullName.style.fontFamily = e.target.value;
      }
      if (e.target.value == "Vibur") {
        fullName.style.fontFamily = e.target.value;
      }
      if (e.target.value == "Caveat-Brush") {
        fullName.style.fontFamily = "Caveat Brush";
      }
      if (e.target.value == "Abril-fatface") {
        fullName.style.fontFamily = "Abril fatface";
      }
      if (e.target.value == "Bungee-Shade") {
        fullName.style.fontFamily = "Bungee Shade";
      }
      if (e.target.value == "Amatic-SC") {
        fullName.style.fontFamily = "Amatic SC";
      }
    });
  });
}
nameDivCustomize();

function jobDivCustom() {
  var Fulla4page = document.getElementById("right");
  var a4page = document.getElementById("a4page");
  var a4left = document.getElementById("a4left");
  var header = document.getElementById("header");
  var user_detail = document.getElementById("user_detail");
  var fullName = document.getElementById("name");
  var position = document.getElementById("position");
  var details = document.getElementById("details");
  var number = document.getElementById("number");
  var email = document.getElementById("email");
  var address = document.getElementById("address");
  var profile = document.getElementById("profile");
  var a4right = document.getElementById("a4right");
  var jobCustomDiv = document.getElementById("jobCustomDiv");
  var jobCustomBtn = jobCustomDiv.querySelectorAll(".job-custom-btn");
  jobCustomBtn.forEach((element) => {
    element.addEventListener("click", (e) => {
      if (e.target.value === "s") {
        changeInA4Page();
        position.style.cssText += "font-size:18px";
      }
      if (e.target.value === "m") {
        position.style.cssText += "font-size:22px";
      }
      if (e.target.value === "l") {
        position.style.cssText += "font-size:26px";
      }
      if (e.target.value === "normal") {
        position.style.cssText += "font-style:normal";
      }
      if (e.target.value === "italic") {
        position.style.cssText += "font-style: italic;";
      }
      if (e.target.value === "below") {
        console.log("not set");
      }
      if (e.target.value === "same-line") {
        console.log("not set");
      }
    });
  });
}
jobDivCustom();

function ColorCustomFunction() {
  var Fulla4page = document.getElementById("right");
  var a4page = document.getElementById("a4page");
  var a4left = document.getElementById("a4left");
  var header = document.getElementById("header");
  var user_detail = document.getElementById("user_detail");
  var fullName = document.getElementById("name");
  var position = document.getElementById("position");
  var details = document.getElementById("details");
  var number = document.getElementById("number");
  var email = document.getElementById("email");
  var address = document.getElementById("address");
  var profile = document.getElementById("profile");
  var a4right = document.getElementById("a4right");

  var colorCustomDiv = document.getElementById("colorCustomDiv");
  var colorCustomBtn = colorCustomDiv.querySelectorAll(".color-custom-btn");
  colorCustomBtn.forEach((element) => {
    element.addEventListener("click", (e) => {
      function colorType(color, type) {
        // console.log(type)
        if (e.target.value === "basic" || type === "basic") {
          fullName.style.color = color;
          position.style.color = color;
          header.style.cssText = "color:black";
          document.getElementById(
            "border"
          ).style.cssText = `border:20px solid ${color};opacity:0;`;
          a4left.style.backgroundColor = "white";
          // changeInA4Page();
          return "basic";
        }

        if (e.target.value === "advance" || type === "basic") {
          a4left.style.cssText = `background-color: ${color};`;
          header.style.cssText = "color:white";
          fullName.style.color = "white";
          position.style.color = "white";
          document.getElementById(
            "border"
          ).style.cssText = `border:20px solid ${color};opacity:0;`;
          // changeInA4Page();
          return "advance";
        }

        if (e.target.value === "border" || type === "basic") {
          document.getElementById(
            "border"
          ).style.cssText = `border:20px solid ${color};opacity:1;`;
          a4left.style.backgroundColor = "white";
          header.style.cssText = "color:black";
          fullName.style.color = "black";
          position.style.color = "black";
          // changeInA4Page();
          return "border";
        }
      }
      var colorTypeVar = colorType("#8E7AB5", e.target.value);

      var colorOptionBtn = colorCustomDiv.querySelectorAll(".color-option-btn");
      colorOptionBtn.forEach((element) => {
        element.addEventListener("click", (e) => {
          colorType(e.target.value, colorTypeVar);
          // console.log(e.target.value, colorTypeVar);
        });
      });
    });
  });
}
ColorCustomFunction();

function photoCustom() {
  var photoCustomDiv = document.getElementById("photoCustomDiv");
  var photoCheckbox = photoCustomDiv.querySelectorAll(".photo-checkbox");
  photoCheckbox.forEach((element) => {
    element.addEventListener("change", (e) => {
      if (e.target.value === "show") {
        if (e.target.checked) {
          profile.style.display = "block";
        } else {
          profile.style.display = "none";
        }
      }
      if (e.target.value === "grayscale") {
        if (e.target.checked) {
          profile.style.filter = "grayscale(1)";
        } else {
          profile.style.filter = "grayscale(0)";
        }
      }
    });
  });

  var photoSizeBtn = photoCustomDiv.querySelectorAll(".photo-size-btn");
  photoSizeBtn.forEach((element) => {
    element.addEventListener("click", (e) => {
      if (e.target.value === "xs") {
        profile.style.cssText = "min-width:50px;height:50px;";
      }
      if (e.target.value === "s") {
        profile.style.cssText = "min-width:55px;height:55px;";
      }
      if (e.target.value === "m") {
        profile.style.cssText = "min-width:60px;height:60px;";
      }
      if (e.target.value === "l") {
        profile.style.cssText = "min-width:65px;height:65px;";
      }
      if (e.target.value === "xl") {
        profile.style.cssText = "min-width:71px;height:71px;";
      }
    });
  });
}
photoCustom();

function FontCustom() {
  var fontCustomDiv = document.getElementById("fontCustomDiv");
  var fontCustumBtn = fontCustomDiv.querySelectorAll(".font-custom-btn");
  fontCustumBtn.forEach((element) => {
    element.addEventListener("click", (e) => {
      var sarifFonts = document.getElementById("sarifFonts");
      var sansFonts = document.getElementById("sansFonts");
      var monoFonts = document.getElementById("monoFonts");
      if (e.target.value == "serif") {
        sansFonts.style.cssText = "display:none;";
        sarifFonts.style.cssText = "display:block;";
        monoFonts.style.cssText = "display:none;";
      }
      if (e.target.value == "sans") {
        sansFonts.style.cssText = "display:block;";
        sarifFonts.style.cssText = "display:none;";
        monoFonts.style.cssText = "display:none;";
      }
      if (e.target.value == "mono") {
        sansFonts.style.cssText = "display:none;";
        sarifFonts.style.cssText = "display:none;";
        monoFonts.style.cssText = "display:block;";
      }
      if (e.target.value == "Vollkorn") {
        a4page.style.fontFamily = "Vollkorn";
      }
      if (e.target.value == "Lora") {
        a4page.style.fontFamily = "Lora";
      }
      if (e.target.value == "Zilla-Slab") {
        a4page.style.fontFamily = "Zilla Slab";
      }
      if (e.target.value == "Crimson-Text") {
        a4page.style.fontFamily = "Crimson Text";
      }
      if (e.target.value == "Roboto-Serif") {
        a4page.style.fontFamily = "Roboto Serif";
      }
      if (e.target.value == "Amiri") {
        a4page.style.fontFamily = "Amiri";
      }
      if (e.target.value == "Sans") {
        a4page.style.fontFamily = "Open Sans";
      }
      if (e.target.value == "Karla") {
        a4page.style.fontFamily = "Karla";
      }
      if (e.target.value == "Barlow") {
        a4page.style.fontFamily = "Barlow";
      }
      if (e.target.value == "Lato") {
        a4page.style.fontFamily = "Lato";
      }
      if (e.target.value == "Roboto") {
        a4page.style.fontFamily = "Roboto";
      }
      if (e.target.value == "Open-Sans") {
        a4page.style.fontFamily = "Open Sans";
      }
      if (e.target.value == "Inconsolota") {
        a4page.style.fontFamily = "Inconsolota";
      }
      if (e.target.value == "Overpass-Mono") {
        a4page.style.fontFamily = "Overpass Mono";
      }
      if (e.target.value == "IBM-Plex-Mono") {
        a4page.style.fontFamily = "IBM Plex Mono";
      }
      if (e.target.value == "Courier-Prime") {
        a4page.style.fontFamily = "Courier Prime";
      }
    });
  });
}
FontCustom();

function paperFormat(format) {
  if (format === "a4") {
    a4page.style.cssText = "aspect-ratio:210/297;";
  }
  if (format === "us-letter") {
    a4page.style.cssText = "aspect-ratio:85/110;";
  }
}

function signPosition(position) {
  if (position === "left") {
    document.getElementById("signDiv").style.justifyContent = "start";
    document.getElementById("sign").style.textAlign = "left";
    document.getElementById("sign").style.alignItems = "start";
  }
  if (position === "right") {
    document.getElementById("signDiv").style.justifyContent = "end";
    document.getElementById("sign").style.textAlign = "right";
    document.getElementById("sign").style.alignItems = "end";
  }
}

function changeInA4Page() {
  var a4pagedata = document.getElementById("right").innerHTML;
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
        UpdateCoverLetterShow();
      }
    },
    error: function (xhr, status, error) {
      console.error("An error occurred:", error);
    },
  });
}

function UpdateCoverLetterShow() {
  // var dataA4 = "updated cover letter show";
  $.ajax({
    type: "POST",
    url: "insert_cl.php",
    data: {
      show: "show",
    },
    success: function (data) {
      document.getElementById("right").innerHTML = data;
      // console.log(data);
      jobDivCustom();
      ColorCustomFunction();
      // afterA4pageLoad();
    },
    error: function (xhr, status, error) {
      console.error("An error occurred:", error);
    },
  });
}

FirstCoverLetterShow();
function FirstCoverLetterShow() {
  // var dataA4 = "updated cover letter show";
  $.ajax({
    type: "POST",
    url: "insert_cl.php",
    data: {
      show: "show",
    },
    success: function (data) {
      // Fulla4page.innerHTML = "";
      Fulla4page.innerHTML = data;
      jobDivCustom();
      ColorCustomFunction();
    },
  });
}

function afterA4pageLoad() {
  insertPersnolDetail();
  layoutPosition();
  headerCustomize();
  nameDivCustomize();
  jobDivCustom();
  ColorCustomFunction();
  photoCustom();
  FontCustom();
}

function fileNameChange() {
  document.getElementById("fileName").addEventListener("dblclick", () => {
    document.getElementById("fileNameInput").style.display = "block";
    document.getElementById("fileNameButton").style.display = "block";
    document.getElementById("fileName").style.display = "none";
  });
  document.getElementById("fileNameButton").addEventListener("click", () => {
    document.getElementById("fileName").innerHTML =
      document.getElementById("fileNameInput").value;
    document.getElementById("fileNameInput").style.display = "none";
    document.getElementById("fileNameButton").style.display = "none";
    document.getElementById("fileName").style.display = "block";
  });
}
fileNameChange();

function downloadPDF() {
  var a4Width = 210;
  var a4Height = 297;
  var fileName = document.getElementById("fileName").innerHTML;
  html2canvas(document.getElementById("a4page")).then(function (canvas) {
    var imgData = canvas.toDataURL("image/jpeg");
    var imgWidth = canvas.width;
    var imgHeight = canvas.height;
    var scaleFactor = Math.min(a4Width / imgWidth, a4Height / imgHeight);
    var pdfWidth = imgWidth * scaleFactor;
    var pdfHeight = imgHeight * scaleFactor;
    var pdf = new jsPDF("portrait", "mm", "a4");
    pdf.addImage(imgData, "JPEG", 0, 0, pdfWidth, pdfHeight);
    pdf.save(fileName + ".pdf");
  });
}

function accordians() {
  var writing = document.getElementById("writing");
  var accordions = writing.querySelectorAll(".accordian");
  accordions.forEach((element) => {
    var c_accordions = element.querySelectorAll(".click_accordian");
    c_accordions.forEach((click_element) => {
      click_element.addEventListener("click", (e) => {
        if (element.classList.contains("active-accordian")) {
          element.classList.remove("active-accordian");
          var icon = element.querySelector(".click_accordian i");
          if (icon) {
            icon.style.transform = "translateY(-50%) rotate(0deg)";
          }
        } else {
          accordions.forEach((acc) => {
            acc.classList.remove("active-accordian");
            var icon = acc.querySelector(".click_accordian i");
            if (icon) {
              icon.style.transform = "translateY(-50%) rotate(0deg)";
            }
          });
          element.classList.add("active-accordian");
          var icon = element.querySelector(".click_accordian i");
          if (icon) {
            icon.style.transform = "translateY(-50%) rotate(-90deg)";
          }
        }
      });
    });
  });
}
accordians();

// document.addEventListener('DOMContentLoaded', function () {
//   var isModalVisible = false;

function showBoxData() {
  // Check if the modal is already visible
  // if (isModalVisible) {
  //   return;
  // }

  var boxToCapture = document.getElementById("right");
  var modalContent = document.getElementById("modalContent");

  // Clone the content of the box and append it to the modal
  // var contentClone = boxToCapture.cloneNode(true);
  modalContent.innerHTML = boxToCapture.innerHTML;
  // console.log(modalContent);
  // modalContent.appendChild(contentClone);

  // Show the modal
  var myModal = new bootstrap.Modal(document.getElementById("myModal"));
  myModal.show();
  isModalVisible = true;

  // Close the modal when clicking outside of it
  myModal._element.addEventListener("click", function (event) {
    if (event.target === myModal._element) {
      myModal.hide();
      isModalVisible = false;
    }
  });
}

// Event listener for the 'show_box' element
$(".show_box").click(function () {
  // Toggle the visibility of 'resume' for phone view
  if ($(window).width() <= 768) {
    $(".resume").toggleClass("d-block");
    setTimeout(showBoxData, 300); // Delay execution for a smoother transition
  }
});

// Event listener for the 'boxToCapture' element
var boxToCapture = document.getElementById("a4page");
boxToCapture.addEventListener("click", function () {
  // Show the modal for window view
  if ($(window).width() > 768) {
    showBoxData();
  }
});

// Event listener for the 'showBoxDataButton' function

// var showBoxDataButton = document.getElementById('showBoxDataButton');
// showBoxDataButton.addEventListener('click', function () {
//   showBoxData();
// });

// });
