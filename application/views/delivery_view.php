<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from avenxo.kaijuthemes.com/ui-typography.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jun 2016 12:09:25 GMT -->
<head>
    <meta charset="utf-8">
    <title>JCORE - <?php echo $title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenxo Admin Theme">
    <meta name="author" content="">


    <?php echo $_def_css_files; ?>

    <link rel="stylesheet" href="assets/plugins/spinner/dist/ladda-themeless.min.css">

    <link type="text/css" href="assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">
    <link type="text/css" href="assets/plugins/datatables/dataTables.themify.css" rel="stylesheet">
    <link href="assets/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <link href="assets/plugins/select2/select2.min.css" rel="stylesheet">

    <!--/twitter typehead-->
    <link href="assets/plugins/twittertypehead/twitter.typehead.css" rel="stylesheet">


    <!-- Datepicker --->
    <link href="assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">






    <style>
        .toolbar{
            float: left;
        }

        td.details-control {
            background: url('assets/img/Folder_Closed.png') no-repeat center center;
            cursor: pointer;
        }
        tr.details td.details-control {
            background: url('assets/img/Folder_Opened.png') no-repeat center center;
        }

        .child_table{
            padding: 5px;
            border: 1px #ff0000 solid;
        }

        .glyphicon.spinning {
            animation: spin 1s infinite linear;
            -webkit-animation: spin2 1s infinite linear;
        }

        .select2-container{
            min-width: 100%;
        }

        .dropdown-menu > .active > a,.dropdown-menu > .active > a:hover{
            background-color: dodgerblue;
        }

        @keyframes spin {
            from { transform: scale(1) rotate(0deg); }
            to { transform: scale(1) rotate(360deg); }
        }

        @-webkit-keyframes spin2 {
            from { -webkit-transform: rotate(0deg); }
            to { -webkit-transform: rotate(360deg); }
        }

        .custom_frame{

            border: 1px solid lightgray;
            margin: 1% 1% 1% 1%;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }

        .numeric{
            text-align: right;
        }

        @media screen and (max-width: 1000px) {
            .custom_frame{
                padding-left:5%;

            }
        }

        @media screen and (max-width: 480px) {

            table{
                min-width: 700px;
            }




            .dataTables_filter{
                min-width: 700px;
            }

            .dataTables_info{
                min-width: 700px;
            }

            .dataTables_paginate{
                float: left;
                width: 100%;
            }
        }




    </style>
</head>

<body class="animated-content"  style="font-family: tahoma;">

<?php echo $_top_navigation; ?>

<div id="wrapper">
<div id="layout-static">


<?php echo $_side_bar_navigation;

?>


<div class="static-content-wrapper white-bg">


<div class="static-content"  >
<div class="page-content"><!-- #page-content -->

<ol class="breadcrumb"  style="margin-bottom: 10px;">
    <li><a href="Dashboard">Dashboard</a></li>
    <li><a href="Deliveries">Purchase Invoice</a></li>
</ol>


<div class="container-fluid"">
<div data-widget-group="group1">
<div class="row">
<div class="col-md-12">

<div id="div_delivery_list">




    <div class="panel panel-default">
        <div class="panel-body table-responsive">
            <table id="tbl_delivery_invoice" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th></th>
                    <th>Invoice #</th>
                    <th>Supplier</th>
                    <th>External Ref#</th>
                    <th>PO #</th>
                    <th>Terms</th>
                    <th>Delivered</th>
                    <th><center>Action</center></th>
                </tr>
                </thead>
                <tbody>



                </tbody>
            </table>
        </div>





        <div class="panel-footer"></div>
    </div>

</div>


<div id="div_delivery_fields" style="display: none;">
<div class="panel panel-default">
<div class="panel-heading">
    <h2>Purchase Invoice</h2>



    <div class="pull-right"><strong>[ <a id="btn_receive_po" href="#" style="text-decoration: underline;">Receive from Purchase Order</a> ]</strong></div>
    <div class="panel-ctrls" data-actions-container=""></div>
</div>

<div class="panel-body">





