
        @include('header')
        <div class="ts-main-content">
            @include('sidebar')
            <div class="content-wrapper myprofile">
                <div class="container-fluid footer-fixed">

                    <div class="row">
                        <div class="content-header col-sm-12">
                            <ol class="breadcrumb">
                                <li><a href="{{url('/myeditaccount')}}"><i class="fa fa-dashboard"></i> Manage</a></li>
                                <li class="active">My Employee</li>
                            </ol>
                        </div>
                        <div class="col-xs-12">

                            <h2 class="page-title col-sm-5 col-md-5 col-xs-12">My Employee</h2>
                            <a href="{{url('/export-employee/')}}" class="pull-right btn btn-primary col-sm-3 col-md-3 col-xs-12 add-list empid"><i class="glyphicon glyphicon-export"></i>&nbsp; Export Excel</a>
                            <a href="{{url('myemployee')}}" class="pull-right btn btn-primary add-list col-sm-3 col-md-2 col-xs-12"><i class="fa fa-plus-square"></i>&nbsp; Add Employee</a>
                             <div class="hr-dashed"></div>
                            <div class="row">
                            @if(Session::has('message'))
                            <div class="alert alert-success" id="message-err">{{ Session::get('message') }}
                                <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                            </div>
                            @endif
                                <div class="col-md-12" id="no-more-tables">
                                    <ul class="nav nav-tabs inventory-list">
                                         <li  class="active"><a href="#{{0}}" id="employee_tab" data-toggle="tab" class="employee_tab 0 contact_tab_all" aria-expanded="true" tab_value="0">All({{$compact_array['total_count']}}) <span class="count"></span></a></li>
                                        @foreach($compact_array['employee_type'] as $fetch)
                                        <li><a href="#{{$fetch->employee_type_id}}" id="employee_tab" class="employee_tab {{$fetch->employee_type_id}}" tab_value="{{$fetch->employee_type_id}}" data-toggle="tab" aria-expanded="true">{{$fetch->employee_type}}({{$fetch->type_count}})<span class="count employee_tab"></span></a></li>
                                        @endforeach
                                        
                                    </ul>

                                    <br>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="profile"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @include('footer')
        </div>
        
        <!-- <form method="post" id="delete" action="{{url('deleteEmployee')}}">
            <input type="hidden" name="delete_employee_id" id="remove_employee">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </form>
        <form method="post" id="edit_employe" action="{{url('editEmployee')}}">
            <input type="hidden" name="update_employee" id="update_employee">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </form>
        <form method="post" id="view_employe" action="{{url('viewEmployee')}}">
            <input type="hidden" name="view_employee" id="views_employee">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </form> -->
        <!-- Loading Scripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap-select.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>
        <script src="js/fileinput.js"></script>
        <script src="js/dealerplus.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {         
            $('#message-err').delay(1000).fadeOut(3000);       
                $("div#profile").css('display', 'none');
                $("#loadspinner").css("display", "block");
                $('.customer_status').click(function () {
                    var customer_status = $(this).attr('data-id');
                    var thisid = this;
                    $.ajax({
                        url: 'status_update',
                        type: 'POST',
                        data: {customer_status: customer_status},
                        success: function (response)
                        {
                            console.log(response);
                            if (response = 0)
                            {
                                $(thisid).addClass('label-success');
                                $(thisid).removeClass('label-danger');
                                $(thisid).html('Active');
                            } else
                            {
                                $(thisid).addClass('label-danger');
                                $(thisid).removeClass('label-danger');
                                $(thisid).html('Deactive');
                            }
                        }
                    });

                });
                /*$('.edit_employee').click(function () {
                    var edit_employee = $(this).attr('data-id');
                    $('#update_employee').val(edit_employee);
                    $('#edit_employe').submit();
                });
                $('.delete_employee').click(function () {
                    var delete_id = $(this).attr('data-id');
                    $('#remove_employee').val(delete_id);
                    $('#delete').submit();

                });
                $('.view_employee').click(function () {
                    var view_employee = $(this).attr('data-id');
                    $('#views_employee').val(view_employee);
                    $('#view_employe').submit();
                });*/
                var all = $('.contact_tab_all').attr('tab_value');
                $.ajax({
                        url:"employee_type",
                        type:"post",
                        data:{employee_type:all},
                        success:function(response)
                        {                        
                            $("#loadspinner").css("display", "none");
                            $("div#profile").css('display', 'block');
                            $('#profile').html(response);
//                            $('.empid').attr('href',"{{url('/export-employee/')}}"+"/"+employee_type);
                            $('#zctb').DataTable();
                        }
                    });
                $('.employee_tab').click(function(){
                    $("#loadspinner").css("display", "block");
                    var employee_type = $(this).attr('tab_value');
                    $.ajax({
                        url:"employee_type",
                        type:"post",
                        data:{employee_type:employee_type},
                        success:function(response)
                        {                            
                            $("#loadspinner").css("display", "none");
                            $("div#profile").css('display', 'block');
                            $(".1").removeClass('active in');
                            $('#profile').html(response);
                            $('#zctb').DataTable();
//                            $('.empid').attr('href',"{{url('/export-employee/')}}"+"/"+employee_type);
                           
                        }
                    });
                });
            });        
        $(document).ready(function(){
                $(document).on('click','.edit_employee',function () {
                    var edit_employee = $(this).attr('data-id');
                    $('#update_employee').val(edit_employee);
                    $('#edit_employe').submit();
        });
        /*$('.delete_employee').click(function () {
            var delete_id = $(this).attr('data-id');
            $('#remove_employee').val(delete_id);
            $('#delete').submit();

        });*/
        $(document).on('click','.delete_employee',function () {
            var confirmgg = confirm("Are You Sure... Do You Want to Delete Contact...");
            if (confirmgg)
            {
                var delete_id = $(this).attr('data-id');
                $('#remove_employee').val(delete_id);
                $('#delete').submit();
            }
        });
});        
        $(document).on('click','.view_employee',function () {
            var view_employee = $(this).attr('data-id');
            $('#views_employee').val(view_employee);
            $('#view_employe').submit();
        });                                                                          
</script>   
    </body>

</html>

<!-- $.ajax({
                    url: "managelistingtab",
                    type: "post",
                    data: {tabcategory: "alllisting"},
                    success: function (data)
                    {
                        $("#loadspinner").css("display", "none");
                        $("div#profile").css('display', 'block');
                        $('#profile').html(data);
                    }
                }); -->