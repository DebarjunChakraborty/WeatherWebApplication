<?php
$servername = "localhost";
$database = "agradata";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error){
  die("Connection Failed:". $conn->connect_error);
}
$sql = "SELECT * FROM mastertable";
$result = mysqli_query($conn, $sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://reliancefoundation.org/o/rfoundation-theme/images/favicon.ico" rel="icon">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-primaryColor h-18 px-44 py-2 border-b-4 ">
        <img src="logo.png" alt="" class="w-40 h-14 rounded-md ">
    </nav>

    <!-- Search Bar and Button -->
    <div class="container flex gap-4 px-44 py-8">   
        <div class="weather-input w-[550px] rounded">
          <input class="city-input h-[46px] w-[100%] outline-none text-lg px-0 py-3 mt-2 mb-7 border-2 border-solid focus:px-4 focus:border-2 focus:border-btncolor rounded-lg" type="text" placeholder="  Enter a City Name">
          <button class=" search-btn w-full py-3 px-0 cursor-pointer outline-none border-none rounded bg-secondoryColor text-white text-base hover:bg-btncolor hover:ease-in hover:duration-75" type="button">Search</button>
        </div>
        <div class="weather-data w-full">
            <div class="current-weather text-white bg-secondoryColor rounded-md flex justify-between py-5 pr-16 pl-5 drop-shadow-2xl hover:bg-btncolor ease-in duration-100">
              <div class="details">
                <h2 class="text-2xl font-bold">Location  Date </h2>
                <h6>Temperature:  °C</h6>
                <h6>Wind:  M/S</h6>
                <h6>Humidity: %</h6>
              </div>
            </div>
        </div>
      </div>
            <!-- 5 Days Forecast Cards-->
            <div class="px-44">
                <div>
                    <div class="days-forecast">
                      <h2 class="mb-5 text-2xl font-bold">5-Day Forecast</h2>
                      <ul class="weather-cards flex gap-5">
                        <li class="card text-white bg-secondoryColor hover:bg-btncolor ease-in duration-100 px-5 py-4 w-52 h-56 list-none rounded-lg drop-shadow-2xl ">
                          <h3  class="text-xl"> Date </h3>
                          <h6>Temp: C</h6>
                          <h6>Wind:  M/S</h6>
                          <h6>Humidity: %</h6>
                        </li>
                        <li class="card text-white bg-secondoryColor hover:bg-btncolor ease-in duration-100 px-5 py-4 w-56 h-56 list-none rounded-lg drop-shadow-2xl ">
                          <h3 class="text-xl"> Date </h3>
                          <h6>Temp: C</h6>
                          <h6>Wind:  M/S</h6>
                          <h6>Humidity: %</h6>
                        </li>
                        <li class="card text-white bg-secondoryColor hover:bg-btncolor ease-in duration-100 px-5 py-4 w-56 h-56 list-none rounded-lg drop-shadow-2xl ">
                          <h3 class="text-xl"> Date </h3>
                          <h6>Temp: C</h6>
                          <h6>Wind:  M/S</h6>
                          <h6>Humidity: %</h6>
                        </li>
                        <li class="card text-white bg-secondoryColor hover:bg-btncolor ease-in duration-100 px-5 py-4 w-56 h-56 list-none rounded-lg drop-shadow-2xl ">
                          <h3 class="text-xl"> Date </h3>
                          <h6>Temp: C</h6>
                          <h6>Wind:  M/S</h6>
                          <h6>Humidity: %</h6>
                        </li>
                        <li class="card text-white bg-secondoryColor hover:bg-btncolor ease-in duration-100 px-5 py-4 w-56 h-56 list-none rounded-lg drop-shadow-2xl">
                          <h3 class="text-xl"> Date </h3>
                          <h6>Temp: C</h6>
                          <h6>Wind:  M/S</h6>
                          <h6>Humidity: %</h6>
                        </li>
                      </ul>
                    </div>
                </div>
            </div>
            <!-- Alerts Box -->
            <div class="px-44">
                <div class="px-44 py-8  ">
                    <div class="border-2 border-solid border-red-500 rounded-lg w-full h-48 px-14 py-8 hover:bg-red-500 hover:ease-in hover:duration-200 hover:text-white text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ut rerum deserunt repudiandae praesentium sed molestias tempora cumque magni, quos necessitatibus voluptate totam. Accusamus delectus error quia consequuntur cumque nihil voluptatum quod vel eligendi quasi minima vero quidem, quos amet.</div>
                </div>

                <!-- Top 3 Crops of The Season -->
                <div class="adv-text mb-5 text-2xl font-bold">
                    <h2>Top 3 Crops Of The Season</h1>
                  </div>
                  <a href="index1.php" target="_blank">NagpurData</a>
                  <div class="gap-6 crops w-full h-44 p-4 bg-primaryColor  hover:bg-hoverColor hover:text-primaryColor  border-1 hover:ease-in hover:duration-100 flex text-left text-black items-center rounded-xl mb-6 border-solid drop-shadow-2xl ">
                    <img src="rice.jpg" class="rounded-2xl w-[220px]" alt="rice pic">
                    
                    <div class="text">
                      
                      <h1 class="text-xl font-bold">RICE</h1>
                      <hr>
                      <p class="text-base"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat tempora cupiditate consequatur neque odit laboriosam dolorum voluptatem, iure perferendis quaerat sint natus non ex dolore fugit. Minus sunt iste perferendis magnam error exercitationem quidem ipsam ducimus nesciunt asperiores! Nisi maxime asperiores quam voluptates? Fugiat vero molestias officia quos necessitatibus laudantium cupiditate ea obcaecati incidunt voluptatum. Dolor modi culpa perspiciatis provident!</p>
                    </div>
                  </div>
                  <div class="gap-6 crops w-full h-44 p-4 bg-primaryColor  hover:bg-hoverColor hover:text-primaryColor  border-1 hover:ease-in hover:duration-100 flex text-left text-black items-center rounded-xl mb-6 border-solid drop-shadow-2xl ">
                    <img class="rounded-2xl w-[220px]" src="wheat.jpg" alt="rice pic">
                    <div class="text">
                      <h1 class="text-xl  font-bold">Wheat</h1>
                      <hr>
                      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat tempora cupiditate consequatur neque odit laboriosam dolorum voluptatem, iure perferendis quaerat sint natus non ex dolore fugit. Minus sunt iste perferendis magnam error exercitationem quidem ipsam ducimus nesciunt asperiores! Nisi maxime asperiores quam voluptates? Fugiat vero molestias officia quos necessitatibus laudantium cupiditate ea obcaecati incidunt voluptatum. Dolor modi culpa perspiciatis provident!</p>
                    </div>
                  </div>
                  <div class="gap-6 crops w-full h-44 p-4 bg-primaryColor  hover:bg-hoverColor hover:text-primaryColor  border-1 hover:ease-in hover:duration-100 flex text-left text-black items-center rounded-xl mb-6 border-solid drop-shadow-2xl">
                    <img class="rounded-2xl w-[220px]" src="dal.jpg" alt="rice pic">
                    <div class="text">
                      <h1 class="text-xl font-bold">Lentils</h1>
                      <hr>
                      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat tempora cupiditate consequatur neque odit laboriosam dolorum voluptatem, iure perferendis quaerat sint natus non ex dolore fugit. Minus sunt iste perferendis magnam error exercitationem quidem ipsam ducimus nesciunt asperiores! Nisi maxime 
                        asperiores quam voluptates? Fugiat vero molestias officia quos necessitatibus laudantium cupiditate ea obcaecati incidunt voluptatum. Dolor modi culpa perspiciatis provident!</p>
                    </div>
                  </div> 
            </div>
            <div class="containner">
              <div class="responsive">
               <table>
    <thead>
        <tr>
            <th>Serial Number</th>
            <th>File Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            $count = 1; // Initialize serial number
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $count . "</td>";
                echo "<td>" . $row['fileName'] . "</td>";
                echo '<td><a href="data/' . $row['fileName'] . '" class="btn" download>Download</a></td>';
                echo "</tr>";
                $count++;
            }
        } else {
            echo "<tr><td colspan='3'>No records found</td></tr>";
        }
        ?>
    </tbody>
</table>
              </div>
            </div>

            
                    <!-- Copyright footer -->
                    <div class="bg-footerColor h-14 w-full mt-12 text-center pt-4 text-xl">
                      <div class="text-footerText text-lg font-bold">© 2023. All rights reserved. Terms & Conditions. Privacy Policy.</div>
                    </div>
            <script src="./index.js"></script>
</body>
</html>