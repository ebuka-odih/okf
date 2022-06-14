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
                    <form>
                    <div class="nav flex-column nav-pills settings-nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a style="background-color: #0b1e40" class="nav-link active" id="settings-profile-tab" data-toggle="pill" href="#settings-profile" role="tab"
                           aria-controls="settings-profile" aria-selected="true">
                            {{--                        <i class="icon ion-md-person"></i> --}}
                            Project Background (Part 1 of 8)
                        </a>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="settings-profile" role="tabpanel"
                             aria-labelledby="settings-profile-tab">
                            <div class="card">
                                <div class="card-body">
                                    <p>Please provide details of your project</p>
                                    <hr>
                                    <div style="margin-top: -40px" class="settings-profile">
                                            <div class="form-row mt-4">


                                                <div class="col-md-12">
                                                    <br><br>
                                                    <label for="1">What is the Name of your project?<span class="text-danger">*</span> </label>
                                                    <input required id="1" type="text" class="form-control" placeholder="Your answer">
                                                </div>

                                                <div class="col-md-12">
                                                    <br><br>
                                                    <label for="2">Official Website<span class="text-danger">*</span> </label>
                                                    <input required id="2" type="text" class="form-control" placeholder="Your answer">
                                                </div>

                                                <div class="col-md-12">
                                                    <br><br>
                                                    <label for="3">Description of Project (in English) (approx: 200 words)<span class="text-danger">*</span>  </label>
                                                    <p>Why does it exist and what makes it unique?  What new technology or business concept are you bringing to the blockchain?</p>
                                                    <input id="3" type="text" class="form-control" placeholder="Your answer">
                                                </div>

                                                <div class="col-md-12">
                                                    <br><br>
                                                    <label for="4">Please provide a permanent link to the project's whitepaper<span class="text-danger">*</span>  </label>
                                                    <p>Both English and Chinese version (if any)</p>
                                                    <input id="4" type="text" class="form-control" placeholder="Your answer">
                                                </div>

                                                <div class="col-md-12">
                                                    <br><br>
                                                    <label for="5">Who are your core team<span class="text-danger">*</span> </label>
                                                    <p>e.g. Paul Smith, CEO, is a serial entrepreneur in the Bitcoin/ Blockchain field. He is the creator of a world-leading fiat currency platform on ETH, which is revolutionizing global commerce.</p>
                                                    <input id="5" type="text" class="form-control" placeholder="Your answer">
                                                </div>
                                                <div class="col-md-12">
                                                    <br><br>
                                                    <label for="5">List all cornerstone investors<span class="text-danger">*</span> </label>
                                                    <p>e.g. Paul Smith, a serial entrepreneur in the Bitcoin/ Blockchain field. He creates a world-leading fiat currency platform on ETH, which revolutionizes the way currency is transacted. </p>
                                                    <input id="5" type="text" class="form-control" placeholder="Your answer">
                                                </div>
                                                <div class="col-md-12">
                                                    <br><br>
                                                    <label for="5">List all private investors<span class="text-danger">*</span> </label>
                                                    <p>e.g. Paul Smith, a serial entrepreneur in the Bitcoin/ Blockchain field. He creates a world-leading fiat currency platform on ETH, which revolutionizes the way currency is transacted. </p>
                                                    <input id="5" type="text" class="form-control" placeholder="Your answer">
                                                </div>
                                                <div class="col-md-12">
                                                    <br><br>
                                                    <label for="5">Who are your advisors, if any?<span class="text-danger">*</span> </label>
                                                    <p>e.g. Paul Smith, a serial entrepreneur in the Bitcoin/ Blockchain field. He creates a world-leading fiat currency platform on ETH, which revolutionizes the way currency is transacted. </p>
                                                    <input id="5" type="text" class="form-control" placeholder="Your answer">
                                                </div>

                                                <div class="col-md-12">
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>

@endsection
