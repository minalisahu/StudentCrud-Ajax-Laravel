<div class="form-row">
    <div class="col-lg-12">
        <div class="form-row ">
        <div class="form-group col-md-4">
                <label for="student_name" class='required-label'>Student Name</label>
                <input type="text" name="student_name" id="student_name" class="form-control  @error('student_name') is-invalid @enderror" value="" placeholder="Enter student name here" >
                @error('student_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="fathers_name" class='required-label'>Father's Name</label>
                <input type="text" name="fathers_name" id="fathers_name" class="form-control @error('fathers_name') is-invalid @enderror" value="" placeholder="Enter Father's name here">
                @error('fathers_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="dob" class='required-label'>Birth</label>
                <input type="date" name="dob" id="dob" class="form-control @error('dob') is-invalid @enderror" value="">
                @error('dob')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-row ">
            <div class="form-group col-md-4">
                <label for="email" class='required-label'>Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="" placeholder="Enter email here">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="address" class='required-label'>Address</label>
                <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" value="" placeholder="enter address here">
                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="city" class='required-label'>City</label>
                <input type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror" value="" placeholder="Enter city here">
                @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-row ">
        <div class="form-group col-md-4">
                <label for="state" class='required-label'>State</label>
                    <input type="text" name="state" id="state" class="form-control @error('state') is-invalid @enderror" value="" placeholder="Enter state here">
                    @error('state')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="pin" class='required-label'>Pin</label>
                    <input type="text" name="pin" id="pin" class="form-control @error('pin') is-invalid @enderror" value="" placeholder="Enter pin here">
                    @error('pin')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            <div class="form-group col-md-4">
                <label for="phone" class='required-label'>Phone</label>
                <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="" placeholder="Enter phone number here">
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-row ">
            <div class="form-group col-md-4">
                <label for="class" class='required-label'>class</label>
                <select class="form-control @error('class') is-invalid @enderror" name="class" id="class" >
                    <option value="" selected>{{__('Select')}}</option>
                    @for($i = 5; $i <= 10; $i++)
                    <option  value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
                @error('class')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="marks" class='required-label'>Marks</label>
                <input type="text" name="marks" id="marks" class="form-control @error('marks') is-invalid @enderror" value="" placeholder="Enter marks here">
                @error('marks')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
</div>
