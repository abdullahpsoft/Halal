@extends('voyager::master')


@section('page_header')
    <div class="container-fluid" >
        <h1 class="page-title" >
            <i class="voyager-plus" ></i>Add Product

            <!-- <a href="manufacturer/create" class="btn btn-success">
                <i class="voyager-plus"></i> Add New
            </a> -->
        </h1>

    </div>
@stop

@section('content')
    <style>

        /* Style the input fields */
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        /* Mark the active step: */
        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #19b5fe;
        }
    </style>
    <div class="">
{{--        <h1 class="page-title">--}}
{{--            <i class="voyager-lifebuoy"></i>--}}
{{--            Add Product--}}
{{--        </h1>--}}
        <div id="voyager-notifications"></div>
        <div class="page-content edit-add container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-bordered">
                        <!-- form start -->
                        <form role="form" id="regForm" class="form-edit-add" action="/admin/h-products/store" method="POST" enctype="multipart/form-data">
                            <!-- PUT Method if we are editing -->
@csrf
                            <!-- CSRF TOKEN -->

                            <div class="panel-body">


                                <!-- Adding / Editing -->

                                <!-- GET THE DISPLAY OPTIONS -->
<div class="tab">

                                <div class="form-group  col-md-6 ">

                                    <label class="control-label" for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="">
                                    <input type="text" class="hidden" id="userName"   value="{{\Illuminate\Support\Facades\Auth::user()->name}}">


                                </div>
                                <!-- GET THE DISPLAY OPTIONS -->
    <div class="form-group  col-md-6 ">

        <label class="control-label" for="name">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title" value="">


    </div>
                                <div class="form-group  col-md-6 ">

                                    <label class="control-label" for="subCategory">Sub Category</label>

                                    <select class=" form-control" name="subCategory">

                                        @foreach($sub_categories as $sub)
                                        <option value="{{$sub->name}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$sub->name}}</font></font></option>
                                        @endforeach
                                    </select>

                                </div>
                                <!-- GET THE DISPLAY OPTIONS -->

                                <div class="form-group  col-md-6 ">

                                    <label class="control-label" for="name">Ean</label>
                                    <input type="text" class="form-control" id="ean" name="ean" placeholder="Ean" value="">


                                </div>

    <div class="form-group  col-md-6 ">

        <label class="control-label" for="name">Company Name</label>
        <input type="text" class="form-control" name="company_name" placeholder="Company Name" value="">


    </div>

    <!-- GET THE DISPLAY OPTIONS -->

                                <div class="form-group  col-md-6 ">

                                    <label class="control-label" for="name">Image</label>
                                    <input type="file"  class="form-control" name="image" id="image" accept="image/*">
                                    <img id="blah" style="width: 170px; height: 140px;"  src="/img/no-image.png" alt="your image" />


                                </div>
                                <!-- GET THE DISPLAY OPTIONS -->
    <div class="form-group  col-md-6 ">

        <label class="control-label" for="store_id">Store</label>

        <select class=" form-control" name="store_id">

            <option value="all">All Stores</option>
            @foreach($stores as $store)
                <option value="{{$store->id}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$store->name}}</font></font></option>
            @endforeach
        </select>

    </div>
                                <!-- GET THE DISPLAY OPTIONS -->



    <div class="form-group  col-md-7 " style="text-align: center">

        <h3 style="text-align: left" >Do You Have Manufacturer's Response <b>?</b></h3>
        <br>
        <div id="console-event"></div>                                        <br>

        <div class="row" >
<div class="col col-md-2">            <input type="radio" name="gujar" id="gujar" value="on" onclick="change();"><label for="gujar">Yes</label>
</div>
            <div class="col col-md-2">            <input type="radio"   name="gujar" id="gil" value="offky" onclick="change2();" checked><label for="gujar">No</label>
            </div>



        </div>

    </div>

</div>
                                <!-- GET THE DISPLAY OPTIONS -->


                                <div class="tab" id="no-tab">
                                    <div class="show" id="tab1">

<h2>Send Request To Manufacturer</h2>
                                        <!-- Adding / Editing -->

                                        <!-- GET THE DISPLAY OPTIONS -->


                                        <!-- GET THE DISPLAY OPTIONS -->
                                        <div class="row">
                                            <div class="form-group col-md-4 ">

                                                <label class="control-label" for="manufacturer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Select manufacturer</font></font></label>
                                                <select class=" form-control" name="manufacturer1">
                                                    @foreach($manufacturers as $cp)
                                                    <option value="{{$cp->id}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$cp->Name}}</font></font></option>
                                                    @endforeach
                                                </select>

                                            </div>

                                        </div>

                                        <!-- GET THE DISPLAY OPTIONS -->
                                        <div class="row">
                                            <div class="form-group col-md-4 ">

                                                <label class="control-label" for="mail1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><gistnote class="gistnote-highlight" highlightid="4833cce0-d069-4fb9-8a82-da3f6394203f" colornum="1" style="background-color: rgb(255, 202, 215);" id="4833cce0-d069-4fb9-8a82-da3f6394203f">Select mail template</gistnote></font></font></label>
                                                <select class=" form-control" name="mail1">
                                             @foreach($mails as $mail)
                                                    <option value="{{$mail->id}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$mail->subject}}</font></font></option>
                                             @endforeach
                                                </select>

                                            </div>

                                        </div>

                                        <div class="form-group col-md-12 ">

                                            <label class="control-label" for="body"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Write you request:</font></font></label>
                                            <textarea class="form-control" id="mail1body" name="mail1body" rows="8" cols="80">

                                                @foreach($mails as $mail)
                                                    {{$mail->body}}
                                                @endforeach

                                                </textarea>

                                        </div>
                                        <!-- GET THE DISPLAY OPTIONS -->




                                    </div>

                                    <div class=" hide" id="tab2">
                                  <h2>Fill Information From Manufacturer Response</h2>
{{--                                        <div class="row">--}}
{{--                                            <div class="form-group col-md-4 ">--}}

