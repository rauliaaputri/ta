<?php require_once 'client.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
<body style="background:" background="bg.jpg"><center>

    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
<div class="container">
    <br/>
    <br/>
          <div class="text-center"><br> 
<center><h2><span style="color: white;">Breakfast Menu</span></h2></center>
</div>
<div class="row">
              <div class="col-md-12 ">
                <div class="btn-group ">
<?php if($code=='') { ?>
<table style="background:Papayawhip" class="table table-bordered" border="1" align="center" cellpadding="4" cellspacing="0">
  <tr align="center">

            <th class="text-center"><span style="color: lightsalmon;">Code</span></th>
            <th class="text-center"><span style="color: lightsalmon;">Name</span></th>
            
          </tr>
  <?php foreach ($data as $key => $value) { ?>
  <tr>

    <td width="150" align="center" class="text-center"><a href="?code=<?= $value->code ?>"><?php echo $value->code;?></a></td>
    <td width="150" align="center" class="text-center" ><?php echo $value->name;?></td>
  </tr>
  <?php } ?>
</table>
<?php }else{ ?>


<table style="background:Papayawhip" class="table table-bordered" border="1" align="center" cellpadding="4" cellspacing="0">
  <?php foreach ($data as $key => $value) { ?>
    
    <tr>
            <td width="150" align="center" class="text-left" >Code</td>
            <td width="150" align="center" class="text-center" ><?php echo $value->code;?></td>
    </tr>
    <tr>
            <td width="150" align="center" class="text-left" >Name</td>
            <td width="150" align="center" class="text-center"><?php echo $value->name;?></td>
    </tr>
    <tr>   
            <td width="150" align="center" class="text-left" >Price</td>
            <td width="200" align="center" class="text-center"><?php echo $value->price;?></td>
    </tr>
    <tr>   
            <td width="150" align="center" class="text-left" >Description</td>
            <td width="100" align="center" class="text-center"><?php echo $value->description;?></td>
    </tr>
    <tr>        
            <td width="150" align="center" class="text-left" >Calories</td>
            <td width="100" align="center" class="text-center"><?php echo $value->calories;?></td>
    <tr>
            
           
       
  <?php } ?>
</table>
</div>
        </center>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>  

</html>
<?php }?>