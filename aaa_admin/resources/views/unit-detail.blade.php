<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    @include('partials.head')
</head>

<body>
    <!-- Left Panel -->
    @include('partials.leftpanel')
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <!-- Header-->
        @include('partials.header')
        <!-- Header-->
        <div class="content">
            <div class="animated fadeIn">
                <div class="ui-typography">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Unit Detail</strong>
                                </div>
                                <div class="card-body">
                                    <div class="vue-misc">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <strong>Size</strong><br>
                                                <span>9x18x8.5</span><br><br>
                                                <strong>Cubic Footage</strong><br>
                                                <span>1377</span><br><br>
                                                <strong>Square Footage</strong><br>
                                                <span>162</span><br><br>
                                                <strong>Size Description</strong><br>
                                                <span>Drive Up 1st Floor Outside Level No Climate Drivethrough Rollup</span><br><br>
                                                <strong>Rate</strong><br>
                                                <input type="text" id="txtRate" name="txtRate">
                                                <a href="" class="btn-sm btn-success">Update</a>
                                            </div>
                                            <div class="col-md-6">
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>



            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="clearfix"></div>
        @include('partials.footer')
    </div><!-- /#right-panel -->
    <!-- Right Panel -->
    @include('partials.foot')
</body>

</html>