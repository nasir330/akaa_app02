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

        <!-- App Left-side-menu start -->
        @include('includes.menu.app_menu')
        <!-- App Left-side-menu end -->

        <div class="page">
            <!-- top nav start -->
            @include('includes.nav.nav_menu')
            <!-- top nav end -->

            <div class="section-body mt-3">
                <!-- page header section start -->
                <div class="container-fluid">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-md-flex justify-content-between mb-2">
                                        <ul class="nav nav-tabs b-none">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#list">
                                                    <i class="fa fa-list-ul m-1"></i>
                                                    Clients List
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#addnew">
                                                    <i class="fa fa-plus m-1"></i>
                                                    Add New
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="input-group mb-1">
                                                <input type="text" class="form-control" placeholder="Clinet Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-12">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-block mb-1"
                                                title="">Search</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- page header section end -->

                <div class="container-fluid">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="list" role="tabpanel">
                            <div class="row clearfix">
                                <!-- customers profile card start -->
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="card">
                                        <div class="card-body text-center ribbon">
                                            <div class="ribbon-box green">New</div>
                                            <img class="rounded-circle img-thumbnail w100"
                                                src="assets/images/sm/avatar1.jpg" alt="">
                                            <h6 class="mt-3 mb-0">Michelle Green</h6>
                                            <span>jason-porter@info.com</span>
                                            <ul class="mt-3 list-unstyled d-flex justify-content-center">
                                                <li>
                                                    <a class="p-3" target="_blank" href="#">
                                                        <i class="fa fa-phone"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="p-3" target="_blank" href="#">
                                                        <i class="fa fa-envelope"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="p-3" target="_blank" href="#">
                                                        <i class="fa-brands fa-whatsapp"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                            <a class="btn btn-default btn-sm">View Profile</a> &nbsp; &nbsp;
                                            <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
                                                <i style="font-size:20px;" class="fa-solid fa-ellipsis-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end"
                                                style="position: absolute; transform: translate3d(-174px, 25px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a href="javascript:void(0)" class="dropdown-item"><i
                                                        class="dropdown-icon fa fa-eye"></i> View
                                                    Details </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i
                                                        class="dropdown-icon fa fa-share-alt"></i>
                                                    Share </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i
                                                        class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item"><i
                                                        class="dropdown-icon fa fa-copy"></i> Copy
                                                    to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i
                                                        class="dropdown-icon fa fa-folder"></i>
                                                    Move to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i
                                                        class="dropdown-icon fa fa-edit"></i>
                                                    Rename</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i
                                                        class="dropdown-icon fa fa-trash"></i>
                                                    Delete</a>
                                            </div>
                                            <div class="row text-center mt-4">
                                                <div class="col-6 border-right">
                                                    <label class="mb-0">Project</label>
                                                    <h4 class="font-18">07</h4>
                                                </div>
                                                <div class="col-6">
                                                    <label class="mb-0">Deal</label>
                                                    <h4 class="font-18">$2,510</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- customers profile card end -->

                            </div>
                        </div>
                        <div class="tab-pane fade" id="addnew" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Add Client</h3>
                                            <div class="card-options ">
                                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                                        class="fe fe-chevron-up"></i></a>
                                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                                        class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                        <form class="card-body">
                                            <div class="row clearfix">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>First Name</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Date of Birth</label>
                                                        <input data-provide="datepicker" data-date-autoclose="true"
                                                            class="form-control" placeholder="Date of Birth">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <label>Gender</label>
                                                    <select class="form-control show-tick">
                                                        <option value="">-- Gender --</option>
                                                        <option value="10">Male</option>
                                                        <option value="20">Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Department</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Position</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Enter Your Email</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Website URL</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Facebook</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Twitter</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>LinkedIN</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Behance</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group mt-2 mb-3">
                                                        <input type="file" class="dropify">
                                                        <small id="fileHelp" class="form-text text-muted">This is some
                                                            placeholder block-level help text for the above input. It's
                                                            a bit lighter and easily wraps to a new line.</small>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group mt-3">
                                                        <label>Messages</label>
                                                        <textarea rows="4" class="form-control no-resize"
                                                            placeholder="Please type what you want..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="submit"
                                                        class="btn btn-outline-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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