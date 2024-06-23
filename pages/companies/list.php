	<!-- Page Header -->
	<div class="page-header">
	    <div class="row align-items-center">
	        <div class="col-md-4">
	            <h3 class="page-title">Companies</h3>
	            <ul class="breadcrumb">
	                <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
	                <li class="breadcrumb-item active">Companies</li>
	            </ul>
	        </div>
	        <div class="col-md-8 float-end ms-auto">
	            <div class="d-flex title-head">
	                <div class="view-icons">
	                    <a href="#" class="grid-view btn btn-link"><i class="las la-redo-alt"></i></a>
	                    <a href="#" class="list-view btn btn-link" id="collapse-header"><i
	                            class="las la-expand-arrows-alt"></i></a>
	                    <a href="javascript:void(0);" class="list-view btn btn-link" id="filter_search"><i
	                            class="las la-filter"></i></a>
	                </div>
	                <div class="form-sort">
	                    <a href="javascript:void(0);" class="list-view btn btn-link" data-bs-toggle="modal"
	                        data-bs-target="#export"><i class="las la-file-export"></i>Export</a>
	                </div>
	                <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_company"><i
	                        class="la la-plus-circle"></i> Add Company</a>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- /Page Header -->

	<!-- Search Filter -->
	<div class="filter-filelds" id="filter_inputs">
	    <div class="row filter-row">
	        <div class="col-xl-2">
	            <div class="input-block mb-3 form-focus">
	                <input type="text" class="form-control floating">
	                <label class="focus-label">Company Name</label>
	            </div>
	        </div>
	        <div class="col-xl-2">
	            <div class="input-block mb-3 form-focus">
	                <input type="text" class="form-control floating">
	                <label class="focus-label">Email</label>
	            </div>
	        </div>
	        <div class="col-xl-2">
	            <div class="input-block mb-3 form-focus">
	                <input type="text" class="form-control floating">
	                <label class="focus-label">Phone Number</label>
	            </div>
	        </div>
	        <div class="col-xl-2">
	            <div class="input-block mb-3 form-focus focused">
	                <input type="text" class="form-control  date-range bookingrange">
	                <label class="focus-label">From - To Date</label>
	            </div>
	        </div>
	        <div class="col-xl-2">
	            <div class="input-block mb-3 form-focus select-focus">
	                <select class="select floating">
	                    <option>--Select--</option>
	                    <option>Germany</option>
	                    <option>USA</option>
	                    <option>Canada</option>
	                    <option>India</option>
	                    <option>China</option>
	                </select>
	                <label class="focus-label">Location</label>
	            </div>
	        </div>
	        <div class="col-xl-2">
	            <a href="#" class="btn btn-success w-100"> Search </a>
	        </div>
	    </div>
	</div>
	<hr>
	<!-- /Search Filter -->
	<div class="filter-section">
	    <ul>
	        <li>
	            <div class="view-icons">
	                <a href="companies.html" class="list-view btn btn-link active"><i class="las la-list"></i></a>
	                <a href="companies-grid.html" class="grid-view btn btn-link"><i class="las la-th"></i></a>
	            </div>
	        </li>
	        <li>
	            <div class="form-sort">
	                <i class="las la-sort-alpha-up-alt"></i>
	                <select class="select">
	                    <option>Sort By Alphabet</option>
	                    <option>Ascending</option>
	                    <option>Descending</option>
	                    <option>Recently Viewed</option>
	                    <option>Recently Added</option>
	                </select>
	            </div>
	        </li>
	        <li>
	            <div class="form-sorts dropdown">
	                <a href="javascript:void(0);" class="dropdown-toggle" id="table-filter"><i
	                        class="las la-filter me-2"></i>Filter</a>
	                <div class="filter-dropdown-menu">
	                    <div class="filter-set-view">
	                        <div class="filter-set-head">
	                            <h4>Filter</h4>
	                        </div>
	                        <div class="accordion" id="accordionExample">
	                            <div class="filter-set-content">
	                                <div class="filter-set-content-head">
	                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne"
	                                        aria-expanded="true" aria-controls="collapseOne">Rating<i
	                                            class="las la-angle-right"></i></a>
	                                </div>
	                                <div class="filter-set-contents accordion-collapse collapse show" id="collapseOne"
	                                    data-bs-parent="#accordionExample">
	                                    <ul>
	                                        <li>
	                                            <div class="filter-checks">
	                                                <label class="checkboxs">
	                                                    <input type="checkbox" checked>
	                                                    <span class="checkmarks"></span>
	                                                </label>
	                                            </div>
	                                            <div class="rating">
	                                                <i class="fa fa-star filled"></i>
	                                                <i class="fa fa-star filled"></i>
	                                                <i class="fa fa-star filled"></i>
	                                                <i class="fa fa-star filled"></i>
	                                                <i class="fa fa-star filled"></i>
	                                                <span>5.0</span>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <div class="filter-checks">
	                                                <label class="checkboxs">
	                                                    <input type="checkbox">
	                                                    <span class="checkmarks"></span>
	                                                </label>
	                                            </div>
	                                            <div class="rating">
	                                                <i class="fa fa-star filled"></i>
	                                                <i class="fa fa-star filled"></i>
	                                                <i class="fa fa-star filled"></i>
	                                                <i class="fa fa-star filled"></i>
	                                                <i class="fa fa-star"></i>
	                                                <span>4.0</span>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <div class="filter-checks">
	                                                <label class="checkboxs">
	                                                    <input type="checkbox">
	                                                    <span class="checkmarks"></span>
	                                                </label>
	                                            </div>
	                                            <div class="rating">
	                                                <i class="fa fa-star filled"></i>
	                                                <i class="fa fa-star filled"></i>
	                                                <i class="fa fa-star filled"></i>
	                                                <i class="fa fa-star"></i>
	                                                <i class="fa fa-star"></i>
	                                                <span>3.0</span>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <div class="filter-checks">
	                                                <label class="checkboxs">
	                                                    <input type="checkbox">
	                                                    <span class="checkmarks"></span>
	                                                </label>
	                                            </div>
	                                            <div class="rating">
	                                                <i class="fa fa-star filled"></i>
	                                                <i class="fa fa-star filled"></i>
	                                                <i class="fa fa-star"></i>
	                                                <i class="fa fa-star"></i>
	                                                <i class="fa fa-star"></i>
	                                                <span>2.0</span>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <div class="filter-checks">
	                                                <label class="checkboxs">
	                                                    <input type="checkbox">
	                                                    <span class="checkmarks"></span>
	                                                </label>
	                                            </div>
	                                            <div class="rating">
	                                                <i class="fa fa-star filled"></i>
	                                                <i class="fa fa-star"></i>
	                                                <i class="fa fa-star"></i>
	                                                <i class="fa fa-star"></i>
	                                                <i class="fa fa-star"></i>
	                                                <span>1.0</span>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="filter-set-content">
	                                <div class="filter-set-content-head">
	                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
	                                        aria-expanded="false" aria-controls="collapseTwo">Owner<i
	                                            class="las la-angle-right"></i></a>
	                                </div>
	                                <div class="filter-set-contents accordion-collapse collapse" id="collapseTwo"
	                                    data-bs-parent="#accordionExample">
	                                    <ul>
	                                        <li>
	                                            <div class="filter-checks">
	                                                <label class="checkboxs">
	                                                    <input type="checkbox" checked>
	                                                    <span class="checkmarks"></span>
	                                                </label>
	                                            </div>
	                                            <div class="collapse-inside-text">
	                                                <h5>Hendry</h5>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <div class="filter-checks">
	                                                <label class="checkboxs">
	                                                    <input type="checkbox">
	                                                    <span class="checkmarks"></span>
	                                                </label>
	                                            </div>
	                                            <div class="collapse-inside-text">
	                                                <h5>Guillory</h5>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <div class="filter-checks">
	                                                <label class="checkboxs">
	                                                    <input type="checkbox">
	                                                    <span class="checkmarks"></span>
	                                                </label>
	                                            </div>
	                                            <div class="collapse-inside-text">
	                                                <h5>Jami</h5>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <div class="filter-checks">
	                                                <label class="checkboxs">
	                                                    <input type="checkbox">
	                                                    <span class="checkmarks"></span>
	                                                </label>
	                                            </div>
	                                            <div class="collapse-inside-text">
	                                                <h5>Theresa</h5>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <div class="filter-checks">
	                                                <label class="checkboxs">
	                                                    <input type="checkbox">
	                                                    <span class="checkmarks"></span>
	                                                </label>
	                                            </div>
	                                            <div class="collapse-inside-text">
	                                                <h5>Espinosa</h5>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="filter-set-content">
	                                <div class="filter-set-content-head">
	                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree"
	                                        aria-expanded="false" aria-controls="collapseThree">Tags<i
	                                            class="las la-angle-right"></i></a>
	                                </div>
	                                <div class="filter-set-contents accordion-collapse collapse" id="collapseThree"
	                                    data-bs-parent="#accordionExample">
	                                    <ul>
	                                        <li>
	                                            <div class="filter-checks">
	                                                <label class="checkboxs">
	                                                    <input type="checkbox" checked>
	                                                    <span class="checkmarks"></span>
	                                                </label>
	                                            </div>
	                                            <div class="collapse-inside-text">
	                                                <h5>Promotion</h5>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <div class="filter-checks">
	                                                <label class="checkboxs">
	                                                    <input type="checkbox">
	                                                    <span class="checkmarks"></span>
	                                                </label>
	                                            </div>
	                                            <div class="collapse-inside-text">
	                                                <h5>Rated</h5>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <div class="filter-checks">
	                                                <label class="checkboxs">
	                                                    <input type="checkbox">
	                                                    <span class="checkmarks"></span>
	                                                </label>
	                                            </div>
	                                            <div class="collapse-inside-text">
	                                                <h5>Rejected</h5>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <div class="filter-checks">
	                                                <label class="checkboxs">
	                                                    <input type="checkbox">
	                                                    <span class="checkmarks"></span>
	                                                </label>
	                                            </div>
	                                            <div class="collapse-inside-text">
	                                                <h5>Collab</h5>
	                                            </div>
	                                        </li>
	                                        <li>
	                                            <div class="filter-checks">
	                                                <label class="checkboxs">
	                                                    <input type="checkbox">
	                                                    <span class="checkmarks"></span>
	                                                </label>
	                                            </div>
	                                            <div class="collapse-inside-text">
	                                                <h5>Calls</h5>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>

	                        <div class="filter-reset-btns">
	                            <a href="#" class="btn btn-light">Reset</a>
	                            <a href="#" class="btn btn-primary">Filter</a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </li>
	        <li>
	            <div class="search-set">
	                <div class="search-input">
	                    <a href="#" class="btn btn-searchset"><i class="las la-search"></i></a>
	                    <div class="dataTables_filter">
	                        <label> <input type="search" class="form-control form-control-sm" placeholder="Search"></label>
	                    </div>
	                </div>
	            </div>
	        </li>
	    </ul>
	</div>

	<div class="row">