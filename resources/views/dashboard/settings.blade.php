@extends('dashboard.layouts.layout')


@section('body')


<div class="col-md-12 ">
<form action="{{route('dashboard.settings.update',['setting'=>$setting])}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            <strong>{{__('words.settings')}}</strong>
            <small>Form</small>
        </div>
        <div class="card-block ">
            <div class="form-group col-sm-6">
                <img src="{{$setting->logo}}" alt="" style="height: 50px">
            </div>
            <div class="form-group col-sm-6">
                <img src="{{$setting->favicon}}" alt="" style="height: 50px">
            </div>
            <div class="form-group col-sm-6">
                <label for="company">{{__('words.logo')}}</label>
                <input type="file" class="form-control" id="company" name="logo">
            </div>

            <div class="form-group col-sm-6">
                <label for="vat">{{__('words.favivon')}}</label>
                <input type="file" class="form-control" id="vat" name="favicon" >
            </div>

            <div class="form-group col-sm-6">
                <label for="street">{{__('words.facebook')}}</label>
                <input type="text" class="form-control" id="street" placeholder="{{__('words.facebook')}}" name="facebook" value="{{$setting->facebook}}">
            </div>

            <div class="row">

                <div class="form-group col-sm-6">
                    <label for="city">{{__('words.instagram')}}</label>
                    <input type="text" class="form-control" id="city" placeholder="{{__('words.instagram')}}" name="instagram" value="{{$setting->instagram}}">
                </div>

                <div class="form-group col-sm-6">
                    <label for="postal-code">{{__('words.phone')}}</label>
                    <input type="number" class="form-control" id="postal-code" placeholder="{{__('words.phone')}}" name="phone"value="{{$setting->phone}}">
                </div>

                <div class="form-group col-sm-6">
                    <label for="country">words.email</label>
                    <input type="text" class="form-control" id="country" placeholder="words.email" name="email"value="{{$setting->email}}">
                </div>
            </div>
            <!--/row-->

        </div>
    </div>

    <div class="col-md-12 mt-5">
        <div class="card-header">
            <strong>{{__('words.translations')}}</strong>
        </div>



        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            @foreach (config('app.languages') as $key=>$lang )
                <li class="nav-item">
                  <a class="nav-link @if($loop->index == 0)active @endif" id="pills-home-tab" data-toggle="pill" href="#{{$key}}" role="tab" aria-controls="pills-home" aria-selected="true">{{$lang  }}</a>
                </li>
            @endforeach
          </ul>
          <div class="tab-content" id="pills-tabContent">
            @foreach (config('app.languages') as $key=>$lang )
                    <div class="tab-pane fade @if($loop->index == 0) show active in @endif " id="{{$key}}" role="tabpanel" aria-labelledby="pills-home-tab">
                        {{-- <form action="" class="mt-3"> --}}
                            <br>
                                <div class=" form-group mt-2 col-md-12" >

                                    <label for="email">{{__('words.email')}} - {{$lang}}</label>
                                    <input type="text" class=" form-control" placeholder="{{__('words.email')}}"
                                    id="email" name="{{$key}}[title]" value="{{$setting->translate($key)->title}}">
                                </div>
                                    <div class=" form-group mt-2 col-md-12" >
                                            <label for="email-tow">{{'words.content'}}</label>
                                            <textarea name="{{$key}}[content]" class="form-control " id="email-tow" cols="30" rows="10">{{$setting->translate($key)->content}}</textarea>
                                    </div>

                                    <div class=" form-group mt-2 col-md-12" >

                                            <label for="email-tow">{{__('words.address')}}</label>
                                            <input type="text" class=" form-control" placeholder="{{__('words.address')}}" id="email-tow" name="{{$key}}[address]" value="{{$setting->translate($key)->address}}">
                                    </div>
                            {{-- </form> --}}

                    </div>

             @endforeach
        </div>
        {{-- <div class="card-block">
            <form action="" method="post" class="form-horizontal ">
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-email">Email</label>
                    <div class="col-md-9">
                        <input type="email" id="hf-email" name="hf-email" class="form-control" placeholder="Enter Email..">
                        <span class="help-block">Please enter your email</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="hf-password">Password</label>
                    <div class="col-md-9">
                        <input type="password" id="hf-password" name="hf-password" class="form-control" placeholder="Enter Password..">
                        <span class="help-block">Please enter your password</span>
                    </div>
                </div>
            </form>
        </div> --}}
        <div class="card-footer">
            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
        </div>
    </div>
</form>
</div>

@endsection