<div class="row custom_frame">
    <form id="frm_deliveries" role="form" class="form-horizontal">

        <br />

        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group">
                <label class="col-md-3  control-label">* Invoice # :</label>
                <div class="col-md-9">
                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-code"></i>
                                                    </span>
                        <input type="text" name="dr_invoice_no" class="form-control" placeholder="P-INV-YYYYMMDD-XXX" readonly>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group">
                <label class="col-md-3  control-label">PO # :</label>
                <div class="col-md-9">
                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-code"></i>
                                                    </span>
                        <input type="text" name="po_no" class="form-control" placeholder="PO #">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group">
                <label class="col-md-3  control-label">Ref # :</label>
                <div class="col-md-9">
                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-code"></i>
                                                    </span>
                        <input type="text" name="external_ref_no" class="form-control" placeholder="External Ref No.">
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12  form-group">
                <label class="col-md-3 col-sm-12 col-xs-12 control-label">* Terms :</label>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="input-group bootstrap-touchspin">
                        <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                        <input id="touchspin4" name="terms" class="form-control" value="1" style="display: block;">
                        <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                                <span class="input-group-btn-vertical">
                    </div>
                </div>

                <div class="col-md-5 col-sm-6 col-xs-6">
                    <select name="duration" id="cbo_term_type" class="form-control">
                        <option>NA</option>
                        <option>Day(s)</option>
                        <option>Months(s)</option>
                        <option>Year(s)</option>
                    </select>

                </div>

            </div>


            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group">
                <label class="col-md-3 control-label">* Supplier :</label>

                <div class="col-md-9">
                    <select name="supplier" id="cbo_suppliers" data-error-msg="Supplier is required." required>
                        <option value="0">[ Create New Supplier ]</option>
                        <?php foreach($suppliers as $supplier){ ?>
                            <option value="<?php echo $supplier->supplier_id; ?>" data-tax-type="<?php echo $supplier->tax_type_id; ?>"><?php echo $supplier->supplier_name; ?></option>
                        <?php } ?>
                    </select>


                </div>

            </div>



            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group">
                <label class="col-md-3  control-label">Contact :</label>
                <div class="col-md-9">
                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-users"></i>
                                                    </span>
                        <input type="text" name="contact_person" class="form-control" placeholder="Contact Person">
                    </div>
                </div>
            </div>





        </div>


        <div class="row">


            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group">
                <label class="col-md-3 control-label">* Tax type :</label>

                <div class="col-md-9">
                    <select name="tax_type" id="cbo_tax_type">
                        <?php foreach($tax_types as $tax_type){ ?>
                            <option value="<?php echo $tax_type->tax_type_id; ?>" data-tax-rate="<?php echo $tax_type->tax_rate; ?>"><?php echo $tax_type->tax_type; ?></option>
                        <?php } ?>
                    </select>


                </div>

            </div>





            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group">
                <label class="col-md-3  control-label">Due Date : </label>
                <div class="col-md-9">
                    <div class="input-group">
                        <span class="input-group-addon">
                             <i class="fa fa-calendar"></i>
                        </span>
                        <input type="text" name="date_due" class="date-picker form-control" value="<?php echo date("m/d/Y"); ?>" placeholder="Due Date" data-error-msg="Due Date is required!" required>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 form-group">
                <label class="col-md-3  control-label">Delivery : </label>
                <div class="col-md-9">
                    <div class="input-group">
                        <span class="input-group-addon">
                             <i class="fa fa-calendar"></i>
                        </span>
                        <input type="text" name="date_delivered" class="date-picker form-control" value="<?php echo date("m/d/Y"); ?>" placeholder="Due Date" data-error-msg="Delivery Date is required!" required>
                    </div>
                </div>
            </div>





            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12  form-group">
                <label class="col-md-3  control-label">Remarks :</label>
                <div class="col-md-9">
                    <textarea name="remarks" class="form-control" placeholder="Remarks"></textarea>

                </div>
            </div>
        </div>




    </form>
</div>

