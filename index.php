<!DOCTYPE html>
<html lang="en">
<head>
  <title>INDIAN PINCODE SEARCH</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <style> 
   #pincode{width:21%;}
.textbox{
  width: 30%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  margin-left:2%;
}

.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    padding: 6px 12px;
    font-size: 14px;
    border-radius: 4px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
  height:46px;
  color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
  margin-left:2%;
}
h2{font-family:Arial; font-size:30px; text-align:center;}
</style>
</head>
<body bgcolor="pink">

<div class="container">
  <div><h2>INDIAN PINCODE SEARCH</h2></div>
  <div>&nbsp;</div>
  <form autocomplete="off" method="post" id="frmPinCode" style="text-align:center;">
    <div>
      <input type="text" class="textbox" name="pincode" id="pincode" placeholder="Enter Pincode"  autocomplete="new-password">
      <input type="button" class="btn" value="Check" onclick="get_details()">
    </div>
    <div>&nbsp;</div>
    <div>
      <input type="text" class="textbox" id="city" disabled placeholder="City"><br/><br/>
      <input type="text" class="textbox" id="state" disabled placeholder="State"><br/><br/>
     
    </div>
  </form>
</div>
<script>
function get_details(){
  var pincode=jQuery('#pincode').val();
  if(pincode==''){
    jQuery('#city').val('');
    jQuery('#state').val('');
  }else{
    jQuery.ajax({
      url:'get.php',
      type:'post',
      data:'pincode='+pincode,
      success:function(data){
        if(data=='no'){
          alert('Wrong Pincode');
          jQuery('#city').val('');
          jQuery('#state').val('');
        
        }else{
          var getData=$.parseJSON(data);
          jQuery('#city').val(getData.city);
          jQuery('#state').val(getData.state);
        }
      }

    });
  }
}
</script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INDIAN PIN CODE SEARCH </title>
</head>
<table>
  <tr>
    <th>PIN CODE</th>

    <th>COURIER COMPANY</th>

    <th>CITY NAME</th>

    <th>STATE  NAME</th>

    <th>STATE CODE</th>
    <th>CODE</th>

  </tr>
  <tr>
    <td>171009</td>
    <td>BLUE DART</td>
    <td>SHIMLA</td>
    <td>HIMACHAL PRADESH</td>
    <td>HP</td>
    <td>YES</td>
  </tr>
 <tr>
    <td>171009</td>
    <td>BLUE DART</td>
    <td>SHIMLA</td>
    <td>HIMACHAL PRADESH</td>
    <td>HP</td>
    <td>YES</td>
  </tr>
  <tr>
    <td>171009</td>
    <td>EKART</td>
    <td>SHIMLA</td>
    <td>HIMACHAL PRADESH</td>
    <td>HP</td>
    <td>NO</td>
  </tr>
  <tr>
    <td>812006</td>
    <td>BLUE DART</td>
    <td>SULTANGANJ</td>
    <td>BIHAR</td>
    <td>BR</td>
    <td>YES</td>
  </tr>
  <tr>
    <td>171009</td>
    <td>BLUE DART</td>
    <td>SHIMLA</td>
    <td>HIMACHAL PRADESH</td>
    <td>HP</td>
    <td>YES</td>
  </tr>
</table>
</body>
</html>