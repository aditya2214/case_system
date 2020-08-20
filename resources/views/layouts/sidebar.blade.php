                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{url('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Master Case
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{url('/casemaster')}}">Case Master &nbsp;
                                        <span class="badge badge-info right">6</span>
                                    </a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Transactions
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="{{url('/receiving')}}">
                                        Receiving &nbsp;
                                        <span class="badge badge-info right">6</span>
                                    </a>
                                    <a class="nav-link collapsed" href="{{url('/inprogres')}}">
                                        in Progres &nbsp;
                                        <span class="badge badge-info right">6</span>
                                    </a>
                                    <a class="nav-link collapsed" href="{{url('/picking')}}">
                                        Picking &nbsp;
                                        <span class="badge badge-info right">6</span>
                                    </a>
                                    <a class="nav-link collapsed" href="#">
                                        Packing &nbsp;
                                        <span class="badge badge-info right">6</span>
                                    </a>
                                    <a class="nav-link collapsed" href="#">
                                        Export &nbsp;
                                        <span class="badge badge-info right">6</span>
                                    </a>
                                </nav>
                            </div>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    NG Case &nbsp;
                                    <span class="badge badge-info right">6</span>
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>