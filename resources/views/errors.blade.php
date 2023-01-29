@if(session('error'))
    <div class="alert alert-danger rounded-0" style="border-left: 5px solid red">{{session('error')}}</div>
@endif
@if(session('error_message'))
    <div class="alert alert-danger rounded-0" style="border-left: 5px solid red">{{session('error_message')}}</div>
@endif
@if(session('message'))
    <div class="alert alert-success rounded-0" style="border-left: 5px solid green">{{session('message')}}</div>
@endif
@if(session('success'))
    <div class="alert alert-success rounded-0" style="border-left: 5px solid green">{{session('success')}}</div>
@endif
@if(session('alert_switch'))
    <div class="alert alert-danger rounded-0"
         style="border-left: 5px solid red">{{session('alert_switch')}}</div>
@endif
