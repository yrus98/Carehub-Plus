

<html>
<head>
<style type="text/css">
    h4{
        margin-left: 25px;
    }    
    h1{
     color: #902833;
    font-family: Helvetica ;
    }
    #my{   
    font-family: Helvetica ; 
    }
     .outer_proxy {
        width: 100%;
        height: 100%;
        opacity: 0.2;
        top: 0 ;
        left: 0;
        bottom: 0;
        right: 0;
        position: fixed;
        background: transparent url("<?php echo site_url('assets/images/images.ng'); ?>") no-repeat fixed center center;
    } 
    img{
        float: left;
        margin-left: 50px;
    }
    h6{position:fixed;
   left:0px;
   bottom:0px;
   height:10px;
   width:100%;
    }  
    #header{
        color: #47484b;
        font-family: sans-serif ; 
        padding: 10px;
        margin: 0px;text-align: center ;
    }
    h5{
        padding: 0px;
        margin: 0px ;
        color: #47484b;
        vertical-align: middle ;
        float:inherit ;
        text-align: center ;
    }
    #myy{
        margin-left: -80px;
    }
    #verify{
        float: right ;
        padding: 0px;
        margin-top: 145px;
    }
</style>
  
</head>
<body >
    <div id="my">
        <div class="outer_proxy" ></div>
        <img src="<?php echo site_url('assets/images/HealthyCity.PNG'); ?>" width="15%" height="15%"><div id="myy"><h1 id="header">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Urban Health Center,Rajkot</h1>
        <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address : <?php echo $patients[0]['hospital_address']; ?> </h5>
        <h5>UHC Center Name :<?php echo $patients[0]['hospital_name']; ?></h5><h5>Phone: 0281 237 6712</h5></div>
        <br>
        <hr>
            <center><h1>Medical Report</h1></center>
    
        <p><h4>Patient ID :  <?php echo $patients[0]['patient_unique_id']; ?></h4>
        <p><h4>Patient Name : <?php echo $patients[0]['patient_name']; ?></h4>
        
        <p><h4>Patient Deases : <?php for ($i=0; $i < count($diaseases_ids); $i++) { 
            echo $diaseases_ids[$i].' ';
        } ?></h4>
        <p><h4>Contact No : <?php echo $patients[0]['patient_phone']; ?> </h4>
        <p><h4>Address : <?php echo $patients[0]['patient_address']; ?></h4>
        <p><h4>Gender : <?php if($patients[0]['patient_gender']==1){ echo "Male"; }elseif ($patients[0]['patient_gender']==2) {
            echo "Female"; }elseif ($patients[0]['patient_gender']==0) {
                echo "Other"; }
         ?> </h4>
       
        <p><h4>Age : <?php echo $patients[0]['patient_age']; ?> </h4>
        <p><h4>Blood Group : <?php echo $report[0]['Patient_bloodgroup']; ?> </h4>
        <p><h4>UHC Center Name : <?php echo $patients[0]['hospital_name']; ?> </h4>    
        <p><h4>check up date: <?php echo $patients[0]['create_date']; ?> </h4>   
        <br>
    
</div><div id="verify"><p>Signature : </p><p>(for verification purpose only)</p></div> <footer><center><u><h6><hr><br>Report Generated by UHC Rajkot</h6></u></center></footer>
</body>
</html>