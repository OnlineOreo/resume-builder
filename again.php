<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Div Styling Tester</title>
    <style>
    #content {
        padding: 20px;
        margin: 20px;
        border: 1px solid #ccc;
        display: inline-block;
    }
    </style>
</head>

<body>
    <div id="content">
        This is some content in a div.
    </div>
    <!-- <button type="submit" name="submit">Save</button> -->

    <button onclick="changeStyle()">Change Style</button>

    <script>
    // JavaScript object to store div content and CSS properties
    let tester = {
        content: '',
        style: {}
    };

    // Function to change the style of the div
    function changeStyle() {
        const contentDiv = document.getElementById('content');

        // Change background color randomly
        const randomColor = '#' + Math.floor(Math.random() * 16777215).toString(16);
        contentDiv.style.backgroundColor = randomColor;

        // Change font color randomly
        const randomFontColor = '#' + Math.floor(Math.random() * 16777215).toString(16);
        contentDiv.style.color = randomFontColor;

        // Change font style randomly
        const fontStyles = ['Arial', 'Verdana', 'Helvetica', 'Tahoma', 'Courier New'];
        const randomFontStyle = fontStyles[Math.floor(Math.random() * fontStyles.length)];
        contentDiv.style.fontFamily = randomFontStyle;

        // Store the updated content and CSS properties in the tester object
        tester.content = contentDiv.textContent;
        tester.style.backgroundColor = contentDiv.style.backgroundColor;
        tester.style.color = contentDiv.style.color;
        tester.style.fontFamily = contentDiv.style.fontFamily;

        // Update the hidden input field value with the div's content
        document.getElementById('hiddenContent').value = tester.content;

        console.log(tester); // For demonstration, log the tester object to console
    }
    </script>
</body>

</html>