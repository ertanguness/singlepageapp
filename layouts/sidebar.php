<!-- <?php
        $link = $_SERVER['PHP_SELF'];
        $link_array = explode('/', $link);
        $page = end($link_array);
        ?> -->

<?php require_once "config/functions.php"; ?>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul class="sidebar-vertical">
                <li class="menu-title">
                    <span>Main</span>
                </li>

                <li>
                    <a href="/admin-dashboard"><i class="la la-dashboard "></i> <span>ANA SAYFA</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-rocket"></i> <span> PROJELER</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="/projects/list">Yeni Proje</a></li>
                        <li><a href="/projects/lists">Proje Listesi</a></li>
                    </ul>
                </li>

                <!-- İMALAT -->
                <li class="menu-title">
                    <span>İMALAT</span>
                </li>
                <li>
                    <a href="/projects/liste"><i class="la la-pencil-alt"></i> <span>Ön İmalat</span></a>
                </li>
                <li> <a href="/error-404"><i class="la la-pencil-ruler"></i> <span>İmalat</span></a>
                </li>
                <!-- İMALAT -->


                <!-- STOK -->
                <li class="menu-title">
                    <span>STOK</span>
                </li>
                <li class="<?php echo ($page == 'clients.php' || $page == 'clients-list.php') ? 'active' : ''; ?>">
                    <a href="clients.php"><i class="lab la-buffer"></i> <span>Stoklar</span></a>
                </li>
                <li class="<?php echo ($page == 'clients.php' || $page == 'clients-list.php') ? 'active' : ''; ?>">
                    <a href="clients.php"><i class="lab la-audible"></i> <span>Stok İstek Yönetimi</span></a>
                </li>
                <li class="<?php echo ($page == 'clients.php' || $page == 'clients-list.php') ? 'active' : ''; ?>">
                    <a href="clients.php"><i class="la la-warehouse"></i> <span>Depo</span></a>
                </li>
                <!-- STOK -->


            </ul>

        </div>
    </div>
</div>

<!-- /Sidebar -->