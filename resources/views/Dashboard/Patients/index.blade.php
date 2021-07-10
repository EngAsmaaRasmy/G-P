
    @extends('Dashboard.layouts.master')



@section('css')
    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">المرضي</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ قائمة المرضي</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
    @include('Dashboard.messages_alert')
				<!-- row opened -->
				<div class="row row-sm">
					<!--div-->
					<div class="col-xl-12">
						<div class="card">
                            @if(Auth::guard('admin')->check() || Auth::guard('receptionist_logins')->check())
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
                                    <a href="{{route('Patients.create')}}" class="btn btn-primary">اضافة مريض جديد</a>
								</div>
							</div>
                            @endif
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th>#</th>
												<th>اسم المريض</th>
												<th >البريد الالكتروني</th>
												<th>تاريخ الميلاد</th>
												<th>رقم الهاتف</th>
												<th>الجنس</th>
                                                <th >فصلية الدم</th>
                                                <th >التشخيص</th>
                                                {{--                                                <th >العنوان</th>--}}

                                                @if(!Auth::guard('doctor_logins')->check())

                                                <th>العمليات</th>
                                                @else
                                                    <th>تعديل التشخصي</th>

                                                @endif
											</tr>
										</thead>
										<tbody>
                                        @foreach($Patients as $Patient)
											<tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$Patient->name}}</td>
                                                <td>{{$Patient->email}}</td>
                                                <td>{{$Patient->Date_Birth}}</td>
                                                <td>{{$Patient->Phone}}</td>
                                                <td>{{$Patient->Gender == 1 ? 'ذكر' :'انثي'}}</td>
                                                <td>{{$Patient->Blood_Group}}</td>
                                                @if(Auth::guard('doctor_logins')->check())
                                                    @if( isset($Patient->diagnosis) )
                                                <td>{{ Crypt::decryptString($Patient->diagnosis) }}</td>
                                                    @else
                                                        <td>diagnosis</td>
                                                    @endif
                                                    @endif
                                                {{--                                                <td>{{$Patient->Address}}</td>--}}
                                                @if(Auth::guard('admin')->check())
                                                <td>
                                                    <a href="{{route('Patients.edit',$Patient->id)}}" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                                    <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#Deleted{{$Patient->id}}"><i class="fas fa-trash"></i></button>
                                                </td>
                                                    @endif
                                                @if(Auth::guard('doctor_logins')->check())

                                                <td>
                                                    <a href="{{route('diagnosis',$Patient->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-diagnosis"></i></a>
                                                </td>
                                                    @endif
											</tr>
                                           @include('Dashboard.Patients.Deleted')
                                        @endforeach
										</tbody>
									</table>
								</div>
							</div><!-- bd -->
						</div><!-- bd -->
					</div>
					<!--/div-->
				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
    <!--Internal  Notify js -->
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection
