@extends('frontend.main_master')

@section('content')

    <div class="body-content">

        <div class="container">
            <div class="row">
                <div class="col-md-2"><br><br>
                    <img class="card-img-top" style="border-radius: 50px; height: 100%; width: 100%"
                         src=" {{!empty($user->profile_photo_path)?
                        url('upload/user_images/'.$user->profile_photo_path)
                        : url('upload/user_images/noImage.jpg')}}"><br><br>

                    <ul class="list-group list-group-flush">
                        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block">Home</a>
                        <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Profile
                            Update</a>
                        <a href="" class="btn btn-primary btn-sm btn-block">Change Password</a>
                        <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Log out</a>

                    </ul>

                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="text-center">

                            <span
                                class="text-danger">Hi...<strong>{{Auth::user()->name}}</strong> Update your Profile</span>
                        </h3>

                        <div class="card-body">

                            <form method="post" action=" {{ route('user.profile.store') }}"
                                  enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                                    <input type="text" name="name" value="{{ $user->name }}"
                                           class="form-control unicase-form-control text-input"
                                    >
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Email Address
                                        <span>*</span></label>
                                    <input type="email" name="email" value="{{ $user->email }}"
                                           class="form-control unicase-form-control text-input"
                                    >
                                </div>


                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1"> Phone <span>*</span></label>
                                    <input type="text" name="phone" value="{{ $user->phone }}"
                                           class="form-control unicase-form-control text-input"
                                    >
                                </div>

                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Profile Image
                                        <span>*</span></label>
                                    <input type="file" name="profile_photo_path"
                                           class="form-control unicase-form-control text-input"
                                    >
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger"> Update Profile Data</button>
                                </div>


                            </form>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>


@endsection
