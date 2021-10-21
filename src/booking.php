<!DOCTYPE html>
<html>
    <div class="content" align="center"> 
        <div class="header"> <h1>Booking Page</h1> </div> 
        <div class="middle">
            <form id="signform" action="bookingaction.php" method="post"> 
                <table border="0"> 
                    <tr>  
                        <td><input type="text" id="name" name="name" placeholder="Enter Your Name"></td> 
                    </tr> 
                    <tr> 
                        <td><input type="text" name="student_num" placeholder="Enter Your Student Number"></td> 
                    </tr> 
                    <tr> 
                        <td><input type="email" id="email" name="email" placeholder="Enter Your E-mail"></td> 
                    </tr> 
                    <tr>
                        <td><input type="date" id="datepicker" name="date"></td>
                    </tr>
                    <tr>
                        <td><input type="text" in="seat_numb" name="seat_num" placeholder="Enter The Seat Number You Want To Book(1-556)"></td>
                    </tr>
                    <tr>
                        <select id="time"  name="time">
                            <option value="1">One Hour</option>
                            <option value="2">Two Hour</option>         
                            <option value="3">Three Hour</option>
                        </select> 
                    </tr>
                       
                    <tr> 
                        <td colspan="2" align="center" style="color:red;font-size:10px;">
                        <?php
                            $err = isset($_GET["err"]) ? $_GET["err"] : "";
                            switch ($err) {
                                case 1:
                                    echo "Place already reserved!";
                                    break;
                            } 
                        ?> 
                        </td>
                    </tr> 
                    <tr> 
                        <td colspan="2" align="center"> 
                            <input type="submit" id="booking" name="booking" value="Booking"> 
                        </td> 
                    </tr> 
                </table> 
            </form> 
        </div> 
</html>