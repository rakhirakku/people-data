
<!DOCTYPE html>
<html>
<head>
  <title>People Data</title>
  <link rel="stylesheet" href="css/data.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/data.js"></script>
</head>
<body>
  <div class="container">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div>
        <div class="header">
            <h1>PEOPLE DATA</h1>
        </div>
        <?php
            // Read the JSON file and decode its content
            $jsonContent = file_get_contents('json/data.json');
            $data = json_decode($jsonContent, true);
            $person = $data[0];
        ?>
        <div class="header1">
            <button id="nextPerson">NEXT PERSON</button>
        </div>
    </div>
    <div class="content" style="max-width:800px;width:800px;">
        <div class="container1" width=100%>
            <div class="first-column"><center>1</center></div>
            <div class="second-column">
                <div class="row1">Name: {{$person['name'] }}</div>
                <div class="row2">Location: {{$person['location'] }}</div>
            </div>
        </div>               
    </div>
  </div>
</body>
</html>
