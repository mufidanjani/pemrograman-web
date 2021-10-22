<html>
    <head>
        <title> File terima data</title>
        <h1>THANK YOU</h1>
    </head>
    <body>
        <h3><br>Thank you from Black Goose Bistro. We have received the following information about your order</h3>
        <h1><br>Your Information</h1>
    </body>
</html>
<?php
    $data=[
        $_POST['name'],
        $_POST['Addres'],
        $_POST['Telephone_number'],
        $_POST['email'],
        $_POST['Delivery_instruction'],
        $_POST['crust'],
        $_POST['toppings'],
        $_POST['how_many']''
    ];

    $id=[
        "name"
        "Addres"
        "Telephone Number"
        "email"
        "Delivery instruction"
        "crust"
        "toppings"
        "how_many"
    ];
?>
   <table>
       <tr>
           <td>
               <?php
                  foreach($id as $judul){
                      echo $judul."</br>";
                  }
                ?>
           </td>
           </td>
               <?php
                 foreach($data as $nilai){
                     echo":".$nilai."</br>"
                 }
                 ?>
       </tr>
   </table>