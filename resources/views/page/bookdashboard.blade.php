
@extends('layouts.book')
@section('section')
   
    <div class="card-body bg-info text-white mailbox-widget pb-0">
        <h2 class="text-white pb-3">Booking Dashboard</h2>
        <ul class="nav nav-tabs custom-tab border-bottom-0 mt-4" id="myTab" role="tablist">
            
            <li class="nav-item">
                <a class="nav-link active" id="inbox-tab" data-toggle="tab" aria-controls="inbox" href="#inbox" role="tab" aria-selected="true">
                    <span class="d-block d-md-none"><i class="ti-email"></i></span>
                    <span class="d-none d-md-block"> INBOX</span>
                </a>
            </li>

        </ul>
    </div>

<div class="container">
    

    <div class="row">
        <div class="col-md-16">
            <div class="card">
               
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
                        <div>
                            <div class="row p-4 no-gutters align-items-center">
                                <div class="col-sm-12 col-md-6">
                                    <h3 class="font-light mb-0"><i class="ti-email mr-2"></i></h3>
                                </div>
                            </div><div class="row">
                                <div class="col-md-12">
                                    <div class="card-body p-0">
                                        <table class="table table-striped custom-table mb-0 datatable">
                                            <thead>
                                                <tr>
                                                    <th>Medication's Name</th>
                                                    <th>Type of Drug</th>
                                                    <th>Contact Number</th>
                                                    <th>Dosage</th>
                                                    <th>From</th>
                                                    <th>To</th>
                                                    <th>Frequency</th>
                                                    <th>Days</th>                         
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                    
                                            <tbody>
                                                <!--Data table for reminder--> 
                                            
                                                    <tr>
                                                    <td hidden class="id"></td>
                                                    <td class="medname"></td>
                                                    <td class="drugtype"></td>
                                                    <td class="contact_num"></td>
                                                    <td class="dosage"></td>
                                                    <td hidden class="from_date"></td>
                                                
                                                       
                                                        </tr>
                                             
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <nav aria-label="Page navigation example" >
                                    <ul class="pagination justify-content-end">
                                      <li class="page-item disabled">       
                                      </li>
                                       <!-- pagination number--> 
                          
                                      </li>
                                    </ul>
                                  </nav>
                            </div>
                            <!-- Mail list-->
                            <div class="table-responsive">
                                <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                    <tbody>
                                        <!-- row -->
                                        <tr>
                                            <!-- label -->
                                            <td class="pl-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="cst1" />
                                                    <label class="custom-control-label" for="cst1">&nbsp;</label>
                                                </div>
                                            </td>
                                            <!-- star -->
                                            <td><i class="fa fa-star text-warning"></i></td>
                                            <td>
                                                <span class="mb-0 text-muted">Hritik Roshan</span>
                                            </td>
                                            <!-- Message -->
                                            <td>
                                                <a class="link" href="javascript: void(0)">
                                                    <span class="badge badge-pill text-white font-medium badge-danger mr-2">Work</span>
                                                    <span class="text-dark">Lorem ipsum perspiciatis-</span>
                                                </a>
                                            </td>
                                            <!-- Attachment -->
                                            <td><i class="fa fa-paperclip text-muted"></i></td>
                                            <!-- Time -->
                                            <td class="text-muted">May 13</td>
                                        </tr>
                                        <!-- row -->
                                        <tr>
                                            <!-- label -->
                                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>              
                </div>
            </div>
        </div>
    </div>
</div>

    @section('script')
    
    @endsection
@endsection
