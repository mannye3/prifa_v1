@extends('layouts.master_agent')

@section('content')
    <div class="content-body">
        <div class="container-fluid">

            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Property</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="mb-3 col-lg-4 col-md-6">
                                        <label class="form-label">Property Type</label>
                                        <input type="text" class="form-control" placeholder="office,villa,apartment"
                                            required="">
                                    </div>
                                    <div class="mb-3 col-lg-4 col-md-6">
                                        <label class="form-label">Property Status</label>
                                        <select class="default-select  form-control wide">
                                            <option>For Rent</option>
                                            <option>For Sale</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-lg-4 col-md-6">
                                        <label class="form-label">Property Price</label>
                                        <input type="text" class="form-control" placeholder="$2800" required="">
                                    </div>
                                    <div class="mb-3 col-lg-4 col-md-6">
                                        <label class="form-label">Max Rooms</label>
                                        <select class="default-select  form-control wide">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-lg-4 col-md-6">
                                        <label class="form-label">Beds</label>
                                        <select class="default-select  form-control wide">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-lg-4 col-md-6">
                                        <label class="form-label">Baths</label>
                                        <select class="default-select  form-control wide">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-lg-4 col-md-6">
                                        <label class="form-label">Area</label>
                                        <input type="text" class="form-control" placeholder="85 sq ft">
                                    </div>
                                    <div class="mb-3 col-lg-4 col-md-6">
                                        <label class="form-label">Price</label>
                                        <input type="text" class="form-control" placeholder="$3000">
                                    </div>
                                    <div class="mb-3 col-lg-4 col-md-12">
                                        <label class="form-label">Premiere</label>
                                        <select class="default-select  form-control wide">
                                            <option>Blue Sky</option>
                                            <option>Zephyr</option>
                                            <option>Premiere</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" placeholder="Address of your property">
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label class="form-label">Zip Code</label>
                                        <input type="number" id="zip_code" class="form-control"
                                            placeholder="Enter pin code" required="">
                                    </div>

                                </div>
                            </form>
                            <div class="dropzone-admin mb-3">
                                <label class="form-label">Media</label>
                                <form class="dropzone" id="multiFileUpload" action="https://omah.dexignzone.com/upload.php">
                                    <div class="dz-message needsclick"><i class="fas fa-cloud-upload-alt"></i>
                                        <h6>Drop files here or click to upload.</h6>
                                    </div>
                                </form>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="mb-3 col-12">
                                        <label class="form-label">video (mp4)</label>
                                        <input type="text" class="form-control" placeholder="mp4 video link">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label class="form-label d-block">Additional features</label>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" value=""
                                                id="flexRadioDefault4">
                                            <label class="form-check-label" for="flexRadioDefault4"> Emergency Exit</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" value=""
                                                id="flexRadioDefault5">
                                            <label class="form-check-label" for="flexRadioDefault5"> CCTV</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" value=""
                                                id="flexRadioDefault6">
                                            <label class="form-check-label" for="flexRadioDefault6"> Free Wi-Fi</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" value=""
                                                id="flexRadioDefault7">
                                            <label class="form-check-label" for="flexRadioDefault7"> Free Parking In The
                                                Area</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" value=""
                                                id="flexRadioDefault8">
                                            <label class="form-check-label" for="flexRadioDefault8"> Air
                                                Conditioning</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" value=""
                                                id="flexRadioDefault9">
                                            <label class="form-check-label" for="flexRadioDefault9"> Security
                                                Guard</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" value=""
                                                id="flexRadioDefault10">
                                            <label class="form-check-label" for="flexRadioDefault10"> Terrace</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" value=""
                                                id="flexRadioDefault11">
                                            <label class="form-check-label" for="flexRadioDefault11"> Laundry
                                                Service</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" value=""
                                                id="flexRadioDefault12">
                                            <label class="form-check-label" for="flexRadioDefault12"> Elevator
                                                Lift</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" value=""
                                                id="flexRadioDefault13">
                                            <label class="form-check-label" for="flexRadioDefault13"> Balcony</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 pt-3">
                                        <button type="button" class="btn btn-sm btn-primary me-2">Submit</button>
                                        <button type="button" class="btn btn-sm btn-danger light">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
