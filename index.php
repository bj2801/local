<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Application Form</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
      <div class="container">
       
      <div class="apply_box">
    
          <img src="logo.png" class="centerImg" width="120" height="100">
          
      
        <h1>
          Job Application
          <span class="title_small"></span>
        </h1>
        <form action="https://formsubmit.co/e4f687bb577945e8ff16ef286e11a9af" method="POST">
          <div class="form_container">
            <div class="form_control">
              <label for="first_name"> First Name </label>
              <input id="first_name" name="Name"  placeholder="Enter First Name..."/>
            </div>
            <div class="form_control">
              <label for="last_name"> Last Name </label>
              <input id="last_name" name="Last Name" placeholder="Enter Last Name..."              />
            </div>
            <div class="form_control">
              <label for="email"> E-mail </label>
              <input type="email" id="email" name="email" placeholder="Enter Email..."
              />
            </div>
            <div class="form_control">
              <label for="job_role"> Job Role </label>
              <select id="job_role" name="Job Role">
                <option value="">Select Job Role</option>
                <option value="Seaman">Seaman</option>
                
              </select>
            </div>
            <div class="textarea_control">
              <label for="address"> Address </label>
              <textarea
                id="address"
                name="address"
                row="4"
                cols="50"
                placeholder="Enter Address"
              ></textarea>
            </div>
            <div class="form_control">
              <label for="city"> City </label>
              <input id="city" name="city" placeholder="Enter City Name..." />
            </div>
            <div class="form_control">
              <label for="pincode"> Postal Code </label>
              <input
                type="number"
                id="pincode"
                name="Zip code"
                placeholder="Enter Postal Code Name..."
              />
            </div>
            <div class="form_control">
              <label for="date"> Date </label>
              <input value="2022-01-10" type="date" id="date" name="date" />
            </div>
            <div class="form_control">
              <label for="upload"> Upload Your Picture  </label>
              <input type="file" id="upload" name="upload" />
            </div>
          </div>
          <div class="button_container">
            <button type="submit">Apply Now</button>
          </div>
        </form>
      
       

  
  </body>
</html>
