var fullName = document.getElementById("name");
var position = document.getElementById("position");
var number = document.getElementById("number");
var email = document.getElementById("email");
var address = document.getElementById("address");
var header = document.getElementById("header");
var details = document.getElementById("details");

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
function userName(e, type) {
  fullName.innerHTML = e.value;
}
function userPosition(e, type) {
  position.innerHTML = e.value;
}
function userNumber(e, type) {
  var number = document.getElementById("number");
  number.innerHTML = e.value;
}
function userEmail(e, type) {
  email.innerHTML = e.value;
}
function userAddress(e, type) {
  address.innerHTML = e.value;
}
function headerCustumize(e, name) {
  // console.log(name);
  if (name === "headerLeftRight") {
    header.style.cssText = "flex-direction:reverse";
    document.getElementById("user_detail").style.cssText = "align-items:none;";
    details.style.cssText = "justify-content:start;";
    document.getElementById("detailInOneColumn").style.cssText =
      "display:inline-block;";
  }
  if (name === "headerRightLeft") {
    header.style.cssText = "flex-direction:row-reverse";
    document.getElementById("user_detail").style.cssText =
      "align-items:flex-end;";
    details.style.cssText = "justify-content:flex-end;";
    document.getElementById("detailInOneColumn").style.cssText =
      "display:inline-block;";
  }
  if (name === "headerUpDown") {
    header.style.cssText = "flex-direction:column-reverse;align-items:center;";
    document.getElementById("user_detail").style.cssText =
      "align-items:center;";
    details.style.cssText = "justify-content:center;";
    document.getElementById("detailInOneColumn").style.cssText =
      "display:none;";
  }
}
function detailInline() {
  details.style.cssText =
    "justify-content: start;gap: 10px;flex-direction: none;";
}
function detailInOneColumn() {
  details.style.cssText = "flex-direction: column; gap:0px;";
}
function iconCostumize(e) {
  // console.log(e);
  if (e === "hide") {
    var iTags = details.querySelectorAll("i");
    iTags.forEach(function (iTag) {
      iTag.style.display = "none";
    });
  }
  if (e === "show") {
    var iTags = details.querySelectorAll("i");
    iTags.forEach(function (iTag) {
      iTag.style.display = "inline-block";
    });
  }
}
function nameSize(name) {
  if (name === "xs") {
    fullName.style.cssText += "font-size:18px";
  }
  if (name === "s") {
    fullName.style.cssText += "font-size:22px";
  }
  if (name === "m") {
    fullName.style.cssText += "font-size:26px";
  }
  if (name === "l") {
    fullName.style.cssText += "font-size:30px";
  }
  if (name === "xl") {
    fullName.style.cssText += "font-size:34px";
  }
}
function nameFontWeight(name) {
  if (name === "bold") {
    fullName.style.cssText += "font-weight:bold";
  }
  if (name === "normal") {
    fullName.style.cssText += "font-weight:normal";
  }
}
function positionSize(size) {
  if (size === "s") {
    position.style.cssText += "font-size:14px";
  }
  if (size === "m") {
    position.style.cssText += "font-size:18px";
  }
  if (size === "l") {
    position.style.cssText += "font-size:22px";
  }
}
function positionStyle(style) {
  if (style === "normal") {
    position.style.cssText += "font-family:calibri";
  }
  if (style === "italic") {
    position.style.cssText += "font-family:italic";
  }
}
