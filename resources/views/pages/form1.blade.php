@extends('pages.layout.app')
@section('content')

<div class="settings mtb15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-3">
                <!--div class="nav flex-column nav-pills settings-nav" id="v-pills-tab" role="tablist"
                  aria-orientation="vertical">
                  <a class="nav-link active" id="settings-profile-tab" data-toggle="pill" href="#settings-profile" role="tab"
                    aria-controls="settings-profile" aria-selected="true"><i class="icon ion-md-person"></i> Profile</a>

                </div
                -->

            </div>
            <div class="col-md-12 col-lg-6">
                <div class="nav flex-column nav-pills settings-nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a style="background-color: #0b1e40" class="nav-link active" id="settings-profile-tab" data-toggle="pill" href="#settings-profile" role="tab"
                       aria-controls="settings-profile" aria-selected="true">
{{--                        <i class="icon ion-md-person"></i> --}}
                        OKX Token Listing Form
                    </a>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="settings-profile" role="tabpanel"
                         aria-labelledby="settings-profile-tab">
                        <div class="card">
                            <div class="card-body">
{{--                                <h2 class="card-title"></h2>--}}
                                <p>OKX strives to make the listing process simple, transparent, and fair.  We charge fair listing fees.  Please fill in the form below and our team will get back to you as soon as possible. If you have any questions, please reach us at list@okx.com</p>
                                <p>We will review your submission and get back to you within 2 - 3 days if your application is successful.</p>
                                <div class="settings-profile">
                                    <form>


                                        <div class="form-row mt-4">

                                            <div class="col-md-12">
                                                <label for="emailAddress">Email</label>
                                                <input id="emailAddress" type="email" class="form-control" placeholder="Enter your email">
                                            </div>

                                            <div class="col-md-12">
                                                <br><br>
                                                <label for="selectLanguage">Reason for Application</label>
                                                <select id="selectLanguage" class="custom-select">
                                                    <option value="" selected>Select</option>
                                                    <option value="" >OK Jumpstart</option>
                                                    <option value="">OKEX Regular Exchange Listing</option>

                                                </select>
                                            </div>

                                            <div class="col-md-12">
                                                <br><br>
                                                <label for="formFirst">What is your name? </label>
                                                <p>You must either be a core developer or a major backer of the project. You will be required to submit additional documents for KYC purposes.</p>
                                                <input id="formFirst" type="text" class="form-control" placeholder="Enter your name">
                                            </div>

                                            <div class="col-md-12">
                                                <br><br>
                                                <label for="formLast">Contact Number </label>
                                                <input id="formLast" type="text" class="form-control" placeholder="Enter your contact number">
                                            </div>

                                            <div class="col-md-12">
                                                <br><br>
                                                <label for="id">Upload your ID Document </label>
                                                <p>Please upload a copy of your ID document (e.g. passport)</p>
                                                <input id="id"  type="file" class="form-control" placeholder="document">
                                            </div>

                                            <div class="col-md-12">
                                                <br><br>
                                                <label for="selectCurrency">Role / Responsibility </label>
                                                <select id="selectCurrency" class="custom-select">
                                                    <option value="" selected>Select</option>
                                                    <option>Founder</option>
                                                    <option>CEO</option>
                                                    <option>COO</option>
                                                    <option>Representative</option>
                                                    <option>Developer</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>

                                        <br>

                                        <div style="width: 100%">
                                            <div class="nav flex-column nav-pills settings-nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a style="background-color: #0b1e40" class="nav-link active" id="settings-profile-tab" data-toggle="pill" href="#settings-profile" role="tab"
                                                   aria-controls="settings-profile" aria-selected="true">
                                                    {{--                        <i class="icon ion-md-person"></i> --}}
                                                    OKX Token Listing Form
                                                </a>

                                            </div>
                                        </div>
                                        <div class="form-row mt-4">


                                            <div class="col-md-12">
                                                <br><br>
                                                <label for="1">Please provide the project name </label>
                                                <input id="1" type="text" class="form-control" placeholder="Your answer">
                                            </div>

                                            <div class="col-md-12">
                                                <br><br>
                                                <label for="2">Please provide the token/coin name  </label>
                                                <input id="2" type="text" class="form-control" placeholder="Your answer">
                                            </div>

                                            <div class="col-md-12">
                                                <br><br>
                                                <label for="3">Please provide the token/coin symbol  </label>
                                                <input id="3" type="text" class="form-control" placeholder="Your answer">
                                            </div>

                                            <div class="col-md-12">
                                                <br><br>
                                                <label for="4">Please provide the project's official website  </label>
                                                <input id="4" type="text" class="form-control" placeholder="Your answer">
                                            </div>

                                            <div class="col-md-12">
                                                <br><br>
                                                <label for="5">Please provide a permanent link to the project's whitepaper </label>
                                                <input id="5" type="text" class="form-control" placeholder="Your answer">
                                            </div>

                                            <div class="col-md-12">
                                                <br><br>
                                                <label for="6">What is the nature of the Project?  </label>
                                                <select id="selectLanguage" class="custom-select">
                                                    <option value="" selected>Select</option>
                                                    <option value="Currency" >Currency</option>
                                                    <option value="DApp">DApp</option>
                                                    <option value="Security Token/Asset Token" >Security Token/Asset Token</option>
                                                    <option value="Payments Token">Payments Token</option>
                                                    <option value="Protocol" >Protocol</option>
                                                    <option value="Platform">Platform</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>

                                            <div class="col-md-12">
                                                <br><br>
                                                <label for="7">Are you listed on any exchanges? </label>
                                                <select id="selectLanguage" class="custom-select">
                                                    <option value="" selected>Select</option>
                                                    <option value="" >Yes</option>
                                                    <option value="">No</option>

                                                </select>
                                            </div>

                                            <div class="col-md-12">
                                                <br><br>
                                                <label for="8">What is the main application of the Project?  </label>
                                                <p>(e.g. cloud computing, file storage, marketplace and anti-counterfeiting, etc.)</p>
                                                <input id="8" type="text" class="form-control" placeholder="Your answer">
                                            </div>

                                            <div class="col-md-12">
                                                <br><br>
                                                <label for="9">What is the target industry of the Project? </label>
                                                <p>(e.g. finance, healthcare, supply chain, social media and energy, etc.)</p>
                                                <input id="9" type="text" class="form-control" placeholder="Your answer">
                                            </div>

                                            <div class="col-md-12">
                                                <br><br>
                                                <label for="10">Please provide any other information you would like to share. </label>
                                                <input id="10" type="text" class="form-control" placeholder="Your answer">
                                            </div>

                                            <div class="col-md-12">
                                                <input type="submit" value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