<div class="row custom_frame">



    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br />
        <label class="control-label" style="font-family: Tahoma;"><strong>Enter PLU or Search Item :</strong></label>
        <div id="custom-templates">
            <input class="typeahead" type="text" placeholder="Enter PLU or Search Item">
        </div><br />

        <form id="frm_items">
            <div class="table-responsive">
                <table id="tbl_items" class="table table-striped table-bordered " cellspacing="0" width="100%" style="font-font:tahoma;">
                <thead>
                <tr>

                    <th width="10%">Qty</th>
                    <th width="5%">UM</th>
                    <th width="30%">Item</th>
                    <th width="12%" style="text-align: right">Unit Price</th>
                    <th width="12%" style="text-align: right">Discount</th>
                    <th style="display: none;">T.D</th> <!-- total discount -->
                    <th>Tax %</th>
                    <th width="12%" style="text-align: right">Total</th>
                    <th style="display: none;">V.I</th> <!-- vat input -->
                    <th style="display: none;">N.V</th> <!-- net of vat -->
                    <td style="display: none;">Item ID</td><!-- product id -->
                    <th><center>Action</center></th>

                </tr>
                </thead>
                <tbody>
                <!--<tr>

                                                <td width="10%"><input type="text" class="numeric form-control" align="right"></td>
                                                <td width="5%">pcs</td>
                                                <td width="30%">Computer Case</td>
                                                <td width="12%"><input type="text" class="numeric form-control"></td>
                                                <td width="12%"><input type="text" class="numeric form-control"></td>
                                                <td></td>
                                                <td width="15%">
                                                    <select class="form-control">
                                                        <?php foreach($tax_types as $tax_type){ ?>
                                                            <option value="<?php echo $tax_type->tax_type_id; ?>"><?php echo $tax_type->tax_type; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                                <td width="12%" align="right"><input type="text" class="numeric form-control"></td>
                                                <td></td>
                                                <td></td>

                                                <td><button type="button" class="btn btn-default"><i class="fa fa-trash"></i></button></td>
                                            </tr>-->
                </tbody>


            </table>
            </div>
        </form>

        <div class="row">
            <div class="col-lg-3 col-lg-offset-9">
                <table id="tbl_delivery_summary" class="table invoice-total">
                    <tbody>

                    <tr>
                        <td>Discount :</td>
                        <td align="right">0.00</td>
                    </tr>

                    <tr>
                        <td>Total before Tax :</td>
                        <td align="right">0.00</td>
                    </tr>
                    <tr>
                        <td>Tax :</td>
                        <td align="right">0.00</td>
                    </tr>
                    <tr>
                        <td><strong>Total After Tax :</strong></td>
                        <td align="right"><b>0.00</b></td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>








</div>


<div class="panel-footer">
    <div class="row">
        <div class="col-sm-12">
            <button id="btn_save" class="btn-primary btn" style="text-transform: capitalize;font-family: Tahoma, Georgia, Serif;"><span class=""></span>  Save Changes</button>
            <button id="btn_cancel" class="btn-default btn" style="text-transform: capitalize;font-family: Tahoma, Georgia, Serif;"">Cancel</button>
        </div>
    </div>
</div>



</div>




</div>




</div>
</div>
</div>
</div> <!-- .container-fluid -->

</div> <!-- #page-content -->
</div>


<div id="modal_confirmation" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
    <div class="modal-dialog modal-sm">
        <div class="modal-content"><!---content--->
            <div class="modal-header">
                <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title"><span id="modal_mode"> </span>Confirm Deletion</h4>

            </div>

            <div class="modal-body">
                <p id="modal-body-message">Are you sure ?</p>
            </div>

            <div class="modal-footer">
                <button id="btn_yes" type="button" class="btn btn-danger" data-dismiss="modal" style="text-transform: capitalize;font-family: Tahoma, Georgia, Serif;">Yes</button>
                <button id="btn_close" type="button" class="btn btn-default" data-dismiss="modal" style="text-transform: capitalize;font-family: Tahoma, Georgia, Serif;">No</button>
            </div>
        </div><!---content---->
    </div>
</div><!---modal-->




<div id="modal_po_list" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
    <div class="modal-dialog" style="width: 80%;">
        <div class="modal-content"><!---content--->
            <div class="modal-header">
                <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title"><span id="modal_mode"> </span>Purchase Order</h4>

            </div>

            <div class="modal-body">
                <table id="tbl_po_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th></th>
                        <th>PO#</th>
                        <th>Vendor</th>
                        <th>Terms</th>
                        <th>Deliver to</th>
                        <th>Status</th>
                        <th><center>Action</center></th>
                    </tr>
                    </thead>
                    <tbody>



                    </tbody>
                </table>
            </div>

            <div class="modal-footer">
                <button id="btn_accept" type="button" class="btn btn-primary" data-dismiss="modal" style="text-transform: none;font-family: Tahoma, Georgia, Serif;">Receive this Order</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" style="text-transform: none;font-family: Tahoma, Georgia, Serif;">Cancel</button>
            </div>
        </div><!---content---->
    </div>
</div><!---modal-->



<div id="modal_new_supplier" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
    <div class="modal-dialog modal-md">
        <div class="modal-content"><!---content--->
            <div class="modal-header">
                <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title"><span id="modal_mode"> </span>New Supplier</h4>

            </div>

            <div class="modal-body" style="overflow:hidden;">
                <form id="frm_supplier_new">
                    <div class="form-group">
                        <label>* Supplier :</label>
                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-users"></i>
                                                </span>
                            <input type="text" name="supplier_name" class="form-control" placeholder="Supplier" data-error-msg="Supplier name is required." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Address :</label>
                        <textarea name="address" class="form-control"  placeholder="Address" data-error-msg="Address is required." required></textarea>
                    </div>

                    <div class="form-group">
                        <label> * Tax type :</label>
                        <select name="tax_type_id" id="cbo_tax_group">
                            <?php foreach($tax_types as $tax_type){ ?>
                                <option value="<?php echo $tax_type->tax_type_id; ?>" data-tax-rate="<?php echo $tax_type->tax_rate; ?>"><?php echo $tax_type->tax_type; ?></option>
                            <?php } ?>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>* Email :</label>
                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope-o"></i>
                                                </span>
                            <input type="text" name="email_address" class="form-control" placeholder="Email" data-error-msg="Email address is required." required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Mobile Nos. :</label>
                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-send"></i>
                                                </span>
                            <input type="text" name="mobile_no" class="form-control" placeholder="Mobile #">
                        </div>
                    </div>



                    <div class="form-group">
                        <label>TIN # :</label>
                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-file"></i>
                                                </span>
                            <input type="text" name="tin_no" class="form-control" placeholder="TIN #">
                        </div>
                    </div>

                </form>


            </div>

            <div class="modal-footer">
                <button id="btn_create_user_suppliers" type="button" class="btn btn-primary"  style="text-transform: capitalize;font-family: Tahoma, Georgia, Serif;"><span class=""></span> Create</button>
                <button id="btn_close_user_suppliers" type="button" class="btn btn-default" data-dismiss="modal" style="text-transform: capitalize;font-family: Tahoma, Georgia, Serif;">Cancel</button>
            </div>
        </div><!---content---->
    </div>
</div><!---modal-->






<footer role="contentinfo">
    <div class="clearfix">
        <ul class="list-unstyled list-inline pull-left">
            <li><h6 style="margin: 0;">&copy; 2016 - Paul Christian Rueda</h6></li>
        </ul>
        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
    </div>
</footer>




</div>
</div>


</div>


<?php echo $_switcher_settings; ?>
<?php echo $_def_js_files; ?>

<script src="assets/plugins/spinner/dist/spin.min.js"></script>
<script src="assets/plugins/spinner/dist/ladda.min.js"></script>


<script type="text/javascript" src="assets/plugins/datatables/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/plugins/datatables/dataTables.bootstrap.js"></script>




<!-- Date range use moment.js same as full calendar plugin -->
<script src="assets/plugins/fullcalendar/moment.min.js"></script>
<!-- Data picker -->
<script src="assets/plugins/datapicker/bootstrap-datepicker.js"></script>

<!-- Select2 -->
<script src="assets/plugins/select2/select2.full.min.js"></script>



<!-- twitter typehead -->
<script src="assets/plugins/twittertypehead/handlebars.js"></script>
<script src="assets/plugins/twittertypehead/bloodhound.min.js"></script>
<script src="assets/plugins/twittertypehead/typeahead.bundle.min.js"></script>
<script src="assets/plugins/twittertypehead/typeahead.jquery.min.js"></script>

<!-- touchspin -->
<script type="text/javascript" src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"></script>

<!-- numeric formatter -->
<script src="assets/plugins/formatter/autoNumeric.js" type="text/javascript"></script>
<script src="assets/plugins/formatter/accounting.js" type="text/javascript"></script>

<script>




$(document).ready(function(){
    var dt; var dt_po; var _txnMode; var _selectedID; var _selectRowObj; var _cboSuppliers; var _cboTaxType;

    var oTableItems={
        qty : 'td:eq(0)',
        unit_price : 'td:eq(3)',
        discount : 'td:eq(4)',
        total_line_discount : 'td:eq(5)',
        tax : 'td:eq(6)',
        total : 'td:eq(7)',
        vat_input : 'td:eq(8)',
        net_vat : 'td:eq(9)'

    };


    var oTableDetails={
        discount : 'tr:eq(0) > td:eq(1)',
        before_tax : 'tr:eq(1) > td:eq(1)',
        tax_amount : 'tr:eq(2) > td:eq(1)',
        after_tax : 'tr:eq(3) > td:eq(1)'
    };


    var initializeControls=function(){

        dt_po=$('#tbl_po_list').DataTable({
            "bLengthChange":false,
            "ajax" : "Purchases/transaction/open",
            "columns": [
                {
                    "targets": [0],
                    "class":          "details-control",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },
                { targets:[1],data: "po_no" },
                { targets:[2],data: "supplier_name" },
                { targets:[3],data: "term_description" },
                { targets:[5],data: "deliver_to_address" },
                { targets:[6],data: "order_status" },
                {
                    targets:[7],
                    render: function (data, type, full, meta){
                        var btn_accept='<button class="btn btn-default btn-sm" name="accept_po"  style="margin-left:-15px;text-transform: none;" data-toggle="tooltip" data-placement="top" title="Receive this PO"><i class="fa fa-check"></i> Accept PO</button>';
                        return '<center>'+btn_accept+'</center>';
                    }
                }

            ]
        });

        dt=$('#tbl_delivery_invoice').DataTable({
            "dom": '<"toolbar">frtip',
            "bLengthChange":false,
            "ajax" : "Deliveries/transaction/list",
            "columns": [
                {
                    "targets": [0],
                    "class":          "details-control",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },
                { targets:[1],data: "dr_invoice_no" },
                { targets:[2],data: "supplier_name" },
                { targets:[3],data: "external_ref_no" },
                { targets:[4],data: "po_no" },
                { targets:[5],data: "term_description" },
                { targets:[6],data: "date_delivered" },
                {
                    targets:[7],
                    render: function (data, type, full, meta){
                        var btn_edit='<button class="btn btn-default btn-sm" name="edit_info"  style="margin-left:-15px;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
                        var btn_trash='<button class="btn btn-default btn-sm" name="remove_info" style="margin-right:0px;" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

                        return '<center>'+btn_edit+btn_trash+'</center>';
                    }
                }
            ]
        });


        var createToolBarButton=function(){
            var _btnNew='<button class="btn btn-primary"  id="btn_new" style="text-transform: capitalize;font-family: Tahoma, Georgia, Serif;" data-toggle="modal" data-target="" data-placement="left" title="Record Purchase Invoice" >'+
                '<i class="fa fa-file"></i> Record Purchase Invoice</button>';

            $("div.toolbar").html(_btnNew);
        }();





        $('.date-picker').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true

        });

        _cboSuppliers=$("#cbo_suppliers").select2({
            placeholder: "Please select supplier.",
            allowClear: true
        });

        _cboSuppliers.select2('val',null);

        _cboTaxType=$('#cbo_tax_type').select2({
            placeholder: "Please select tax type.",
            allopwClear: true
        });

        var _cboTaxGroup=$('#cbo_tax_group').select2({
            placeholder: "Please select tax type.",
            allopwClear: true,
            dropdownParent: "#modal_new_supplier"
        });


        var raw_data=<?php echo json_encode($products); ?>;


        var products = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('product_code','product_desc','product_desc1'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            local : raw_data
        });

        var _objTypeHead=$('#custom-templates .typeahead');

        _objTypeHead.typeahead(null, {
            name: 'products',
            display: 'description',
            source: products,
            templates: {
                header: [
                    '<table width="100%"><tr><td width=20%" style="padding-left: 1%;"><b>PLU</b></td><td width="30%" align="left"><b>Description 1</b></td><td width="20%" align="left"><b>Description 2</b></td><td width="20%" align="right" style="padding-right: 2%;"><b>Cost</b></td></tr></table>'
                ].join('\n'),

                suggestion: Handlebars.compile('<table width="100%"><tr><td width="20%" style="padding-left: 1%">{{product_code}}</td><td width="30%" align="left">{{product_desc}}</td><td width="20%" align="left">{{produdct_desc1}}</td><td width="20%" align="right" style="padding-right: 2%;">{{purchase_cost}}</td></tr></table>')

            }
        }).on('keyup', this, function (event) {
            if (event.keyCode == 13) {

                $('.tt-suggestion:first').click();
                _objTypeHead.typeahead('close');
                _objTypeHead.typeahead('val','');
            }
        }).bind('typeahead:select', function(ev, suggestion) {
            //if(_objTypeHead.typeahead('val')==''){ return false; }
            //console.log(suggestion);

            var tax_id=$('#cbo_tax_type').select2('val');
            var tax_rate=parseFloat($('#cbo_tax_type').find('option[value="'+tax_id+'"]').data('tax-rate'));

            var total=getFloat(suggestion.purchase_cost);
            var net_vat=0;
            var vat_input=0;

            if(suggestion.is_tax_exempt=="0"){ //not tax excempt
                net_vat=total/(1+(getFloat(tax_rate)/100));
                vat_input=total-net_vat;
            }else{
                tax_rate=0;
                net_vat=total;
                vat_input=0;

                if(tax_id!="1"){ //if supplier is taxable, notify the user that this item is tax excempt
                    showNotification({title:"Tax Excempt!",stat:"info",msg:"This item is tax excempt."});
                }

            }


            $('#tbl_items > tbody').prepend(newRowItem({
                dr_qty : "1",
                product_code : suggestion.product_code,
                unit_id : suggestion.unit_id,
                unit_name : suggestion.unit_name,
                product_id: suggestion.product_id,
                product_desc : suggestion.product_desc,
                dr_line_total_discount : "0.00",
                tax_exempt : false,
                dr_tax_rate : tax_rate,
                dr_price : suggestion.purchase_cost,
                dr_discount : "0.00",
                tax_type_id : null,
                dr_line_total_price : total,
                dr_non_tax_amount: net_vat,
                dr_tax_amount:vat_input
            }));





            reInitializeNumeric();
            reComputeTotal();

            //alert("dd")
        });

        $('div.tt-menu').on('click','table.tt-suggestion',function(){
            _objTypeHead.typeahead('val','');
        });

        $("input#touchspin4").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'fa fa-fw fa-plus',
            verticaldownclass: 'fa fa-fw fa-minus'
        });


    }();






    var bindEventHandlers=(function(){
        var detailRows = [];

        $('#tbl_delivery_invoice tbody').on( 'click', 'tr td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = dt.row( tr );
            var idx = $.inArray( tr.attr('id'), detailRows );

            if ( row.child.isShown() ) {
                tr.removeClass( 'details' );
                row.child.hide();

                // Remove from the 'open' array
                detailRows.splice( idx, 1 );
            }
            else {
                tr.addClass( 'details' );
                //console.log(row.data());
                var d=row.data();

                $.ajax({
                    "dataType":"html",
                    "type":"POST",
                    "url":"Templates/layout/dr/"+ d.dr_invoice_id,
                    "beforeSend" : function(){
                        row.child( '<center><br /><img src="assets/img/loader/ajax-loader-lg.gif" /><br /><br /></center>' ).show();
                    }
                }).done(function(response){
                    row.child( response ).show();
                    // Add to the 'open' array
                    if ( idx === -1 ) {
                        detailRows.push( tr.attr('id') );
                    }
                });




            }
        } );




        $('#tbl_po_list tbody').on( 'click', 'tr td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = dt_po.row( tr );
            var idx = $.inArray( tr.attr('id'), detailRows );

            if ( row.child.isShown() ) {
                tr.removeClass( 'details' );
                row.child.hide();

                // Remove from the 'open' array
                detailRows.splice( idx, 1 );
            }
            else {
                tr.addClass( 'details' );
                //console.log(row.data());
                _selectRowObj=$(this).closest('tr');
                var d=dt_po.row(_selectRowObj).data();

                $.ajax({
                    "dataType":"html",
                    "type":"POST",
                    "url":"Templates/layout/po/"+ d.purchase_order_id+'/contentview',
                    "beforeSend" : function(){
                        row.child( '<center><br /><img src="assets/img/loader/ajax-loader-lg.gif" /><br /><br /></center>' ).show();
                    }
                }).done(function(response){
                    row.child( response ).show();
                    // Add to the 'open' array
                    if ( idx === -1 ) {
                        detailRows.push( tr.attr('id') );
                    }
                });



            }
        } );



        _cboSuppliers.on("select2:select", function (e) {

            var i=$(this).select2('val');

            if(i==0){ //new supplier
                _cboSuppliers.select2('val',null)
                $('#modal_new_supplier').modal('show');
                clearFields($('#modal_new_supplier').find('form'));
            }else{
                var obj_supplier=$('#cbo_suppliers').find('option[value="'+i+'"]');
                _cboTaxType.select2('val',obj_supplier.data('tax-type')); //set tax type base on selected Supplier
            }


        });


        $('#tbl_delivery_invoice tbody').on('click','#btn_email',function(){
            _selectRowObj=$(this).parents('tr').prev();
            var d=dt.row(_selectRowObj).data();

            $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Email/send/po/"+ d.dr_invoice_id,
                "data": {email:$(this).data('supplier-email')}
            }).done(function(response){
                showNotification(response);
                dt.row(_selectRowObj).data(response.row_updated[0]).draw();
            });
        });

        $('#btn_new').click(function(){
            _txnMode="new";
            //$('.toggle-fullscreen').click();
            clearFields($('#frm_deliveries'));
            showList(false);
        });

        $('#btn_browse').click(function(event){
            event.preventDefault();
            $('input[name="file_upload[]"]').click();
        });


        $('#btn_receive_po').click(function(){
            $('#tbl_po_list tbody').html('<tr><td colspan="7"><center><br /><img src="assets/img/loader/ajax-loader-lg.gif" /><br /><br /></center></td></tr>');
            dt_po.ajax.reload( null, false );
            $('#modal_po_list').modal('show');
        });


        $('#btn_remove_photo').click(function(event){
            event.preventDefault();
            $('img[name="img_user"]').attr('src','assets/img/anonymous-icon.png');
        });



        $('#tbl_po_list > tbody').on('click','button[name="accept_po"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt_po.row(_selectRowObj).data();

            //alert(d.purchase_order_id);

            $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name&&_elem.attr('type')!='password'){
                        _elem.val(value);
                    }

                });

                $('#cbo_suppliers').select2('val',data.supplier_id);

            });


            $('#modal_po_list').modal('hide');
            resetSummary();

            $.ajax({
                url : 'Purchases/transaction/item-balance/'+data.purchase_order_id,
                type : "GET",
                cache : false,
                dataType : 'json',
                processData : false,
                contentType : false,
                beforeSend : function(){
                    $('#tbl_items > tbody').html('<tr><td align="center" colspan="8"><br /><img src="assets/img/loader/ajax-loader-sm.gif" /><br /><br /></td></tr>');
                },
                success : function(response){
                    var rows=response.data;
                    $('#tbl_items > tbody').html('');

                    var total_discount=0;
                    var total_tax_amount=0;
                    var total_non_tax_amount=0;
                    var gross_amount=0;

                    $.each(rows,function(i,value){

                        $('#tbl_items > tbody').prepend(newRowItem({
                            dr_qty : value.po_qty,
                            product_code : value.product_code,
                            unit_id : value.unit_id,
                            unit_name : value.unit_name,
                            product_id: value.product_id,
                            product_desc : value.product_desc,
                            dr_line_total_discount : value.po_line_total_discount,
                            tax_exempt : false,
                            dr_tax_rate : value.po_tax_rate,
                            dr_price : value.po_price,
                            dr_discount : value.po_discount,
                            tax_type_id : null,
                            dr_line_total_price : value.po_line_total,
                            dr_non_tax_amount: value.non_tax_amount,
                            dr_tax_amount:value.tax_amount
                        }));

                        //sum up all footer details
                        total_discount+=getFloat(value.po_line_total_discount);
                        total_tax_amount+=getFloat(value.tax_amount);
                        total_non_tax_amount+=getFloat(value.non_tax_amount);
                        gross_amount+=getFloat(value.po_line_total);

                    });


                    //write summary details
                    var tbl_summary=$('#tbl_delivery_summary');
                    tbl_summary.find(oTableDetails.discount).html(accounting.formatNumber(total_discount,2));
                    tbl_summary.find(oTableDetails.before_tax).html(accounting.formatNumber(total_non_tax_amount,2));
                    tbl_summary.find(oTableDetails.tax_amount).html(accounting.formatNumber(total_tax_amount,2));
                    tbl_summary.find(oTableDetails.after_tax).html('<b>'+accounting.formatNumber(gross_amount,2)+'</b>');

                }
            });



        });





        $('#btn_create_user_suppliers').click(function(){

            var btn=$(this);

            if(validateRequiredFields($('#frm_supplier_new'))){
                var data=$('#frm_supplier_new').serializeArray();

                $.ajax({
                    "dataType":"json",
                    "type":"POST",
                    "url":"Suppliers/transaction/create",
                    "data":data,
                    "beforeSend" : function(){
                        showSpinningProgress(btn);
                    }
                }).done(function(response){
                    showNotification(response);
                    $('#modal_new_supplier').modal('hide');

                    var _suppliers=response.row_added[0];
                    $('#cbo_suppliers').append('<option value="'+_suppliers.supplier_id+'" data-tax-type="'+_suppliers.tax_type_id+'" selected>'+_suppliers.supplier_name+'</option>');
                    $('#cbo_suppliers').select2('val',_suppliers.supplier_id);
                    $('#cbo_tax_type').select2('val',_suppliers.tax_type_id);

                }).always(function(){
                    showSpinningProgress(btn);
                });
            }





        });



        $('#tbl_delivery_invoice tbody').on('click','button[name="edit_info"]',function(){
            ///alert("ddd");
            _txnMode="edit";
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.dr_invoice_id;

            $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name&&_elem.attr('type')!='password'){
                        _elem.val(value);
                    }

                });

                $('#cbo_suppliers').select2('val',data.supplier_id);
            });

            resetSummary();




            $.ajax({
                url : 'Deliveries/transaction/items/'+data.dr_invoice_id,
                type : "GET",
                cache : false,
                dataType : 'json',
                processData : false,
                contentType : false,
                beforeSend : function(){
                    $('#tbl_items > tbody').html('<tr><td align="center" colspan="8"><br /><img src="assets/img/loader/ajax-loader-sm.gif" /><br /><br /></td></tr>');
                },
                success : function(response){
                    var rows=response.data;
                    $('#tbl_items > tbody').html('');

                    //var total_discount=0;
                    //var total_tax_amount=0;
                    //var total_non_tax_amount=0;
                    //var gross_amount=0;

                    $.each(rows,function(i,value){
                        //alert(value.non_tax_amount);
                        $('#tbl_items > tbody').prepend(newRowItem({
                            dr_qty : value.dr_qty,
                            product_code : value.product_code,
                            unit_id : value.unit_id,
                            unit_name : value.unit_name,
                            product_id: value.product_id,
                            product_desc : value.product_desc,
                            dr_line_total_discount : value.dr_line_total_discount,
                            tax_exempt : false,
                            dr_tax_rate : value.dr_tax_rate,
                            dr_price : value.dr_price,
                            dr_discount : value.dr_discount,
                            tax_type_id : null,
                            dr_line_total_price : value.dr_line_total_price,
                            dr_non_tax_amount: value.dr_non_tax_amount,
                            dr_tax_amount:value.dr_tax_amount
                        }));


                        //sum up all footer details
                        //total_discount+=getFloat(value.dr_line_total_discount);
                        //total_tax_amount+=getFloat(value.tax_amount);
                        //total_non_tax_amount+=getFloat(value.non_tax_amount);
                        //gross_amount+=getFloat(value.dr_line_total_price);


                    });


                    //write summary details
                    //var tbl_summary=$('#tbl_delivery_summary');
                    //tbl_summary.find(oTableDetails.discount).html(accounting.formatNumber(total_discount,2));
                    //tbl_summary.find(oTableDetails.before_tax).html(accounting.formatNumber(total_non_tax_amount,2));
                    //tbl_summary.find(oTableDetails.tax_amount).html(accounting.formatNumber(total_tax_amount,2));
                    //tbl_summary.find(oTableDetails.after_tax).html('<b>'+accounting.formatNumber(gross_amount,2)+'</b>');
                    reComputeTotal();

                }
            });




            showList(false);

        });

        $('#tbl_delivery_invoice tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.dr_invoice_id;

            $('#modal_confirmation').modal('show');
        });


        $('#tbl_items tbody').on('keyup','input.numeric',function(){
            var row=$(this).closest('tr');

            var price=parseFloat(accounting.unformat(row.find(oTableItems.unit_price).find('input.numeric').val()));
            var discount=parseFloat(accounting.unformat(row.find(oTableItems.discount).find('input.numeric').val()));
            var qty=parseFloat(accounting.unformat(row.find(oTableItems.qty).find('input.numeric').val()));
            var tax_rate=parseFloat(accounting.unformat(row.find(oTableItems.tax).find('input.numeric').val()))/100;

            if(discount>price){
                showNotification({title:"Invalid",stat:"error",msg:"Discount must not greater than unit price."});
                row.find(oTableItems.discount).find('input.numeric').val('');
            }

            var discounted_price=price-discount;
            var line_total_discount=discount*qty;
            var line_total=discounted_price*qty;
            var net_vat=line_total/(1+tax_rate);
            var vat_input=line_total-net_vat;

            $(oTableItems.total,row).find('input.numeric').val(accounting.formatNumber(line_total,2)); // line total amount
            $(oTableItems.total_line_discount,row).find('input.numeric').val(line_total_discount); //line total discount
            $(oTableItems.net_vat,row).find('input.numeric').val(net_vat); //net of vat
            $(oTableItems.vat_input,row).find('input.numeric').val(vat_input); //vat input

            //console.log(net_vat);
            reComputeTotal();


        });







        $('#btn_yes').click(function(){
            removePurchaseInvoice().done(function(response){
                showNotification(response);
                dt.row(_selectRowObj).remove().draw();
            });
        });





        $('input[name="file_upload[]"]').change(function(event){
            var _files=event.target.files;

            $('#div_img_user').hide();
            $('#div_img_loader').show();


            var data=new FormData();
            $.each(_files,function(key,value){
                data.append(key,value);
            });

            //console.log(_files);

            $.ajax({
                url : 'Users/transaction/upload',
                type : "POST",
                data : data,
                cache : false,
                dataType : 'json',
                processData : false,
                contentType : false,
                success : function(response){
                    //console.log(response);
                    //alert(response.path);
                    $('#div_img_loader').hide();
                    $('#div_img_user').show();
                    $('img[name="img_user"]').attr('src',response.path);

                }
            });

        });

        $('#btn_cancel').click(function(){
            showList(true);
        });



        $('#btn_save').click(function(){

            if(validateRequiredFields($('#frm_deliveries'))){
                if(_txnMode=="new"){
                    createDeliverInvoice().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_deliveries'));
                        showList(true);
                    }).always(function(){
                        showSpinningProgress($('#btn_save'));
                    });
                }else{
                    updatePurchaseOrder().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                        clearFields($('#frm_deliveries'));
                        showList(true);
                    }).always(function(){
                        showSpinningProgress($('#btn_save'));
                    });
                }

            }

        });



        $('#tbl_items > tbody').on('click','button[name="remove_item"]',function(){
            $(this).closest('tr').remove();
            reComputeTotal();
        });


    })();


    var validateRequiredFields=function(f){
        var stat=true;

        $('div.form-group').removeClass('has-error');
        $('input[required],textarea[required],select[required]',f).each(function(){

            if($(this).is('select')){
                if($(this).select2('val')==0||$(this).select2('val')==null){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('div.form-group').addClass('has-error');
                    $(this).focus();
                    stat=false;
                    return false;
                }
            }else{
                if($(this).val()==""){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('div.form-group').addClass('has-error');
                    $(this).focus();
                    stat=false;
                    return false;
                }
            }



        });

        return stat;
    };


    var createDeliverInvoice=function(){
        var _data=$('#frm_deliveries,#frm_items').serializeArray();

        var tbl_summary=$('#tbl_delivery_summary');
        _data.push({name : "summary_discount", value : tbl_summary.find(oTableDetails.discount).text()});
        _data.push({name : "summary_before_discount", value :tbl_summary.find(oTableDetails.before_tax).text()});
        _data.push({name : "summary_tax_amount", value : tbl_summary.find(oTableDetails.tax_amount).text()});
        _data.push({name : "summary_after_tax", value : tbl_summary.find(oTableDetails.after_tax).text()});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Deliveries/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var updatePurchaseOrder=function(){
        var _data=$('#frm_deliveries,#frm_items').serializeArray();

        var tbl_summary=$('#tbl_delivery_summary');
        _data.push({name : "summary_discount", value : tbl_summary.find(oTableDetails.discount).text()});
        _data.push({name : "summary_before_discount", value :tbl_summary.find(oTableDetails.before_tax).text()});
        _data.push({name : "summary_tax_amount", value : tbl_summary.find(oTableDetails.tax_amount).text()});
        _data.push({name : "summary_after_tax", value : tbl_summary.find(oTableDetails.after_tax).text()});
        _data.push({name : "dr_invoice_id" ,value : _selectedID});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Deliveries/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var removePurchaseInvoice=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Deliveries/transaction/delete",
            "data":{dr_invoice_id : _selectedID}
        });
    };

    var showList=function(b){
        if(b){
            $('#div_delivery_list').show();
            $('#div_delivery_fields').hide();
        }else{
            $('#div_delivery_list').hide();
            $('#div_delivery_fields').show();
        }
    };

    var showNotification=function(obj){
        PNotify.removeAll(); //remove all notifications
        new PNotify({
            title:  obj.title,
            text:  obj.msg,
            type:  obj.stat
        });
    };



    var showSpinningProgress=function(e){
        $(e).find('span').toggleClass('glyphicon glyphicon-refresh spinning');
    };

    var clearFields=function(f){
        $('input:not(.date-picker),textarea',f).val('');
        $(f).find('input:first').focus();
        $('#tbl_items > tbody').html('');
    };


    function format ( d ) {

        //return


    };


    var getFloat=function(f){
        return parseFloat(accounting.unformat(f));
    };

    var newRowItem=function(d){


        return '<tr>'+
        '<td width="10%"><input name="dr_qty[]" type="text" class="numeric form-control" value="'+ d.dr_qty+'"></td>'+
        '<td width="5%">'+ d.unit_name+'</td>'+
        '<td width="30%">'+d.product_desc+'</td>'+
        '<td width="11%"><input name="dr_price[]" type="text" class="numeric form-control" value="'+accounting.formatNumber(d.dr_price,2)+'" style="text-align:right;"></td>'+
        '<td width="11%"><input name="dr_discount[]" type="text" class="numeric form-control" value="'+ accounting.formatNumber(d.dr_discount,2)+'" style="text-align:right;"></td>'+
        '<td style="display: none;" width="11%"><input name="dr_line_total_discount[]" type="text" class="numeric form-control" value="'+ accounting.formatNumber(d.dr_line_total_discount,2)+'" readonly></td>'+
        '<td width="11%"><input name="dr_tax_rate[]" type="text" class="numeric form-control" value="'+ accounting.formatNumber(d.dr_tax_rate,2)+'"></td>'+
        '<td width="11%" align="right"><input name="dr_line_total_price[]" type="text" class="numeric form-control" value="'+ accounting.formatNumber(d.dr_line_total_price,2)+'" readonly></td>'+
        '<td style="display: none;"><input name="dr_tax_amount[]" type="text" class="numeric form-control" value="'+ d.dr_tax_amount+'" readonly></td>'+
        '<td style="display: none;"><input name="dr_non_tax_amount[]" type="text" class="numeric form-control" value="'+ d.dr_non_tax_amount+'" readonly></td>'+
        '<td style="display: none;"><input name="product_id[]" type="text" class="numeric form-control" value="'+ d.product_id+'" readonly></td>'+
        '<td align="center"><button type="button" name="remove_item" class="btn btn-default"><i class="fa fa-trash"></i></button></td>'+
        '</tr>';
    };



    var reComputeTotal=function(){
        var rows=$('#tbl_items > tbody tr');
        var tbl_summary=$('#tbl_delivery_summary');

        var discounts=0; var before_tax=0; var after_tax=0; var tax_amount=0;

        $.each(rows,function(){
            discounts+=parseFloat(accounting.unformat($(oTableItems.total_line_discount,$(this)).find('input.numeric').val()));
            before_tax+=parseFloat(accounting.unformat($(oTableItems.net_vat,$(this)).find('input.numeric').val()));
            tax_amount+=parseFloat(accounting.unformat($(oTableItems.vat_input,$(this)).find('input.numeric').val()));
            after_tax+=parseFloat(accounting.unformat($(oTableItems.total,$(this)).find('input.numeric').val()));
        });

        tbl_summary.find(oTableDetails.discount).html(accounting.formatNumber(discounts,2));
        tbl_summary.find(oTableDetails.before_tax).html(accounting.formatNumber(before_tax,2));
        tbl_summary.find(oTableDetails.tax_amount).html(accounting.formatNumber(tax_amount,2));
        tbl_summary.find(oTableDetails.after_tax).html('<b>'+accounting.formatNumber(after_tax,2)+'</b>');

    };



    var reInitializeNumeric=function(){
        $('.numeric').autoNumeric('init');
    };



    var resetSummary=function(){
        var tbl_summary=$('#tbl_delivery_summary');
        tbl_summary.find(oTableDetails.discount).html('0.00');
        tbl_summary.find(oTableDetails.before_tax).html('0.00');
        tbl_summary.find(oTableDetails.tax_amount).html('0.00');
        tbl_summary.find(oTableDetails.after_tax).html('<b>0.00</b>');
    };




});




</script>


</body>


</html>