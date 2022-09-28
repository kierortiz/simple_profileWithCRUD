<title>Create Account</title>
</head>
<section class="vh-100 bg-image" style="background-color: blue">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="post" action="<?= site_url('MainController/register')?>">

                <div class="form-group">
                  <input type="text" id="regName" name="regName" class="form-control" placeholder="Enter Full Name" required/>
                  <label class="form-label" for="regName">Full Name</label>
                </div>

                <div class="form-group">
                  <input type="email" id="regEmail" name="regEmail" class="form-control" placeholder="Email" required/>
                  <label class="form-label" for="regEmail"> E-mail Address</label>
                </div>

                <div class="form-group">
                  <input type="password" id="regPass" name="regPass" class="form-control" placeholder="*********" minlength="4" title="must start with 09" required/> 
                  <label class="form-label" for="regPass">Password</label> 
                  <center><h3 id="indicator" style="color: red"></h3></center>
                </div>

                <div class="form-group">
                  <input type="text" id="regNum" name="regNum" class="form-control" placeholder="09" pattern="[0]{1}[9]{1}[0-9]{9}"  minlength="11" maxlength="11" required />
                  <label class="form-label" for="regNum">Contact Number (Numbers Only)</label>
                </div>

                <div class="form-group">
                  <input type="text" id="regAdd" name="regAdd" class="form-control" placeholder="Address" required/>
                  <label class="form-label" for="regAdd">Address</label>
                </div>

                <div class="form-group">
                  <input type="text" id="regSchool" name="regSchool" class="form-control" placeholder="Ex. Our Lady of Fatima University" required/>
                  <label class="form-label" for="regSchool">School</label>
                </div>

                <div class="form-group">
                  <input type="text" id="regCourse" name="regCourse" class="form-control" placeholder="Ex. BSIT" required/>
                  <label class="form-label" for="regCourse">Course</label>
                </div>

                <center><button type="submit" class="btn btn-primary" value="register">Register</button></center>
                    <br>
                <center><a href="<?= site_url('MainController/view')?>"><button type="button" class="btn btn-danger">Cancel</button></a></center>
                

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- <script src="<?= base_url(); ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
      Swal.fire(
        '<?= ("Successfully created an account"); ?>',
        '',
        'error'
      )
</script> -->
