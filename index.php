<?php
     $con = new mysqli("localhost", "root", "", "edutestnepal");
    //echo $con;
    if($con->connect_error){
        die("error");
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <body id="page-top" class="index">
     <!-- data-pinterest-extension-installed="cr1.3.4"> -->

    <!-- Navigation -->
    

    <section class="home" id="home">
       <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#"></a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="#about">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
            
        </div>
        
    </nav>
    <div class="container select-univ">
      <p align="center" class="exam-heading mb-5"> Welcome To Online Exam System </p>

        <select class="text-center" id="dynamic_select" style="text-align:center; padding: 5px 20px; color:#fff; background: rgb(71, 69, 69); font-size:20px ; border-radius: 19px">
          <option > ---------Please Select University --------</option>
          <option value="https://edutestnepal.com/puentrance/login/index.php"><a >Purbanchal University</a></option>
          <option>Tribhuvan University</option>
          <option>Kathamandu University</option>
          <option>Pokhara University</option>
          <option>Nepal Open University</option>
          <option>Nepal Sanskrit University</option>
          <option>Mid Western University</option>
          <option>Lumbuni Buddhist University</option>
          <option>Far Western University</option>
          <option>Aggriculture and Forestry University</option>
        </select>

      
    </div>
    </section>
    <a href="#home"><div id="moveTop" class='d-none' style="background-color: rgb(202, 81, 81);font-size: 35px; text-align: center; z-index: 5; position:fixed; bottom: 90px; right: 40px; border-radius: 35px;color:#fff; width: 60px; height: 60px;padding: 5px;" title="Top">^</div></a>
    <div> <!--height: 1000px; removed from style -->
        <!-- just to make scrolling effect possible -->
			<h2 class="myH2 display-1" id="about">About-Us</h2>
			<!-- <div class="my-cart"> -->
        <div class="container" >

          <div class="row row-cols-md-3 content-holder">
            <?php
                $rel = $con->query("select * from card");
                while($row = $rel->fetch_assoc()){
                    echo '<div class="card" id="'.$row['id'].'">'.
                    '<img src="images/'.$row["img"].'" class="card-img-top" alt=""/>'.
                    '<div class="card-body"><p class="card-text" style="font-size: 1.8rem;">'.$row["des"].'</p></div></div>';
                }
            ?>
            
          </div>
        </div>

        <div class="text-center"><button type="button" data-toggle="modal" data-target="#addNewModal" class="btn btn-outline-primary rounded-pill" style="width: 200px; font-size: 25px; margin: 30px auto 0 auto;">Add more</button></div>
        
    </div>
        
      <!-- Modal -->
      <div class="modal fade" id="addNewModal" tabindex="-1" aria-labelledby="addNewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
         <form method="post" action="upload.php" enctype = "multipart/form-data">
          <div class="modal-content">
             <div class="modal-header">
              <h5 class="modal-title" id="addNewModalLabel">Add New</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-row">
                <div class="col-12 mb-3">
                  <div id="image-holder" class="img-holder"></div>
                  <label for="fileUpload">Select Image</label>
                  <input type="file" class="form-control-file fileUpload" name="img" 
                   accept=".png, .jpg, .jpeg" id="fileUpload" />
                   
                </div>
                <div class="col-12  mb-3">
                  <label for="desc">Description</label>
                  <input type="text" class="form-control" id="desc" name="desc" placeholder="enter some description" required />
                   
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <input type="submit" class="btn btn-success"  name="upload" value="Save" />
              <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
            </div>
          </div>
         </form>               
        </div>
      </div>


      
      


      <!-- contact section =====================
        ==================================== -->
        <section id="contact" class="wow fadeInUp">
          <div class="container">
            <div class="section-header">
              <h1  align="center" class="display-1"> Contact Us</h1>
              <p></p>
            </div>
            <hr/>
            <div class="row contact-info">
    
              <div class="col-md-4">
                <div class="contact-address">
                  <i class="ion-ios-location-outline"></i>
                  <h3 style="font-size: 3vh;">Address</h3>
                  <address style="font-size: 2vh;">Lokanthali,Bhaktapur</address>
                </div>
              </div>
    
              <div class="col-md-4">
                <div class="contact-phone">
                  <i class="ion-ios-telephone-outline"></i>
                  <h3 style="font-size: 3vh;">Phone Number</h3>
                  <p><a href="tel:+977 {{contactPhone}}" style="font-size: 2vh;">+977 9851040808</a></p>
                </div>
              </div>
    
              <div class="col-md-4">
                <div class="contact-email">
                  <i class="ion-ios-email-outline"></i>
                  <h3 style="font-size: 3vh;">Email</h3>
                  <p><a href="mailto:{{contactEmail}}" style="font-size: 2vh;">pralhad@kcc.edu.np</a></p>
                </div>
              </div>
    
            </div>
          </div>
    
          <div class="container my-4">
    
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56534.47473138243!2d85.32446556551652!3d27.673885011404455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1a1c87487f6f%3A0x83ffd992b4b2d081!2sLokanthali%2C%20Madhyapur%20Thimi%2044600!5e0!3m2!1sen!2snp!4v1602788564223!5m2!1sen!2snp" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
    
          <div class="container mt-5 p-5">
            <div class="form">
              <p align="center" class="display-1 mb-5">Message</p>
              <div id="errormessage"></div>
              <form action="#" method="post">
                <div class="form-row">
                  <div class="form-group col-sm-12">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" style="font-size: 2vh; margin-top:10px"/>
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-sm-12">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" style="font-size: 2vh; margin-top:10px"/>
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" style="font-size: 2vh; margin-top:10px"/>
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" style="font-size: 2vh; margin-top:10px"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center ">
                  <button type="submit" class="btn btn-primary rounded-pill w-300 px-5"
                  style="font-size: 20px; margin:10px 0px 40px 0px"> Send </button></div>
              </form>
            </div>
          </div>
        </section>
        <!-- contact sectio close ====================
        -============================================= -->
    </div>
    <footer class="container-fluid p-5 bg-dark text-white">
      <p class="text-center display-3"> &copy;All Rights Reserved | 2020</p>
    </footer>

    
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
      <div class="modal-dialog">
       <form method="post" action="update.php" enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="updateModalLabel">Update</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-row">
              <div class="col-12 mb-3">
                <div id="Image-holder" class="img-holder"></div>
                <input type="hidden" id="myid" name="id" />
                <label for="fileUpload">Select Image</label>
                <input type="file" class="form-control-file fileUpload" name="img-update" id="fileUpload-update" />
                 
              </div>
              <div class="col-12  mb-3">
                <label for="des">Description</label>
                <input type="text" class="form-control" id="des" name="des-update" placeholder="enter some description" required />
                 
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-secondary" name="update" >Update</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
          </div>
        </div>
       </form> 
      </div>
    </div>



<!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src="js/scripts.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
      var filePath ="", des="";
      $(function(){
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
                $('#moveTop').toggleClass('d-none');
            } else {
                $('.nav').removeClass('affix');
            }
        });
        
      // bind change event to select
      $('#dynamic_select').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          //return false;
      });

        $('.card').click(function(){
          $(this).addClass('update');
          $('#updateModal').modal('show');
          $('#Image-holder').html(
              "<img src='"+$(this).find('img').attr('src')+"' width=\"350\" height=\"300\" style='margin:auto'/>"
            );
          $('#des').val($(this).find('p').html());
          $('#myid').val($(this).attr("id"));
        });

        $('#btnUpdate').click(function(){
          $('.update').find('img').attr({'src' : filePath});
          $('.update').find('p').html($('#desc-update').val());

        });

        $('.fileUpload').on('change',function (e)
        {
            filePath = URL.createObjectURL(e.target.files[0]);

             $('.img-holder').html(
              "<img src='"+filePath+"' width=\"350\" height=\"300\" style='margin:auto'/>"
            );
        });
        $('#desc').change(function(){
          des = $(this).val();
        });
    });
    var btnTest = document.querySelector("#test").addEventListener('click', add);
    function add(){
      document.querySelector('#desc').value = "";
      document.querySelector('#fileUpload').value="";
      document.querySelector('#image-holder').innerHTML = "";
      
      if(filePath != "" && des != ""){
        $('.content-holder').append(
          '<div class="card">'+ 
              '<img src="'+filePath+'" class="card-img-top" alt="">'+
              '<div class="card-body">'+
                '<p class="card-text" style="font-size: 1.8rem;">'+des+'</p>'+
              '</div>'+
            '</div>'
        );
      }
      else
        alert('please provide description or image');
    }
     
    </script>
</body>
</html>