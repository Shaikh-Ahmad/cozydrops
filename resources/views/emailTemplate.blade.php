<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>Dear Talha Awan you got a new booking order</h2>
    <br>
    <p>Name: <span> {{$dataReceived['name']}} </span> </p>
    <p>Email: <span> {{$dataReceived['email']}} </span> </p>
    <p>Contact: <span> {{$dataReceived['contact']}} </span> </p> -
    <p>Pickup: <span> {{$dataReceived['pickup']}} </span> </p> 
    <p>Dropoff: <span> {{$dataReceived['dropoff']}} </span> </p> -
    <p>Date: <span> {{$dataReceived['date']}} </span> </p> 
    <p>Time: <span> {{$dataReceived['time']}} </span> </p> -
    <p>Total Passangers: <span> {{$dataReceived['total_passengers']}} </span> </p>  -
    <p>Point To Point: <span> {{$dataReceived['service_type1']}} </span> </p>
    <p>Hourly: <span> {{$dataReceived['service_type2']}} </span> </p>   -
    <p>Details: <span> {{$dataReceived['details']}} </span> </p>


</body>
</html>