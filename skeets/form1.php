<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
body{
	background-color:#eee;}

.tr{
	max-width:607px;
	height:auto;
	margin:0px auto;
	background-color:#4f5e7d;
	}

.tr_img{max-width:607px;
     height:auto;
	 margin:0px auto;
	 margin-top:30px;
	}	
	
.tr_pad{
	margin-top:30px;
	box-sizing:border-box;
}

.tr_pad1{
	padding:0px 10px ;
}
.contain{
	background-color:#fff;
}
.text10{
	color:#333;
	width:100%;
	height:25px;}



.tr_spantext{color:#fff;
             font-weight:bold;
			 font-size:20px;
}
.tr_inputfield{
	max-width:100%;
	height:45px;
	border-radius:4px;
}
.tr_inputfield:focus {
	border:2px solid #313d55;
	box-shadow:2px rgb(255,255,255);}

.tr_inputfield1{
	width:100%;
	height:45px;
	border-radius:4px;
}
.tr_inputfield1:focus {
	border:2px solid #313d55;
	box-shadow:2px rgb(255,255,255);}
.tr_inputfield1:hover {
	border:2px solid #313d55;
	box-shadow:2px rgb(255,255,255);}

	
</style>
</head>

<body>
<div class="tr">
   <div class="tr_img">
      <img src="images/form.png" />
 
   </div> 
<div class="container" style="border:3px solid #313d55;border-top:none;margin-bottom:30px">
<div class="container tr_pad tr_pad1 text-center">
    <div class="col-md-12 tr_pad1">
      <img src="images/images/form_03.png" width="150" height="150" /> <br />
      <span class="tr_spantext">Upload Profile </span>
    </div>
</div>


<div class="container" style="padding:10px 60px">
    <div class="form-group">
        <input type="text" class="form-control tr_inputfield" placeholder="Profile Title"> <br /> 
    </div>
    <div class="form-group">
        <input type="text" class="form-control tr_inputfield"  placeholder="Description" > <br />
    </div>
    <div class="form-group">
       <textarea class="form-control tr_inputfield" rows="5" placeholder="Training & Certifications"></textarea> <br />
    </div>
    <div class="form-group">
       <select class="form-control tr_inputfield">
          <option style="color:#333">Experience</option>
          <option>Fresher</option>
          <option>0-1</option>
          <option>1-2</option>
          <option>2-3</option>
          <option>3-4</option>
          <option>4-5</option>
          <option>5-6</option>
          <option>6-7</option>
          <option>7-8</option>
          <option>8-9</option>
          <option>more than 9 years</option>
       </select> <br />
   </div>
   <div class="form-group">
        <input type="text" class="form-control tr_inputfield" placeholder="Current Working Organization"> <br /> 
   </div>
    <label for="usr" style="color:#fff;font-size:18px">Portfolio</label> 
   <a href="#" data-toggle="modal" data-target="#myModalform"> <img src="images/plainicon.png" width="30" height="30" style="margin-bottom:4px"  /> </a> <br />
    <div class="form-group"> 
       <textarea class="form-control tr_inputfield" rows="5" placeholder="Skills" style="margin-top:10px"></textarea> <br />
    </div>
    <div class="container  text-center">
     <input type="submit" class="btn btn-primary" style="background-color:#283246"  />
    </div>   
   
</div>    
</div>

<!-- Modal -->
  <div class="modal fade" id="myModalform" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header text-center" style="border-bottom:0px !important">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="color:#4f5e7d">ADD PORTFOLIO</h4>
        </div>
        <div class="modal-body" style="padding:0px 50px;">
            <div class="form-group">
                <input type="text" class="form-control tr_inputfield1" placeholder="Project Name"> <br /> 
            </div>
            <div class="form-group"> 
                 <textarea class="form-control tr_inputfield1" rows="5" placeholder="Description"></textarea> <br />
            </div>
            
            <div class="form-group">
                 <label for="port" style="color:#4f5e7d;font-size:18px">Portfolio</label> &nbsp;&nbsp;&nbsp;
                 <input type="file" style="display:inline-block" />
            </div> <br />
            <div class="form-group">
                <input type="text" class="form-control tr_inputfield1" placeholder="Technology Used"> <br /> 
            </div>
            <div class="form-group">
                <input type="text" class="form-control tr_inputfield1" placeholder="URL"> <br /> 
            </div>
         
        </div>
        <div class="modal-footer" style="border-bottom:0px !important">
          <button type="button" class="btn btn-primary" data-dismiss="modal">SUBMIT</button>
        </div>
      </div>
      
    </div>
  </div>









</div>
</body>
</html>