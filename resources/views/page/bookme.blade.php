@extends('layouts.userpge')

@section('section')


    <!-- Booking Start -->
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-12">
             
                <div class="" id="book">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Book For A Service</h1>
                        <form action="{{ route('add') }}" method="POST">
                            @csrf
                            <div class="row g-3">

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0 "
                                    id="name" name="name" value="{{ old('name') }}"  placeholder="Your Name" style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="number" class="form-control border-0"  id="contact_number" name="contact_number" value="{{ old('contact_number') }}"  
                                    placeholder="Contact Number" style="height: 55px;">   
                                </div>

                                <div class="col-12 col-sm-6">
                                    <select class="select form-select border-0" id="engine_type" name="engine_type" style="height: 55px;">
                                        <option selected>Vehicle Engine Type</option>
                                        <option value="1">Diesel</option>
                                        <option value="2">Petrol</option>
                                        <option value="3">Hybrid</option>
                                        <option value="3">Electric</option>
                                    </select>
                                </div>   

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" id="license_details" name="license_details" value="{{ old('license_details') }}"  
                                    placeholder="Vehicle License Details" style="height: 55px;">
                                       
                                </div>
                             
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" id="book" name="book" style="height: 55px;">
                                        <option selected>Booking type</option>
                                        <option value="1">Annual Service</option>
                                        <option value="2">Major Service</option>
                                        <option value="3">Repair/Fault</option>
                                        <option value="3">Major Repair</option>
                                    </select>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                    <input type="date"
                                        class="form-control border-0 datetimepicker-input"
                                        placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;" id="date" name="date">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control border-0" name="info" value="{{ old('info') }}" placeholder="Special Request"></textarea>
                                </div>

                                <div class="col-12 submit-section">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Book Now</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->


@endsection

@section('script')
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset ('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset ('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset ('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset ('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset ('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset ('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset ('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset ('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset ('assets/js/main.js')}}"></script>

      <!-- Template Javascript for date picker-->
      <script src="{{ asset ('assets/js/main.js')}}"></script>

      <script language="javascript">
          var today = new Date();
          var dd = String(today.getDate()).padStart(2, '0');
          var mm = String(today.getMonth() + 1).padStart(2, '0');
          var yyyy = today.getFullYear();
      
          today = yyyy + '-' + mm + '-' + dd;
          $('#date').attr('min',today);       
      </script>

<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>
        <script>
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction() {
              document.getElementById("myDropdown").classList.toggle("show");
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(e) {
              if (!e.target.matches('.dropbtn')) {
              var myDropdown = document.getElementById("myDropdown");
                if (myDropdown.classList.contains('show')) {
                  myDropdown.classList.remove('show');
                }
              }
            }
            </script>
@endsection