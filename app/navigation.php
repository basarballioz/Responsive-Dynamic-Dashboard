<?php
    @include "../../all.php";
    @include "init.php";
    @include MODEL . "database.php";

    $imageId = $result['id'];
    $imageQuery = $database->prepare("SELECT * FROM profilephoto WHERE id = $imageId");
    $imageQuery->execute();
    $imageResult = $imageQuery->fetch(\PDO::FETCH_ASSOC);
    @$profilePicture = "<img src='../img/" . $imageResult['image']. "' height=80 width=80 style='border-radius: 50%;'>";
?>

<!--ASIDE-->
<aside id="aside-container">
    <div id="aside">
        <div class="nano">
            <div class="nano-content">

                <!--Nav tabs-->
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#demo-asd-tab-1" data-toggle="tab">
                            <i class="demo-pli-speech-bubble-7 icon-lg"></i> Test
                        </a>
                    </li>
                    <li>
                        <a href="#demo-asd-tab-2" data-toggle="tab">
                            <i class="demo-pli-information icon-lg icon-fw"></i> Report
                        </a>
                    </li>
                    <li>
                        <a href="#demo-asd-tab-3" data-toggle="tab">
                            <i class="demo-pli-wrench icon-lg icon-fw"></i> Settings
                        </a>
                    </li>
                </ul>
                <!--End nav tabs-->

            </div>
        </div>
    </div>
    </div>
</aside>
<!--END ASIDE-->


<!--MAIN NAVIGATION-->
<nav id="mainnav-container">
    <div id="mainnav">

        <!--Menu-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                    <!--Profile Widget-->
                    <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap text-center">
                            <div class="pad-btm">
                                <?php
                                    if (isset($imageResult['image'])) {
                                        echo $profilePicture;
                                    }
                                    else {
                                        echo '<img class="img-circle img-md" src="../img/profile-photos/1.png" alt="Profile Picture">';
                                    }
                                ?>
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                <p class="mnp-name"> <?php echo strtoupper($result['username']); ?> </p>
                                <span class="mnp-desc"> <?php echo $result['email']; ?> </span>
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-male icon-lg icon-fw"></i> Profili Göster
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-gear icon-lg icon-fw"></i> Ayarlar
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-information icon-lg icon-fw"></i> Destek
                            </a>
                            <a href="logout.php" class="list-group-item">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i> Oturumu Kapat
                            </a>
                        </div>
                    </div>

                    </ul>

                    <?php @include DATA . 'datatables/menu.php' ?>

                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>