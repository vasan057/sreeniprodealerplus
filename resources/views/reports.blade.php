@include('header')
@include('sidebar')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="content-header col-sm-12">
                <div class="row top-search" id="search-slide">
                    <div class="input-group-btn search-panel">
                        <select class="col-xs-12 col-sm-12 btn btn-primary">
                            <option value="">Filter</option>
                            <option value="1">Inventory</option>
                            <option value="2">Customer</option>
                            <option value="3">Dealers</option>
                            <option value="4">Cars</option>
                        </select>
                    </div>
                    <input type="hidden" name="search_param" value="all" class="" id="search_param">
                    <input type="text" class="form-control" name="x" placeholder="Search term...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
                <ol class="breadcrumb">
                    <li><a href="{{url('/reports')}}"><i class="fa fa-dashboard"></i> Reports</a></li>
                    <li class="active">Invetory Reports</li>
                </ol>
            </div>
            <form method="post" action="{{url('/reports')}}">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-xs-12 panel-heading">
                                <div class="row">
                                    <p class="col-xs-12">Date Of Range</p>
                                    <div class="col-sm-6">                                        
                                        <label>Start Date</label>
                                        <div class='input-group date' id="startDate">
                                            <input type='text' class="form-control startDate1" placeholder="Start" data-validation="date" data-validation-optional="true" value="{{$first_day_this_month}}" name="txt_start_date" id="startDate1">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>End Date</label>
                                        <div class='input-group date' id="endDate">
                                            <input type='text' class="form-control endDate1" placeholder="End" data-validation="date" data-validation-optional="true" value="{{$last_day_this_month}}" name="txt_end_date" id="endDate1">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 mt mb">
                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    <label>Order List By</label>
                                    <select class="form-control" data-validation="alphanumeric" data-validation-optional="true" name="ddl_ordr_list1">
                                        <option value="0">---SELECT---</option>
                                        @foreach($header_array['dropdown1'] as $i => $hddrop)
                                            <option value="{{$i}}" <?php if($order_list1 == $i) echo "selected='selected'"; ?>>{{$hddrop}}</option>
                                        @endforeach
                                    </select>
                                </div> 
                            </div>
                            <!-- <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    <label>Order List By</label>
                                    <select class="form-control" data-validation="alphanumeric" data-validation-optional="true" name="ddl_ordr_list2">
                                        <option value="0">---SELECT---</option>
                                        @foreach($header_array['dropdown1'] as $i => $hddrop)
                                        <option value="{{$i}}">{{$hddrop}}</option>
                                        @endforeach
                                    </select>
                                </div> 
                            </div> -->
                            <!-- <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    <label>Order List By</label>
                                    <select class="form-control" data-validation="alphanumeric" data-validation-optional="true" name="ddl_ordr_list3">
                                        <option value="0">---SELECT---</option>
                                        @foreach($header_array['dropdown1'] as $i => $hddrop)
                                        <option value="{{$i}}">{{$hddrop}}</option>
                                        @endforeach
                                    </select>
                                </div> 
                            </div> -->
                            <div class="clearfix"></div>
                                @foreach($checkbox as $k => $chk)
                                    <div class="col-sm-3 col-md-4 col-lg-3 col-xs-12">
                                        <div class="checkbox checkbox-primary">

                                            <input id="caramt{{$k}}" class="" type="checkbox" name="chk_name[]" value="{{$k}}" @if(in_array($k,$fetchparams)) checked @endif @if(empty($fetchparams)) checked @endif>
                                            <label for="caramt{{$k}}" class="">
                                                &nbsp;{{$chk}}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            
                            <div class="col-xs-12">
                                <br>
                                {!!csrf_field()!!}
                                <input type="submit" name="btn_view" value="VIEW" class="btn btn-primary ">
                                <input type="submit" name="btn_download" value="DOWNLOAD" class="btn btn-primary">
                            </div>
                        </div>

                        <div class="col-xs-12 mt">
                            @include('reportsbody')
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('footer')

</div>
<!-- <div class="ts-main-content">
        <div class="content-wrapper myprofile">
                <div class="container-fluid footer-fixed">
                        <div class="row">
                                <div class="col-xs-12" id="features">
                                        <h2 class="page-title">Inventory Reports</h2>
                                </div>
                                <form method="post" action="{{url('/reports')}}">
                                        {!!csrf_field()!!}
                                        @include('reportsheader')
                                </form>
                        </div>
                </div>
        </div>
</div> -->


<!-- Loading Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/fileinput.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/dealerplus.js"></script>
</body>
<script type="text/javascript">
    //alert(endDate);
    $('#startDate1').change(function () 
    {
        var startDate = $('#startDate1').val();
        var endDate   = $('#endDate1').val();
        if(new Date(startDate) > new Date(endDate))
        {
            //alert('First Date should be lessthan DueDate');
            $( "#endDate" ).datetimepicker("setDate",new Date(startDate));
            //$(".invoiceStartDate").val("");
        }
        $( "#endDate" ).datetimepicker("setStartDate",new Date(startDate));
    });
    $('#endDate1').change(function () 
    {
        var startDate = $('#startDate1').val();
        var endDate   = $('#endDate1').val();
        if(new Date(startDate) > new Date(endDate))
        {
            //alert('First Date should be lessthan DueDate');
            $( "#endDate" ).datetimepicker("setDate",new Date(startDate));
            $( "#endDate" ).datetimepicker("setStartDate",new Date(startDate));
            //$(".invoiceStartDate").val("");
        }
    }); 
    //$('#endDate').datetimepicker({dateFormat:"yy/mm/dd"}).datetimepicker("setStartDate", new Date());
    $('#startDate').datetimepicker({dateFormat:"yy/mm/dd"}).datetimepicker("setEndDate", new Date());
</script>

</html>