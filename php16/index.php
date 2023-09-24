<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Website Builder</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <div class="pageTwoCover">
    <div class="container">
        <h1 class="text-center pt-5">Welcome to the Dynamic Website Builder</h1>
        <div class="row">
              <div class="col-4">
              <form action="process_form.php" method="post" class="bg-white p-3">
                   <div class="form-group">
                      <label for="cover_image_url">Cover Image URL:</label>
                      <input type="text" name="cover_image_url" id="cover_image_url" required class="form-control">
                   </div>
        
                   <div class="form-group">
                      <label for="title">Title:</label>
                      <input type="text" name="title" id="title" required class="form-control">
                   </div>
        
                   <div class="form-group">
                      <label for="subtitle">Subtitle:</label>
                      <input type="text" name="subtitle" id="subtitle" required class="form-control">
                   </div>
        
                   <div class="form-group">
                            <label for="personDescription">Something about you</label>
                            <textarea class="form-control" id="personDescription" name="personDescription" rows="3"></textarea>
                  </div>
    
                   <div class="form-group">
                      <label for="phone_number">Phone Number:</label>
                      <input type="tel" name="phone_number" id="phone_number" required class="form-control">
                   </div>
    
                  <div class="form-group">
                      <label for="location">Location:</label>
                      <input type="text" name="location" id="location" required class="form-control">
                  </div>

                    <label for="category">Do you provide services or products?</label>
                   <select name="category" id="category" required class="form-control">
                       <option value="Services">Services</option>
                       <option value="Products">Products</option>
                   </select>

              </div>

              <div class="col-4">
                
                   <div class="bg-white p-3">
                   <div class="form-group">
                      <label for="product1_description">Description of service/product 1:</label>
                      <input type="text" name="product1_description" id="product1_description" required class="form-control">
                   </div>
                   <div class="form-group">
                      <label for="product1_url">Image URL 1:</label>
                      <input type="url" name="product1_url" id="product1_url" required class="form-control">
                   </div>

                   <div class="form-group">
                      <label for="product2_description">Description of service/product 1:</label>
                      <input type="text" name="product2_description" id="product2_description" required class="form-control">
                   </div>
                   <div class="form-group">
                      <label for="product2_url">Image URL 1:</label>
                      <input type="url" name="product2_url" id="product2_url" required class="form-control">
                   </div>

                   <div class="form-group">
                      <label for="product3_description">Description of service/product 1:</label>
                      <input type="text" name="product3_description" id="product3_description" required class="form-control">
                   </div>
                   <div class="form-group">
                      <label for="product3_url">Image URL 1:</label>
                      <input type="url" name="product3_url" id="product3_url" required class="form-control">
                   </div>
                   </div>
              </div>

              <div class="col-4 ">
               <div class="bg-white p-3">
               <div class="form-group">
                
                <label for="company_description">Provide a description of your company, something people should be aware of before they contact you</label>
                <textarea class="form-control" id="company_description" name="company_description" rows="3"></textarea>
               </div>

                <div class="form-group">
                   <label for="linkedin_url">Linkedin:</label>
                   <input type="url" name="linkedin_url" id="linkedin_url" class="form-control">
                </div>
                <div class="form-group">
                   <label for="facebook_url">Facebook:</label>
                   <input type="url" name="facebook_url" id="facebook_url" class="form-control">
                </div>
                <div class="form-group">
                   <label for="twitter_url">Twitter:</label>
                   <input type="url" name="twitter_url" id="twitter_url" class="form-control">
                </div>
                <div class="form-group">
                   <label for="google_plus_url">Google+:</label>
                   <input type="url" name="google_plus_url" id="google_plus_url" class="form-control">   
                </div>
               </div>
              </div>

       

        
        <button type="submit" class="btn btn-secondary mx-auto w-50 my-5">Submit</button>

    </form>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="ha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>
</html>
