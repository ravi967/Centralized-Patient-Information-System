

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>patient</title>
    
    <style type="text/css">
      ul
      {
        float:left;
        list-style-type: none;  
      }
      a
      {
        text-decoration: none;
        color: black;
      }
      li a:hover,h5 b:hover
      {
        text-decoration: none;
        color:white;
      }
      .col-md-5,.col-md-2,.col-md-3
      {
        margin-top: 15px;
      }
      h5
      {
        font-size: medium;
      }
    </style>

    <script>
      function funEmailMobile(id)
      {
        if(id == "idMobile")
        {
          document.getElementById("emailPhone").placeholder = "Enter mobile no."
        }
        else if(id == "idEmail")
        {
          document.getElementById("emailPhone").placeholder = "Enter email"
        }
      }
    
    </script>
    <script type="text/javascript" src="../js/time.js"></script>


  </head>
  
  <body onload="displayTime();">
	  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="../css/adddoctor.css">

    <!-- ............................................. Header-Section starts here .................................... -->
    <?php
    include ('../includes/headerNew.php') ;
  ?>

    <!-- ............................................ Header-Section Ends Here ......................................... -->
    <br>

      <?php

        $aadhaarp = $_POST['aadhaarp'];
      
      ?>

        <div class="container">
    <div class="panel-heading"></div>
      <div class="panel-body">
        <fieldset class="col-md-12">     
          <legend>Welcome </legend>
            <div class="panel panel-default">
              <div class="panel-body">
                  <br>
              <label for="exampleInputname">Your Health Information :- </label>
                <br><br><br>
                <div class="form-group">
                <label for="exampleInputname">Date : </label>
                <div ></div>
                </div>

                <div class="form-group">
                <label for="exampleInputname">Hospital : </label>
                <div></div>
                </div>

                <div class="form-group">
                <label for="exampleInputname">Doctor : </label>
                <div></div>
                </div>


                <div class="form-group">
                <label for="exampleInputname">Disease : </label>
                <div></div>
                </div>
                
                <div class="form-group">
                <label for="exampleInputname">Medicine : </label>
                <div></div>
                </div>

                <div class="form-group">
                <label for="exampleInputname">Precaution : </label>
                <div></div>
                </div>


                <button type="submit" class="btn btn-info" onclick ="showUswer();">Next</button>
              </div>
            </div><!--panel panel-default-->
        </fieldset>       
        <div class="clearfix"></div>
        </div><!--panel body-->      
  </div>




  <script>
function showUser() 
{
//   if (str=="") 
//   {
//     document.getElementById("txtHint").innerHTML="";
//     return;
//   } 

  if (window.XMLHttpRequest) 
  {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else 
  { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() 
  {
    if (this.readyState==4 && this.status==200) 
    {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser2.php?q="+str,true);
  xmlhttp.send();
}
</script>





    <br>
    <link rel="stylesheet" type="text/css" href="css/footer.css"  />
  
    
    <!-- ........................................  Footer-Section starts here  ..................................... -->

    <?php
    include ('../includes/footer.php') ;
  ?>

    <!-- ........................................  Footer-Section ends here  ......................................... -->

  </body>
</html>