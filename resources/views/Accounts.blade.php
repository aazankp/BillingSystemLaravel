@extends("layout.header")
@php
    use Illuminate\Support\Str;
    $SNo = 1;
@endphp

@if (parse_url(url()->current(), PHP_URL_PATH) == "/AddAccount")

    @section("content")
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary">
                        <span class="h4 fw-bold text-white">Add New Account</span>
                    </div>
                    <form action="{{ route('add_account') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="fw-bold mb-1" for="accType">Account Type</label>
                                        <select class="form-control" name="accType" id="accType" >
                                            <option value="">Select Account Type</option>
                                            <option value="Customer">Customer</option>
                                            <option value="Purchaser">Purchaser</option>
                                        </select>
                                        <span style="color: red;">
                                            @error("accType")
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="fw-bold mb-1" for="fullName">Account Holder Name</label>
                                        <input type="text" class="form-control" placeholder="Full Name" name="fullName" id="fullName" >
                                        <span style="color: red;">
                                            @error("fullName")
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="fw-bold mb-1" for="mobileNumb">Mobile No</label>
                                        <input type="number" class="form-control" placeholder="Mobile No" name="mobileNumb" id="mobileNumb" maxlength="11">
                                        <span style="color: red;">
                                            @error("mobileNumb")
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="fw-bold mb-1" for="openingBal">Opening Balance</label>
                                        <input type="number" class="form-control" placeholder="Opening Balance" name="openingBal" id="openingBal" >
                                        <span style="color: red;">
                                            @error("openingBal")
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="fw-bold mb-1" for="address">Address</label>
                                        <textarea class="form-control" placeholder="Address" name="address" id="address" ></textarea>
                                        <span style="color: red;">
                                            @error("address")
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success fw-bold" name="addAccount">Add Record</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        
        @if (session("addAccountSuccess"))
            @includeIf("functions.swalFunction");
        @endif
    @endsection

@elseif (parse_url(url()->current(), PHP_URL_PATH) == "/ViewAccounts")
    @section("content")
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <span class="h4 fw-bold text-white">View Accounts</span>
                    </div>
                    <div class="card-body">
                        <table id="view_table" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Account Type</th>
                                <th>Mobile No</th>
                                <th>Opening Balance</th>
                                <th>Address</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fetchedAccounts as $key => $data)
                                <tr>
                                    <td> {{ $SNo++ }} </td>
                                    <td> {{ $data->Name }} </td>
                                    <td> {{ $data->Acc_type }} </td>
                                    <td> {{ $data->Mobile_No }} </td>
                                    <td> {{ $data->Opening_Balance }} </td>
                                    <td> {{ $data->Address }} </td>
                                    <td> <a href="{{ route('updateAccount', $data->Acc_Id) }}" class="btn btn-primary editAccounts">Edit</a> </td>
                                    <td> <a href="{{ route('updateAccount', $data->Acc_Id) }}" class="btn btn-danger deleteAccounts">Delete</a> </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- @if (session(""))
            @includeIf("functions.swalFunction");
        @endif -->
    @endsection

@elseif (Str::contains(request()->url(), 'UpdateAccount'))
    @section("content")
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary">
                        <span class="h4 fw-bold text-white">Update Account</span>
                    </div>
                    @foreach ($updatedAccount as $key => $data)
                        <form action="{{ route('update_account', ' ') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="fw-bold mb-1" for="accType">Account Type</label>
                                            <select class="form-control" name="accType" id="accType" >
                                                <option value="Customer" {{ $data->Acc_type == "Customer" ? 'selected' : '' }}>Customer</option>
                                                <option value="Purchaser" {{ $data->Acc_type == "Purchaser" ? 'selected' : '' }}>Purchaser</option>
                                            </select>
                                            <span style="color: red;">
                                                @error("accType")
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="fw-bold mb-1" for="fullName">Account Holder Name</label>
                                            <input type="text" class="form-control" placeholder="Full Name" name="fullName" id="fullName" value="{{ $data->Name }}">
                                            <span style="color: red;">
                                                @error("fullName")
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="fw-bold mb-1" for="mobileNumb">Mobile No</label>
                                            <input type="number" class="form-control" placeholder="Mobile No" name="mobileNumb" id="mobileNumb" maxlength="11"  value="{{ $data->Mobile_No }}">
                                            <span style="color: red;">
                                                @error("mobileNumb")
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="fw-bold mb-1" for="openingBal">Opening Balance</label>
                                            <input type="number" class="form-control" placeholder="Opening Balance" name="openingBal" id="openingBal" value="{{ $data->Opening_Balance }}">
                                            <span style="color: red;">
                                                @error("openingBal")
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label class="fw-bold mb-1" for="address">Address</label>
                                            <textarea class="form-control" placeholder="Address" name="address" id="address">{{ $data->Address }}</textarea>
                                            <span style="color: red;">
                                                @error("address")
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success fw-bold" name="updateAccount">Update Record</button>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        
        <!-- @if (session("addAccountSuccess"))
            @includeIf("functions.swalFunction");
        @endif -->
    @endsection

@endif