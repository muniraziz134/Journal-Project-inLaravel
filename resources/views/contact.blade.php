     @extends('layout.masterlayouts')
     <!-- CONTACT SECTION -->
     @section('contents')
         <section id="contact" class="py-3">
             <div class="container">
                 <div class="row">
                     <div class="col-md-4">
                         <div class="card p-4">
                             <div class="card-body">
                                 <h4>Contact Us On</h4>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                 <h4>Address</h4>
                                 <p>KDR University Sharaih Faculty KDR</p>
                                 <h4>Email</h4>
                                 <p>Sharaih Faculty@gmail.com</p>
                                 <h4>Phone</h4>
                                 <p>(93) 70 2306789 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-8">
                         <div class="card p-4">
                             <form method='POST' action="{{ route('contact.store') }}">
                                @csrf
                                <div class="card-body">
                                    <h3 class="text-center">Please fill out this form to contact us</h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="firstName" type="text" class="form-control" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="lastName" type="text" class="form-control" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="email" type="text" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="phoneNumber" type="text" class="form-control" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-outline-danger btn-block">
                                        </div>
                                    </div>
                                </div>
                            </from>
                            </div>
                        </div>
                 </div>
             </div>
         </section>

         <!-- STAFF SECTION -->
         <section id="staff" class="py-5 text-center bg-dark text-white">
             <div class="container">
                 <h1>Our Staff</h1>
                 <hr>
                 <div class="row">
                     <div class="col-md-3">
                         <img src="{{ asset('img/name.jpg') }}" alt="" class="img-fluid rounded-circle mb-2">
                         <h4>Sami Nang</h4>
                         <small>FrontEnd Developer</small>
                     </div>
                     <div class="col-md-3">
                         <img src="" alt="" class="img-fluid rounded-circle mb-2">
                         <h4>Hazratullah Yasin</h4>
                         <small>FrontEnd Developer</small>
                     </div>
                     <div class="col-md-3">
                         <img src="" alt="" class="img-fluid rounded-circle mb-2">
                         <h4>Rohullah Patmal</h4>
                         <small>Backend Developer</small>
                     </div>
                     <div class="col-md-3">
                         <img src="" alt="" class="img-fluid rounded-circle mb-2">
                         <h4>Munir Ahmad Azizi</h4>
                         <small>Backend Developer</small>
                     </div>
                 </div>
             </div>
         </section>
     @endsection

     @section('title')
         Contact Us
     @endsection
