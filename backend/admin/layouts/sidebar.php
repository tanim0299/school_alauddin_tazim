<!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-3">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand" style="margin-top: 20px;">
                    <a href="../../index.php"><img src="../../asset/img/settings/<?php echo $showdata['logo']; ?>" style="height: 70px;" class="img-fluid"></a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="../../index.php">CP</a>
                </div>
                <ul class="sidebar-menu" style="margin-bottom: 50px;margin-top: 20px;">
                    <li class="menu-header">Dashboard</li>
                    <li><a class="nav-link" href="../../index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <?php
                    if($_SESSION['admin_type'] == 'developer')
                    {

                    ?>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Developer Option</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="../main_menu/add_main_menu.php">Main Menu</a></li>
                            <li><a class="nav-link" href="../sub_menu/add_sub_menu.php">Sub Menu</a></li>
                        </ul>
                    </li>
                    <?php
                    } 
                    ?>
                    <li class="menu-header">Starter</li>
                    
                        <?php 
                        $sql = $db->link->query("SELECT * FROM `main_menu` WHERE `status`=1 order by 'sl' ASC ");
                        if($sql)
                        {
                            while($showmain_menu = $sql->fetch_assoc())
                            {
                            ?>
                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="<?php echo $showmain_menu['icon']; ?>"></i><span><?php echo $showmain_menu['main_menu_name']; ?></span></a>
                                <ul class="dropdown-menu">
                                    <?php
                                    $sql_sub = $db->link->query("SELECT * FROM `sub_menu` WHERE `status`='1' ");
                                    if($sql_sub)
                                    {
                                        while($showsub_menu = $sql_sub->fetch_assoc())
                                        {
                                            if($showmain_menu['id'] == $showsub_menu['main_menu'])
                                            {
                                            ?>
                                            
                                            <li><a class="nav-link" href="<?php echo $showsub_menu['route_name']; ?>"><?php echo $showsub_menu['link_name']; ?></a></li>

                                            <?php
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </li>
                            <?php
                            }
                        }
                        ?>
                        <li class="menu-header">Settings</li>
                        <li><a class="nav-link" href="../settings/settings.php"><i class="fa fa-gears"></i> <span>Settings</span></a></li>
                </ul>
            </aside>
        </div>


        