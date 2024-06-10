<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="/backend/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
            <img src="/backend/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Accueil</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">Categories</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?= route_to('admin.category.form') ?>">Ajouter une categorie</a></li>
                        <li><a href="<?= route_to('admin.category') ?>">Liste des categories</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-textarea-resize"></span><span class="mtext">Publication</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?= route_to('admin.post.form') ?>">Ajouter une publication</a></li>
                        <li><a href="<?= route_to('admin.post') ?>">Liste des publications</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>