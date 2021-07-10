@extends('Dashboard.layouts.master')
@section('css')
    <!--Internal   Notify -->
    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection
@section('title')
    تعديل بيانات مريض
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">المرضي</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/  تعديل بيانات مريض</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    @include('Dashboard.messages_alert')
    <!-- row -->
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form  action="@if(Auth::guard('doctor_logins')->check()) {{route('reqdiagnosis')}} @else {{route('uploadxray')}} @endif" method="post" autocomplete="off" enctype="multipart/form-data">
                        @if(Auth::guard('doctor_logins')->check()) @method('PUT') @endif
                        @csrf
                        <div class="row">
                            <div class="col-3">
                                <label>اسم المريض</label>
                                <input disabled="disabled" type="text" name="name"  value="{{$Patient->name}}" class="form-control @error('name') is-invalid @enderror " required>
                                <input type="hidden" name="id" value="{{$Patient->id}}">
                            </div>

                            <div class="col">
                                <label>البريد الالكتروني</label>
                                <input disabled="disabled" type="email" name="email"  value="{{$Patient->email}}" class="form-control @error('email') is-invalid @enderror" required>
                            </div>


{{--                            <div class="col">--}}
{{--                                <label>تاريخ الميلاد</label>--}}
{{--                                <input disabled="disabled" class="form-control fc-datepicker" value="{{$Patient->Date_Birth}}" name="Date_Birth" type="text" required>--}}
{{--                            </div>--}}

                        </div>
                        <br>

                        <div class="row">
                            <div class="col-3">
                                <label>رقم الهاتف</label>
                                <input type="number"  disabled="disabled" name="Phone"  value="{{$Patient->Phone}}" class="form-control @error('Phone') is-invalid @enderror" required>
                            </div>

                            <div class="col">
                                <label>الجنس</label>
                                <select disabled="disabled" class="form-control" name="Gender" required>
                                    <option value="1" {{$Patient->Gender == 1 ? 'selected':''}}>ذكر</option>
                                    <option value="2" {{$Patient->Gender == 2 ? 'selected':''}}>انثي</option>
                                </select>
                            </div>

                            <div class="col">
                                <label>فصلية الدم</label>
                                <select disabled="disabled" class="form-control" name="Blood_Group" required>
                                    <option value="O-"{{$Patient->Blood_Group == "O-" ? 'selected':''}} >O-</option>
                                    <option value="O+" {{$Patient->Blood_Group == "O+" ? 'selected':''}}>O+</option>
                                    <option value="A+" {{$Patient->Blood_Group == "A+" ? 'selected':''}}>A+</option>
                                    <option value="A-" {{$Patient->Blood_Group == "A-" ? 'selected':''}}>A-</option>
                                    <option value="B+" {{$Patient->Blood_Group == "B+" ? 'selected':''}}>B+</option>
                                    <option value="B-" {{$Patient->Blood_Group == "B-" ? 'selected':''}}>B-</option>
                                    <option value="AB+"{{$Patient->Blood_Group == "AB+" ? 'selected':''}}>AB+</option>
                                    <option value="AB-"{{$Patient->Blood_Group == "AB-" ? 'selected':''}}>AB-</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label>التشخيص</label>
                                <textarea rows="5" cols="10" class="form-control" @if(Auth::guard('web')->check()) disabled="disabled"  @endif  name="diagnosis">@if(isset($Patient->diagnosis)) {{ Crypt::decryptString($Patient->diagnosis)}} @else diagnosis  @endif</textarea>
                            </div>
                        </div>
                        <br>

                        @if(Auth::guard('web')->check())

                            <div class="row">
                                <div class="col">
                                    <div class="col-md-1">
                                        <label for="exampleInputEmail1">
                                           الاشعة و التحاليل</label>
                                    </div>
                                    <input type="file" accept="image/*" name="photo" onchange="loadFile(event)">
                                    <img style="border-radius:50%" width="150px" height="150px" id="output"/>

                                </div>
                            </div>
                            <br>

                        @endif

                        <div class="row">
                            <div class="col">
                                <button class="btn btn-success">حفظ البيانات</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')

    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('dashboard/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <script>
        var date = $('.fc-datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        }).val();
    </script>
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection
