<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $destination = $_POST['destination'];
  $departure = $_POST['departure'];
  $adults = $_POST['adults'];
  $children = $_POST['children'];
  $transportation = $_POST['transportation'];
  $hotel = $_POST['hotel'];
  $roomtype = $_POST['roomtype'];
  $specialrequests = $_POST['specialrequests'];
  $price = $_POST['price'];

  // display the form data
  echo "Name: $name <br>";
  echo "Email: $email <br>";
  echo "Phone: $phone <br>";
  echo "Address: $address <br>";
  echo "Destination: $destination <br>";
  echo "Departure Date: $departure <br>";
  echo "Adults: $adults <br>";
  echo "Children: $children <br>";
  echo "Transportation: $transportation <br>";
  echo "Hotel: $hotel <br>";
  echo "Room Type: $roomtype <br>";
  echo "Special Requests: $specialrequests <br>";
  echo "Price: $price <br>";
}
?>