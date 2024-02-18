<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css?<?= time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>

<body>
    <div class="main">
        <div class="side_navbar">
            <div class="nav_links">
                <div class="link logo">
                    <h2>LOGO</h2>
                </div>
                <div class="link" id="write"><i class="fa-solid fa-file-pen"></i>Write</div>
                <div class="link" id="customize"><i class="fa-brands fa-intercom"></i>Customize</div>
            </div>
        </div>
        <div class="center">
            <div class="top">
                <input class="input mt-1 mb-1" type="text">
                <button class="btn" id="downloadButton" onclick="downloadPDF()">Download</button>
            </div>
            <div id="writing" class="writing">
                <div class="personal_datail">
                    <h1 class="text-3xl font-bold mb-2">Persnol Detail</h1>
                    <label class="font-bold">Full Name</label><br>
                    <input class="input mt-1 mb-1" type="text" placeholder="Enter Full Name" oninput="userName(this,'persnol_detail')"><br>
                    <label class="font-bold">Position</label><br>
                    <input class="input mt-1 mb-1" type="text" placeholder="Enter Position" oninput="userPosition(this,'persnol_detail')"><br>
                    <label class="font-bold">Number</label><br>
                    <input class="input mt-1 mb-1" type="text" placeholder="Enter Number" oninput="userNumber(this,'persnol_detail')"><br>
                    <label class="font-bold">Email</label><br>
                    <input class="input mt-1 mb-1" type="text" placeholder="Enter Email" oninput="userEmail(this,'persnol_detail')"><br>
                    <label class="font-bold">Address</label><br>
                    <input class="input mt-1 mb-1" type="text" placeholder="Enter Address" oninput="userAddress(this,'persnol_detail')"><br>
                    <button class="btn mt-2" onclick="persanolDetailSave()">save</button>
                </div>
                <div class="date">
                    <h1 class="text-3xl font-bold mb-2">Date</h1>
                    <button class="btn-light" onclick="dateType('today')">Today</button>
                    <button class="btn-light" onclick="dateType('custum')">custum</button><br><br>
                    <input class="input" type="hidden" id="dateInput" oninput="dateInput(this)">
                </div>
                <div class="recipient_details">
                    <h1 class="text-3xl font-bold mb-2">Recipient Details</h1>
                    <h4 class="font-bold">Name of Recipient/Department</h4>
                    <input class="input mt-1 mb-1" type="text" id="department_input" oninput="recipentDetail(this,'department')">
                    <h4 class="font-bold">Company Name</h4>
                    <input class="input mt-1 mb-1" type="text" id="company_name_input" oninput="recipentDetail(this,'company_name')">
                    <h4 class="font-bold">Address</h4>
                    <input class="input mt-1 mb-1" type="text" id="company_address_input" oninput="recipentDetail(this,'company_address')">
                </div>
                <div class="body">
                    <h1>Body</h1>
                    <input type="text" id="summernote" oninput="bodyInput(this,'input')">
                </div>
            </div>
            <div id="customize_feild" class="customize_feild">
                <div class="layout">
                    <h2>Layout</h2>
                    <button onclick="">rotate</button>
                    <button onclick="">rotate</button>
                    <button onclick="">rotate</button>
                </div>
                <div class="color">
                    <h2>Color</h2>
                    <button onclick="colorCustum('basic')">basic</button>
                    <button onclick="colorCustum('advance')">advance</button>
                    <button onclick="colorCustum('border')">border</button><br><br>
                    <button id="accent" onclick="custumType('accent')" style="background-color: black;">accent</button>
                    <button onclick="custumType('multicolor')">multicolor</button>
                    <button id="color_img_btn" onclick="custumType('image')">image</button>
                    <div class="accent_btn">
                        <button onclick="colorValue('#bf3535','fixed')">color1</button>
                        <button onclick="colorValue('#bf4535','fixed')">color2</button>
                        <button onclick="colorValue('#bf3585','fixed')">color3</button>
                        <button onclick="colorValue('#gf3535','fixed')">color4</button>
                        <button onclick="colorValue('#bf8553','fixed')">color5</button>
                        <button onclick="colorValue('#bj9535','fixed')">color6</button>
                        <input onchange="colorValue(this,'custum')" type="color" value="#bf3535">
                    </div>
                    <div class="advance_btn">

                    </div>
                </div>
                <div class="header">
                    <h2>Header</h2>
                    <button id="headerLeftRight" onclick="headerCustumize(this,'headerLeftRight')">=0</button>
                    <button id="headerUpDown" onclick="headerCustumize(this,'headerUpDown')">=0=</button>
                    <button id="headerRightLeft" onclick="headerCustumize(this,'headerRightLeft')">0=</button>
                    <h2>Details</h2>
                    <button id="detailInOneColumn" onclick="detailInOneColumn()">=</button>
                    <button id="detailInline" onclick="detailInline()">--</button>
                    <button id="detailInTwoColumn" onclick="detailInTwoColumn()" disabled>==</button>
                    <h2>Icons</h2>
                    <button id="showIcon" onclick="iconCostumize('show')">Show Icon</button>
                    <button id="hideIcon" onclick="iconCostumize('hide')">Hide Icon</button>
                    <h2>Change Order of links ??</h2>
                </div>
                <div class="name">
                    <h2>Name</h2>
                    <h4>Size</h4>
                    <button onclick="nameSize('xs')">xs</button>
                    <button onclick="nameSize('s')">s</button>
                    <button onclick="nameSize('m')">m</button>
                    <button onclick="nameSize('l')">l</button>
                    <button onclick="nameSize('xl')">xl</button>
                    <h4>Bold</h4>
                    <button onclick="nameFontWeight('bold')">bold</button>
                    <button onclick="nameFontWeight('normal')">normal</button>
                    <h4>Font Style ??</h4>
                    <button onclick="nameFontFamily('body')">body font</button>
                    <button onclick="nameFontFamily('creative')">creative</button>
                </div>
                <div class="job-title">
                    <h2>Job Title</h2>
                    <h4>Size</h4>
                    <button onclick="positionSize('s')">s</button>
                    <button onclick="positionSize('m')">m</button>
                    <button onclick="positionSize('l')">l</button>
                    <h4>Position</h4>
                    <button onclick="positionPlace('below')">below</button>
                    <button onclick="positionPlace('same-line')">same line</button>
                    <h4>Style</h4>
                    <button onclick="positionStyle('normal')">normal</button>
                    <button onclick="positionStyle('italic')">italic</button>
                </div>
            </div>
        </div>
        <div id="right" class="right">
            <div id="a4page" class="a4page">
                <div id="header" class="header">
                    <div id="user_detail" class="user_detail">
                        <div id="name">Mannu Rawat</div>
                        <div id="position">Full Stack Developer</div>
                        <div id="details" class="links">
                            <div id="number"><i class="fa-solid fa-phone fa-sm"></i> 7289884190</div>
                            <div id="email"><i class="fa-solid fa-envelope fa-sm"></i> mannurawat@gmail.com</div>
                            <div id="address"><i class="fa-solid fa-location-dot fa-sm"></i> Sec-63 Noida</div>
                        </div>
                    </div>
                    <div class="profile"></div>
                </div>
                <div id="date" class="date">July,13,2024</div>
                <div class="recipientDetails">
                    <div id="name_of_department">HR</div>
                    <div id="company_name">AdsGrill</div>
                    <div id="company_address">Subhash Nagar, Delhi</div>
                </div>
                <div id="content" class="content">Dear, Mam/Sir<br>Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Neque
                    corporis
                    incidunt
                    aliquid magnam sequi rem omnis animi beatae sapiente necessitatibus, quas architecto modi culpa
                    explicabo eos? Aut sapiente temporibus doloribus.</div>
                <div class="Sincerely">Sincerely,</div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

    <script src="script.js?<?= time() ?>"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Dear, Mam/Sir....',
            tabsize: 2,
            height: 400,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });



        function downloadPDF() {
            var doc = new jsPDF();

            function saveDiv() {
                doc.fromHTML(document.getElementById("a4page").innerHTML);
                doc.save('div.pdf');
            }
        }
    </script>
</body>

</html>