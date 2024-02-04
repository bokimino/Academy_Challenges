@extends('layouts.app')

@section('content')
    <h1 class="text-center py-4">Admin Dashboard</h1>

   
@include('layouts.create-vehicle-modal')

<button id="openRegistrationForm" class="text-green-500">Register a Vehicle</button>
<table class="container mx-auto mt-2 text-center" id="vehicles-table">
        <thead>
            
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Plate Number</th>
                <th>Insurance Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    
    <script>
        $(document).ready(function () {
            
            function fetchVehicles() {
                $.ajax({
                    url: '/api/vehicles',
                    method: 'GET',
                    success: function (data) {
                        try {
                            console.log('Received data:', data);

                            
                            if (Array.isArray(data.vehicles)) {
                               
                                $('#vehicles-table tbody').empty();

                                data.vehicles.forEach(function (vehicle) {
                                    var row = `
                                        <tr>
                                            <td>${vehicle.id}</td>
                                            <td>${vehicle.brand}</td>
                                            <td>${vehicle.model}</td>
                                            <td>${vehicle.plate_number}</td>
                                            <td>${vehicle.insurance_date}</td>
                                            <td class="my-1">
                                            <a class="action-button bg-green-500 text-white" href="/admin/vehicles/edit/${vehicle.id}">Edit</a>
                                            
                                                ${!vehicle.deleted_at ? `
                                                    <form class="delete-form" action="/admin/vehicles/${vehicle.id}" method="post" style="display: inline;">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="action-button bg-red-500 text-white">Delete</button>
                                                    </form>` : ''}
                                            </td>
                                        </tr>
                                    `;
                                    $('#vehicles-table tbody').append(row);
                                });
                            } else {
                                console.error('Invalid data format. Expected an array at data.vehicles.');
                            }
                        } catch (error) {
                            console.error('Error processing data:', error);
                        }
                    },
                    error: function (error) {
                        console.error('Error fetching vehicles:', error);
                    }
                });
            }

           
            $('#vehicles-table').on('submit', '.delete-form', function (event) {
                event.preventDefault(); 

                var form = $(this);

               
                $.ajax({
                    url: form.attr('action'),
                    method: 'POST',
                    data: form.serialize(),
                    success: function (response) {
                        console.log(response);
                        
                        if (response.message === 'Vehicle deleted') {
                           
                            form.closest('tr').remove();
                        }
                    },
                    error: function (error) {
                        console.error('Error deleting vehicle:', error);
                    }
                });
            });

            
            fetchVehicles();

            setInterval(fetchVehicles, 15000);
        });

        $(document).on('click', '.editVehicle', function (event) {
    event.preventDefault();
    var vehicleId = $(this).data('id');
    window.location.href = `/api/vehicles/${vehicleId}/edit`;
});

    </script>
@endsection