{{--                                                <label class="control-label" for="product"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Select Product</font></font></label>--}}
{{--                                                <select class=" form-control" name="product">--}}
{{--                                                </select>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}

                                        <!-- GET THE DISPLAY OPTIONS -->
                                        <div class="row">
                                            <div class="form-group col-md-4 ">

                                                <label class="control-label" for="manufacturer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Select manufacturer</font></font></label>
                                                <select class=" form-control" name="manufacturer2">
                                                    @foreach($manufacturers as $cp)
                                                        <option value="{{$cp->id}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$cp->Name}}</font></font></option>
                                                    @endforeach
                                                </select>

                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">

                                            <div class="form-group col-md-6 ">

                                                <label class="control-label" for="alcohol">Alcohol</label>
                                                <select class="form-control" name="alcohol2">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                    <option value="controversial">Controversial</option>
                                                    <option value="no information">No Information</option>

                                                </select>      </div>
                                            <div class="form-group col-md-6 ">

                                                <label class="control-label" for="animal">Animal Additive</label>
                                                <select class="form-control" name="animal2">
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                    <option value="controversial">Controversial</option>
                                                    <option value="no information">No Information</option>

                                                </select>
                                        </div>
                                        <div class="row">


                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="form-group col-md-6 ">
                                                <br>
                                                <label class="control-label" for="comment2">Comment</label>
                                                <input type="text" class="form-control" name="comment2" placeholder="Your Comment" value="na">
                                            </div>
                                            <div class="form-group col-md-6 ">
                                                <br>
                                                <label class="control-label" for="comment2">Comment Title</label>
                                                <input type="text" class="form-control" name="comment2title" placeholder="Your Comment" value="na">
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="form-group col-md-12 ">
                                                <br>
                                                <label class="control-label  alert-info" for="mail2">Write reply from Bisquiva GmbH &amp; Co. KG here:</label><br><br>
                                                <textarea class="form-control focus" name="mail2" rows="8" cols="80" placeholder="Enter text..."></textarea>

                                            </div>
                                        </div>

                                    </div>

                                </div>


                            </div><!-- panel-body -->
                            <div style="text-align:center;margin-top:40px;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                            </div>
                            <div class="panel-footer">
                                <div style="overflow:auto;">
                                    <div style="float:right;">
                                        <button type="button" class="btn btn-dark" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                        <button type="button" class="btn btn-info" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                    </div>
                                </div>


                            </div>

                        </form>

                        <iframe id="form_target" name="form_target" style="display:none"></iframe>
                        <form id="my_form" action="http://127.0.0.1:8000/admin/upload" target="form_target" method="post" enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
                            <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
                            <input type="hidden" name="type_slug" id="type_slug" value="h-products">
                            <input type="hidden" name="_token" value="KdOPguJxORrGSKt7Wk8FToAHVY32s15zWyud5bzZ">
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade modal-danger" id="confirm_delete_modal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title"><i class="voyager-warning"></i> Are you sure</h4>
                    </div>

                    <div class="modal-body">
                        <h4>Are you sure you want to delete '<span class="confirm_delete_name"></span>'</h4>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" id="confirm_delete">Yes, Delete it!</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete File Modal -->
    </div>
@stop

<link rel="stylesheet" href="css/app.css">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">


@section('javascript')
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>--}}
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#image").change(function() {
            readURL(this);
        });


        function change() {
            var element = document.getElementById("tab1");
            element.classList.remove("show");
            element.classList.add("hide");

            var element2 = document.getElementById("tab2");
            element2.classList.remove("hide");
            element2.classList.add("show");

        }

        function change2() {

            var element2 = document.getElementById("tab1");
            element2.classList.remove("hide");
            element2.classList.add("show");

            var element = document.getElementById("tab2");
            element.classList.remove("show");
            element.classList.add("hide");

            var value = document.getElementById('name').value;
            var value2 = document.getElementById('ean').value;
            var value3 = document.getElementById('userName').value;

            var str = document.getElementById('mail1body').value;


            var res = str.replace("NAME OF THE PRODUCT", value);
            document.getElementById('mail1body').value = res;

            var str2 = document.getElementById('mail1body').value;
            var res2 = str2.replace("BARCODE", value2);
            document.getElementById('mail1body').value = res2;

            var str3 = document.getElementById('mail1body').value;
            var res3 = str3.replace("NAME OF THE SENDER", value3);
            document.getElementById('mail1body').value = res3;


            // alert(res);
        }
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false:
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }
    </script>

@stop
