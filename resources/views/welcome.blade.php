<x-header />

<body class="font-montserrat">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
        </div>
    </div>

    <div id="main_content">

        <!-- theme menu header start -->
       @include('includes.menu.theme_option_menu')
        <!-- theme menu header end -->

        <!-- theme menu rightsidebar start -->
        @include('includes.menu.right_sidebar')
        <!-- theme menu rightsidebar end -->

        <!-- theme option rightsidebar start    -->
        @include('includes.menu.theme_option_rightsidebar')
        <!-- theme option rightsidebar end    -->

        <!-- theme user-menu start -->
        @include('includes.menu.theme_user_menu')       
        <!-- theme user-menu end -->

        <!-- App Left-side-menu start -->
        @include('includes.menu.app_menu')
        <!-- App Left-side-menu end -->

        <div class="page">
            <!-- top nav start -->
        @include('includes.nav.nav_menu')            
            <!-- top nav end -->

            <div class="section-body mt-3">
                <div class="container-fluid">
                    <!-- body header start -->
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <h4>Welcome Peter Richards!</h4>
                                <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn
                                        More</a></small>
                            </div>
                        </div>
                    </div>
                    <!-- body header end -->
                    <!-- box menu start -->
                    @include('includes.menu.box_menu')
                    <!-- box menu end -->
                    <!-- sales overview start -->
                    <div class="row clearfix row-deck">
                        <!-- line chart start -->
                         @include('templates.sales_overview.line_chart')                       
                        <!-- line chart end -->
                        <!-- current overview start -->
                        @include('templates.sales_overview.current_overview') 
                        <!-- current overview end -->
                        <!-- statistics start -->
                        @include('templates.sales_overview.overview_statistics')
                        <!-- statistics end -->
                    </div>
                    <!-- sales overview end -->

                     <!-- project statistics start -->
                     <div class="row clearfix row-deck">
                        <!-- transaction history start -->
                        @include('templates.project_statistics.transaction_history') 
                        <!-- transaction history end -->
                        <!-- performance progress start -->
                        @include('templates.project_statistics.performance_progress')
                        <!-- performance progress end -->
                        <!-- customers rating start -->
                        @include('templates.project_statistics.customer_rating')
                        <!-- customers rating end -->
                    </div>
                    <!-- project statistics end -->

                     <!-- project Summary start -->
                     <div class="row clearfix">
                     @include('templates.project_summary.index')
                    </div>
                    <!-- project Summary end -->
                </div>
            </div>
           
            <div class="section-body">
                <!-- body footer start -->
                @include('templates.footer.body_footer')
                <!-- body footer end -->
            </div>
        </div>
    </div>

    <x-footer />