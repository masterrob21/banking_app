@extends('layouts.app')

@section('content')
<div class="container bg-white pt-4">
  <h2>Create new client</h2>

  <div>
    <div class="">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="titleid">Title</label>
              <select class="form-control" name="titleid" id="titleid">
                <option value=""> ...</option>
                @foreach ($titles as $title)
                  <option value="{{ $title->id }}">{{ $title->title }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="surname">Surname</label>
              <input class="form-control" type="text" name="surname" id="surname">
            </div>
          </div>
        </div>  

        <div class="row pt-4">
          <div class="col-md-6">
            <div class="form-group">
              <label for="othernames">Othernames</label>
              <input class="form-control" type="text" name="othernames" id="othernames">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="dob">DateOfBirth</label>
              <input class="form-control" type="date" name="dob" id="dob">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="genderid">Gender</label>
              <select class="form-control" name="genderid" id="genderid">
                <option value=""> ...</option>
                @foreach ($genders as $gender)
                  <option value="{{$gender->id}}">{{ $gender->gender}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="row pt-4">
          <div class="col-md-6">
            <div class="form-group">
              <label for="resAddress">Residential Address</label>
              <input class="form-control" type="text" name="resAddress" id="resAddress">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="town">Town</label>
              <input class="form-control" type="text" name="town" id="town">
            </div>
          </div>
        </div>

        <div class="row pt-4">
          <div class="col-md-6">
            <div class="form-group">
              <label for="homeTown">Hometown</label>
              <input class="form-control" type="text" name="homeTown" id="homeTown">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="regionid">Region</label>
              <select class="form-control" name="regionid" id="regionid">
                <option value=""> ...</option>
                @foreach ($regions as $region)
                  <option value="{{ $region->id }}">{{ $region->region }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="row pt-4">
          <div class="col-md-6">
            <div class="form-group">
              <label for="occupationid">Occupation</label>
              <select class="form-control" name="occupationid" id="occupationid">
                <option value=""> ...</option>
                @foreach ($occupations as $occupation)
                  <option value="{{ $occupation->id }}">{{ $occupation->occupation }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="phoneNumber">Phone #</label>
              <input class="form-control" type="text" name="phoneNumber" id="phoneNumber">
            </div>
          </div>
        </div>

        <div class="row pt-4">
          <div class="col-md-4">
            <div class="form-group">
              <label for="nextOfKin">Next of Kin</label>
              <input class="form-control" type="text" name="nextOfKin" id="nextOfKin">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="relationid">Relationship #</label>
              <select class="form-control" name="relationid" id="relationid">
                <option value=""> ...</option>
                @foreach ($relations as $relation)
                  <option value="{{ $relation->id}}">{{ $relation->relation }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="kinNumber">NextOfKin Phone</label>
              <input class="form-control" type="text" name="kinNumber" id="kinNumber">
            </div>
          </div>
        </div>

        <div class="row pt-4">
          <div class="col-md-3">
            <div class="form-group">
              <label for="nationid">Nationality</label>
              <select class="form-control" name="nationid" id="nationid">
                <option value=""> ...</option>
                @foreach ($nations as $nation)
                  <option value="{{ $nation->id }}">{{ $nation->nation }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="religionid">Religion</label>
              <select class="form-control" name="religionid" id="religionid">
                <option value=""> ...</option>
                @foreach ($religions as $religion)
                  <option value="{{ $religion->id }}">{{ $religion->religion }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="placeOfWorship">Place of Worship</label>
              <input class="form-control" type="text" name="placeOfWorship" id="placeOfWorship">
            </div>
          </div>
        </div>

        <div class="row pt-4">
          <div class="col-md-6">
            <div class="form-group">
              <label for="identityTypeid">Identity Type</label>
              <select name="identityTypeid" id="identityTypeid" class="form-control">
                <option value=""> ...</option>
                @foreach ($identityTypes as $identity)
                  <option value="{{ $identity->id }}">{{ $identity->identityType }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="idNumber">ID Number</label>
              <input class="form-control" type="text" name="idNumber" id="idNumber">
            </div>
          </div>
        </div>

        <div class="col-md-4 pt-4">
          <div class="form-group">
            <label for="image">Image</label>
            <input class="form-control" type="file">
          </div>
        </div>
        <div class="pt-4" hidden>
          <img src="" alt="image of client" height="600px" width="600px">
        </div>
        <div class="pt-4">
          <button class="btn btn-primary">Save</button>
        </div>
    </div>
  </div>
</div>
@endsection

@section('script')

@endsection