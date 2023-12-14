<!-- @extends("layout.header") -->

@section("content")
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <span class="h4 fw-bold text-white">Add New Account</span>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label class="fw-bold mb-1" for="accType">Account Type</label>
                            <select class="form-control" name="accType" id="accType" required>
                                <option value="">Select Account Type</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="fw-bold mb-1" for="fullName">Account Holder Name</label>
                            <input type="text" class="form-control" placeholder="Full Names" name="fullName" id="fullName" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="fw-bold mb-1" for="mobileNumb">Mobile No</label>
                            <input type="number" class="form-control" placeholder="Mobile No" name="mobileNumb" id="mobileNumb" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="fw-bold mb-1" for="openingBal">Opening Balance</label>
                            <input type="number" class="form-control" placeholder="Opening Balance" name="openingBal" id="openingBal" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="fw-bold mb-1" for="openingBal">Opening Balance</label>
                            <input type="number" class="form-control" placeholder="Opening Balance" name="openingBal" id="openingBal" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="fw-bold mb-1" for="address">Address</label>
                            <textarea class="form-control" placeholder="Address" name="address" id="address" required></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success fw-bold" name="addAcc">Add Record</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection