     @extends('layout.masterlayouts')
     <!-- CONTACT SECTION -->
     @section('contents')
         <section id="contact" class="py-3">
             <div class="container">
                 <div class="row">
                     <div class="col-md-4">
                         <div class="card p-4">
                             <div class="card-body">
                                 <h4>{{__ ('contact.contact_us')}}</h4>
                                 <p>{{__ ('contact.contact_info')}}</p>
                                 <h4>{{__ ('contact.address')}}</h4>
                                 <p>{{__ ('contact.address_pl')}}</p>
                                 <h4>{{__ ('contact.email')}}</h4>
                                 <p>{{__ ('contact.email_address')}}</p>
                                 <h4>{{__ ('contact.phone')}}</h4>
                                 <p>{{__ ('contact.phone_number')}} </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-8">
                         <div class="card p-4">
                             <form method='POST' action="{{ route('contact.store') }}">
                                @csrf
                                <div class="card-body">
                                    <h3 class="text-center">{{__ ('contact.fill_form')}}</h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="firstName" type="text" class="form-control" placeholder="{{__ ('contact.name')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="lastName" type="text" class="form-control" placeholder="{{__ ('contact.l_name')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="email" type="text" class="form-control" placeholder="{{__ ('contact.place_email')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="phoneNumber" type="text" class="form-control" placeholder="{{__ ('contact.place_phone')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="{{__ ('contact.message')}}"></textarea>
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
                 <h1>{{__('contact.team')}}</h1>
                 <hr>
                 <div class="row">
                     <div class="col-md-3">
                         <img src="{{ asset('img/name.jpg') }}" alt="" class="img-fluid rounded-circle mb-2">
                         <h4>{{__('contact.t_name')}}</h4>
                         <small>{{__('contact.job')}}</small>
                     </div>
                     <div class="col-md-3">
                         <img src="" alt="" class="img-fluid rounded-circle mb-2">
                         <h4>{{__('contact.t_name1')}}</h4>
                         <small>{{__('contact.job1')}}</small>
                     </div>
                     <div class="col-md-3">
                         <img src="" alt="" class="img-fluid rounded-circle mb-2">
                         <h4>{{__('contact.t_name2')}}</h4>
                         <small>{{__('contact.job2')}}</small>
                     </div>
                     <div class="col-md-3">
                         <img src="" alt="" class="img-fluid rounded-circle mb-2">
                         <h4>{{__('contact.t_name3')}}</h4>
                         <small>{{__('contact.job3')}}</small>
                     </div>
                 </div>
             </div>
         </section>
     @endsection

     @section('title')
         Contact Us
     @endsection
