
<div class="hidden top-1/2 left-1/2 bg-white p-6 rounded-md shadow-md mx-8" id="registrationModal" style="display: none;">
    <form class="w-full max-w-lg" id="vehicleRegistrationForm">
        @csrf
     <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="brand">
                      Brand
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="brand" type="text">
          </div>
          <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="model">
                      Model
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="model" type="text">
          </div>
    </div>


    <div class="flex flex-wrap -mx-3 mb-6">

            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="plate_number">
                      Plate Number:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="plate_number" type="text" >
              
            </div>
            <div class="w-full md:w-1/2 px-3">
                     <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="insurance_date">
                      Insurance Date:
                     </label>
                     <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="date" name="insurance_date">
            </div>
   </div>

        <button class="mx-auto" type="submit">Register</button>
        
    </form>
</div>

<script>
    
    $(document).ready(function () {
    $('#openRegistrationForm').click(function () {
        $('#registrationModal').show();
        $(this).hide(); 
    });

    $('#vehicleRegistrationForm').submit(function (e) {
        e.preventDefault();

        $.ajax({
            url: '/api/vehicles',
            method: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                console.log('Vehicle registered:', response);

                $('#registrationModal').hide();
                $('#openRegistrationForm').show(); 
            },
            error: function (error) {
                console.error('Error registering vehicle:', error);
            }
        });
    });
});
</script>
