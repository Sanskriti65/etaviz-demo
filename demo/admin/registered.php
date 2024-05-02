<?php
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');

?>
<link rel="stylesheet" href="./assets/dist/css/registrationform.css">
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registration Form</li>
            </ol>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
    <div class="card mt-5">
      <div class="card-body">
      <center> 
        <h1 class="card-titl"> Mother and Child Protection Form </h1>
      </center>  
        <!-- Photo Upload Section -->
        <div class="container-fluid">
          <div class="row justify-content-center">
              <div class="col-sm-4">
                  <div class="card text-center">
                      <div class="card-body">
                        <div id="photo">
                            <img src="" id="text1-" alt="">
                        </div>
                        <div class="uploadan w-100">
                            <input id="uploaad" type="file" onchange="photo(event);" class="btn btn-dark w-100">
                        </div>
                      </div>
                    </div>
              </div>
          </div>
      </div>

      <!-- End of Photo Upload Section -->
      
          <div class="checkkbox">
         <center><p>Is the pregnancy high risks? <input id="checkk" type="checkbox" value=""></p></center>   
          </div> 


      <!-- Family Identification Section -->
      <form action="./php/form.php"  method="post">
      <h5  class="card-subtitle mt-4 mb-2 text-muted">Family Identification</h5>
      <div class="row">
      <div class="col-sm-7">
        <div class="form-group">
          <label > Name:</label>
          <input type="text" name="mother_name" placeholder="Name" class="form-control" id="mother_name">
          <span id="mother_nameError" ></span>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label for="dob"> DOB:</label>
          <input type="date" name="dob" oninput="calculateAge()" placeholder="DOB" class="form-control" id="dob">
          <span id="dobError" ></span>
          </div>
        </div>
      <div class="col-sm-2">
        <div class="form-group">
          <label for="age"> Age:</label>
          <input type="number" name="age" disabled placeholder="Age" class="form-control" id="age" readonly>
          <span id="ageError" ></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
        <div class="form-group">
          <label >Husband Name:</label>
          <input type="text" name="father_name" placeholder="Husband name" class="form-control" id="father_name">
          <span id="father_nameError" ></span>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
        <div class="form-group">
          <label>Address:</label>
          <input type="text" name="address" placeholder="Your Address" class="form-control" id="address">
          <span id="addressError" ></span>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
        <div class="form-group">
          <label >Mobile No.</label>
          <input type="number" name="mobile_number" placeholder="Mobile no." class="form-control" id="mobile_number">
          <span id="mobile_numberError" ></span>
        </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label >Husband Mobile No. </label>
          <input type="number" name="husband_mobile_number" placeholder="Husband Mobile no." class="form-control" id="husband_mobile_number">
          <span id="husband_mobile_numberError" ></span>
          </div>
        </div>
        </div>
        <div class="form-group">
          <label >MCTS/RCH ID:</label>
          <input type="number" name="mcts_rch_id" placeholder="Your MCTS/RCH Id no. " class="form-control" id="mcts_rch_id">
          <span id="mcts_rch_idError" ></span>
        </div>
        <button onclick="return validateForm()"  type="button" class="btn btn-primary">Next</button>
        <!-- End of Family Identification Section -->
        

        <!-- Pregnancy Record Section -->
        <div  id="section1" class="hidden">
        <h5  class="card-subtitle mt-4 mb-2 text-muted">Pregnancy Record</h5>
              <div class="form-group">
                  <label for="last_menstrual_period"> Date of last Menstrual Period :</label>
                  <input type="date" name="last_menstrual_period" placeholder="Enter your Last Menstrual Period" class="form-control" id="last_menstrual_period">
              </div>
        <div class="form-group">
          <label >Expected date of Delivery :</label>
          <input type="text" disabled name="expected_delivery_date" class="form-control" placeholder="Expected date of Delivery" id="expected_delivery_date" readonly>
        </div>
        <div class="form-group">
          <label >Number of Pregnancies / previous live birth :</label>
          <input type="number" name="number_of_pregnancies" placeholder="Number of Pregnancies / previous live birth" class="form-control" id="number_of_pregnancies">
        </div>
        <div class="form-group">
          <label >Last delivery conducted at ( Place  ):</label>
          <input type="number" name="last_delivery_conducted_at" placeholder="Last delivery conducted at " class="form-control" id="last_delivery_conducted_at">
        </div>
        <div class="form-group">
          <label >Current delivery :</label>
          <input type="number" name="current_delivery" placeholder="Current delivery " class="form-control" id="current_delivery">
        </div>
        <button onclick="nextSection(2)" type="button" class="btn btn-primary">Next</button>
        </div>
        <!-- End of Pregnancy Record Section -->
        

        <!-- Birth Record Section -->

        <div  id="section2" class="hidden">
        <h5 class="card-subtitle mt-4 mb-2 text-muted">Birth Record</h5>
        <div class="form-group">
          <label >Child's Name:</label>
          <input type="text" name="child_name" placeholder="Enter Child's Name" class="form-control" id="child_name">
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group ">
              <label >Date of Birth:</label>
              <input type="date" name="date_of_birth"  placeholder="Date of Birth" class="form-control" id="date_of_birth">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group ">
              <label>Birth Weight:</label>
              <input type="text" name="birth_weight" placeholder="Birth Weight" class="form-control" id="birth_weight">
            </div>
          </div>
        </div>

        <!-- Gender section -->

        <div class="row">
          <div class="col-sm-4">
        <div class="form-group">
          <label >Gender:</label>
          <select class="form-control" name="gender" id="gender">
            <option>Select Gender</option>
            <option>Male</option>
            <option>Female</option>
          </select>
        </div>
      </div>
        <div class="col-sm-8">
          <div class="form-group">
          <label for="birth_registration_number">Birth Registration Number:</label>
          <input type="text" name="birth_registration_number" placeholder="Enter Birth Registration No." class="form-control" id="birth_registration_number">
        </div>
      </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
          <label for="birth_registration_number">MCTS/RCH ID ( Child ):</label>
          <input type="text" name="mcts_rch_id_child" placeholder="Enter MCTS/RCH ID ( Child )" class="form-control" id="birth_registration_number">
        </div>
      </div>
      </div>
      <button onclick="nextSection(3)" type="button" class="btn btn-primary">Next</button>
        </div>

        <!-- End of Birth Record Section -->

        <!-- Institutional Identification Section  -->
        <div  id="section3" class="hidden">
        <h5  class="card-subtitle mt-4 mb-2 text-muted ">Institutional Identification</h5>
        <div class="row">
        <div class="col-sm-6">
        <div class="form-group">
          <label >AWW Number:</label>
          <input type="text" name="aww_number" placeholder="Enter AWW No." class="form-control" id="aww_number">
          </div>
        </div>

          <div class="col-sm-6">
            <div class="form-group">
            <label >Block / Village :</label>
          <input type="text" name="block_village_ward" placeholder="Enter name of Block/Village/Ward" class="form-control" id="block_village_ward">
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
        <div class="form-group">
          <label >ASHA:</label>
          <input type="text" name="asha_name" placeholder="Enter ASHA Name or ID" class="form-control" id="asha_name">
        </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
          <label >ANM:</label>
          <input type="text" name="anm_name" placeholder="Enter ANM Name or ID" class="form-control" id="anm_name">
        </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
        <div class="form-group">
          <label >SHC / Clinic:</label>
          <input type="text" name="clinic" placeholder="Enter  HSC/Clinic Name" class="form-control" id="clinic">
        </div>
        </div>
        </div>
      <div class="row">
        <div class="col-sm-6">
        <div class="form-group">
          <label>Hospital / FRU:</label>
          <input type="text" name="hospital" placeholder="Enter Hospital / FRU name " class="form-control" id="hospital">
        </div>
        </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label >PHC / Town:</label>
          <input type="text" name="phc_town" placeholder="Enter name of PHC / Town" class="form-control" id="phc_town">
        </div>
        </div>
        </div>
        <div class="form-group">
          <label >ANM Contact No.:</label>
          <input type="number" name="anm_contact_number" placeholder="Enter ANM Contact no." class="form-control" id="anm_contact_number">
        </div>

        <div class="form-group">
          <label >Hospital Contact No.:</label>
          <input type="number" name="hospital_contact_number" placeholder="Enter Hospital Contact no." class="form-control" id="hospital_contact_number">
        </div>

        <div class="row">
        <div class="col-sm-6">
       <div class="form-group">
          <label >AWC Reg No.:</label>
          <input type="text" name="awc_reg_no" placeholder="Enter AWC Reg No" class="form-control" id="awc_reg_number">

               </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
               <label >Date:</label>
                <input type="date" name="awc_reg_date" placeholder="Enter date  " class="form-control" id="awc_reg_date">
               </div>
              </div>
              </div>
              
            <div class="row">
              <div class="col-sm-6">
              <div class="form-group">
                <label >Sub-center Reg No.:</label>
                <input type="tel" name="sub_center_reg_no" placeholder="Enter Sub-center Reg No." class="form-control" id="sub_center_reg_no">
                </div>
              </div>
                <div class="col-sm-6">
                  <div class="form-group">
                 <label >Date:</label>
                  <input type="date" name="sub_center_reg_date" placeholder="Enter date  " class="form-control" id="sub_center_reg_date">
                 </div>
                </div>
                </div>

        <div class="form-group">
          <label for="referred_to">Referred to ( Doctor ):</label>
          <input type="text" name="referred_to" placeholder="Enter name of the referred to place" class="form-control" id="referred_to">
        </div>
        <button  onclick="nextSection(4)"  type="button" class="btn btn-primary">Next</button>
      </div>
        
        <!-- End of Institutional Identification Section -->
        <div  id="section4" class="hidden">
          <h5  class="card-subtitle mt-4 mb-2 text-muted ">Aadhar Details</h5>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Child's Aadhaar No.:</label>
                <input type="number" name="child_aadhar_no" placeholder="Enter Child's Aadhaar No." class="form-control">
              </div>
              <div class="form-group">
                <label>Mother's Aadhaar No.:</label>
                <input type="number" name="mother_aadhar_no" placeholder="Enter Mother's Aadhaar No." class="form-control">
              </div>
        </div>
        <!-- Submit Button  -->
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
      </div>
    </div>
</div>
</div>
<!-- End of Main Content Area-->
<script src="./assets/dist/js/functionality.js"></script>


<?php
include('include/footer.php');
?>