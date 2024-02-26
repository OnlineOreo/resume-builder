<?php
// include "includes/header.php";
// include "includes/connect.php";
// include "includes/connect_PDO.php";
// include "includes/connect_prepare.php";


// $sql = "select * from cv where id = '5'";
// $active = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($active);
?>
<html>


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cover Letter</title>
    <link rel="stylesheet" href="style2.css?<?= time() ?>" />
    <!-- <link rel="stylesheet" href="output.css?<?= time() ?>" /> -->
    <!-- <link rel="stylesheet" href="output.css"/> -->


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.snow.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Amatic+SC:wght@400;700&family=Bungee+Shade&family=Caveat+Brush&family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Karla:ital,wght@0,200..800;1,200..800&family=Lobster&family=Lora:ital,wght@0,400..700;1,400..700&family=Pacifico&family=Parisienne&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Vibur&family=Vollkorn:ital,wght@0,400..900;1,400..900&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400;1,700&family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Inconsolata:wght@200..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Overpass+Mono:wght@300..700&display=swap"
        rel="stylesheet">
</head>


<body>
    <div class="main">
        <div class="side_navbar">
            <div class="nav_links">
                <div class="link logo rounded" style="width: 55px; height:55px">LOGO
                    <!-- <img class="rounded" src="logo.png" alt=""> -->
                </div>
                <div class="link" id="write"><i class="fa-solid fa-file-pen"></i>Write</div>
                <div class="link" id="customize"><i class="fa-brands fa-intercom"></i>Customize</div>
            </div>
        </div>
        <div class="center">
            <div class="top bg-green-400">
                <h3 id="fileName" class="mt-1">cover Latter</h3>
                <input class="input mt-1 mb-1" type="text" id="fileNameInput" value="Cover Letter"
                    style="display:none; width:60%;">
                <button id="fileNameButton" class="btn btn-outline-success py-2" style="display:none;"><i
                        class="fa-solid fa-check"></i></button>
                <button class="btn btn-dark hover:tw-mx-4 tw-px-2 sm:tw-pl-4" id="downloadButton"
                    onclick="downloadPDF()">Download</button>
            </div>
            <div id="writing" class="writing">
                <div class="accordian personal_datail">
                    <div class="click_accordian">
                        <h5 class="text-3xl fw-bold mt-1 mb-2">Persnol Detail</h5>
                        <i class="fa-solid fa-chevron-down pb-2"></i>
                    </div>
                    <label class="font-bold mt-1">Full Name</label><br>
                    <input class="input mt-1 mb-1" type="text" placeholder="Enter Full Name" id="nameInput"><br>
                    <label class="font-bold mt-1">Position</label><br>
                    <input class="input mt-1 mb-1" type="text" placeholder="Enter Position" id="namePosition"><br>
                    <label class="font-bold mt-1">Profile Image (Optional)</label><br>
                    <input class=" input mt-1 mb-1" type="file" placeholder="Enter Position"
                        onchange="insertPersnolDetail(this,'profile')"><br>
                    <label class="font-bold mt-1">Number</label><br>
                    <input class="input mt-1 mb-1" type="text" placeholder="Enter Number" id="nameNumber"><br>
                    <label class="font-bold mt-1">Email</label><br>
                    <input class="input mt-1 mb-1" type="text" placeholder="Enter Email" id="nameEmail"><br>
                    <label class="font-bold mt-1">Address</label><br>
                    <input class="input mt-1 mb-1" type="text" placeholder="Enter Address" id="nameAddress"><br>
                    <label class="font-bold mt-1">DOB (Optional)</label><br>
                    <input class="input mt-1 mb-1" type="date" placeholder="Date Of Birth" id="nameDob"><br>
                    <label class="font-bold mt-1">Martial Status (Optional)</label><br>
                    <input class="input mt-1 mb-1" type="text" placeholder="Enter Martial Status" id="nameMartial"><br>
                    <label class="font-bold mt-1">Nationality (Optional)</label><br>
                    <input class="input mt-1 mb-1" type="text" placeholder="Enter Nationality" id="nameNationality"><br>
                    <button class="btn btn-outline-dark px-5 py-2 my-3" onclick="persanolDetailSave()">save</button>
                </div>
                <div class="accordian date">
                    <div class="d-flex justify-content-between align-items-center click_accordian">
                        <h5 class="text-3xl fw-bold mt-1 mb-3">Date</h5>
                        <i class="fa-solid fa-chevron-down pb-2 acd_icon"></i>
                    </div>
                    <button class="btn btn-outline-dark px-3 py-1 " onclick="dateType('today')">Today</button>
                    <button class="btn btn-outline-dark px-3 py-1 " onclick="dateType('custum')">custum</button><br><br>
                    <input class="input" type="hidden" id="dateInput" oninput="dateInput(this)">
                </div>
                <div class="accordian recipient_details">
                    <div class="d-flex justify-content-between align-items-center click_accordian">
                        <h5 class="text-3xl fw-bold mt-1 mb-3">Recipient Details</h5>
                        <i class="fa-solid fa-chevron-down pb-2 acd_icon"></i>
                    </div>
                    <label class="font-bold">Name of Recipient/Department</label><br>
                    <input class="input mt-1 mb-1" type="text" id="department_input"
                        oninput="recipentDetail(this,'department')"><br>
                    <label class="font-bold">Company Name</label><br>
                    <input class="input mt-1 mb-1" type="text" id="company_name_input"
                        oninput="recipentDetail(this,'company_name')"><br>
                    <label class="font-bold">Address</label><br>
                    <input class="input mt-1 mb-1" type="text" id="company_address_input"
                        oninput="recipentDetail(this,'company_address')">
                </div>
                <div class="accordian body">
                    <div class="d-flex justify-content-between align-items-center click_accordian">
                        <h5 class="text-3xl fw-bold mt-1 mb-3">Body</h5>
                        <i class="fa-solid fa-chevron-down pb-2 acd_icon"></i>
                    </div>
                    <div id="Quill"></div>
                </div>
                <div class="accordian body">
                    <div class="d-flex justify-content-between align-items-center click_accordian">
                        <h5 class="text-3xl fw-bold mt-1 mb-2">Sign</h5>
                        <i class="fa-solid fa-chevron-down pb-2 acd_icon"></i>
                    </div>
                    <label class="font-bold mt-1">Signature (Optional)</label><br>
                    <input class=" input mt-1 mb-1" type="file" placeholder="Enter Position"
                        onchange="signDivDetail(this,'signature')"><br>
                    <label class="font-bold mt-1">Full Name</label><br>
                    <input class="input mt-1 mb-1" type="text" placeholder="Enter Full Name"
                        oninput="signDivDetail(this,'signName')"><br>
                    <label class="font-bold mt-1">Date</label><br>
                    <input class="input mt-1 mb-5" type="text" placeholder="Enter Date"
                        oninput="signDivDetail(this,'signDate')"><br>
                </div>
            </div>
            <div id="customize_feild" class="customize_feild">
                <div class="layout">
                    <h2 class="fw-bold">Layout</h2>
                    <div id="layout-btns" class="row mt-4">
                        <div class="d-flex flex-column justify-content-center align-items-center col-md-3">
                            <button class="top-btn mx-2 layout-btn" value="top"></button>
                            <h6 class="mt-2">Top</h6>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center col-md-3">
                            <button class="left-btn mx-3 layout-btn" value="left"></button>
                            <h6 class="mt-2">Left</h6>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center col-md-3">
                            <button class="right-btn mx-2 layout-btn" value="right"></button>
                            <h6 class="mt-2">Right</h6>
                        </div>
                    </div>
                </div>
                <div id="colorCustomDiv" class="color">
                    <h2 class="fw-bold">Color</h2>
                    <button class="btn btn-outline-dark color-custom-btn" value="basic">basic</button>
                    <button class="btn btn-outline-dark color-custom-btn" value="advance">advance</button>
                    <button class="btn btn-outline-dark color-custom-btn" value="border">border</button><br><br>
                    <!-- <button class="btn btn-outline-dark" id="accent" onclick="custumType('accent')" style="background-color: white;">accent</button> -->
                    <!-- <button class="btn btn-outline-dark" onclick="custumType('multicolor')">multicolor</button> -->
                    <!-- <button class="btn btn-outline-dark" id="color_img_btn" onclick="custumType('image')">image</button> -->
                    <div class="accent_btn mt-2">
                        <button class="color-btn m-1 color-option-btn" value="#8E7AB5"
                            style="background-color: #8E7AB5;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#B784B7"
                            style="background-color: #B784B7;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#E493B3"
                            style="background-color: #E493B3;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#EEA5A6"
                            style="background-color: #EEA5A6;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#9B4444"
                            style="background-color: #9B4444;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#C68484"
                            style="background-color: #C68484;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#A3C9AA"
                            style="background-color: #A3C9AA;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#2D9596"
                            style="background-color: #2D9596;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#265073"
                            style="background-color: #265073;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#1F2544"
                            style="background-color: #1F2544;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#474F7A"
                            style="background-color: #474F7A;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#81689D"
                            style="background-color: #81689D;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#FFD0EC"
                            style="background-color: #FFD0EC;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#EEEDEB"
                            style="background-color: #EEEDEB;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#E0CCBE"
                            style="background-color: #E0CCBE;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#747264"
                            style="background-color: #747264;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#3C3633"
                            style="background-color: #3C3633;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#503C3C"
                            style="background-color: #503C3C;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#A87C7C"
                            style="background-color: #A87C7C;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#E6BAA3"
                            style="background-color: #E6BAA3;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#D24545"
                            style="background-color: #D24545;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#A94438"
                            style="background-color: #A94438;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#B67352"
                            style="background-color: #B67352;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#FE7A36"
                            style="background-color: #FE7A36;"></button>
                        <button class="color-btn m-1 color-option-btn" value="#FF6868"
                            style="background-color: #FF6868;"></button>
                        <input class="rainbow-btn m-1" onchange="colorValue(this,'custum')" type="color">
                    </div>
                    <div class="advance_btn">


                    </div>
                </div>
                <div id="headerDiv" class="header">
                    <h2 class="fw-bold">Header</h2>
                    <button class="btn btn-outline-dark header-btn" value="headerLeftRight">=0</button>
                    <button class="btn btn-outline-dark header-btn" value="headerUpDown">=0=</button>
                    <button class="btn btn-outline-dark header-btn" value="headerRightLeft">0=</button>
                    <h4>Details</h4>
                    <button class="btn btn-outline-dark header-btn" id="detailInOneColumn"
                        value="detailInOneColumn">=</button>
                    <button class="btn btn-outline-dark header-btn" id="detailInline" value="detailInline">--</button>
                    <button class="btn btn-outline-dark header-btn" id="detailInTwoColumn" value="detailInTwoColumn"
                        disabled>==</button>
                    <h4>Icons</h4>
                    <button class="btn btn-outline-dark header-btn" value="showIcon">Show Icon</button>
                    <button class="btn btn-outline-dark header-btn" value="hideIcon">Hide Icon</button>
                    <h4>Change Order of links ??</h4>
                </div>
                <div id="nameDiv" class="name">
                    <h2 class="fw-bold">Name</h2>
                    <h4>Size</h4>
                    <button class="btn btn-outline-dark py-1 px-3 name-custom-btn" value="xs">XS</button>
                    <button class="btn btn-outline-dark py-1 px-3 name-custom-btn" value="s">S</button>
                    <button class="btn btn-outline-dark py-1 px-3 name-custom-btn" value="m">M</button>
                    <button class="btn btn-outline-dark py-1 px-3 name-custom-btn" value="l">L</button>
                    <button class="btn btn-outline-dark py-1 px-3 name-custom-btn" value="xl">XL</button>
                    <h4 class="mt-2">Bold</h4>
                    <button class="btn btn-outline-dark name-custom-btn" value="bold">Bold</button>
                    <button class="btn btn-outline-dark name-custom-btn" value="normal">Normal</button>
                    <h4 class="mt-2">Font Style ??</h4>
                    <button class="btn btn-outline-dark name-custom-btn" value="body">Body Font</button>
                    <button class="btn btn-outline-dark name-custom-btn" value="creative">Creative</button>
                    <div id="creativeFonts" class="mt-4">
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 name-custom-btn" value="Cambria"
                            style="font-family:Cambria;">Cambria</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 name-custom-btn" value="Segoe UI"
                            style="font-family:Segoe UI;">Segoe UI</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 name-custom-btn" value="Lobster"
                            style="font-family:Lobster;">Lobster</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 name-custom-btn" value="Pacifico"
                            style="font-family:Pacifico;">Pacifico</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 name-custom-btn" value="Vibur"
                            style="font-family:Vibur;">Vibur</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 name-custom-btn" value="Caveat-Brush"
                            style="font-family:Caveat Brush;">Caveat Brush</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 name-custom-btn" value="Abril-fatface"
                            style="font-family:Abrill Fatface;">Abril Fatface</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 name-custom-btn" value="Bungee-Shade"
                            style="font-family:Bungee Shade;">Bungee</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 name-custom-btn" value="Amatic-SC"
                            style="font-family:Amatic SC;">Amatic SC</button>
                    </div>
                </div>
                <div id="jobCustomDiv" class="job-title">
                    <h2 class="fw-bold">Job Title</h2>
                    <h4>Size</h4>
                    <button class="btn btn-outline-dark py-1 px-3 job-custom-btn" value="s">S</button>
                    <button class="btn btn-outline-dark py-1 px-3 job-custom-btn" value="m">M</button>
                    <button class="btn btn-outline-dark py-1 px-3 job-custom-btn" value="l">L</button>
                    <h4>Position</h4>
                    <button class="btn btn-outline-dark job-custom-btn" value="below">Below</button>
                    <button class="btn btn-outline-dark job-custom-btn" value="same-line">Same Line</button>
                    <h4>Style</h4>
                    <button class="btn btn-outline-dark job-custom-btn" value="normal">Normal</button>
                    <button class="btn btn-outline-dark job-custom-btn" value="italic">Italic</button>
                </div>
                <div id="photoCustomDiv" class="photo p-3">
                    <h2 class="fw-bold">Photo</h2>
                    <input class="form-check-input fs-5 photo-checkbox" type="checkbox" value="show" id="ShowPhoto"
                        checked>
                    <label class="form-check-label fs-6">&nbsp;&nbsp;Show</label><br>
                    <input class="form-check-input fs-5 mt-3 photo-checkbox" type="checkbox" value="grayscale"
                        id="GrayPhoto">
                    <label class="form-check-label fs-6 mt-3">&nbsp;&nbsp;Grayscale</label>
                    <div class="radio-btns mt-3">
                        <h5 class="fw-bold">Size</h5>
                        <button class="btn btn-outline-dark px-4 mr-1 photo-size-btn" value="xs">XS</button>
                        <button class="btn btn-outline-dark px-4 mx-1 photo-size-btn" value="s">S</button>
                        <button class="btn btn-outline-dark px-4 mx-1 photo-size-btn" value="m">M</button>
                        <button class="btn btn-outline-dark px-4 mx-1 photo-size-btn" value="l">L</button>
                        <button class="btn btn-outline-dark px-4 ml-1 photo-size-btn" value="xl">XL</button>
                    </div>
                </div>
                <div class="spacing p-3">
                    <h2 class="fw-bold">Spacing</h2>
                </div>
                <div id="fontCustomDiv" class="font p-3">
                    <h2 class="fw-bold mb-3">Font</h2>
                    <button class="btn btn-outline-dark px-5 py-3 mx-2 font-custom-btn" value="serif">Serif</button>
                    <button class="btn btn-outline-dark px-5 py-3 mx-2 font-custom-btn" value="sans">Sans</button>
                    <button class="btn btn-outline-dark px-5 py-3 mx-2 font-custom-btn" value="mono">Mono</button>
                    <div id="sarifFonts" class="px-2 pt-2 mt-3" style="display: none;">
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 py-2 font-custom-btn" value="Vollkorn"
                            style="font-family: Vollkorn;">Vollkorn</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 py-2 font-custom-btn" value="Lora"
                            style="font-family: Lora;">Lora</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 py-2 font-custom-btn" value="Zilla-Slab"
                            style="font-family: Zilla Slab;">Zilla Slab</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 py-2 font-custom-btn" value="Crimson-Text"
                            style="font-family: Crimson Text;">Crimson</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 py-2 font-custom-btn" value="Roboto-Serif"
                            style="font-family: Roboto Serif;">Roboto</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 py-2 font-custom-btn" value="Amiri"
                            style="font-family: Amiri;">Amiri</button>
                    </div>
                    <div id="sansFonts" class="px-2 pt-2 mt-3" style="display: none;">
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 py-2 font-custom-btn" value="Sans"
                            style="font-family: Sans;">Sans</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 py-2 font-custom-btn" value="Karla"
                            style="font-family: Karla;">Karla</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 py-2 font-custom-btn" value="Barlow"
                            style="font-family: Barlow;">Barlow</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 py-2 font-custom-btn" value="Lato"
                            style="font-family: Lato;">Lato</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 py-2 font-custom-btn" value="Roboto"
                            style="font-family: Roboto;">Roboto</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 py-2 font-custom-btn" value="Open-Sans"
                            style="font-family: Open Sans;">Open Sans</button>
                    </div>
                    <div id="monoFonts" class="px-2 pt-2 mt-3" style="display: none;">
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 py-2 font-custom-btn" value="Inconsolota"
                            style="font-family: Inconsolota;">Inconsolota</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 py-2 font-custom-btn" value="Overpass-Mono"
                            style="font-family: Overpass Mono;">Overpass</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 py-2 font-custom-btn" value="IBM-Plex-Mono"
                            style="font-family: IBM Plex Mono;">IBM Plex</button>
                        <button class="btn btn-outline-dark w-25 mx-1 my-1 py-2 font-custom-btn" value="Courier-Prime"
                            style="font-family: Courier Prime;">Courier</button>
                    </div>
                </div>
                <div class="regional p-3">
                    <h2 class="fw-bold">Regional</h2>
                    <h5 class="fw-bold mt-3 mb-2">Format</h5>
                    <button class="btn btn-outline-dark w-25 mb-3" onclick="paperFormat('a4')">A4</button>
                    <button class="btn btn-outline-dark w-25 mb-3" onclick="paperFormat('us-letter')">US Letter</button>
                </div>
                <div class="declaration p-3">
                    <h2 class="fw-bold">Declaration</h2>
                    <label class="fw-bold mt-3">Position</label><br>
                    <button class="btn btn-outline-dark py-2 px-5" onclick="signPosition('left')">Left</button>
                    <button class="btn btn-outline-dark py-2 px-5 mx-3" onclick="signPosition('right')">Right</button>
                </div>
            </div>
        </div>
        <div id="right" class="right">
            <div id="a4page" class="a4page" onclick="showBoxData()">
                <div id="border"></div>
                <div id="a4left">
                    <div id="header" class="header p-2">
                        <div id="user_detail" class="user_detail">
                            <div id="name">Mannu Rawat</div>
                            <div id="position">Php developer</div>
                            <div id="details" class="links mt-2">
                                <div id="numberDiv"><i class="fa-solid fa-phone fa-sm"> &nbsp;</i><span
                                        id="number">8955698556</span></div>
                                <div id="emailDiv"><i class="fa-solid fa-envelope fa-sm"> &nbsp;</i><span
                                        id="email">mannu@mail.clm</span></div>
                                <div id="addressDiv"><i class="fa-solid fa-location-dot fa-sm"> &nbsp;</i><span
                                        id="address">sec 63</span></div>
                                <div id="dobDiv"><i class="fa-solid fa-calendar-days"></i> &nbsp;</i><span
                                        id="dob">52/52/2032</span></div>
                                <div id="martialDiv"><i class="fa-solid fa-house"></i> &nbsp;</i><span
                                        id="martial"></span></div>
                                <div id="nationalityDiv"><i class="fa-solid fa-earth-americas"></i> &nbsp;</i><span
                                        id="nationality"></span></div>
                            </div>
                        </div>
                        <div id="profile" class="profile"><img src="Cats_3.jpg" alt=""></div>
                    </div>
                </div>
                <div id="a4right">
                    <div id="date" class="date p-2">February,30,2024</div>
                    <div id="recipientDetails" class="recipientDetails p-2">
                        <div id="name_of_department">HR</div>
                        <div id="company_name">AdsGrill</div>
                        <div id="company_address">Subhash Nagar, Delhi</div>
                    </div>
                    <div id="content" class="content p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui
                        fugit deserunt dolore voluptatibus omnis minus blanditiis fuga fugiat! Minima laborum molestias
                        pedita sint, ut itaque mollitia eos magnam repudiandae. Ex consectetur tenetur maiores nisi
                        saepe reiciendis aliquid labore exercitationem beatae facilis, neque libero nihil vitae
                        cupiditate similique rem expedita odio modi itaque id earum ullam qui, aspernatur ut. Voluptas
                        quibusdam similique enim eius. Nulla, fugiat quam aut inventore similique sint non, reiciendis
                        dolores, voluptates quas excepturi. Quaerat quos accusamus vel sapiente voluptas voluptatem
                        veritatis quia, eum eius atque dolore! At cum cupiditate enim? Laudantium animi asperiores,
                        laboriosam quam molestiae quo consectetur incidunt odio cupiditate id, earum nobis. Et
                        consequatur, voluptatem tempora veritatis facere dignissimos culpa distinctio veniam ipsa
                        laudantium fugiat quo ipsam ipsum.</div>
                    <div id="signDiv" class="signDiv p-2">
                        <div id="sign">
                            <div id="signature"></div>
                            <div id="signLine"></div>
                            <div id="signName"></div>
                            <div id="signDate"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" style="background-color: none;" id="myModal" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body" id="modalContent">
                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"
        integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
    <!-- Include the DOMPurify library -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.3.3/purify.min.js"></script> -->




    <script src="script.js?<?= time() ?>"></script>
    <script>


    </script>
</body>


</html>