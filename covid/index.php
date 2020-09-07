
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 App</title>
    <link rel="shortcut icon" href="img/logo.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/covid.css">
</head>
<body>
    <div class="header">
        <div>
            <p id = "logo">P</p>
        </div>
        <div class="text">
            <p>PaSE covid-19 App</p>
        </div>
        
    </div>
    <div class="dashboard">
    <div class="cases">
        <p>Total Cases<i class="fa fa-caret-up"></i></p>
        <span id = 'total-cases'></span>
    </div>
    <div class="cases">
        <p>Recovered<i class="fa fa-caret-down fa-1.5x"></i></p>
        <span id="total-recovered"></span>
    </div>
    <div class="cases">
        <p>Active Cases<i class="fa fa-caret-up"></i></p>
        <span id="total-active"></span>
    </div>
    <div class="cases">
        <p>Total Deaths<i class="fa fa-caret-up"></i></p>
        <span id="total-deaths"></span>
    </div>

    </div>
    <div class="data">
        <table border="1px">
            <thead>
                <tr>
                    <th>Countries</th>
                    <th>Active Cases</th>
                    <th>Recovered</th>
                    <th>Total Deaths</th>
                    <th>Total Cases</th>

                </tr>
            </thead>
            <tbody id='tbd'>
                <div id="spinner"></div>
            </tbody>
        </table>
    </div>
            <div class="tips">
                <p>Health Tips</p>
                <marquee behavior="" direction="right-to-left">covid-19 is real..adhere to all safety protocols</marquee>
            </div>
            <div class="tips">
                <p>News &amp; Updates</p>
                <img src="./img/covid.jpg" alt="scientist in a lab" width="195px" height="100px">
            </div>
                <h1>©Rhukie 2020</h1>
        </div>

        </div>
    </div>
    <script src="./js/covid.js"></script> 
</body>
</html>