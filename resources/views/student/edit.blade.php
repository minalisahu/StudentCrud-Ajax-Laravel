
<form method="POST" action="javascript:void(0);" enctype="multipart/form-data">
    <div class="alert alert-danger d-none"></div>
    <div class="form-row">
        <div class="col-lg-12">
            <div class="form-row ">
              <div class="form-group col-md-4">
                    <label for="student_name" class='required-label'>{{__('Student Name')}}</label>
                     <input type="text" name="student_name" id="student_name" class="form-control  @error('student_name') is-invalid @enderror" value="{{$student->student_name??''}}" >
                      @error('student_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="fathers_name" class='required-label'>{{__('Father Name')}} </label>
                     <input type="text" name="fathers_name" id="fathers_name" class="form-control @error('fathers_name') is-invalid @enderror" value="{{$student->fathers_name??''}}">
                      @error('fathers_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="dob" class='required-label'>{{__('Birth')}}</label>
                     <input type="date" name="dob" id="dob" class="form-control @error('dob') is-invalid @enderror" value="{{$student->dob??''}}">
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
                    <label for="email" class='required-label'>{{__('Email')}}</label>
                     <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{$student->email}}">
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="address" class='required-label'>{{__('Address')}}</label>
                     <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" value="{{$student->address}}">
                     @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="city" class='required-label'>{{__('City')}}</label>
                     <input type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror" value="{{$student->city}}">
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
                    <label for="state" class='required-label'>{{__('State')}}</label>
                        <input type="text" name="state" id="state" class="form-control @error('state') is-invalid @enderror" value="{{$student->state}}">
                        @error('state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="pin" class='required-label'>{{__('Pin')}}</label>
                        <input type="text" name="pin" id="pin" class="form-control @error('pin') is-invalid @enderror" value="{{$student->pin}}">
                          @error('pin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                   <div class="form-group col-md-4">
                    <label for="phone" class='required-label'>{{__('Phone')}}</label>
                     <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{$student->phone}}">
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
                    <label for="class" class='required-label'>{{__('Class')}}</label>
                      <select class="form-control @error('class') is-invalid @enderror" name="class" id="class" >
                            @for($i = 5; $i <= 10; $i++)
                            <option  value="{{$i}}" {{($student->class == $i)? "selected" : ""}} >{{$i}}</option>
                            @endfor
                       </select>
                       @error('class')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                </div>
                <div class="form-group col-md-4">
                    <label for="marks" class='required-label'>{{__('Marks')}}</label>
                     <input type="text" name="marks" id="marks" class="form-control @error('marks') is-invalid @enderror" value="{{$student->marks}}">
                      @error('marks')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                </div>
              </div>
        </div>
        <div class="col-md-12 mt-2">
                <button class="btn btn-danger" data-dismiss='modal'>{{__('Cancel')}}</button>
                <button class="btn btn-info" onclick="updateStudent('{{csrf_token()}}','{{route('student.update')}}','{{$student->id}}')">{{__('Update')}}</button>
        </div>
    </div>
</form>
