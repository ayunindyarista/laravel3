@extends('admin/template2/Admin2')
@section('konten')
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Edit Customer</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    @foreach($customer as $c)
                    <form class="form-horizontal form-label-left" action="CategoriesUpdate" method="POST">
                      
                      {{ csrf_field() }}

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customerid"> CUSTOMER ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="customerid" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                          data-validate-words="2" name="customerid" value="{{ $c->CUSTOMER_ID }}" readonly>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstname"> First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="firstname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                          data-validate-words="2" name="firstname" placeholder="Masukan Nama Depan" required="required" value="{{ $c->FIRST_NAME }}"
                          type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lasttname"> Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="lastname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                          data-validate-words="2" name="lastname" placeholder="Masukan Nama Belakang" required="required" 
                          type="text" value="{{ $c->LAST_NAME }}">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="phone"> No Telpon <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="phone" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                          data-validate-words="2" name="phone" placeholder="Enter Your Number : 081815xxxxxx" required="required" 
                          type="text" value-"{{ $c->PHONE }}">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"> Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                          data-validate-words="2" name="email" placeholder="ayu nindya@gmail.com" required="required" 
                          type="email" value="{{ $c->EMAIL }}">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="street"> Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="street" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                          data-validate-words="2" name="street" required="required" 
                          type="text" value="{{ $c->STREET }}">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city"> Kota <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="city" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                          data-validate-words="2" name="city" required="required" 
                          type="text" value="{{ $c->CITY}}">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state"> Negara <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="state" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                          data-validate-words="2" name="state" required="required" 
                          type="text" value="STATE">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="zipcode"> Kode Zip <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="zipcode" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" 
                          data-validate-words="2" name="zipcode" required="required" 
                          type="text" value="ZIP_CODE">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="submit" value="SimpanData" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                </div>
               
            </div>
              </div>
            </div>
                    </form>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>


            </div>
          </div>
        </div>
        <!-- end page contentc-->

        @endsection